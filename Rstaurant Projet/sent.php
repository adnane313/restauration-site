<?php
if (isset($_POST['submit'])) {
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST['email'];
	$subject = $_POST["subject"];
}
echo $firstName . $lastName . $email . $subject;
echo "test";
?>