
<!DOCTYPE html>
<html>
<head>
 	<meta charset="UTF-8">
 	<title></title>
  
 <style>

	body{ margin: 0px;
		padding: 20px;  
		text-align: center;
		}
	form {
		background: cornsilk;
		padding: 50px;
		border: 2px solid red;
		width: 500px;
		margin: 0 auto;
		}

	input {
		margin-top: 5px;
		margin-bottom: 10px;
	}

 </style>
  
<script>


</script>
</head>
<body>
<?php 
	//setting CONSTANTS for host, user, password
DEFINE('DB_HOST', 'localhost');  // localhost:8888
DEFINE('DB_USER', 'root');      
DEFINE('DB_PASS', 'root'); ;     // root

// $mantra = $_POST['mantra'];

//store result of connection (mysqli_$link) in a variable
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS)
            or die('Could not connect: ' . mysqli_connect_error() );

//store db name working with
DEFINE('DB_NAME', 'test' );

//selecting the db
mysqli_select_db($conn, DB_NAME) or die('Could not connect');

mysqli_query($conn,"INSERT INTO mantras(Num) VALUES ($mantra)");

$result = mysqli_query("SELECT COUNT(Num) FROM mantras");
?>

<form method="post" action= "process.php" >
	<p><strong>Amitabha Million Mantra Accumulation: </strong><br></p>
	<div style="margin-left: 20px;">
		<p>OM AMI DEWA HRI</p>
	 	<input type="text" name="mantra" size="10" maxlength="6">
	 	<input type="submit" value="Submit Your Mantra" name="B1"><br>
	 	<span id="mani">Amitabha Mantra Count: <?php echo $result; ?> </span>
	 	<p></p>
 	</div>
</form>




</body>
</html>
