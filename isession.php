<?php
   include('config.php');
   session_start();
   if (isset($_SESSION['login_user'])) {
   	 $user_check = $_SESSION['login_user'];
   	
   }
   else {
   	header("location: index.php");
   	die();
   }
  
   
   $ses_sql = mysqli_query($db,"select username from ilogin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>