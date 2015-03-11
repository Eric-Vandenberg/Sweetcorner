<?php 

//This is the new datastructure that mirrors this javascript object in php
$pages = [
  'Home'=>['pageUrl'=>'home.php', 'default'=>TRUE],
  'About'=> ['pageUrl'=>'about.php'],
  'Services'=>['pageUrl'=>'services.php'],
  'Contact'=>['pageUrl'=>'contact.php']
];
if(!isset($_GET['page'])) {
  $_GET['page'] = 'home.php';
}




?><!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="keywords" content="sweetcorner, sweet, corner, home, index" />
￼         <meta name="description" content="This is the home of the Sweet Corner." />

          <title>Sweet Corner | Home</title>

          <link rel="stylesheet" href="css/normalize.css">
          <link href='http://fonts.googleapis.com/css?family=Nunito|Open+Sans:400,800,700,700italic,400italic' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="css/main.css">
          <link rel="stylesheet" href="css/responsive.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link href='http://fonts.googleapis.com/css?family=Dancing+Script'
￼         rel='stylesheet' type='text/css' />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      </head>
      <body>
        <div class="container">
          <?php 
            include('includes/header.php');
          ?>
          <div class="wrapper" id="body">
          <?php 
          if(file_exists($_GET['page'])) 
          {
            include($_GET['page']);
          } 
          else 
          {
            include('404.php');
          }
          ?>
          </div>
          <?php
            include('includes/footer.php');
          ?>
        </div>
        <script type="text/javascript" src="js/myscript.js"></script>
      </body>    
  </html>