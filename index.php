
<?php
	require_once('Models/Users.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>One Shoe Three</title>
</head>
<body>
<?php 
 	
 	$myUser = $USERS->getUser('John');
 	echo $myUser['Password'];
	 	
 ?>

 

</body>
</html>