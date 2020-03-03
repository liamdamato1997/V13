<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
   echo'<!doctype html>';
   echo'<html lang="en">';
   echo'<head>';
   echo'<title>Highway Car</title>';
   echo'<meta charset="utf-8">';
   echo'<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
   echo'<link rel="stylesheet" href="./css/style.css">';
   echo'<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
   echo'<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>';
   echo'<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';
   echo'</head>';
   echo'<body>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
   echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
   echo'<a class="navbar-brand" href="index.php">Highway Car</a>';
   echo'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">';
   echo'<span class="navbar-toggler-icon"></span>';
   echo'</button>';
   echo'<div class="collapse navbar-collapse" id="navbarNavDropdown">';
   echo'<ul class="navbar-nav ml-auto"';
    //Array of pages to link to
    $linkNames = array("Home", "About", "Game","Score" , "Login / Sign Up");
    $linkAddresses = array("index.php", "about.php", "game.php", "score.php" , "login.php",'sign.php');
    
    //Output navigation in array format
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo '<div class="selected">';
        }
    echo '<li class="nav-item active"><a class="nav-link" href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    echo'<span class="sr-only">(current)</span></li>';
    }
    echo'<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
    echo'<a class="dropdown-item" href="sign.php">Sign Up</a>';
    echo'<a class="dropdown-item" href="login.php">Login</a>';
    echo'</div>';
    echo'</li>';
    echo'</nav>';
}

//closing body tag and closing HTML tag
function outputFooter(){
     echo'<footer>';
     echo'<p>Liam &copy; 2018 Highway Car </p>';
     echo "Today is " . date("l");
     echo'</footer>';
     echo'</body>';
     echo'</html>';
}

