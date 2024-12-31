<?php 
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatsHome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>CatsHome.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#home">Home</a></li>
                    <li><a href="<?php echo url_dasar()?>#about">About Catshome</a></li>
                    <li><a href="<?php echo url_dasar()?>#cats">Our Cats</a></li>
                    <li><a href="<?php echo url_dasar()?>#contact">Contact</a></li>
                    <li><a href="admin/login.php" class="tbl-admin">Login Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">