<?php
session_destroy();
include "php/common/config.php";

if (isset($_POST['submit'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    if($email=='admin@gmail.com'&& $password=='admin123')
    {
            header("Location:view/superadmindata.php");
    }
    // else{
    //   header("Location:index.php")
    // }
  }

if (isset($_POST['sign_in'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email=='user@gmail.com'&& $password=='user123')
    {

            header("Location:/Jeweller/view/purchase/bookedlist.php");
    }

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
  <title>Jeweller</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--<script src="js/user.js"></script>-->
  <base href="/Jeweller/">
</head>
<style type="text/css">
  * {
  box-sizing: border-box;
}

input[type=text],[type=password]{
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  /*background-color: #4CAF50;*/
  /*color: white;*/
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  /*float: right;*/
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
/*.row:after {
  content: "";
  display: table;
  clear: both;
}*/
/*@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}*/
</style>
<body>
 
  <div class="row">
    <!-- <div class="col-md-6">
      <img src="SS2.png">
    </div> -->
    <div class="col-md-6 " style="float: right;margin-top: 20px;margin-left: 30%;">
      <form action="index.php" method="POST">
        <div>
          <h1>User Login</h1>
        </div>
        <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="mail_id" name="email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password">
      </div>
    </div>
    <div class="row">
      <a href="">Forget Password</a>
      <a href="pawndashboard.php">
      <input type="submit" value="Sign In" class="btn btn-primary" name="sign_in" style="margin-left: 250px;">
    </a></div>
     <div>
          <h1>Admin Login</h1>
        </div>
        <div class="row">
      <div class="col-25">
        <label for="fname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="Password">
      </div>
    </div>
    <div class="row">
      <a href="">Forget Password</a>
      <input type="submit" value="Sign In" class="btn btn-primary" name="submit" style="margin-left: 250px;">
    </div>
      <!--   <table style="border: 1px solid black;">
          <tr>
            <th><h3 style="color: red;border: 1px solid black;">User Login</h3></th>
            <th></th>
          </tr>
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
        </table> -->
         <!-- <table>
          <tr>
            <th><h3>Admin Login</h3></th>
          </tr>
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
        </table> -->
      </form>
    </div>
   </div>
  

</body>
</html>

