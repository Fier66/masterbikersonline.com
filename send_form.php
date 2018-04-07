<title>send_form.php</title>
<?php

$email =isset($_POST['email'])?$_POST['email']:'Not set';
$name =isset($_POST['name'])?$_POST['name']:'Not set';
$phone =isset($_POST['phone'])?$_POST['phone']:'Not set';
$Budget_0 =isset($_POST['Budget_0'])?$_POST['Budget_0']:'Not set';
$Budget_1 =isset($_POST['Budget_1'])?$_POST['Budget_1']:'Not set';
$Budget_2 =isset($_POST['Budget_2'])?$_POST['Budget_2']:'Not set';
$Budget_3 =isset($_POST['Budget_3'])?$_POST['Budget_3']:'Not set';
$Budget_4 =isset($_POST['Budget_4'])?$_POST['Budget_4']:'Not set';
$question =isset($_POST['question'])?$_POST['question']:'Not set';

$header = "From: $email\r\n"
. "Reply-To: $email\r\n";
$subject = "Master Bikers Bike Form";
$email_to = "lucifier66@gmail.com";
$message = "email: $email\r\n"."name: $name\r\n"."phone: $phone\r\n"."Budget_0: $Budget_0\r\n"."Budget_1: $Budget_1\r\n"."Budget_2: $Budget_2\r\n"."Budget_3: $Budget_3\r\n"."Budget_4: $Budget_4\r\n"."question: $question\r\n".

mail($email_to,$subject,$body,$header);

echo "Message sent/dihantar! <a href='Contact Menu.html'>Click here</a> to send another!"

?>