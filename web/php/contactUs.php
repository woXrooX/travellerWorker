<?php
  $fname = htmlspecialchars($_POST["firstname"]);
  $lname = htmlspecialchars($_POST["lastname"]);
  $from = htmlspecialchars($_POST["eMail"]);
  $tel = htmlspecialchars($_POST["tel"]);
  $message = htmlspecialchars($_POST["message"]);;

  // our mail
  $to = "contactUs@traveller-worker.com";
  $headers = "From:".$from;
  $messageFull = $fname." ".$lname."\nTel: ".$tel."\n\n".$message;

  ($fname=="")?exit("emptyFname"):1;
  ($lname=="")?exit("emptyLname"):1;


  if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
    exit("invalidMail");
  }

  ($tel=="")?exit("emptyTel"):1;
  ($message=="")?exit("emptyMessage"):1;


  if(mail($to, "Contact Us", $messageFull, $headers)){
    exit("ok");
  }else{
    exit("phpMailErr");
  }
?>
