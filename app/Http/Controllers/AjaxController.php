<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Auth;
class AjaxController extends Controller
{
    //

    function getAnnouncements(){
    	$res = DB::table('announcements')->where('deleted', 0)->orderBy('id', 'desc')->get();
    	
    	$data = [];
    	$i = 0;
    	foreach ($res as $k => $v) {
    		$data['data'][$i]['id'] = $v->id;
    		$data['data'][$i]['title'] = $v->title;
    		$data['data'][$i]['content'] = $v->content;
    		$data['data'][$i]['added_when'] = date('F d, Y H:i:s',strtotime($v->added_when));
    		if($v->status == 0){
    			$data['data'][$i]['status'] = '<span class="label label-info label-mini">Viewable</span>';
    		}elseif($v->status == 1){
    			$data['data'][$i]['status'] = '<span class="label label-danger label-mini">Not Viewable</span>';
    		}
    		$data['data'][$i]['action'] = "<a href='".url('/bulletin-board')."/".$v->id."' class='btn btn-primary btn-xs'><i class='fa fa-eye'></i></a> <button class='btn btn-info btn-xs' data-title='Edit' onclick='editAnnouncements(".$v->id.")' data-toggle='tooltip'><i class='fa fa-pencil'></i></button> <button class='btn btn-danger btn-xs' onclick='deleteAnnouncements(".$v->id.")'><i class='fa fa-ban'></i></button>";
    		$i++;
    	}

    	return response()->json($data);
    }

    function getAnnouncementsDetails($id){

        $data = DB::table('announcements')->where('id',$id)->first();
        return response()->json($data);

    }

    function postUpdateAnnouncements(Request $req){

        $data = $req->all();
        unset($data['_token']);
        unset($data['idEdit']);

        DB::table('announcements')->where('id', $req->get('idEdit'))->update($data);
        return redirect('/announcements');

    }

    function getPositions(){
        $res = DB::table('positions')->orderBy('position_name')->get();
        $options = '';

        foreach ($res as $v) {
            $options .= '<option value="'.$v->id.'"> '.$v->position_name.'</option>';
        }

    }


    function getResidents(){
    	$res = DB::table('residents')->where('deleted', 0)->get();
    	
    	$i= 0;
    	$data['data'] = array();
    	foreach ($res as $k => $v) {
    		$data['data'][$i]['id'] = $v->id;
    		$data['data'][$i]['resident_name'] = $v->last_name.", ".$v->first_name. " ". $v->middle_name;
    		$data['data'][$i]['contact_no'] = $v->contact_no;
    		$data['data'][$i]['address'] = $v->address;
    		$data['data'][$i]['barangay'] = $v->barangay;
    		$data['data'][$i]['added_when'] = date('F d, Y H:i', strtotime($v->added_when));
            if($v->is_approved == 0){
                $data['data'][$i]['actions'] = "<button onclick='approveResident(".$v->id.")' class='btn btn-success btn-xs'><i class='fa fa-check'></i></button> <button class='btn btn-danger btn btn-xs' data-title='test' data-toggle='tooltip' onclick='disApproveResident(".$v->id.")'><i class='fa fa-times' aria-hidden='true'></i></button>";
            }else if($v->is_approved == 2){

              $data['data'][$i]['actions'] = '<button onclick="deleteResident('.$v->id.')" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i></button>';
            }else{

    		  $data['data'][$i]['actions'] = ' <button class="btn btn-primary btn-xs" onclick="viewResident('.$v->id.')"><i class="fa fa-eye"></i></button> <button onclick="deleteResident('.$v->id.')" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i></button>';
            }
    		$i++;
    	}

    	return $data;
    }


    function getResidentDetail($id){
    	$data =  DB::table('residents')->find($id);

    	return response()->json($data);
    }


    function getDeleteResident($id){

    	DB::table('residents')->where('id', $id)->update(['deleted'=>1, 'deleted_by'=>Auth::user()->id, 'deleted_when'=> date('Y-m-d H:i:s')]);

    	
    }


