<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
	<nav class="navbar bg-primary mb-4">
		<div class="container-xl">
			<a class="navbar-brand text-light" href="index.php">
				<i class="bi bi-tools"></i> Student Information System</a>
		</div>
	</nav>

	<main class="container-xl">
		<h1 class="py-2">Student Dashboard</h1>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb text-secondary">
				<li class="breadcrumb-item">Polytechnic University of the Philippines</li>
				<li class="breadcrumb-item">Institute of Technology</li>
				<li class="breadcrumb-item">Diploma in Information Technology</li>
				<li class="breadcrumb-item active text-primary-emphasis" aria-current="page">1-4 <span
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
					echo "<td><div class=\"\">
			<button type=\"button\" onclick='editRecord($row[id])' class=\"btn btn-primary\">
				<i class=\"bi bi-pencil-square\"></i>
			</button>
			<button type=\"button\" onclick=\"deleteRecord($row[id])\" class=\"btn btn-danger\">
				<i class=\"bi bi-trash3\"></i>
			</button>
		</div>";
					echo "</td></tr>";
				}
				?>
			</tbody>
		</table>
	</main>
	<script type="text/javascript">
		function deleteRecord(id) {
			if (confirm(`Are you sure you want to delete ID: ${id}?`)) {
				return location.href = `delete.php?id=${id}`
			}
		}

		function editRecord(id) {
			return location.href = `edit.php?id=${id}`
		}
	</script>
</body>

</html>