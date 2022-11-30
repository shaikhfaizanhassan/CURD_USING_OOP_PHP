<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script
	src="https://code.jquery.com/jquery-3.6.1.js"
	integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
	crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();
		} );

	</script>

</head>
<body>
	<div class="container">
		<h1>Record</h1>
			<table id="myTable" class="table table-hover" >
				<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>PASSWORD</th>
					<th>ACTION</th>
				</tr>
				</thead>
				<tbody>

			
			
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
				</tbody>
			</table>

	</div>
</body>
</html>
