<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>My website</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<section class="header">
    <a href="home.php" class="logo">Comany</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="pages/department.php">department</a>
        <a href="manage.php">manage</a>
        <a href="login.php">login</a>
    </nav>

    <div class="dropdown">
        <span>Mouse over me</span>
        <div class="dropdown-content">
            <a href="http://localhost:8888/1/pages/aloginwel.php?manageid=1">Department 1</a>
            <a href="http://localhost:8888/1/pages/aloginwel.php?manageid=2">Department 1</a>
            <a href="http://localhost:8888/1/pages/aloginwel.php?manageid=3">Department 1</a>
            <a href="http://localhost:8888/1/pages/aloginwel.php?manageid=4">Department 1</a>
        </div>
    </div>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Login UI
<form action="../sever/authentication.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form> -->