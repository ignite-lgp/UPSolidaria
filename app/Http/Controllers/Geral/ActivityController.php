<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use App\Organization;
use App\User;
use Illuminate\Http\Request;
use View;
use DB;
use Session;
use Validator;

class ActivityController extends Controller
{
	/**
    *
    * Show a group page 
    * @return view
    */
    protected function showActivityPage($organization, $activity){
		
        $information = DB::select('select a.*, o.name as oname, g.name as gname from organization o, activity a left join groups g on g.id = a.group where a.name = ? and o.id = a.organization', array($activity));
		
        $image_location = DB::select('select location from image where id = ?', array($information[0]->image));
        
        $email = Session::get('email');
        $user = User::whereRaw('email = ?', [$email])->first();

        //Info on the activities of the group
        /** $groups =  DB::select(
            'select image.id, image.alt, image.location, groups.id, groups.name, groups.image, groups.description, groups.public, 
            groups.open, groups.active, groups.created_date
            from groups inner join image on groups.image=image.id where groups.organization = ?', array($information[0]->id));
		**/

        // Check if user is already on this organization
        if (count($user) > 0 ){
            $is_user_on_organization = DB::select('select * from users, organization, user_organization where users.id = ? and  user_organization.volunteer = users.id 
                and user_organization.leave_date is null
                and organization.name = ?
                and organization.id = user_organization.organization', array($user->id, $organization));
        }
        
        //If user is not logged in shows defaul view
        return View('atividade')->with([
                      'info' => $information[0]
                    , 'image_location' => $image_location[0]->location
                    , 'admin' => (is_null($user) || is_null($user->organization)) ? false : true
					, 'inGroup' => is_null($information[0]->gname) ? false : true
					//   , 'activities' => $activities
                    , 'is_in' => (!is_null($user) && isset($is_user_on_organization) && count($is_user_on_organization)) > 0 ? false : true]); 
    }
}