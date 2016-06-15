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

            $is_user_on_activity = DB::select('select admin is true as admin from volunteeractivity where activity = ? and volunteer = ?; ', array($information[0]->id, $user->id));
        }
        

        // Get users in this organization
        /*
        $usersInGroup = DB::select('select users.id as userID, organization.id as OrganizationID, not exists (select * from volunteeractivity where volunteer = users.id and activity = activity.id) as isIN 
            from organization, activity, users, user_organization, volunteeractivity
            where activity.name = ? and activity.organization = organization.id
            and user_organization.volunteer = users.id and user_organization.organization = organization.id
            and user_organization.leave_date is null and volunteeractivity.activity = activity.id;
            ', array($activity));
            */

        //If user is not logged in shows defaul view
        return View('atividade')->with([
                      'info' => $information[0]
                    , 'image_location' => $image_location[0]->location
                    , 'admin' => isset($is_user_on_activity) && count($is_user_on_activity) > 0 && $is_user_on_activity[0]->admin
					, 'inGroup' => is_null($information[0]->gname) ? false : true
					//   , 'activities' => $activities
                    //, 'is_in' => (!is_null($user) && isset($is_user_on_organization) && count($is_user_on_organization)) > 0 ? false : true]); 
                    ]);
    }
}