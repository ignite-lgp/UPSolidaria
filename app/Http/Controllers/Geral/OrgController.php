<?php

namespace App\Http\Controllers\Geral;

use App\User;
use App\Organization;
use App\Http\Controllers\Controller;
//use App\User;
use Illuminate\Http\Request;
use View;
use DB;
use Session;
use Validator;

class OrgController extends Controller
{

    /**
    *
    * Show a org page 
    * @return view
    */
    protected function showOrgPage($organization){
		
        $information = DB::select('select * from organization where name = ?', array($organization));

        $image_location = DB::select('select * from image where alt = ?', array($organization));

        //Original
		//$activities = DB::select('select a.* from activity a, organization o where o.name = ? and a.organization = o.id and a.group IS NULL ',array($organization));
		
        $activities = DB::select('select a.* from activity a, organization o where o.name = ? and a.organization = o.id and a.group IS NULL',array($organization));

        $email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();


        //Info on the groups of the org and their images
        $groups =  DB::select(
            'select image.id, image.alt, image.location, groups.id, groups.name, groups.image, groups.description, groups.public, 
            groups.open, groups.active, groups.created_date
            from groups inner join image on groups.image=image.id where groups.organization = ?', array($information[0]->id));

        // Check if user is already on this organization
        if (count($user) > 0 ){
            $is_user_on_organization = DB::select('select user_organization.admin is true as admin from user_organization, organization
                where user_organization.volunteer = ? and user_organization.organization = organization.id and organization.name = ? 
                and user_organization.leave_date is null', array($user->id, $organization));
        }

        // Get all organization groups name
        $groupsName = [];
        for ($i=0; $i < count($groups); $i++) { 

            $groupsName[$groups[$i]->id] = $groups[$i]->name;
        }


        //If user is not logged in shows defaul view
        return View('organizacao')->with([
                      'info' => $information[0]
                    , 'image_location' => count($image_location) > 0 ? $image_location[0]->location : '#'
					, 'activities' => $activities
                    , 'admin' => (is_null($user) || count($is_user_on_organization) > 0 && !$is_user_on_organization[0]->admin || count($is_user_on_organization) == 0) ? false : true
                    , 'groups' => $groups
                    , 'groupsForActivities' => $groupsName
                    , 'is_in' => (!is_null($user) && isset($is_user_on_organization) && count($is_user_on_organization)) > 0 ? false : true]);   
    }


    /**
    *
    * Show the orgs 
    * @return view
    */
    protected function showOrgs(){

        $orgs =  DB::select("select o.id, o.name, i.location from organization o, image i where i.id = o.image");

        return View('organizacoes')->with('orgs', $orgs);
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
            'name' => 'required|max:255',
            'phone' => 'numeric|min:100000000|max:999999999',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
            ]);
    }


    /**
      *
      * Handle registration
      * @param Request object
      */
    protected function handleRegistration(Request $data){

        // Just need the form data
        $orgInfo = $data->all();
        
        // Check if valid
        $validator = $this->validator($orgInfo);

          if ($validator->fails()) {
              return redirect('/criar_organizacao')
                          ->withErrors($validator)
                          ->withInput();
          } else {
        
         $_temp = Organization::create([
                'name' => $orgInfo['name'],
                'email' => $orgInfo['email'],
                'password' => bcrypt($orgInfo['password']),
                'address' => $orgInfo['address'],
                'phone' => $orgInfo['phone'],
                'website' => $orgInfo['website'],
                'facebook' => $orgInfo['facebook'],
                'description' => $orgInfo['description']
               // 'token' => bin2hex(random_bytes(10)),
                ]);

            return redirect('/');
        }
      }



    /**
    *   Changes the info of an organization in the database
    *   @return view
    */
    protected function editInfo(Request $info){

        $data = $info->all();
       
    
        //If not changed, default values will be stored
        try {
            DB::table('organization')
            ->where('id', $data['organizacao_id'])
            ->update(['description' =>  $data['description']]);
            }catch(\Exception $e){
              //Alter to a more intuitive error showing
              return View('errors.500');
        }
        
        
        if(array_key_exists('image', $data)){
        $image = $data['image'];
        $size = $image->getSize();
            if($image->isValid()) {
            $destinationPath = 'src/imgs/organizations';
            //Change the name of the img file to org Name
            //Moving the image to img folder
            $image->move($destinationPath, $data['organizacao'].'.jpg');
            //Inserting image reference in database
            DB::table('image')
            ->where('alt', $data['organizacao'])
            ->update(array('alt' => $data['organizacao']
                ,'height' => 90
                ,'width' => 90
                ,'location' => $destinationPath . '/' . $data['organizacao'] . '.jpg'
                ,'size' => $size));
            }
             else {
                //Alter to a more intuitive error showing
                return View('errors.500');
            }

        }
    

        //Redirecting to Org Page
        return redirect('/organizacao/'.$data['organizacao']);

    }

