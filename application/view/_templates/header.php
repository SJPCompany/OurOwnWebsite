<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SJP Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <nav class="navbar">
        <ul class="sjp-bar">
            <li><a href="#" class="nav-item">PROJECTS</a></li>
            <li><a href="#" class="nav-item">ABOUT US</a></li>
            <li><a href="#" class="nav-item">MENU</a></li>
            <li>
                <a href="#" class="" id="Logo"></a>
            </li>
            <li><a href="#" class="nav-item">CONTACT</a></li>
            <li><a href="#" class="nav-item">LOGIN</a></li>
            <li>
            <?php
                if (isset($_SESSION['username'])) { ?>
                    <div style="color: white;" class="user"> Current User: <?php echo $_SESSION['username']; ?></div>
                <?php } ?>
            </li>
        </ul>
    </nav>
</div>