<?php

require_once "../classlib.php";

$dbConnection = new DbConnection();
$pdo = $dbConnection->getPdo();

if(isset($_POST["register"])){


   $firstName = $_POST["FirstName"];
   $LastName = $_POST["LastName"];
   $email= $_POST["email"];
   $password = $_POST["password"];
   $confPass = $_POST["confphrase"];

   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("Incorrect Email");
   }

   if(!strcmp( $password,$confPass)=== 0){
      die("Passwords don't match");
   }

   $encrpt_pass= password_hash($confPass,PASSWORD_DEFAULT);

   try{
      $stmt = $pdo->prepare('INSERT INTO users(firstname, lastname, email, password) VALUES(?,?,?,?)');

      if($stmt->execute([$firstName,$LastName , $email, $encrpt_pass])){
      header("Location: ../signin.php");
      }  
      $stmt = null;

   }catch(PDOException $e) {
      echo "Error: " . $e->getMessage(); // Show detailed error message
   }
   
   
}
?>