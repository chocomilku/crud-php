<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redirect to the main display page (index.php in our case)
// modified code to use JS to fix error in production (something related to headers)
echo "<script>window.location.replace('index.php?del=$id')</script>";
