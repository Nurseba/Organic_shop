<?php
session_start();

require_once "db.php";

// শুধুমাত্র POST Request গ্রহণ করবে
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $contact_info = trim($_POST['contact_info']);
    $password = trim($_POST['password']);

    // Empty Validation
    if (empty($contact_info) || empty($password)) {
        header("Location: login.php?status=empty");
        exit();
    }

    // Database থেকে User খুঁজে বের করা
    $stmt = $conn->prepare("SELECT id, fullname, contact_info, password FROM users WHERE contact_info = ?");

    if (!$stmt) {
        die("Prepare Failed: " . $conn->error);
    }

    $stmt->bind_param("s", $contact_info);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        // Password Check
        if (password_verify($password, $user['password'])) {

            // Session তৈরি
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['contact_info'] = $user['contact_info'];

            // Dashboard এ পাঠানো
            header("Location: user_dashboard.php");
            exit();

        } else {

            // Password ভুল
            header("Location: login.php?status=wrongpassword");
            exit();

        }

    } else {

        // User পাওয়া যায়নি
        header("Location: login.php?status=nouser");
        exit();

    }

    $stmt->close();
}

$conn->close();
?>