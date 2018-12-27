$(document).ready(function () { 

    $.ajax({
      dataType: "json",
      url: "/freshgrc/php/common/totalProjects.php",
      data: "",                                                                         
      success: function(data){        
        document.getElementById("totalprojects").innerHTML=data[0].total_projects;
      }
    });
    $.ajax({
      dataType: "json",
      url: "/freshgrc/php/common/totalTasks.php",
      data: "",                                                                         
      success: function(data){        
        document.getElementById("totaltasks").innerHTML=data[0].total_tasks;
      }
    });
    $.ajax({
      dataType: "json",
      url: "/freshgrc/php/common/totalUploads.php",
      data: "",                                                                         
      success: function(data){
        document.getElementById("totaluploads").innerHTML=data[0].total_uploads;
      }
    });   
    var upload = document.getElementById("upload");

    if(upload){
    upload.addEventListener("change", handleFiles, false);
    function handleFiles() { 
      var files = this.files;
      console.log(files);
      for (var i = 0; i < files.length; i++) {    
        var file = files[i];
        var imageType = /^image\//;
      
        var myFormData = new FormData();
        var userFileId = document.getElementById('upload');

        myFormData.append('userFile', userFileId.files[0]);    
        var fileName = userFileId.files[0].name;

        $('#userFileName').val(fileName);

        $.ajax({
          url: "/freshgrc/php/common/fileMgmt.php",
          type: "POST",
          processData: false, // important
          contentType: false, // important
          data: myFormData,
          success: function (data) {
              //alert('Successfully uploaded');
          }
        });

      }
    }
    }
    var userCredentials = {
        'userId' : loggedInUser,
        'userRole' : loggedInUserRole
    }
    $.ajax({
        dataType: "json",
        type: "POST",
        url: "/freshgrc/php/user/userProfileData.php",
        data: userCredentials,
        success: userPic
    });  

});

function userPic(data) { 
 
    var userData = data;
    $('#firstname').val(userData[0].firstName);
    $('#lastname').val(userData[0].lastName);
    $('#mobileno').val(userData[0].MobileNumber);
    $('#facebook').val(userData[0].Facebook);
    $('#industry').val(userData[0].Industry);
    $('#twitter').val(userData[0].Twitter);
    $('#site').val(userData[0].Site);
    var imageSrc = "uploadedFiles/auditeeFiles/"+userData[0].file;
    var input = document.getElementById('userprofilepicture');
    input.src = imageSrc; 
       
}

function getUserDetailsFromModal() {    
    var action = "update";
    var userDetails = {  
        'action': action,     
        'firstname': $('#firstname').val(),
        'lastname': $('#lastname').val(),
        'mobileno': $('#mobileno').val(),
        'facebook': $('#facebook').val(),
        'industry': $('#industry').val(),
        'twitter': $('#twitter').val(),
        'site': $('#site').val(),
        'loggedInUser': $('#loggedInUser').val(),     
                
    }
    return userDetails;
}

function saveUserProfileChanges() {    
   var userDetails = getUserDetailsFromModal();  
    
  $.ajax({
        type: "POST",
        url: "/freshgrc/php/user/manageUserProfile.php",
        data: userDetails
    }).done(function (data) {
        details = document.querySelectorAll("#savedDataModal p");
        details[0].innerHTML = userDetails['firstname'];
        details[1].innerHTML = userDetails['lastname'];
        details[2].innerHTML = userDetails['mobileno'];
        details[3].innerHTML = userDetails['site'];
        details[4].innerHTML = userDetails['industry'];
        details[5].innerHTML = userDetails['facebook'];
        details[6].innerHTML = userDetails['twitter'];
       $('#savedDataModal').modal('show');
    });

}

function reloadPage() {
    location.reload();
}

function saveUserProfilePicture() { 

   var action = "update";  
   var userProfilePicture = {
        'action': action, 
        'imagename': $('#userFileName').val(),
        'loggedInUser': $('#loggedInUser').val()
   } 
  
  $.ajax({
        type: "POST",
        url: "/freshgrc/php/user/manageUserProfile.php",
        data: userProfilePicture
    }).done(function (data) {         
       location.reload();
    });  

}
function setPriorityAndSeverity(){
  var modalDetails ={
    'priority':$('#priority').val(),
    'severity':$('#severity').val(),
    'severityMed':$('#severityMed').val(),
    'priorityMed':$('#priorityMed').val(),
    'priorityHigh':$('#priorityHigh').val(),
    'severityHigh':$('#severityHigh').val(),
    'company':$('#company').val()
  }
  $.ajax({
        type: "POST",
        url: "/freshgrc/php/common/setPriorityAndSeverity.php",
        data: modalDetails
    }).done(function (data) {         
        swal({ 
           title:  'priority and severity set',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok'
        });
    });
} 

function reloadpage() {
$('#button').click(function() {
    location.reload();
});
}