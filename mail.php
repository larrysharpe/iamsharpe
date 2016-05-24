<?php

if ($_POST['mailSubmitted'] && $_POST['mailSubmitted'] === 'yup') {

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: System @ IAmSharpe <system@iamsharpe.com>' . "\r\n";

    $msg = '<p>'.$_POST['msg']. '</p><p>' . $_POST['name'] .' </p><p> '.$_POST['email'] . '</p>';
    mail('larry@iamsharpe.com','Message from Contact Form',$msg, $headers); 

    $msg = '<div>
      <h1>Thank You For Contacting Larry Sharpe.</h1>
    </div>' . $msg;

    mail($_POST['email'],'I Am Sharpe | Thank You For Contacting Larry Sharpe.',$msg, $headers); 


    header('location: mail.php?success=true');

} else if ($_GET['success'] ) {

    echo '
<META http-equiv="refresh" content="5;URL=index.html">
<h1>Thanks!!!!</h1>
<p>You will be redirected back to the home page.</p>
<p><a href="index.html"> TAKE ME BACK NOW!</a></p>';

} else {
    header("location: ./");
}
?>