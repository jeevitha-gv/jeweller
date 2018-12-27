<?php
// require __DIR__.'/php/user/userManager.php';

session_start();

if(isset($_SESSION['user_id'])) {
    // $userManager = new UserManager();    
    // $userManager->updateUserActivity($_SESSION['user_id'], false);    
	session_destroy();
	unset($_SESSION['username']);

	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>
