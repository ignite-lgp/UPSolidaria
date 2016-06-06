<?php

namespace App\Http\Controllers\Geral;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use DB;
use Session;

class OrgController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | News Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling org requests.
    |
    */

    /**
    *
    * Show a org page 
    * @return view
    */
    protected function showOrgPage($organization){

        $information = DB::select('select organization_page.mission, organization_page.values, organization_page.vision, organization.name, organization.id, organization.image from organization_page, organization where organization_page.organization = organization.id and organization.name = ?', array($organization));

        $image_location = DB::select('select location from image where image.id = ?', array($information[0]->image));
        
        $email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

        //Info on the groups of the org and their images
        $groups =  DB::select(
            'select image.id, image.alt, image.location, groups.id, groups.name, groups.image, groups.description, groups.public, 
            groups.open, groups.active, groups.created_date
            from groups inner join image on groups.image=image.id where groups.organization = ?', array($information[0]->id));

        // Check if user is already on this organization
        if (count($user) > 0 ){
            $is_user_on_organization = DB::select('select * from users, organization, user_organization where users.id = ? and  user_organization.volunteer = users.id 
                and user_organization.leave_date is null
                and organization.name = ?
                and organization.id = user_organization.organization', array($user->id, $organization));
        }
        
        //If user is not logged in shows defaul view
        return View('organizacao')->with([
                      'info' => $information[0]
                    , 'image_location' => $image_location[0]->location
                    , 'admin' => (is_null($user) || is_null($user->organization)) ? false : true
                    , 'groups' => $groups
                    , 'is_in' => (!is_null($user) && isset($is_user_on_organization) && count($is_user_on_organization)) > 0 ? false : true]);   
    }


    /**
    *
    * Show the orgs 
    * @return view
    */
    protected function showOrgs(){

        $orgs =  DB::select('select id, name from organization');

        return View('organizacoes')->with('orgs', $orgs);
    }



    /**
    *   Changes the info of an organization in the database
    *   @return view
    */
    protected function editInfo(Request $info){

        $data = $info->all();
        print_r($data);
       
    
        //If not changed, default values will be stored
        try {
            DB::table('organization_page')
            ->where('organization', $data['organizacao_id'])
            ->update(['mission' =>  $data['missao']
                ,'vision' => $data['visao']
                ,'values' => $data['valores']
                ]);
            }catch(\Exception $e){
              //Alter to a more intuitive error showing
              return View('errors.500');
        }
        
        
        if(array_key_exists('image', $data)){
        $image = $data['image'];
        $size = $image->getSize();
            if($image->isValid()) {

            $destinationPath = '../public/src/imgs/organizations';
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
        //print_r($data);

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
            DB::table('image')
            ->insert(['alt' => $data['nome']
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

        print_r($image_id[0]->id);


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
}

