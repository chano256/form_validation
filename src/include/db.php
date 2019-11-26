<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "form_validation");

$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connection_error() .
        " (" . mysqli_connection_errno() . ")"
        );
}
?>