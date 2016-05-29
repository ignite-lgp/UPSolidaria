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

        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        //$organization = strtoupper($organization);

        $information = DB::select('select organization_page.mission, organization_page.values, organization_page.vision, organization.name, organization.id, organization.image from organization_page, organization where organization_page.organization = organization.id and organization.name = ?', array($organization));
        //print_r($information);

        $image_location = DB::select('select location from image where image.alt = ?', array($information[0]->name));
        $email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

        //If user is not logged in shows defaul view
        if(is_null($user)) {
                  return View('organizacao')->with(['info' => $information[0]
                   , 'image_location' => $image_location[0]->location
                   , 'admin' => false]);
        }
        //Else if admin shows admin view
        else {
            if(is_null($user->organization)) //It is not an admin
                return View('organizacao')->with(['info' => $information[0]
                    , 'image_location' => $image_location[0]->location
                    , 'admin' => false]);
            else //It is an admin
                return View('organizacao')->with(['info' => $information[0]
                    , 'image_location' => $image_location[0]->location
                    , 'admin' => true]);
        }   
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


    
}
