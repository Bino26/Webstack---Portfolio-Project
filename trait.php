<?php
include('bd.php');

if(isset($_POST['send'])){
    $from_name =addslashes($_POST['name']) ;
    $from_email =addslashes($_POST['email']) ;
    $subject =addslashes( $_POST['subject']);
    $message =addslashes($_POST['message']) ;

    $ins = mysqli_query($conn,"INSERT INTO `uici`(`nom`,`email`,`subject`,`message`)
     VALUES ('$from_name','$from_email','$subject','$message')");
if($ins){
  $to = $from_email;
$subjecte = "Confirmation d'inscription";
$messages = "Merci de vous être inscrit sur notre site. Vos informations d'inscription sont les suivantes: nom d'utilisateur: $from_name, votre subjetion: $subject ";
$headers = "From: kasse.konan@inspcorporate.com" . "\r\n";
mail($to,$subjecte,$messages,$headers);

 header('location:contact.html');
}

}
?>