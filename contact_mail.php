<?php 

if(isset($_POST['contact_action'])) { 
  $sucess = '';
  $error = $name = $phone = $email = $message='';
if(isset($_POST['name']))
    $name = $_POST['name'];
if(isset($_POST['phone']))
    $phone = $_POST['phone'];
if(isset($_POST['email']))
    $email = $_POST['email'];
if(isset($_POST['message']))
    $message = $_POST['message'];


    

    $to = 'palaisdelarichesse@gmail.com';
    $subject = 'email subject';
    $body = '<div>';
      $body .= '<table cellspacing="1" cellpadding="10" border="1">';
        $body .= '<tr>';
          $body .= '<td>';
            $body .= '<strong>Name</strong>';
          $body .= '</td>';
          $body .= '<td>';
            $body .= '<strong>'.$name.'</strong>';
          $body .= '</td>';
        $body .= '</tr>';

        $body .= '<tr>';
        $body .= '<td>';
          $body .= '<strong>Phone</strong>';
        $body .= '</td>';
        $body .= '<td>';
          $body .= '<strong>'.$phone.'</strong>';
        $body .= '</td>';
      $body .= '</tr>';


      $body .= '<tr>';
      $body .= '<td>';
        $body .= '<strong>Email</strong>';
      $body .= '</td>';
      $body .= '<td>';
        $body .= '<strong>'.$email.'</strong>';
      $body .= '</td>';
    $body .= '</tr>';

    $body .= '<tr>';
    $body .= '<td>';
      $body .= '<strong>Message</strong>';
    $body .= '</td>';
    $body .= '<td>';
      $body .= '<strong>'.$message.'</strong> <br>';
    $body .= '</td>';
  $body .= '</tr>';
      $body .= '</table>';
    $body .= '</div>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <palaisdelarichesse.com>' . "\r\n";
    if(mail($to, $subject, $body,$headers)) {
      $sucess = 'Email has been sent.';
    } else {
      $error = 'Some error occured.';
    }

 } ?>