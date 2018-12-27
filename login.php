
<?php
include_once 'php/common/config.php';
require __DIR__.'/php/user/userManager.php';
require_once __DIR__.'/php/company/companyManager.php';

session_start();
if(isset($_SESSION['user_id'])) {
    $userManager = new UserManager();    
    $userManager->updateUserActivity($_SESSION['user_id'], false);  

  session_destroy();
  unset($_SESSION['user_id']);
  unset($_SESSION['user_name']);
    unset($_SESSION['user_role']);
    echo "<script type='text/javascript'>alert('Session Over')</script>";
  header("Location: login.php");
}


$errormsg = "";    
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
     $userManager = new UserManager(); 
         $stripval= $userManager->getstripData($email);
echo $link;
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
     
    $options = [
    'salt' => $email."12345678910111213141516",
        ];
  $pass = password_hash("$password", PASSWORD_BCRYPT, $options);
  error_log("passowrd".print_r($pass,true));
    $result = mysqli_query($link, "SELECT * FROM user u WHERE email = '" . $email. "' and password = '" . $pass . "'");
    if ($row = mysqli_fetch_array($result)) {

     
        $userId = $row['id'];
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $row['last_name'];
        $userManager = new UserManager();
        $userRole = $userManager->getUserRole($userId);
        $_SESSION['user_role'] = $userRole['roleName'];
        $route = "Location: ".$userRole['route'];
        $userManager->updateUserActivity($userId, true);
        $manager=new CompanyManager();
        $id=$manager->getCompanyIdForUser($_SESSION['user_id']);
        $_SESSION['company']=$id[0]['id'];
        //$errormsg = "Login successful!!! Route ". $route;
$num=count($stripval)-1;
  if($stripval[$num]['end_day']!=NULL)
  {
          if(date('Y-m-d')>date('Y-m-d',$stripval[$num]['end_day']))
           {
            header("Location:view/common/subscription.php");
           }
         else{
             header($route);
             }
  }
        else if(($row['company_id']!=7)&&(date('Y-m-d')>date('Y-m-d', strtotime($row['created_at']. ' + 15 days'))))
      {
    
     
        header("Location:view/common/subscription.php");
      
    } 
    else{
        header($route);
      }
    
    } else {
        $errormsg = "Incorrect Emailid and password!!!";
    }    
}
mysqli_close($link);



?>

    <!DOCTYPE html>
    <html>

    <head>
        <base href="/freshgrc/">
        <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
        <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
        <style type="text/css">
                @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
    .login-container{
        width: 100%;
        font-family: 'Open Sans', sans-serif;
    }
    /*.login-banner{
        background: url(http://keenthemes.com/preview/metronic/theme/assets/pages/img/login/bg1.jpg) center center;
    background-size: cover;
    height: 800px;
    }*/
    .login-info{
        padding:20px;
    }
    .login-logo a img{
        width: 150px;
        margin-left: -39px;
    }
    .login-fields h3{
        font-size: 30px;
    font-weight: 300;
    color: #4e5a64;
    }
    /*.login-fields p{
        color: #a0a9b4;
    font-size: 15px;
    line-height: 22px;
    margin: 20px 0px;
    }*/
    .input-style input{
        width: 100%;
    padding: 10px 0;
    border: #a0a9b4;
    border-bottom: 1px solid;
    color: #868e97;
    font-size: 14px;
    margin-bottom: 30px;
    border-radius: 0!important;
    outline: none;
    }
    .header-right-menu-login{
    margin: 0;
    padding: 0;
    float: right;
    margin-top: 30px;
  }
  .header-right-menu-login li{
    display: inline-block;
    padding-left: 10px;
  }
  .header-right-menu-login li a{
    padding: 5px;
    display: inline-block;
    border: 2px solid #df5e5e;
    color: #df5e5e;
    border-radius: 5px !important;
  }
  .header-right-menu-login li a:hover{
    transition: 0.3s ease;
    color: #fff;
    background: #df5e5e
  }
        </style>



           
    <script src="js/audit/auditCreateManagement.js"></script>
       <script src="//fast.appcues.com/31746.js">// NOTE: These values should be specific to the current user.
  Appcues.identify("<?php echo $user->id; ?>", { // Replace with unique identifier for current user
    name: "Gokul Kandasamy",   // Current user's name
    email: "gokulk@fixnix.co"

, // Current user's email
    created_at: <?php echo $user->created_at; ?>,    // Unix timestamp of user signup date

    // Additional user properties.
    // is_trial: "<?php echo $user->is_trial; ?>",
    // plan: "<?php echo $user->plan; ?>"

  });
 </script>
 <script type="text/javascript">/* Chameleon - better user onboarding */!function(t,n,o){var a="chmln",e="adminPreview",c="setup identify alias track clear set show on off custom help _data".split(" ");if(n[a]||(n[a]={}),n[a][e]&&(n[a][e]=!1),!n[a].root){n[a].accountToken=o,n[a].location=n.location.href.toString(),n[a].now=new Date;for(var s=0;s<c.length;s++)!function(){var t=n[a][c[s]+"_a"]=[];n[a][c[s]]=function(){t.push(arguments)}}();var i=t.createElement("script");i.src="https://fast.trychameleon.com/messo/"+o+"/messo.min.js",i.async=!0,t.head.appendChild(i)}}(document,window,"SC9FMjUqvypdfxnQ63ksqfeIjZhXfpHYiS22b88rrKPUoT-1EzS1d-AmxY4PgzmagquxIG");
  // **This is an example script, don't forget to change the PLACEHOLDERS.**
  // Please confirm the user properties to be sent with your project owner.

  // Required:
  chmln.identify(USER.ID_IN_DB, {     // Unique ID of each user in your database (e.g. 23443 or "590b80e5f433ea81b96c9bf6")
    email: USER.EMAIL,                // Put quotes around text strings (e.g. "jim@example.com")

    // Optional - additional user properties:
    created: USER.SIGN_UP_DATE,       // Send dates in ISO or unix timestamp format (e.g. "2017-07-01T03:21:10Z" or 1431432000)
    name: USER.NAME,                  // We will parse this to extra first and surnames (e.g. "James Doe")
    role: USER.ROLE,                  // Send properties useful for targeting types of users (e.g. "Admin")
    logins: USER.LOGIN_COUNT,         // Send any data about user engagement (e.g. 39)
    project: USER.PROJECT_ID,         // Send any unique data for a user that might appear in any page URLs (e.g. 09876 or "12a34b56")

    // Optional - company properties:
    company: {                        // For B2B products, send company / account information here
      uid: COMPANY.ID_IN_DB,          // Unique ID of the company / account in your database (e.g. 9832 or "590b80e5f433ea81b96c9bf7")
      created: COMPANY.SIGN_UP_DATE,  // To enable targeting all users based on this company property
      name: COMPANY.NAME,             // Send any data that appears within URLs, such as subdomains (e.g. "airbnb")
      trial_ends: COMPANY.TRIAL_ENDS, // Send data about key milestones (e.g. "2017-08-01T03:21:10Z")
      version: COMPANY.VERSION,       // If your software varies by version then this will help show the correct guidance (e.g. "1.56")
      plan: COMPANY.PLAN,             // Send null when no value exists (e.g. "Gold", "Advanced")
      spend: COMPANY.CLV              // Send other properties that will help in targeting users (e.g. sales rep, source, stage)
    }
  });
