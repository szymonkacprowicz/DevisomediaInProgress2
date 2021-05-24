<?php


if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $mailFrom = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $subject = $_POST['subject'];


  $mailTo = "davisomedia@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from" .$name.".\n\n".$subject;




    mail($mailTo, $subject,  $txt, $headers);

    header("Location: mail.php?mailsend");


}
