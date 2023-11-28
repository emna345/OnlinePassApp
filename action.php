<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "transtu";
$cin=$_POST[cin];
$nom=$_POST[nom];
$prenom=$_POST[prenom];
$tele=$_POST[telephone];
$dateN=$_POST[date];
$age=$_POST[age];
$email=$_POST[email];
$genre='f';


$conn = mysql_connect($host, $user, $password);
$a = mysql_select_db($db);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$sql1 = "SELECT cinC FROM client WHERE cinC='$cin'";
$result1 = mysql_query( $sql1);
if (mysql_num_rows($result1) <=0) {
$sql2="INSERT into client values ("$cin","$nom","$prenom","$dateN","$age","$email","$tele","$genre") ";
$result2=mysql_query($sql2);
if (mysql_num_rows($result2) <=0) {
     header("Location:pagesuiv.html");
       exit;
}
}





mysql_close($conn);
?>
