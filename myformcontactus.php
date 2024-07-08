<?php
//  print_r($_POST);
//  die();
// if (isset($_POST['username'])&&isset($_POST['phone'])&&isset($_POST['email'])) {
 session_start();
  include 'config.php';


  function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $name = validate($_POST['name']);
  $email = validate($_POST['email']);
  $subject = validate($_POST['subject']);
  $message = validate($_POST['message']);

  $is_active= '1';
//   $cpassword =md5($_POST['cpassword']);
//   $password_raw= $_POST['password'];
//   $role = $_POST['role'];
//   
  
     

 
    
      $sql = "INSERT INTO contactus_query(name, email, subject, message, is_active ) VALUES('$name', '$email', '$subject', '$message', '$is_active')";
      $res =mysqli_query($conn,$sql);

      if ($res){
        $_SESSION['status'] = "form submitted successfully";
        header("Location: contact.php");
      }
    else{
      $_SESSION['status'] = "Some Error has occured";
    }
   
   
   
   
   
   
   
   
   
      //   if ($res){
    //     $_SESSION['status'] = "form submitted successfully";
    //     header("Location: index.html");
    //   }
    // else{
    //   $_SESSION['status'] = "Some Error has occured";
    // }
    
    
  
  
  
  
     
      
  
  
  
  
  
  
  
  
  
      // if(empty($firstName)) || (empty($lastName)) || (empty($email)) || (empty($phone)) || (empty($password)) || (empty($role))
      // {
      //   $_SESSION['status'] = "All Fields Are Mandatory!";
      //   header("Location: my-account.php")
      // }  
      // else{
      //   echo "You Are In."
      // }
  
  
       
  

?>