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
		<h1>Record</h1>
			<table class="table table-hover">
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th>ACTION</th>
				</tr>
				<?php 
					include("function.php");
					$fetchData = new Database();
					$sql = $fetchData->SelectAll();
					while($row = mysqli_fetch_array($sql))
					{	
				?>
				<tr>
					<td><?php echo $row[0] ?></td>
					<td><?php echo $row[1] ?></td>
					<td><?php echo $row[2] ?></td>
					<td><?php echo $row[3] ?></td>
					<td>
						<a href="edit.php?editID=<?php echo $row[0] ?>" class="btn btn-primary btn-sm">Edit</a>
						<a href="Detail.php" class="btn btn-info btn-sm">Detail</a>
						<a href="Delete.php" class="btn btn-danger btn-sm">Delete</a>
						
					</td>
				</tr>
				
				<?php } ?>
			</table>

	</div>
</body>
</html>
