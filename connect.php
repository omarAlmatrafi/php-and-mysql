<?php
//require_once 'C:\USBWebserver v8.6\root\connection\response.php';

////Define the required variables for the local database
$servername = "localhost";
$username = "root";
$password = "usbw"; // default password for use USBWebser
$db = "control_panel"; 

//server name, user name , password , database
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully..  ";
?>
<!DOCTYPE html>
<html>

<head>

<style>
#website_header{
	color:green;
	background-color: yellow ;
	font-size: 50px;
	font-weight:bold;
	padding: 20px ;
	font-style: italic;
	}
	.body{
    background-color: #E7E7E9;
	}
	
	.forward{
	font-weight:bold;
        font-size: 30px;
	.lift{
	font-weight:bold;
        font-size: 30px;
}
.stop{
	font-weight:bold;
        font-size: 30px;
        outline-style: auto;
        outline-color: orangered;
        text-align:center;
}

.right{
	font-weight:bold;
        font-size: 30px;
}
.backward{
	font-weight:bold;
        font-size: 30px;
		top: 60px;
		bottom: 50px;
		right: 50px;
		left: 500px;
}
	</style>

</head>

<body>
<div id="website_header" style="margin: 0 10px 0 0">
Control Panel</div>

<form action="" method="post">
	<input type="hidden" name="action" value="submit" />
	
<input name="Forward-submit" id="Forwards" type="submit" name="Forward-submit" value="Forward"
<button type="button" style="margin:100px 0 60px 680px">
</button>
<br>

<input name="Left-submit" id="Left" type="submit" name="Left-submit" value="Left"
<button type="button" style="margin:0 50px 0 550px"name="Left-submit"
>
</button>

<input name="Stop-submit" id="Stop" type="submit" name="Stop-submit" value="Stop"
<button type="button" style="background-color:red;padding-bottom:5px;font-size:16px;margin: 0 0 0 50px" name="Stop-submit"
>
</button>

<input name="Right-submit" id="Right" type="submit" name="Right-submit" value="Right"
<button type="button" style="margin:0 0 0 80px" name="Right-submit">
</button>

<br>
<input name="Backward-submit" id="Backword" type="submit" name="Backword-submit" value="Backword"
<button type="button" style="margin:100px 0 60px 680px" name="Backword-submit">
</button>

</form>
</body>
</html>



<?php

 	//Forward
 	if (isset($_POST['Forward-submit'])) { 
		$sql = "INSERT INTO `control_panel`.`buttons` (`id`, `Left`, `Right`, `Backward`, `Forward`, `Stop`) VALUES (NULL, '', '', '', 'F', '')";		
	
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully..";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}
	
		//Backward
		if (isset($_POST['Backward-submit'])) {
			$sql = "INSERT INTO `control_panel`.`buttons` (`id`, `Left`, `Right`, `Backward`, `Forward`, `Stop`) VALUES (NULL, '', '', 'B', '', '')";		

		
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully..";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		}
	
		//Right
		if (isset($_POST['Right-submit'])) {
			$sql = "INSERT INTO `control_panel`.`buttons` (`id`, `Left`, `Right`, `Backward`, `Forward`, `Stop`) VALUES (NULL, '', 'R', '', '', '')";		

		
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully..";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}	
		$conn->close();
		}
	
		//Left
		if (isset($_POST['Left-submit'])) {
			$sql = "INSERT INTO `control_panel`.`buttons` (`id`, `Left`, `Right`, `Backward`, `Forward`, `Stop`) VALUES (NULL, 'L', '', '', '', '')";		

		
		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully..";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
			}
	
		//STOP
		if (isset($_POST['Stop-submit'])) {
			$sql = "INSERT INTO `control_panel`.`buttons` (`id`, `Left`, `Right`, `Backward`, `Forward`, `Stop`) VALUES (NULL, '', '', '', '', 'S')";		

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully..";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
		

}