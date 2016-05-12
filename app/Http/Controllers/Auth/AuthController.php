<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Countries;
use View;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Mail;
use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|max:255',
            'nif' => 'required|numeric|min:10000000|max:999999999',
            'nacionalidade' => 'required',
            'localidade' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);
    }

    /**
     *  Get the registration form.
     *
     *  @return View with registration form
     */
     protected function showRegistrationForm(){
         $countries = DB::table('country')->lists('country','code');


        return View::make('auth/register')->with('paises',$countries);
     }

     /**
      *
      * Handle registration
      * @param Request object
      */
      protected function handleRegistration(Request $data){

          // Just need the form data
          $userInfo = $data->all();

          // Check if valid
		 $validator = $this->validator($userInfo);

         if ($validator->fails()) {
            return redirect('auth/register')
                        ->withErrors($validator)
                        ->withInput();
        } else {

			$_temp = User::create([
                'name' => $userInfo['nome'],
                //'nif' => $userInfo['nif'],
                //'nacionalidade' => $userInfo['nacionalidade'],
                //'localidade' => $userInfo['localidade'],
                'email' => $userInfo['email'],
                'password' => bcrypt($userInfo['password']),
                'country' => $userInfo['nacionalidade'],
                'token' => bin2hex(random_bytes(10))
                ]);


            $url = env('APP_URL') . '/auth/confirm/token=' . $_temp['original']['token'] . '&email=' . $userInfo['email'];

            Mail::send('email.welcome',['link' => $url], function ($message) use ($userInfo) {

                $message->from(env('MAIL_USERNAME'), 'Bem vindo à UPSolidaria');

                $message->to($userInfo['email'])->subject('Learning Laravel test email'); // TODO: Alterar

            });

            return redirect($this->redirectTo);
		}
      }


      /**
       *
       * Handle registration's confirmation
       *
       */
      protected function handleConfirmation($token, $email){

        // Search for user with those atributes
        $user = User::whereRaw('token = ? and email = ?', [$token, $email])->first();

        if (is_null($user)){
            return 'We were unable to find a user with these token and email.';
        } else if ($user['confirm_date'] != '') {
            return 'You already confirmed your account.';
        } else {
            $user->confirm_date = date("Y-m-d H:i:s"); 
            $user->token = bin2hex(random_bytes(10));
            $user->save();
            return 'Thanks for confirming your account. You can now use our platform.';
        }

      }


      /**
       *
       * Handle Login 
       *
       */
      protected function handleLogin(Request $data){
        var_dump($data->all());

        // Check if there is an user with those parameters
        $user = User::whereRaw('email = ?',[$data->all()['username']])->first();

        if (password_verify($data->all()['password'], $user->password)){
            $cookieJar = new CookieJar();
            echo 'OK';
        } else {
            echo 'Fail';
        }
      }

      /**
      *
      * Handle recover password
      * @param Request email to confirm 
      */
      protected function handleRecover(Request $email){

        $email2 = $email['email'];
         // Check e-mail in users
        $user = User::whereRaw('email = ?', [$email2])->first();

         // Send e-mail with password
        if (is_null($user)){
            return 'We were unable to find a user with this e-mail.';}
        else {
            $user->token = bin2hex(random_bytes(10));
            $user->save();
        }

        // url to insert new password
         $url = env('APP_URL') . '/auth/recover_pass/token=' . $user['token'] . '&email=' . $user['email'];

        // email token
        
        Mail::send('email.recover_pass',['link' => $url], function ($message) use ($user) {

        $message->from(env('MAIL_USERNAME'), 'Bem vindo à UPSolidaria');

                $message->to($user['email'])->subject('Alterar palavra-passe'); // TODO: Alterar
           });
          

      }

      protected function showPassChangeForm($token, $email){

        // Search for user with those atributes
        $user = User::whereRaw('email = ?', [$email])->first();

        if (is_null($user)){
          //----------------- ERRO ------------------------------------------
            return 'The user doesnt exist';
        } else {
            return View('auth/change_password')->with('user', $user);
        }

    }
    protected function validatorNewPass(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
    }

    protected function handlePassChange(Request $data){

        $user2 = $data->all();

        $validator = array('password' => $user2['password'], 'password_confirmation' => $user2['password_confirmation']);
        

        $validator_res = $this->validatorNewPass($validator);

        if ($validator_res->fails()) {
            return redirect('/auth/recover_pass/token=' . $user2['_token'] . '&email=' . $user2['email'])
                        ->withErrors($validator_res)
                        ->withInput();
        } else {
            $user = User::whereRaw('email = ?', [$user2['email']])->first();

        if (is_null($user)){
            return 'We were unable to find a user with this e-mail.';}
        else {
            $user->token = bin2hex(random_bytes(10));
            $user->password = $user2['password'];
            $user->save();
            return redirect($this->redirectTo);
        }
        }


      

    }

}
