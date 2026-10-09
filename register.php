<?php

require_once "db.php";

// ===============================
// Show Errors (Development Only)
// ===============================
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Database Check
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}


// ===============================
// Process Form
// ===============================
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $fullname = trim($_POST['fullname'] ?? '');
    $contact_info = trim($_POST['contact_info'] ?? '');
    $password = $_POST['password'] ?? '';



    // ===============================
    // Empty Validation
    // ===============================
    if (empty($fullname) || empty($contact_info) || empty($password)) {

        header("Location: index.php?status=empty");
        exit();

    }



    // ===============================
    // Name Validation
    // ===============================
    if (strlen($fullname) < 3) {

        header("Location: index.php?status=invalidname");
        exit();

    }




    // ===============================
    // Email OR Phone Validation
    // ===============================
    $isEmail = filter_var($contact_info, FILTER_VALIDATE_EMAIL);

    $isPhone = preg_match('/^(?:\+88)?01[3-9]\d{8}$/', $contact_info);


    if (!$isEmail && !$isPhone) {

        header("Location: index.php?status=invalid");
        exit();

    }





    // ===============================
    // Password Validation
    // ===============================
    if (strlen($password) < 6) {

        header("Location: index.php?status=weakpassword");
        exit();

    }




    // ===============================
    // Check Existing User
    // ===============================
    $checkUser = $conn->prepare(
        "SELECT id FROM users WHERE contact_info = ?"
    );


    if (!$checkUser) {

        die("Prepare Failed: " . $conn->error);

    }


    $checkUser->bind_param("s", $contact_info);

    $checkUser->execute();


    $result = $checkUser->get_result();


    if ($result->num_rows > 0) {


        $checkUser->close();

        header("Location: index.php?status=exists");
        exit();


    }


    $checkUser->close();





    // ===============================
    // Hash Password
    // ===============================
    $hashed_password = password_hash(
        $password,
        PASSWORD_DEFAULT
    );





    // ===============================
    // Insert User
    // ===============================
    $stmt = $conn->prepare(
        "INSERT INTO users (fullname, contact_info, password) VALUES (?, ?, ?)"
    );



    if (!$stmt) {

        die("Prepare Failed: " . $conn->error);

    }



    $stmt->bind_param(
        "sss",
        $fullname,
        $contact_info,
        $hashed_password
    );




    if ($stmt->execute()) {


        $stmt->close();
        $conn->close();


        header("Location: index.php?status=success");
        exit();



    } else {


        $stmt->close();
        $conn->close();


        header("Location: index.php?status=error");
        exit();



    }


}


$conn->close();

?>