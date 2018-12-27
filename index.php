<?php
include "php/common/config.php";
            header("Location:view/purchase/purchasing_order.php");


if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // if($email=='pawan@gmail.co')
    // {
            header("Location:view/purchase/purchasing_order.php");
    // }
  }
// require_once __DIR__.'/php/dataonboading.php';
// require __DIR__.'/php/user/userManager.php';
// require_once __DIR__.'/php/company/companyManager.php';

// session_start();


// if(isset($_SESSION['username'])) {
    
//   session_destroy();
//   unset($_SESSION['username']);
//     echo "<script type='text/javascript'>alert('Session Over')</script>";
//   header("Location: user.php");
// }

  

// $manager=new dataonboading();
// if(isset($_POST['submit']))
// {
//     $email = $_POST['mail_id'];
//     $password = $_POST['password'];


//     $email = mysqli_real_escape_string($link, $_POST['mail_id']);
//     $password = mysqli_real_escape_string($link, $_POST['password']);
     
//     $options = [
//     'salt' => $email."12345678910111213141516",
//         ];
//   $pass = password_hash("$password", PASSWORD_BCRYPT, $options);
//       $result = mysqli_query($link, "SELECT * FROM user u WHERE email = '" . $email. "' and password = '" . $pass . "'");
//     if ($row = mysqli_fetch_array($result)) {
//         $userId = $row['id'];
//         $_SESSION['user_id'] = $userId;
//         $_SESSION['user_name'] = $row['name'];
//         $userManager = new UserManager();
//         $userRole = $userManager->getUserRole($userId);
//         $route = "Location: ".$userRole['route'];
//         $manager=new CompanyManager();
//         $id=$manager->getCompanyIdForUser($_SESSION['user_id']);
//         $_SESSION['company']=$id[0]['id'];

//                      header($route);

//       }
// else
// {
//   echo 'incorrect mail';
// }

// // $getData=$manager->getdatas($username,$pass);
// // if($getData!=NULL)
// // {
// //   header("Location:view/onboading.php");
// // }
// }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contract O</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--<script src="js/user.js"></script>-->
  <base href="contractO">
</head>
<body>
  <div class="row">
  
  <!-- <div class="col-md-6 container" style="float: right;">

    <div>
        <table>
          <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" id="name"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" id="mail_id"></td>
          </tr><tr>
            <td>Password</td>
            <td><input type="password" class="form-control" id="password"></td>
          </tr><tr>
            <td>Phone Number</td>
            <td><input type="text" class="form-control" id="number"></td>
          </tr><tr>
            <td>Company</td>
            <td><input type="text" class="form-control" id="company"></td>
          </tr>
          <tr>
            <td colspan="2"><button class="btn btn-primary" style="float:right;" onclick="signup()">Sign Up</button></td>
          </tr>
        </table>
    </div>
   
    <div> -->
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
          <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" name="mail_id"></td>
          </tr><tr>
            <td>Password</td>
            <td><input type="password" class="form-control" name="password"></td>
          </tr>
          <tr>
            <td><a href="">Forget Password</a></td>
            <td><input type="submit" value="Sign In" class="btn btn-primary" name="submit" style="float:right;"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

</body>
</html>

