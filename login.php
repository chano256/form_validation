<?php require_once("src/include/session.php"); ?>
<?php require_once("src/include/db.php"); ?>
<?php require_once("src/include/functions.php"); ?>
<?php require_once("src/include/validation.php"); ?>

<?php 
    $username = "";
    if (isset($_POST['submit'])) {
        $required_fields = array("username", "password");
        validate_presences($required_fields);
        
        if(empty($errors)) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $found_admin = attempt_login($username, $password);
            
            if ($found_admin) {
                $_SESSION["admin_id"] = $found_admin["id"];
                $_SESSION["username"] = $found_admin["username"];
                redirect_to("index.php");
            } else {
                $_SESSION["message"] = "Username/password not found.";
            }
        }
    } else {
        // This is probably a GET request
        
    }
?>
<?php include 'src/include/header.php'?>
    <title>Login</title>
</head>
<body>
	<div class="header">
	
	</div>
	<?php echo message(); ?>
	<?php echo form_errors($errors); ?>
	<div class="form_header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo htmlentities($username); ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="login_btn" name="submit">Login</button>
		</div>
		<p>
			Not yet a member?<a href="register.php" class="reg_link">Register</a>
		</p>
	</form>
<?php include 'src/include/footer.php'?>