<?php
if(isset($_POST['submit'])){
	echo "Form di Submit.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>

<form action="form.php" method="post">
	<input type="text" name="Enter Username"/>
	<input type="password" name="Enter Password"/>
	<br />
	<input type="submit" name="submit"/>

</body>
</html>