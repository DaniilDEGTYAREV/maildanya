<?
	$to = $_POST['email'];
  	$subject = "Robot - Робот";
  	$message = "Message, сообщение!";
  	$headers = "From: MyRusakov.ru";
  	mail ($to, $subject, $message, $headers);
  	header("Location: http://mail/index.php");
?>