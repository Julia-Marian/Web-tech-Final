<?php
session_start();

header('location:contact.php?success');

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');

$name = $_POST['name']; 
    $email_from = $_POST['email']; 
    $phone = $_POST['phone']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

$s = "select * from contact_form where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


  if(isset($_POST['btn-send']))
  {
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required

    $to = "juliejul.jj21@gmail.com";
    $headers = "From:".$email_from;
    $txt = "You have received an email from".$name.".\n\n".$message;

    mail($to, $email_from, $phone, $subject, $message);
    header("Location:contact.php?success");

    if ($num == 1) {
      echo "Username Already Taken";
      }else{

        $c= "insert into contact_form(name, email, phone, subject, message) values ('$name','$email', '$phone', '$subject','$message')";
        mysqli_query($con, $c);
        echo "Your message has been sent";
    }

        
      }




?>

