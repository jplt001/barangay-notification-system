var module = window.location.pathname.split("/")[window.location.pathname.split("/").length - 1];

$(document).ready(function(){
	if(module == 'home'){
		// alert('home');
		$('#tbl-mdcl-equip').DataTable({
			paginate: false
		});
	}

  if(module == 'bulletin-board'){
  	$('#tbl-announcement').DataTable({
  		processing: true,
  		"order": [],
  		ajax: 'ajax/getAnnouncements',
  		"columns": [
  			{ "data": "title"},
  			{ "data": "added_when"},
  			{ "data": "status"},
  			{ "data": "action"},
  		]

  	});

  	
  }

  if(module == 'barangay-alert'){
  	var tbl_resident_alert = $('#tbl-barangay-alert').DataTable({
  		processing: true,
  		ajax: 'ajax/getBarangayAlert',
  		"columns": [
  			{ "data": "reported_by"},
  			// { "data": "contact_no"},
  			{ "data": "alert_type"},
  			{ "data": "status"},
  			{ "data": "actions"}
  		]
  	});
  }

  if(module == 'residents'){
  	var tbl_resident_alert = $('#tbl-residents').DataTable({
  		processing: true,
  		ajax: 'ajax/getResidents',
  		"columns": [
  			{ "data": "resident_name"},
  			{ "data": "contact_no"},
  			{ "data": "address"},
  			// { "data": "barangay"},
  			{ "data": "added_when"},
  			{ "data": "actions"},
  		]
  	});
  }

  if(module == 'members'){
  	var tbl_resident_alert = $('#tbl-barangay-member').DataTable({
  		processing: true,
  		ajax: 'ajax/getMembers',
  		"columns": [
  			{ "data": "first_name"},
  			{ "data": "middle_name"},
  			{ "data": "last_name"},
  			// { "data": "barangay"},
  			{ "data": "position"},
  			{ "data": "actions"},
  		]
  	});

//  btnSave
  	$('#reTypePassword').on('keyup', function(){
  		var ss = $('#reTypePassword').val();
  		var un = $('#password').val();
  		console.log(un.length);
  		// if()
  		if(ss == un){

  			$('#btnSave').prop("disabled", false);
  		}else{  			
  			$('#btnSave').prop("disabled", true);
  		}
  		
  	});
  }
  
  if(module == 'health-tips'){
  	var tbl_healthTips = $('#tbl-health-tips').DataTable();
  }

  if(module == 'incidentreport'){
  	var tbl_resident_alert = $('#tbl-incident-report').DataTable({
  		processing: true,
  		ajax: 'ajax/getIncidentReports',
  		"columns": [
  			{ "data": "resident"},
  			{ "data": "contact_no"},
  			{ "data": "casualties"},
  			// { "data": "barangay"},
  			{ "data": "date_of_incident"},
  			{ "data": "actions"},
  		]
  	});
  }

  // if(module == '')

});


function editAnnouncements(id){
	$('#edit-announcement').modal("show");
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getAnnouncementsDetails/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {
			// location.reload();
			var obj = JSON.parse(JSON.stringify(response));
			$('#idEdit').val(obj.id);
			$('#titleEdit').val(obj.title);
			$('#contentEdit').val(obj.content);
		});
}


function deleteAnnouncements(id){	
	var r = confirm("Are you sure that you want delete this announcement?");
	if(r){
		// alert("YEHEY");
		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/deleteAnnouncements/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {
			location.reload();
		});
		
	}
}


function editResident(id){

	  
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "ajax/getResidentDetail/"+id,
	  "method": "GET",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
	  }
	}

	$.ajax(settings).done(function (response) {
		var obj = JSON.parse(JSON.stringify(response));
		$('#first_name').val(obj.first_name);
		$('#middle_name').val(obj.middle_name);
		$('#last_name').val(obj.last_name);
		$('#contact_no').val(obj.contact_no);
		$('#address').val(obj.address);
		// $('#barangay').val(obj.barangay);
		$("#resident_id").val(obj.id);
	  $('#edit-residentd').modal("show");
	});

}


function viewResident(id){

	  
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "ajax/getResidentDetail/"+id,
	  "method": "GET",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
	  }
	}

	$.ajax(settings).done(function (response) {
		var obj = JSON.parse(JSON.stringify(response));
		$('#vFirstName').text(obj.first_name);
		$('#vMiddleName').text(obj.middle_name);
		$('#vLastName').text(obj.last_name);
		$('#vContactNo').text(obj.contact_no);
		$('#vAddress').text(obj.address);
		// $('#vBarangay').text(obj.barangay);
	  $('#view-residentd').modal("show");
	});

}


function deleteResident(id){
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "ajax/getDeleteResident/"+id,
	  "method": "GET",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
	  }
	}
	var r = confirm("Are you sure that you want delete this resident ?");
	if(r){
		$.ajax(settings).done(function (response) {
			location.reload();
		});

	}
	
}



function viewAnnouncements(id){

}


