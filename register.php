<?php require_once("src/include/session.php"); ?>
<?php require_once("src/include/db.php"); ?>
<?php require_once("src/include/functions.php"); ?>
<?php require_once("src/include/validation.php"); ?>


<?php
if (isset($_POST['submit'])) {
	// Process the form

	// Validations
	$required_fields = array("username", "email", "password");
	validate_presences($required_fields);

	$fields_with_max_lengths = array("username" => 30);
	validate_max_lengths($fields_with_max_lengths);

	if(empty($errors)) {
		// Perform create

		$username = mysql_prep($_POST["username"]);
		$email = mysql_prep($_POST["email"]);
		$hashed_password = password_encrypt($_POST["password"]);

		$query  = "INSERT INTO users (";
		$query .= " username, email, hashed_password";
		$query .= ") VALUES (";
		$query .= " '{$username}', '{$email}', '{$hashed_password}'";
		$query .= ")";
		$result = mysqli_query($db, $query);

	if ($result) {
		// Success
		$_SESSION["message"] = "User created.";
		redirect_to("index.php");
	} else {
		// Failure
		$_SESSION["message"] = "User creation failed.";
	}
}
} else {
	// This is probably a GET request
}
?>

<?php include 'src/include/header.php'?>
    <title>Register</title>
</head>
<body>
	<?php echo message(); ?>
	<?php echo form_errors($errors); ?>
	
	<div class="form_header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" class="login_btn" name="submit">Register</button>
		</div>
		<p>
			Already a member?<a  class="reg_btn" href="login.php">Login</a>
		</p>
		
	</form>
<?php include 'src/include/footer.php'?>