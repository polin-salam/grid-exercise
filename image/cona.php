<!---connection admin--->
<?php
		
$db = mysqli_connect("localhost","root","","admin");
if(!$db){
  die("ERROR".mysqli_connect_error());
}
?>