</script>
    </head>

    <body>
    <div class="login-container">
      <div class="col-md-6" style="padding: 0;">
        <img  src="assets/images/fixnix-login-img.png" style="width: 100%;" class="login-image" ng-style="{height:{{vm.loginImgHeight}}+'px'}",>
        <div class="login-banner"></div>
    </div>
    <div class="col-md-6" style="padding: 7%;">
        <div class="login-info">
            <div class="row">
                <div class="login-logo col-md-2">
                    <a href="https://fixnix.co/"><img src="assets/images/fixnix-red-logo.png"></a>
                </div>
                <div class="col-md-10">
                    <ul class="header-right-menu-login">
              <li>
                   <a href="http://freshgrc.com/freshgrc/signup.php" class="">Sign up</a>
              </li>
              <li>
                  <a href="http://freshgrc.com/freshgrc/index.php" class="">Sign in</a>
              </li>
              <li>
              <li>
                <a href="https://fixnix.co/demo/" class="">Demo</a>
              </li>
            </ul>
                </div>
            </div>
        </div>
        <div class="login-fields" style="margin-top: 10%">
            <h3>FreshGRC Login</h3>
        </div>
        <form name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
            <div class="row" style="margin: 8% -1% 13% -1%;">
                <div class="col-md-6 col-xs-6 col-sm-6 input-style">
                    <input class="form-control " placeholder="Username" type="email" name="email"  required>
                           </div>
                <div class="col-md-6 col-xs-6 col-sm-6 input-style">
                    <input class="form-control" type="password" placeholder="Password" name="password"  required >
                  </div>
            </div>
            <div class="row">
          <div class="col-sm-6" style="margin-top: 10%;">
            <!-- <a ui-sref="signup">Have never experienced FreshGRC ? Try us free for 15 days</a> -->
          </div>
          <div class="col-sm-6 text-right">
          
          <!-- <div style="margin-right: 50%;">
            <a ui-sref="setpassword" style="color: #a4aab2; ">Forget Password?</a>
          </div> -->
          <div class="row col-sm-12 text-right">
            <div class="col-sm-6" style="width: 64%;margin-left: -65%;margin-top: -18px;">
              <a ui-sref="setpassword" style="color: #a4aab2;" href="resetPassword.php">Forget Password?</a>
            </div>
            <div class="col-sm-6 text-right">
              <button type="submit" name="login" class="btn btn-info" style="margin-top: -44px;
    margin-right: 38px;">Login</button>
              <!-- <input type="submit" name="login" value="" style="border-radius: 0px !important;width: 70%;margin-left: 200%;
                margin-top: -30%;" class="btn btn-large btn-block btn-info" />
            </div> -->
        </div>
              
            <!-- <button class="btn blue" type="submit" data-ng-disabled="login.$invalid">Sign In</button> -->
          </div>
          </div>
        </form>
        <div class="row signin-footer" style="margin-top: 20%;"> 
      <div class="row initial-footer">
          <div class="col-md-4 col-xs-4 col-sm-4" >
            <p><a href="tel:+91-87 90 878 222" class="">+91-87 90 878 222</a></p>
          </div>
          <div class="col-md-4 col-xs-4 col-sm-4" >
            <p><a href="http://www.freshgrc.com/" style="padding: 0;">FreshGRC.com </a><span style="color: #333;">powered by </span><a href="https://fixnix.co/">FixNix</a></p>
          </div>
          <div class="col-md-4 col-xs-4 col-sm-4" >
            <p>
              <a href="https://fixnix.co/grc-features/termsandconditions/">Terms and Conditions</a>
              <a href="https://fixnix.co/grc-features/security-policy-infrastructure/">Privacy Policy</a>
              <a href="https://fixnix.co/">Company</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  
</div>
<div>
  <a class="btn btn-primary btn-sm" href="javascript:Appcues.show('-LE-8577fLit7jE_NUJz')">Show hints &#x27a4;</a>


</div>
    </body>
    </html>





