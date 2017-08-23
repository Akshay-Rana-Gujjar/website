<!DOCTYPE html>
<html>
<head>
	<title>Registeration</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css?<?php echo time();  ?>"/>
<style type="text/css">
	body,html{
		height: 100%;

	}
	body{
		padding: 0;
		margin:0;
	}
.body{
	height: 100%;
	background: url('../img/bg2.jpg');
	
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    filter: blur(1px);
}
.container{
	background: #2e332f;
	position: absolute;
	top: 10%;
	left: 15%;
	padding: 10px;
	border-radius: 10px;
	text-align: center;
	box-shadow: 5px 20px 22px rgba(0,0,0,0.22),-5px 15px 15px rgba(0,0,0,0.25);
	width: 50%;
	height:60%;
}
h2{
	color: white;
}
input{
padding: 10px;
padding-left: 40px;
margin-top: 20px;
border-radius: 5px;
border: 1px solid grey;
background: none;
font-family: sans-serif, FontAwesome;
color: #fff;
width:40%;

}
#submit,#submit:focus{
	padding: 10px 50px;
	color: white;
	background: #2d5c43;
	border: none;
	outline: none;
	box-shadow: 0 7px 15px rgba(0,0,0,0.22),0 5px 5px rgba(0,0,0,0.25);
	cursor: pointer;
	width:20%;

}
#submit:hover{
background: #397756;
}
input[type="text"]:focus,input[type="password"]:focus{
background: white;
font-weight: 700;
outline: none;
color: #2d5c43;
}

.id{
	color: #397756;
	position: absolute;
	top: 107px;
	left:200px;
	//bottom: 10px
}
#toast{
	min-width: 250px;
	margin-left: -125px;
	position: fixed;
	top: 30px;
	left: 48%;
background: #00e68a;
color: white;
padding:10px 20px;
border-radius: 5px;
text-align: center;
display: none;
z-index: 2;
box-shadow: 5px 10px 22px rgba(0,0,0,0.7),-5px 10px 10px rgba(0,0,0,0.8);
}
</style>
<body>
<div class="body" >
</div>
<div class="container" >
	<h2>Add Student Details</h2>
	 <form method="post" >
	 <i class="fa fa-id-card-o id" ></i>
	 
	 	<input type="text" name="id" placeholder="Id" required><br>
	 	<i class="fa fa-user id" style="top: 163px;"></i>
	 	<input type="text" name="name" placeholder="Name" required ><br>
	 	<i class="fa fa-lock id" style="top: 220px;"></i>

	 	<input type="password" name="password" required placeholder="Password" autocomplete="new-password" required><br>
	 	<i class="fa fa-envelope id" style="top: 277px;"></i>

	 	<input type="text" name="email" placeholder="Email" required><br>
	 	<input type="submit" name="submit" id="submit" > 
	 </form>

</div>
<div id="toast">
	<p>
		Record Entered Successfully!!
	</p>
</div>


<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<!-- if jquery use in same php page it is must to write php code after adding tag of jquery -->
	<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$s_password = $_POST['password'];
$email = $_POST['email'];
$sql_id = mysql_real_escape_string($id);
$sql_name = mysql_real_escape_string($name);
$sql_password = mysql_real_escape_string($s_password);
$sql_email = mysql_real_escape_string($email);



if (isset($_POST['submit'])){

if (!empty($id) && !empty($name) && !empty($s_password) && !empty($email)){

require_once("../inc/connect.php");

$result = mysql_query("INSERT INTO students(id,name,password,email) VALUES ('$sql_id','$sql_name','$sql_password','$sql_email');");

if($result){

	echo '<script type="text/javascript">
	$(document).ready(function(e){
	  $("#toast").fadeIn("slow");
	
    setInterval(fademeout,3000);


function fademeout(){
    $("#toast").fadeOut("slow");
}
});
	</script>';
	

}else{
echo '
<script>
$(document).ready(function(e){
	$("#toast").css({"background":"#ff6666","color":"white"});
	$("#toast p").text("Error!! Please try again.")
	  $("#toast").fadeIn("slow");
	
    setInterval(fademeout,3000);


function fademeout(){
    $("#toast").fadeOut("slow");
}

;
});



</script>';


}	
}

}

 ?>

</body>
</html>