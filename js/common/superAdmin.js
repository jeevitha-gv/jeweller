function checkUserMail(){
    debugger
    var userMail = {               
        'usermail': $('#usermail').val()                  
    }    
    $.ajax({
        dataType: "json",
        type: "POST",
        url: "/freshgrc/php/common/manageSuperAdmin.php",
        data: userMail,
        success: success
    });
    location.reload();
}
function success(data){
    debugger
    if (data == null) {
        debugger
        alert("Email-id is incorrect");
    }
    else{
        window.location="http://"+data[0].name+".freshgrc.com/freshgrc/login.php";       
    }

}
