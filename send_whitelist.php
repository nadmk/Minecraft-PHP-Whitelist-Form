<?php
$username = $_GET['username'];
$name = $_GET['name'];
$email = $_GET['email'];
 
$subject ="Minecraft Server Whitelist Request";
$message="Name: $name \nUsername: $username \nEmail $email ";
$mail_from="$email";
$header="from: $name <$mail_from>";
$to ='nikospower1999@gmail.com'; //Change E-Mail
 
if (!$username || !$name || !$email ){
echo '<script script type="text/javascript">';
echo 'alert("Error: Empy field(s)!");';
echo 'window.location.href ="http://mc.nicktehpro.xyz";'; //Change website 
echo '</script>';

}
else{
mail($to,$subject,$message,$header);
echo '<script script type="text/javascript">';
echo 'alert("Ok! We got your request. Please be patient!");';
echo 'window.location.href ="http://mc.nicktehpro.xyz";'; //Change website 
echo '</script>';

}
?>