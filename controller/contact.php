<?php
    //session_start();
	  $nom=$_POST['name'];
	  $email=$_POST['email'];
	  $message=$_POST['message'];
	  $payload = file_get_contents("https://anasess.000webhostapp.com/email.php?nom=".urlencode($nom)."&email=".urlencode($email)."&message=".urlencode($message)); 
     // $_session['bien_envoyer']=1;
     header("Location: ../#contact"); 
echo"anas";	 


?>
