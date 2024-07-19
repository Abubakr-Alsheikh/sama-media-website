<?php 
    session_start();
    if(!isset($_SESSION["name"]))
        header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/dashboard.css">
    <link rel="stylesheet" href="../styles/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="img">
                <img src="../images/logo-w.png" alt="">
            </div>
            <ul>
                <?php $page = basename($_SERVER['PHP_SELF']); ?>
                <li><a href="home.php" class="<?php echo (($page) == 'home.php' ? 'active' : ''); ?>">Home</a></li>
                <li><a href="projects.php" class="<?php echo (($page) == 'projects.php' ? 'active' : ''); ?>">Projects</a></li>
                <li><a href="teams.php" class="<?php echo (($page) == 'teams.php' ? 'active' : ''); ?>">Teams</a></li>
                <li><a href="customers.php" class="<?php echo (($page) == 'customers.php' ? 'active' : ''); ?>">Customers</a></li>
                <li><a href="message.php" class="<?php echo (($page) == 'message.php' ? 'active' : ''); ?>">Messages</a></li>
            </ul>
        </div>