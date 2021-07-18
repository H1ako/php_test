<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php
    $dateTime = date('c');
    echo "<link rel='stylesheet' href=\"../CSS/index.css?$dateTime\">";
    ?>
    <script src="https://kit.fontawesome.com/014012602d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $mysql = new mysqli("localhost", "root", "", "site_webdev_landing_page");
        $mysql->query("SET NAMES 'utf8'");
    ?>
    <!-- ===SECTION HEADER=== -->
    <?php include "Index_imports/Header.php"; ?>
    <!-- ===/SECTION HEADER=== -->

    <!-- ===SECTION ABOUT=== -->
    <?php include "Index_imports/About.php"; ?>
    <!-- ===/SECTION ABOUT=== -->

    <!-- ===SECTION SERVICES=== -->
    <?php include "Index_imports/Services.php"; ?>
    <!-- ===/SECTION SERVICES=== -->

    <!-- ===SECTION WORKS=== -->
    <?php include "Index_imports/Works.php"; ?>
    <!-- ===/SECTION WORKS=== -->

    <!-- ===SECTION PRICING PLAN=== -->
    <?php include "Index_imports/Price_plan.php"; ?>
    <!-- ===/SECTION PRICING PLAN=== -->

    <!-- ===SECTION TEAM=== -->
    <?php include "Index_imports/Team.php"; ?>
    <!-- ===/SECTION TEAM=== -->

    <!-- ===SECTION BLOG=== -->
    <?php include "Index_imports/Blog.php"; ?>
    <!-- ===/SECTION BLOG=== -->

    <!-- ===SECTION CONTACT=== -->
    <?php include "Index_imports/Contact.php"; ?>
    <!-- ===/SECTION CONTACT=== -->

    <!-- ===SECTION FOOTER=== -->
    <?php include "Index_imports/Footer.php"; ?>
    <!-- ===/SECTION FOOTER=== -->
    <?php
    echo "<script src='../JS/jquery.min.js?$dateTime'></script>";
    echo "<script src='../JS/for_buttons.js?$dateTime'></script>";
    echo "<script src='../JS/for_ajax.js?$dateTime'></script>";
    ?>


</body>
</html>
<?php
    $mysql->close();
?>