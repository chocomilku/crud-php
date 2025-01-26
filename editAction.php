<html>

<head>
	<title>Edit Data</title>
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
		<h1 class="py-2">Edit Data</h1>
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

		<?php
		// Include the database connection file
		require_once("dbConnection.php");

		if (isset($_POST['update'])) {
			// Escape special characters in string for use in SQL statement	
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$studentId = mysqli_real_escape_string($mysqli, $_POST['student_id']);
			$lastName = mysqli_real_escape_string($mysqli, $_POST['last_name']);
			$firstName = mysqli_real_escape_string($mysqli, $_POST['first_name']);
			$age = mysqli_real_escape_string($mysqli, $_POST['age']);
			$sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
			$address = mysqli_real_escape_string($mysqli, $_POST['address']);
			$email = mysqli_real_escape_string($mysqli, $_POST['email']);

			// Check for empty fields
			if (empty($id) || empty($studentId) || empty($lastName) || empty($firstName) || empty($age) || empty($sex) || empty($address) || empty($email)) {
				if (empty($id)) {
					echo "<div class='alert alert-danger' role='alert'> ID is not set. Something is broken. </div>";
				}

				if (empty($studentId)) {
					echo "<div class='alert alert-danger' role='alert'> Student ID field is empty</div>";
				}

				if (empty($lastName)) {
					echo "<div class='alert alert-danger' role='alert'> Last name field is empty</div>";
				}

				if (empty($firstName)) {
					echo "<div class='alert alert-danger' role='alert'> First name field is empty</div>";
				}

				if (empty($age)) {
					echo "<div class='alert alert-danger' role='alert'> Age field is empty</div>";
				}

				if (empty($sex)) {
					echo "<div class='alert alert-danger' role='alert'> Sex field is empty</div>";
				}

				if (empty($address)) {
					echo "<div class='alert alert-danger' role='alert'> Address field is empty</div>";
				}

				if (empty($email)) {
					echo "<div class='alert alert-danger' role='alert'> Email field is empty</div>";
				}

				// Show link to the previous page
				echo '<br><button type="button" onclick="history.back()" class="btn btn-primary">
					Go Back
				</button>';
			} else {
				// Update the database table
				$result = mysqli_query($mysqli, "UPDATE users SET `student_id` = '$studentId', `last_name` = '$lastName', `first_name` = '$firstName', `age` = '$age', `sex` = '$sex', `address` = '$address', `email` = '$email' WHERE `id` = $id");

				// Display success message
				echo "<div class='alert alert-success' role='alert'> Data Updated Successfully </div>";
				echo "<div class='d-flex flex-row gap-4'>
				<button type='button' class='btn btn-info' onclick='location.href=\"index.php\"'>View Result</button>
			</div>";
			}
		} else {
			echo "<div class='alert alert-danger' role='alert'> Unknown Error </div>";
			echo "<div class='d-flex flex-row gap-4'>
				<button type='button' class='btn btn-info' onclick='location.href=\"index.php\"'>Go to Home</button>
				<button type='submit' class='btn btn-info' onclick='history.back()'>Go Back</button>
			</div>";
		}
		?>
</body>

</html>