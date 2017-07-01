<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {   //Requires separate ID for all login
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM ilogin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("myusername");
       $_SESSION['myusername'];
         $_SESSION['login_user'] = $myusername;
          header("location: institute/index.php");
         //header("location: iwelcome.php");
      }
     else
        echo '<script language="javascript">';
      echo 'alert("Wrong Username Or Paassword")';
      echo '</script>';
   
   }
?>
