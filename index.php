<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
	<nav class="navbar bg-primary">
		<div class="container-xl">
			<a class="navbar-brand text-light" href="#">
				<i class="bi bi-tools"></i> Student Information System</a>
		</div>
	</nav>

	<main class="container-xl">
		<h1 class="py-4">Student Dashboard</h1>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Polytechinic University of the Philippines</a></li>
				<li class="breadcrumb-item"><a href="#">Institute of Technology</a></li>
				<li class="breadcrumb-item"><a href="#">Diploma in Information Technology</a></li>
				<li class="breadcrumb-item active" aria-current="page">1-4 <span
						class="badge text-bg-primary">2024-2025</span>
				</li>
			</ol>
		</nav>
		<div class="py-2">
			<button type="button" onclick="location.href = 'add.php'" class="btn btn-primary">
				<i class="bi bi-plus"></i> Add New Student
			</button>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Student ID</th>
					<th scope="col">Last Name</th>
					<th scope="col">First Name</th>
					<th scope="col">Age</th>
					<th scope="col">Sex</th>
					<th scope="col">Address</th>
					<th scope="col">Email Address</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Fetch the next row of a result set as an associative array
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<th scope='row'>" . $row['id'] . "</th>";
					echo "<td>" . $row['student_id'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['age'] . "</td>";
					echo "<td>" . $row['sex'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | 
				<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
				}
				?>
			</tbody>
		</table>
	</main>
</body>

</html>