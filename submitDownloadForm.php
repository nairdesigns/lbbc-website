<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$formcontent="From: $firstname $lastname \nEmail: $email \nPhone: $contact";
$recipient1 = "rinnah.abante@lighthousebbc.org";
$subject = "LighthouseBBC Download Form";
$headers = "From: no-reply@lighthousebbc.org " . "\r\n" . "CC: rinnah.abante@gmail.com";

//$mailheader = "From: $email \r\n";
//$headers .= 'From: <$email>' . "\r\n";
//$headers .= 'Cc: rinnah.abante@lighthousebbc.org' . "\r\n";
//$cc1 = "rinnah.abante@lighthousebbc.org"; 

mail($recipient1, $subject, $formcontent, $headers) or die("Error!");  

$replyto = $email;
$replysubject = "Your LighthouseBBC Download Form";
$replymessage = "Thank you for getting in touch with us. God bless!";
$replyfrom = 'no-reply@lighthousebbc.org';
$replyheader = "From:". $replyfrom;
mail($replyto,$replysubject,$replymessage,$replyheader);
?>
	<script type="text/javascript">
	    alert("Thank you for reaching out to us! We'll get back to you the soonest.");
	    window.location = 'downloads.php';
  </script> 
<?php

die();
?> 


 