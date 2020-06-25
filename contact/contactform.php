<?php

if (isset($_POST['submit'])) {
  $name =  $_POST['name'];
  $subject =  $_POST['subject'];
  $mailFrom =  $_POST['mail'];
  $message =  $_POST['message'];

  $mailTo = "hola@flipamaro.com"
  $headers = "From: ".$mailFrom
  $txt = "New e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $headers, $txt);
  header("Location: index.html?mailsend");
}
