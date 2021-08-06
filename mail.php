<?php 
$mail_send = false;
if(isset($_POST['form_action'])) { 
  $sucess = '';
  $error = $name = $phone = $email = $right_away=$just_looking =$in_year =$rad = $appartment=$penthouse = $townhouse = '';
if(isset($_POST['form_name']))
    $name = $_POST['form_name'];
if(isset($_POST['form_phone']))
    $phone = $_POST['form_phone'];
if(isset($_POST['form_email']))
    $email = $_POST['form_email'];
if(isset($_POST['right_away']))
    $right_away = $_POST['right_away'];
if(isset($_POST['just_looking']))
    $just_looking = $_POST['just_looking'];
if(isset($_POST['in_year']))
    $in_year = $_POST['in_year'];
if(isset($_POST['rad']))
    $rad = $_POST['rad'];
if(isset($_POST['appartment']))
    $appartment = $_POST['appartment'];
if(isset($_POST['penthouse']))
    $penthouse = $_POST['penthouse'];
if(isset($_POST['townhouse']))
    $townhouse = $_POST['townhouse'];

    

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
      $body .= '<strong>What are your current Real Estate Needs?</strong>';
    $body .= '</td>';
    $body .= '<td>';
      $body .= '<strong>'.$right_away.'</strong> <br>';
      $body .= '<strong>'.$just_looking.'</strong><br>';
      $body .= '<strong> '.$in_year.'</strong><br>';
    $body .= '</td>';
  $body .= '</tr>';

  $body .= '<tr>';
  $body .= '<td>';
    $body .= '<strong>Are You Pre-approved For Loan ?</strong>';
  $body .= '</td>';
  $body .= '<td>';
    $body .= '<strong>'.$rad.'</strong>';
  $body .= '</td>';
$body .= '</tr>';

$body .= '<tr>';
$body .= '<td>';
  $body .= '<strong>What Type Of Unit You Are Interested In ?</strong>';
$body .= '</td>';
$body .= '<td>';
  $body .= '<strong>'.$appartment.'</strong> <br>';
  $body .= '<strong>'.$penthouse.'</strong> <br>';
  $body .= '<strong>'.$townhouse.'</strong> <br>';
$body .= '</td>';
$body .= '</tr>';

      $body .= '</table>';
    $body .= '</div>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <palaisdelarichesse@gmail.com>' . "\r\n";


    $mail_send=true;
    if(mail($to, $subject, $body,$headers)) {
      $sucess = 'Email has been sent.';
    } else {
      $error = 'Some error occured.';
    }

 } ?>