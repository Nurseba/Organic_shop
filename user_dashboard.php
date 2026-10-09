<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$fullname = htmlspecialchars($_SESSION['fullname']);
$contact = htmlspecialchars($_SESSION['contact_info']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f5f5f5;
}

/* Header */

.header{
    background:#2E8B57;
    color:#fff;
    padding:18px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header h2{
    font-size:28px;
}

.logout-btn{
    background:#dc3545;
    color:#fff;
    padding:10px 18px;
    text-decoration:none;
    border-radius:6px;
    transition:.3s;
}

.logout-btn:hover{
    background:#b52b38;
}

/* Container */

.container{
    width:90%;
    max-width:1100px;
    margin:40px auto;
}

/* Welcome Card */

.card{
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.1);
}

.card h1{
    color:#2E8B57;
    margin-bottom:10px;
}

.card p{
    font-size:18px;
    margin:8px 0;
}

/* Menu */

.menu{
    margin-top:30px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.box{
    background:#fff;
    border-radius:10px;
    padding:30px;
    text-align:center;
    box-shadow:0 0 10px rgba(0,0,0,.1);
    transition:.3s;
}

.box:hover{
    transform:translateY(-5px);
}

.box h3{
    margin-bottom:15px;
    color:#2E8B57;
}

.box a{
    text-decoration:none;
    color:#333;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="header">

<h2>🌿 Organic Bazar</h2>

<a href="logout.php" class="logout-btn">Logout</a>

</div>

<div class="container">

<div class="card">

<h1>Welcome, <?php echo $fullname; ?> 👋</h1>

<p><strong>Email / Phone:</strong> <?php echo $contact; ?></p>

<p>You have successfully logged in.</p>

</div>

<div class="menu">

<div class="box">
<h3>🛒 My Cart</h3>
<a href="cart.php">Open Cart</a>
</div>

<div class="box">
<h3>📦 My Orders</h3>
<a href="#">View Orders</a>
</div>

<div class="box">
<h3>👤 My Profile</h3>
<a href="#">View Profile</a>
</div>

<div class="box">
<h3>🛍 Shop Now</h3>
<a href="index.php">Go Shopping</a>
</div>

</div>

</div>

</body>
</html>