    function putUpdateResident(Request $req){
    	$set  = $req->except('_token');
    	$id = $req->get('resident_id');

    	unset($set['_token']);
    	unset($set['resident_id']);

    	DB::table('residents')->where('id', $id)->update($set);

    	return redirect('residents')->with('success', 'Updating details success.');
    }

    function getMembers(){
    	$res = DB::table('users')
            ->select(['users.id','first_name','middle_name','last_name','position_name as position'])
            ->join('positions', "users.position_id", '=', 'positions.id')
            ->where('users.id', '!=', Auth::user()->id)->get();
        
    	$data['data'] = [];
    	$i = 0;
    	foreach ($res as $k => $v) {
    		$data['data'][$i]['first_name'] = $v->first_name;
    		$data['data'][$i]['middle_name'] = $v->middle_name;
    		$data['data'][$i]['last_name'] = $v->last_name;
    		$data['data'][$i]['position'] = $v->position;
    		$data['data'][$i]['actions'] = '<button class="btn btn-primary btn-xs" onclick="viewMember('.$v->id.')"><i class="fa fa-eye"></i></button> <button class="btn btn-info btn-xs" onclick="editMember('.$v->id.')"><i class="fa fa-pencil"></i></button> <button class="btn btn-danger btn-xs" onclick="deleteMember('.$v->id.')"><i class="fa fa-ban"></i></button>';
    		$i++;
    	}

    	return $data;


    }

    function postMemberUpdate(Request $req){


    	$set = $req->all();
    	$id = $req->get('member_id');
    	unset($set['_token']);
    	unset($set['member_id']);
    	$set['name'] = $set['first_name']." ". $set['last_name'];
    	DB::table('users')->where('id', $id)->update($set);
    	return redirect('members')->with('success', 'Members information has been successfully updated.');

    }

    function getMemberDetails($id){
    	$res = DB::table('users')->where('id', $id)->first();
    	
    	return response()->json($res);
    }

    function deleteMember($id){
    	DB::table('users')->where('id', $id)->delete();
    }


    function getBarangayAlert(){
        $raw_data = DB::table('barangay_alert as a')
                        ->join('residents as b', 'a.reported_by_id', '=', 'b.id')
                        ->select('a.id',DB::raw('CONCAT(`b`.`last_name`, "," , `b`.`first_name`) as reported_by') , 'b.contact_no', 'a.alert_type', 'a.is_action_taken')
                        ->where('b.deleted', 0)
                        ->get();
        $data['data'] = [];
        $i = 0;

        foreach ($raw_data as $v) {
            $data['data'][$i]['id'] = $v->id;
            $data['data'][$i]['reported_by'] = $v->reported_by;
            // $data['data'][$i]['contact_no'] = $v->contact_no;
            $data['data'][$i]['alert_type'] = $v->alert_type;
            if($v->is_action_taken == 0){
                $data['data'][$i]['status'] = "<span class='label label-info'>Pending</span>";
                $data['data'][$i]['actions'] = '<button class="btn btn-success btn-xs center-block" onclick="modalFirstActionReport('.$v->id.')"><i class="fa fa-pencil"></i></button>';

            }elseif($v->is_action_taken == 1){
                $data['data'][$i]['status'] = "<span class='label label-primary'><i class='fa fa-spinner fa-spin'></i> On-Going</span>";
                $data['data'][$i]['actions'] = '<center><button class="btn btn-warning btn-xs"> <i class="fa fa-pencil" onclick="modalDoneModal('.$v->id.')"></i></button></center>';
            }elseif($v->is_action_taken == 2){
                $data['data'][$i]['status'] = "<span class='label label-success'>Done</span>";
                $data['data'][$i]['actions'] = '<center><button class="btn btn-info btn-xs" onclick="modalViewReportDetails('.$v->id.')"><i class="fa fa-eye"></i></button></center>';
                
            }else{
                $data['data'][$i]['status'] = "<span class='label label-danger'>Canceled</span>";
                $data['data'][$i]['actions'] = '<center><button class="btn btn-info btn-xs" onclick="modalCancelViewReportDetails('.$v->id.')"><i class="fa fa-eye"></i></button></center>';
            
            }
            
            $i++;
        }

        return response()->json($data);


    }


