<?php

////Define the required variables for the local database
$servername = "localhost";
$username = "root";
$password = "usbw"; // default password for use USBWebserver
$db = "control_panel";

//server name, user name , password , database
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully.. ";

 // write query for all pizzas
 $sql_ui_control = 'SELECT * FROM `buttons`';

 // get the result set (set of rows)
 $result = mysqli_query($conn, $sql_ui_control);

 // fetch the resulting rows as an array
 $direction_commands = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Print the last value found in the local database
    echo ("<br>");
    echo " Numer of Clicks : ";                                                                    
    echo $direction_commands[count($direction_commands)-1]['id'];
    echo ("<br>");
    echo " the response is : ";
    echo $direction_commands[count($direction_commands)-1]['Forward'];
    echo $direction_commands[count($direction_commands)-1]['Backward'];
    echo $direction_commands[count($direction_commands)-1]['Right'];
    echo $direction_commands[count($direction_commands)-1]['Left'];
    echo $direction_commands[count($direction_commands)-1]['Stop'];
    
 
 // free the $result from memory (Good Practise)
 mysqli_free_result($result);

 // close connection
 mysqli_close($conn);
 ?>