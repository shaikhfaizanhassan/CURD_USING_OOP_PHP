<?php 
    include("function.php");
    if(isset($_GET["editID"]))
    {
        $did = $_GET["editID"];
        $obj = new Database();
        $sql = $obj->SelectDataBYID($did);
        while($row = mysqli_fetch_array($sql))
        {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
	<div class="container">
		<h1>Edit Record</h1>
		<a href="read.php" class="btn btn-success">View Student </a>
		<br>
		<br>
		<form action="" method="post">
			<table class="table">
				<tr>
					<td>NAME</td>
					<td><input type="text" value="<?php echo $row[1] ?>" name="txtname" class="form-control"></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><input type="text" value="<?php echo $row[2] ?>" name="txtemail" class="form-control"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="text" value="<?php echo $row[3] ?>" name="txtpass" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn" class="btn btn-danger"></td>
				</tr>
				
				
			</table>
		</form>
	</div>
</body>
</html>
<?php 
	
	$insertData = new Database();
	if(isset($_POST['btn']))
	{
		$name = $_POST['txtname'];
		$email = $_POST['txtemail'];
		$pass = $_POST['txtpass'];

		$sqlI = $insertData->insert($name,$email,$pass);
		if($sqlI)
		{
			echo '<script>swal("Good job!", "Data Save!", "success");</script>';
		}
			
	}
 ?>		

<?php } }?>