    /**
    *   Adds a group to the org
    *   @return view
    */
    protected function addGroup(Request $info){
        $data = $info->all();

        //Insert image reference in database -> reference needed for group
        //Check if image was uploaded
        if(array_key_exists('image', $data)){
          $image = $data['image'];
          $size = $image->getSize();
            if($image->isValid()) {
            $destinationPath = 'src/imgs/groups';
            //Change the name of the img file to org Name
            //Moving the image to img folder
            $image->move($destinationPath, $data['nome'].'.jpg');
            //Inserting image reference in database
            DB::table('image')->insert(['alt' => $data['nome']
                ,'height' => 90
                ,'width' => 90
                ,'location' => $destinationPath . '/' . $data['nome'] . '.jpg'
                ,'size' => $size]);
            }
             else {
                //Alter to a more intuitive error showing
                return View('errors.500');
            }
        }


        $current_time = \Carbon\Carbon::now()->toDateTimeString();
        try {
          $image_id = DB::select('select id from image where alt= ?', array($data['nome']));
          //print_r($image_id);
            }catch(\Exception $e){
              //Alter to a more intuitive error showing
              return View('errors.500');
        }


        $publico = false;
        if(array_key_exists('publico', $data)) { $publico = true; }
   
        $aberto = false;
        if(array_key_exists('aberto', $data)) { $aberto = true; }

        //Insert group in database
        try {
            DB::table('groups')->insert([
                'name' => $data['nome']
                ,'organization' => $data['organizacao_id']
                ,'image' => $image_id[0]->id
                ,'description' => $data['descricao']
                ,'public' =>  $publico 
                ,'open' => $aberto
                ,'active' => true
                ,'created_date' => $current_time
                ]);

            }catch(\Exception $e){
              //Alter to a more intuitive error showing
              return View('errors.500');
        }
        


        $org = DB::select('select * from organization where id = ?', array($data['organizacao_id']));
        //Redirecting to Org Page
        return redirect('/organizacao/'.$org[0]->name);
    }

    /**
    *
    * Add volunteer to group 
    * @return view
    */
    protected function addVolunteer($organization){
        

        // Get user that did the request
        $email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

        // Get organization id
        $organizationID = DB::select('select organization.id from organization where organization.name = ?', 
            array($organization))[0]->id;

        if (count($user) > 0){

            DB::table('user_organization')->insert(
                [
                    'volunteer' => $user->id,
                    'organization' => $organizationID,
                    'reg_date' => date('Y-m-d G:i:s')
                ]);

            return redirect('organizacao/' . $organization);
        } else {
            echo fail;
        }
    }

    /**
    * Add an activity 
    * @return nothing
    */
    protected function addActivity(Request $data){
        
        $information = $data->all();
        //Insert image reference in database -> reference needed for group
        //Check if image was uploaded
        if(array_key_exists('image', $information)){
            $image = $information['image'];

            $size = $image->getSize();
            if($image->isValid()) {

            $destinationPath = 'src/imgs/activities';
            //Change the name of the img file to org Name
            //Moving the image to img folder
            $image->move($destinationPath, $information['nome'].'.jpg');
            //Inserting image reference in database
            DB::table('image')->insert([
                'alt' => $information['nome']
                ,'height' => 90
                ,'width' => 90
                ,'location' => $destinationPath . '/' . $information['nome'] . '.jpg'
                ,'size' => $size]);
            }
        }

        $last_image_inserted_id = DB::select('select id from image where alt = ?', array($information['nome']));

        $activityToAdd = [
                'name' => $information['nome'],
                'group' => $information['grupo'],
                'description' => $information['descricao'],
                'public' => isset($information['publico']) && $information['publico'] == '1',
                'open' => isset($information['aberto']) && $information['aberto'] == '1',
                'created_date' => date('Y-m-d G:i:s'),
                'init_date' => $information['dateInit'],
                'end_date' => $information['dateEnd'],
                'active' => true
            ];

        if (count($last_image_inserted_id) > 0 )
            $activityToAdd = array_merge($activityToAdd, ['image' => $last_image_inserted_id[0]->id]);

        DB::table('activity')->insert($activityToAdd);

        return redirect()->back();
    }
}