    function getSetBarangayAlertDone($id){
        DB::table('barangay_alert')->where('id', $id)->update(['is_action_taken'=>2]);
    }

    function getBarangayAlertDetails($id){
        $raw_data = DB::table('barangay_alert as a')
                        ->join('residents as b', 'a.reported_by_id', '=', 'b.id')
                        ->leftJoin('users as  c', 'c.id', '=', 'a.action_taken_by')
                        ->select('a.id',DB::raw('CONCAT(`b`.`last_name`, "," , `b`.`first_name`) as reported_by') , 'a.emergency', 'a.alert_type', 'a.details', 'a.added_when', 'c.name as action_taken_by')
                        ->where('b.deleted', 0)
                        ->where('a.id', $id)
                        ->first();                        
        $raw_data->attachments = DB::table('baranagay_alert_attachments')->select('image_base64')->where('barangay_alert_id', $raw_data->id)->get();
        
        return response()->json($raw_data);
    }

    function getCancelAccidentReport($id){
        DB::table('barangay_alert')->where('id', $id)->update(['is_action_taken'=>3]);
    }


    function getIncidentReports(){
        $raw_data = DB::table('incident_report as a')
                        ->join('residents as b', 'a.resident_id', '=', 'b.id')
                        ->select(DB::raw('CONCAT(`b`.`last_name`, "," , `b`.`first_name`) as resident') , 'b.contact_no', 'a.incident_reported', 'a.casualties', 'a.date_of_incident')
                        ->where('b.deleted', 0)
                        ->get();


        $data['data'] = [];
        $i = 0;
        foreach ($raw_data as $v) {
            $data['data'][$i]['resident'] = $v->resident;
            $data['data'][$i]['contact_no'] = $v->contact_no;
            $data['data'][$i]['casualties'] = $v->casualties;
            $data['data'][$i]['date_of_incident'] = $v->date_of_incident;
            $data['data'][$i]['actions'] = '<button class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button> <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>';
            $i++;
        }

        return response()->json($data);


    }


    function setDisapproveResident($id){
        try{
            DB::table('residents')->where('id', $id)->update(['is_approved'=> 2]);
        }catch(Exception $e){
            Log::info($e);
        }
    }


    function setApproveResident($id){
        try{
            DB::table('residents')->where('id', $id)->update(['is_approved'=> 1]);
        }catch(Exception $e){
            Log::info($e);
        }
    }

    function deleteAnnouncements($id){
        DB::table('announcements')->where('id', $id)->delete();
    }


    function getReportedIncidentsForthisYear(){
        $sql = "SELECT COUNT(*) AS total_permonth, MONTH(date_added) AS month_added FROM `barangay_alert` WHERE date_added >= CONCAT(YEAR(NOW()), '-01-01') AND date_added <= CONCAT(YEAR(NOW()),'-12-31') GROUP BY MONTH(date_added)";

        $res = DB::select($sql);

        $data['main_data'] = [];
        $data['range_data'] = ['0'];
        $total = 0;
        foreach ($res as $v) {
            $total += $v->total_permonth;
        }
        // pre($total);
        foreach ($res as $v) {
            # code...
            
            if(!in_array($v->total_permonth ,$data['range_data'])){
                array_push($data['range_data'], $v->total_permonth);
            }

            $raw_data['total_permonth'] = $v->total_permonth;
            $raw_data['month']          = date('M', strtotime($v->month_added));
            array_push($data['main_data'], $raw_data);


        }


        pre($data);
    }



}
