<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//vars
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];

    if(isset($name, $email, $message, $company)){
        if(!$name){
            $errorName = "Please enter your name!";
        }
        if(!$email){
            $errorEmail = "Please enter your email!";
        }
        if(!$message){
            $errorMessage = "Please enter a message!";
        }
        if(!$company){
            $errorCompany = "Please enter your company's name!";
        }

    }//end if isset
    
    if(!$errorName && !$errorCompany && !$errorEmail && !$errorMessage){
        //email confirmation
        $to = "rls15@pct.edu";
        $subject = "Message from contact form";
        $body = "From: $name\n
                 Email: $email\n
                 Message: $message\n";
        
        mail($to, $subject, $body);
        $result = '<div class="alert alert-success">SUCCESS! Your message has been sent!</div>';
    }else{
        $result = '<div class="alert alert-danger">Sorry, there was an error sending your form. Please try again later.</div>';
    }
    
    
    
    
}//end server request method









?>