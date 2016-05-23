<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use View;
use DB;

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
        $organization = strtoupper($organization);

        $information = DB::select('select organization_page.mission, organization_page.values, organization_page.vision, organization.name from organization_page, organization where organization_page.id = organization.id and organization.name = ?', array($organization));

        return View('organizacao')->with('info', $information[0]);
    }


    /**
    *
    * Show the orgs 
    * @return view
    */
    protected function showOrgs(){

        /*
            IMPORTANT : ALL ORGANIZATIONS NAME MUST BE UPPER CASE
        */
        $orgs =  DB::select('select id, name from organization');

        //print_r($orgs);

        return View('organizacoes')->with('orgs', $orgs);
    }
}
}
