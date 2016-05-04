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
            'cpassword' => 'required|min:6|confirmed',
        ]);
    }

    /**
     *  Get the registration form.
     *
     *  @return View with registration form
     */
     protected function showRegistrationForm(){
         $countries = Countries::getList();

        return View::make('auth/register')->with('paises',$countries);
     }

     /**
      *
      * Handle registration
      *
      */
      protected function handleRegistration(Request $data){

          // Just need the form data
          $userInfo = $data->all();

          // Check if valid
		 $validator = $this->validator($userInfo);

         //var_dump($validator->errors()->all());

         if ($validator->fails()) {
            return redirect('auth/register')
                        ->withErrors($validator)
                        ->withInput();
        } else {
			var_dump('success');
		}
      }
}
