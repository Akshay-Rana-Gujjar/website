
<?php 
require_once("../inc/connect.php");

$name;
if (!isset($_POST['s_id'])) {
	// this function is used for redirecting to other page. no space b/w location and :
	header("Location: http://localhost/website/other-page/login.php");
	
}else{
	
	$id = $_POST['s_id'];
	 $s_name = mysql_query("select name from students where id = '".$id."'");

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
</head>
<body>
<p>
	Welcome <?php
	$name= mysql_fetch_array($s_name);
		echo $name['name'];
	
	  ?>
</p>


</body>
</html>
