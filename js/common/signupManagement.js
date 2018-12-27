// <!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
// 0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
// for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
// mixpanel.init("ba868ad1cb9c0f327c7c74eece66ad4e");

// <!-- end Mixpanel -->
function getModalDetailsFromModal() {
    
    var modalDetails = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'password': $('#password').val(),
        'company': $('#company').val(),
        'number': $('#number').val(),
        'plan':$('#plan').val()
        
    }
    return modalDetails;
}

function manageModal() {
  

// if(password.value == "") {
//       alert("Password is empty!");
//       password.focus();
//       return false;
//     }
//     // regular expression to match only alphanumeric characters and spaces
    var re = /(?=.*?[A-Z])(?=.*?[0-9]).{6,15}/;
//     //var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
//     // validation fails if the input doesn't match our regular expression
     if(!re.test(password.value)) {
      alert("Password must contain at least one number, one uppercase letter and be at least 6 characters long & maximum of 15");
    // at least six characters!");
      password.focus();
      return false;
    }



    
  else if (document.getElementById("cpatchaTextBox").value != code) 
  {
    alert("Invalid Captcha");
        window.location.href="/freshgrc/signup.php";

  }
  else
  {
        event.preventDefault();

 var modalDetails = getModalDetailsFromModal();
    if(modalDetails.name==""||modalDetails.company==""||modalDetails.password==""||modalDetails.email==""||modalDetails.number==""){
        swal({ 
           title:  'Please Fill all the form fields',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok'
        });
    }
   else
  {    
    $.ajax({
          type: "POST",
          url: "/freshgrc/php/common/validationForSignup.php",
          data: modalDetails,
          success: success
     });
  }
}
}

function success(data) {
  debugger
  var modalDetails = getModalDetailsFromModal();
  console.log(data);
  if(data=="")
  {
    $.ajax({
          type: "POST",
        url: "/freshgrc/php/common/signupCtrlManager.php",
        data: modalDetails        
    }).done(function (data) {
         swal({ 
           title:  'Congrats From FixNix Your account has been created. If you need any help contact sales@fixnix.co',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok'          
        });
setTimeout(function () { location.reload(1); }, 5000);
        // window.location="/view/common/subscriptionCreate.php";
    });
  }
  else
  {
    swal({ 
           title:  'Mail Id or Company is already taken',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok'
        });

  }
}



function updatePlan(){
  
    var modalDetails= {
      'company':$('#company').val(),
      'plan':$('#plan').val()
    }
    $.ajax({
          type: "POST",
        url: "/freshgrc/php/common/subscriptionControlManager.php",
        data: modalDetails        
    }).done(function (data) {
         
       //window.location="/view/common/subscriptionCreate.php";
    });
}