function editMember(id){
	

	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "ajax/getMemberDetails/"+id,
	  "method": "GET",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
	  }
	}

	$.ajax(settings).done(function (response) {

		var obj = JSON.parse(JSON.stringify(response));
		console.log(obj)
		$('#e_first_name').val(obj.first_name);
		$('#e_middle_name').val(obj.middle_name);
		$('#e_last_name').val(obj.last_name);
		$('#e_email').val(obj.email);
		$('#e_address').text(obj.address);
		$('#member_id').val(obj.id);

		// $('#vFirstName').text(obj.first_name);
		// $('#vMiddleName').text(obj.middle_name);
		// $('#vLastName').text(obj.last_name);
		// $('#vContactNo').text(obj.contact_no);
		// $('#vAddress').text(obj.address);
		// $('#vBarangay').text(obj.barangay);
	 	$('#edit-barangay-member').modal("show");
	});
	
}
function viewMember(id){
	

	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "ajax/getMemberDetails/"+id,
	  "method": "GET",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
	  }
	}

	$.ajax(settings).done(function (response) {

		var obj = JSON.parse(JSON.stringify(response));
		console.log(obj)
		$('#mVUserName').text(obj.user_name);
		$('#mVFirstName').text(obj.first_name);
		$('#mVMiddletName').text(obj.middle_name);
		$('#mVLastName').text(obj.last_name);
		$('#mVEmail').text(obj.email);
		$('#mVAddress').text(obj.address);

		// $('#vFirstName').text(obj.first_name);
		// $('#vMiddleName').text(obj.middle_name);
		// $('#vLastName').text(obj.last_name);
		// $('#vContactNo').text(obj.contact_no);
		// $('#vAddress').text(obj.address);
		// $('#vBarangay').text(obj.barangay);
	 	$('#view-barangay-member').modal("show");
	});
	
}

function deleteMember(id){
	var r  = confirm('Are you sure that you want delete this Member?');
	if(r){

		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/deleteMember/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			location.reload();
		});

	}

}


function approveResident(id){
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/setApproveResident/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			location.reload();
		});
}

function disApproveResident(id){
	var r = confirm("Are you are that you want to disapprove this Resident?");	
	if(r){

		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/setDisapproveResident/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			location.reload();
		});
	}

}

function modalResponse(){
	$('#view-barangay-alert').modal();
}

function modalDoneModal(id){	

	$('#is-done-barangay-alert').modal();
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getBarangayAlertDetails/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			var obj = JSON.parse(JSON.stringify(response));
			console.log(obj)
			$('#reportedByDone').text(obj.reported_by)
			$('#emergencyDone').text(obj.emergency)
			$('#detailsDone').text(obj.details)
			$('#reportedWhenDone').text(obj.added_when)
			// $('#action_taken_byDiv').hide()
			$('#action_taken_byDone').text(obj.action_taken_by)
			$('#report_id2').val(id)
		});
}

function mdalSetAccidentReportDone(){
	var id = $('#report_id2').val();
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getSetBarangayAlertDone/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			location.reload();
		});


}

function modalViewReportDetails(id){
	$('#view-barangay-alert').modal();
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getBarangayAlertDetails/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			var obj = JSON.parse(JSON.stringify(response));
			console.log(obj)
			$('#reportedByView').text(obj.reported_by)
			$('#emergencyView').text(obj.emergency)
			$('#detailsView').text(obj.details)
			$('#reportedWhenView').text(obj.added_when)
			// $('#action_taken_byDiv').hide()
			$('#action_taken_byView').text(obj.action_taken_by)
		});

		
		
		
		// 

}

function modalCancelViewReportDetails(id){
	$('#view-barangay-alert').modal();
	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getBarangayAlertDetails/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			var obj = JSON.parse(JSON.stringify(response));
			console.log(obj)
			$('#reportedByView').text(obj.reported_by)
			$('#emergencyView').text(obj.emergency)
			$('#detailsView').text(obj.details)
			$('#reportedWhenView').text(obj.added_when)
			$('#action_taken_byDiv').hide()
			// $('#action_taken_byView').text(obj.action_taken_by)
		});

		
		
		
		// 

}

function cancelAccidentReport(){
	var id = $('#report_id').val();	
	var r = confirm("Are you sure that you wan't to cancel this accident report ?");
	if(r){
		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getCancelAccidentReport/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			location.reload();
		});
	}
	
}

function modalFirstActionReport(id){

	$('#first-todo-barangay-alert').modal();

	var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": "ajax/getBarangayAlertDetails/"+id,
		  "method": "GET",
		  "headers": {
		    "cache-control": "no-cache",
		    "postman-token": "f5dfde4e-b584-a51d-cf6d-e40cd4485a6c"
		  }
		}

		$.ajax(settings).done(function (response) {

			var obj = JSON.parse(JSON.stringify(response));
			var i = 1
			$('#reportedBy').text(obj.reported_by)
			$('#emergency').text(obj.emergency)
			$('#details').text(obj.details)
			$('#reportedWhen').text(obj.added_when)
			// console.log(obj.attachments)		
			var imgAttach  = ''	
			$.each( obj.attachments, function(k, v){
				if(i <= 3){
					imgAttach = imgAttach + '<div class="col-md-4"><img class="img-responsive img-thumbnail" src="data:image/png;base64, '+v.image_base64+'"></div>'
					i++
				}else{
					i= 1
					imgAttach = imgAttach + '<br><div class="col-md-4"><img class="img-responsive img-thumbnail" src="data:image/png;base64, '+v.image_base64+'"></div>'
				}

				// var imgAttach = $('<div class="col-md-4"><img class="img-responsive img-thumbnail" src="data:image/png;base64, '+v.image_base64+'"></div>')
				
			} )
			$('#attachmentsImage2').append(imgAttach);
			//console.log(imgAttach)
		});

	$('#report_id').val(id);

}

