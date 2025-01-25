<html>

<head>
	<title>Add Data</title>
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
		<div class="d-flex flex-row gap-2 align-items-center">
			<h1 class="py-2">Add New Student</h1>
			<div>
				<button type="button" onclick="location.href = 'index.php'" class="btn btn-primary">
					Go Back
				</button>
			</div>
		</div>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb text-secondary">
				<li class="breadcrumb-item">Polytechinic University of the Philippines</li>
				<li class="breadcrumb-item">Institute of Technology</li>
				<li class="breadcrumb-item">Diploma in Information Technology</li>
				<li class="breadcrumb-item active text-primary-emphasis" aria-current="page">1-4 <span
						class="badge text-bg-primary">2024-2025</span>
				</li>
			</ol>
		</nav>

		<hr>

		<form action="addAction.php" method="post" name="add"
			class="container d-flex flex-column align-items-center gap-3">

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="studentId" class="form-label fs-5">Student ID</label>
				<input type="text" name="student_id" id="studentId" class="form-control" required aria-required="true">
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="lastName" class="form-label fs-5">Last Name</label>
				<input type="text" name="last_name" id="lastName" class="form-control" required aria-required="true">
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="firstName" class="form-label fs-5">First Name</label>
				<input type="text" name="first_name" id="firstName" class="form-control" required aria-required="true">
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="age" class="form-label fs-5">Age</label>
				<input type="number" name="age" id="age" class="form-control" required aria-required="true">
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="sex" class="form-check-label fs-5">Sex</label>
				<div class="form-check">
					<input type="radio" name="sex" id="sexM" value="MALE" class="form-check-input" required
						aria-required="true">
					<label for="sexM" class="form-check-label">Male</label>
				</div>
				<div class="form-check">
					<input type="radio" name="sex" id="sexF" value="FEMALE" class="form-check-input" required
						aria-required="true">
					<label for="sexF" class="form-check-label">Female</label>
				</div>
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="address" class="form-label fs-5">Address</label>
				<input type="text" name="address" id="address" class="form-control" required aria-required="true">
			</div>

			<div class="container d-flex flex-column bg-body-tertiary p-3 rounded border border-secondary-subtle"
				style="max-width:var(--bs-breakpoint-sm)">
				<label for="email" class="form-label fs-5">Email Address</label>
				<input type="email" name="email" id="email" class="form-control" required aria-required="true">
			</div>

			<div class="d-flex flex-row gap-4">
				<button type="button" class="btn btn-danger" onclick="location.href = 'index.php'">Cancel</button>
				<button type="submit" class="btn btn-success" name="submit">Submit</button>
			</div>
		</form>
	</main>
</body>

</html>