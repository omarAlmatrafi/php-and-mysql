<?
$connection = [
'host' => 'localhost',
'user' => 'root',
'password' => 'usbW',
'database'=> 'control_panel'

];
$mysqli = mysqli_connect($connection['host'],
$connection['user'],
"",
$connection['database']);
if($mysqli->connect_error){
    die($mysqli->connect_error);
}