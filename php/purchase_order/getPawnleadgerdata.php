    <?php  
require_once __DIR__.'/../common/config.php';
 error_log('true'.print_r($_POST['number'],true));
 $number = count($_POST["item"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["item"][$i] != ''))  
           {  
           	$item=$_POST["item"][$i];
           	$quantity=$_POST["quantity"][$i];
           	$number=$_POST["number"];
           	 $billnumber=$_POST["billnumber"];

                $sql = "INSERT INTO `pawndata`(`item`,`quantity`,`number`,`billnumber`) VALUES('$item','$quantity','$number','$billnumber')";  
                mysqli_query($link, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 
