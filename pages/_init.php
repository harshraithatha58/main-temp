<?php

$server  = "localhost";
$user = "root";
$password = "";
$database = "hackathon";
global $conn;
$conn = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("error detected ... : ". mysqli_connect_error());
}
session_start() ;
// signu up page password hash
function PasswordMatchAndHash($password, $repassword){
    if ($password == $repassword) {
        global $checked_password;
        $checked_password = true;
        global $hash;
        $hash = password_hash($password ,PASSWORD_DEFAULT);
    }

    return $hash;
}
function emailAlreadyExists($email, $conn) {
    $email = $conn->real_escape_string($email); // Sanitize the input to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true; // Email exists
    } else {
        return false; // Email doesn't exist
    }
}
function verifyPassword($password , $email , $conn){
    
    
    $sql = "select password from `user` where email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        $password_varification = Password_verify( $password , $hashed_password );
        $_session_email = $_SESSION['session_email'];
    }
    else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if ($password_varification) {
        $_SESSION['logged_in'] = true;

    }

    return $_session_email;

}

