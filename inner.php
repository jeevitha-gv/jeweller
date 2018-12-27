<?php

session_start();


include_once 'php/common/config.php';
require __DIR__.'/php/user/userManager.php';
$errormsg = "";    
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $options = [
    'salt' => $email."12345678910111213",
        ];
    error_log("message".print_r($password,true));
  $pass = password_hash("$password", PASSWORD_BCRYPT, $options);
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
         error_log("message".print_r($route,true));
        //$errormsg = "Login successful!!! Route ". $route;
        //header("Location:view/disaster/disasterPlan.php");
        header($route);
    } else {
        $errormsg = "Incorrect Emailid and password!!!";
    }    
}
mysqli_close($link);
?>