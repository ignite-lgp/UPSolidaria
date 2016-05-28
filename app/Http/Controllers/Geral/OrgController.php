<?php

namespace App\Http\Controllers\Geral;

use App\User;
use App\Http\Controllers\Controller;
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

        $information = DB::select('select organization_page.mission, organization_page.values, organization_page.vision, organization.name, organization.image from organization_page, organization where organization_page.organization = organization.id and organization.name = ?', array($organization));
    

        $image_location = DB::select('select location from image where image.id = ?', array($information[0]->image));
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
}
