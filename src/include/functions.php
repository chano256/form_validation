<?php
    function redirect_to($new_location) {
        header("Location: " . $new_location);
        exit;
    }
    
    function mysql_prep($string) {
        global $db;
        
        $escaped_string = mysqli_real_escape_string($db, $string);
        return $escaped_string;
    }
    
    function attempt_login($username, $password) {
        $admin = find_admin_by_username($username);
        if($admin) {
            // Found Admin, now check password
            if (password_check($password, $admin["hashed_password"])) {
                // password matches
                return $admin;
            } else {
                // password doea not match
                return false;
            }
        } else {
            return false;
        }
    }
    
    function confirm_query($result_set) {
        if (!$result_set) {
            die("Database query failed.");
            $error = error_reporting(E_ALL);
            echo $error;
        }
    }
    
    function find_admin_by_username($username) {
        global $db;
        
        $safe_username = mysqli_real_escape_string($db, $username);
        
        $query  = "SELECT * ";
        $query .= "FROM users ";
        $query .= "WHERE username = '{$safe_username}' ";
        $query .= "LIMIT 1";
        $admin_set = mysqli_query($db, $query);
        confirm_query($admin_set);
        if($admin = mysqli_fetch_assoc($admin_set)) {
            return $admin;
        } else {
            return null;
        }
    }
    
    function form_errors($errors=array()) {
        $output = "";
        if (!empty($errors)) {
            $output .= "<div class=\"error\">";
            $output .= "Please fix the following errors:";
            $output .= "<ul>";
            foreach ($errors as $key => $error) {
                $output .= "<li>";
                $output .= htmlentities($error);
                $output .= "</li>";
            }
            $output .= "</ul>";
            $output .= "</div>";
        }
        return $output;
    }
    
    function password_check($password, $existing_hash) {
        // existing hash contains format and salt at start
        $hash = crypt($password, $existing_hash);
        if ($hash == $existing_hash) {
            return true;
        } else {
            return false;
        }
    }
    
    function logged_in() {
        return isset($_SESSION['admin_id']);
    }

    function confirm_logged_in() {
        if(!logged_in()) {
            redirect_to("login.php");
        }
    }
    
    function password_encrypt($password) {
        $hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        $hash = crypt($password, $format_and_salt);
        return $hash;
    }
    
    function generate_salt($length) {
        $unique_random_string = md5(uniqid(mt_rand(), true));
        $base64_string = base64_encode($unique_random_string);
        $modified_base64_string = str_replace('+', '.', $base64_string);
        $salt = substr($modified_base64_string, 0, $length);
        
        return $salt;
    }
?>