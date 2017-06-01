<?php
 require "systems/config_sys.php"
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Search enigen for sport assiocations">
    <meta name="author" content="Team 7">
    <meta name="copyright" content="copyright">
    <link rel="stylesheet" href="css/stylepads.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/animated.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../source%20file/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>sport-pad</title>
</head>
<body id="body">
<header id="header">
    <div>
        <div id="boxshadow">
            <div class="dropdown">
                <button class="dropbtn">Heino Voetbal</button>
                <div class="dropdown-content">
                    <a href="#">zakkelijk</a>
                    <a href="Profiel.php">Profiel</a>
                    <a class="info" href="#">info</a>
                </div>
            </div>
        </div>
        <a href="home.php"><img id="logo" src="sport-image/logo-sport-pad-icon.png"></a>
        <div id="footer">
            <div class="left">
                <p id="footertext">easy way B.V.<br><br>telefoonnummer: 06167854295<br><br>email: easyway@outlook.com</p>
            </div>
            <div class="center">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
            <div class="right">
                <form action="/action_page.php">
                    <textarea id="comment" name="comment">....</textarea>
                    <br>
                </form>
            </div>
        </div>
    </div>

