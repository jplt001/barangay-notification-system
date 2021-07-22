<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Log;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

class ApiController extends Controller
{
    //

    function addResidentAlert(Request $req){
    	$ref_no = "";
    }


    // MOBILE API
    function getAnnouncements(){
        $res = DB::table('announcements')
                ->select(['announcements.id', 'announcements.title', 'users.name as added_by' ,'announcements.added_when'])
                ->join('users', 'users.id','announcements.added_by')
                ->orderBy('added_when', 'DESC')->get();

        $data['data'] = $res;

        return response()->json($data);
    }


    function getHealthTips(){
    	$res = DB::table('health_tips')
    			->select(['health_tips.id', 'health_tips.health_tip_title', 'users.name as added_by' ,'health_tips.added_when','health_tips.thumbnail'])
    			->join('users', 'users.id','health_tips.added_by')
    			->orderBy('added_when', 'DESC')->get();

    	$data['data'] = $res;

    	return response()->json($data);
    }


    function postLogin(Request $req){
    	$username = $req->get('username');
    	$password = $req->get('password');


    	$tmpRes = DB::table('residents')
                    ->where('user_name', $username)    				
    				->first();

    	if(count((array) $tmpRes) > 0){
    		if(password_verify($password, $tmpRes->password)){
    			if($tmpRes->is_approved == 1){
                    return response(json_encode($tmpRes), 200)
                        ->header('Content-Type', "application/json");
                }elseif($tmpRes->is_approved == 0){
                    return response(json_encode(array('title'=>'Account Approval.', "code"=>302,'details'=>'Sorry your account is not approved yet.')), 200)
                        ->header('Content-Type', "application/json");ader('Content-Type', "application/json");
                }elseif($tmpRes->is_approved == 2){
                    return response(json_encode(array('title'=>'Account Not Approve.', "code"=>302,'details'=>'Sorry your account has been canceled by the barangay official(s).')), 200)
                        ->header('Content-Type', "application/json");ader('Content-Type', "application/json");
                }
    		}else{
    			return response(json_encode(array('title'=>'Password Not Match.', "code"=>302,'details'=>'Sorry your password not match.')), 200)
    					->header('Content-Type', "application/json");ader('Content-Type', "application/json");
    		}
    	}else{
    		
    		return response(json_encode(array('title'=>'Account Not Exists.', "code"=>302,'details'=>'Sorry your account does not exists.')), 200)
    					->header('Content-Type', "application/json");
    	}

    }


    function postRegister(Request $req){        
        $data['first_name']     = $req->get('first_name');
        $data['middle_name']    = $req->get('middle_name');
        $data['last_name']      = $req->get('last_name');
        $data['email']          = $req->get('email');
        $data['contact_no']     = $req->get('contact_no');
        $data['user_name']      = $req->get('user_name');
        $password               =$req->get('password');
        $data['password']       = password_hash($password,  PASSWORD_DEFAULT);
        Log::info("Username:".$req->get('user_name'));
        $is_email_exits = DB::table('residents')->where('email', $req->get('email'))->get();
        if(count($is_email_exits) > 0){
            return response(json_encode(array('title'=>'Email', "code"=>302,'details'=>'Sorry your email is already exists.')), 200)
                        ->header('Content-Type', "application/json");
        }

        $is_user_name_exits = DB::table('residents')->where('user_name', $req->get('user_name'))->get();
        
        if(count($is_user_name_exits) > 0){
            return response(json_encode(array('title'=>'Email', "code"=>302,'details'=>'Sorry your username is already exists.')), 200)
                        ->header('Content-Type', "application/json");
        }

        $id  = DB::table('residents')->insertGetId($data);

        $info = DB::table('residents')->where('id', $id)->first();
        $info->code = 200;
        return response(json_encode($info), 200)
                        ->header('Content-Type', "application/json");

    }

    function postSaveAlert(Request $req){

        $client = new Client(new Version2X('http://localhost:3000', [
            'headers' => [
                'X-My-Header: websocket rocks',
                'Authorization: Bearer 12b3c4d5e6f7g8h9i'
            ]
        ]));

        try{
            $data = $req->all();
            $info  = DB::table('residents')->where('id',$data['from_id'])->first();
            $set['reported_by_id']      = $data['from_id'];
            $set['emergency']           = $data['emergency'];
            $set['details']             = $data['description'];
            $set['alert_type']          = $data['alert_type'];
            $set['date_added']          = date('Y-m-d');
            Log::info(json_encode($data));
            $id = DB::table('barangay_alert')->insertGetId($set);
            $insert = [];

            // for($i=0; $i<count($data['attachments']); $i++ ){        
            //     $datas['barangay_alert_id'] = $id;
            //     $datas['image_base64'] = $data['attachments'][$i];
            //     array_push($insert, $datas);
            // }

            // DB::table('baranagay_alert_attachments')->insert($insert);
            $client->initialize();
            $client->emit('new_incident_notifs', ['msg' => '<b>Details: </b>'.$data['description'].'<br><b>Reported By:</b> '.$info->last_name.", ".$info->first_name]);
            $client->close();
            return response(json_encode(['title'=>"Success", "code"=>200, "detail"=>"success"]), 200)
                            ->header('Content-Type', "application/json");
        }catch(Exception $e){
            return response(json_encode(['title'=>"something wen't wrong", "code"=>302, "detail"=> "Sorry somthing wen't wrong."]), 200)
                            ->header('Content-Type', "application/json");
        }
        // $data['']

    }

    function getMyReportHistory($id){
        $res = DB::table('barangay_alert')->where('reported_by_id', $id)->get();
        $data = [];
        $i = 0;
        foreach ($res as $v) {
            $data['data'][$i]['id']                 = $v->id;
            $data['data'][$i]['details']            = $v->details;
            $data['data'][$i]['action_taken_by']    = $v->action_taken_by;
            if($v->is_action_taken == 1){
                $data['data'][$i]['is_action_taken']    = "Yes";    
            }else{
                $data['data'][$i]['is_action_taken']    = "In-Progress";
            }
            
            $data['data'][$i]['alert_type']         = $v->alert_type;
            $data['data'][$i]['added_when']         = date('D M. d, Y H:i', strtotime($v->added_when));
            $i++;
        }   
        return response(json_encode($data), 200)
                        ->header('Content-Type', "application/json");
    }

    function getAnnouncementsDetails($id){
        $res = DB::table('announcements')
                ->select('announcements.title', 'announcements.id', 'announcements.content', 'users.name as added_by', "announcements.added_when", "announcements.thumbnail")
                ->join('users', 'users.id', '=', 'announcements.added_by')
                ->where('announcements.id', $id)->get();


        $data['details'] = $res;

        return response(json_encode($res), 200)
                        ->header('Content-Type', "application/json");

    }
}