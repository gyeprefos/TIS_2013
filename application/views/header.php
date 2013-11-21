
<?php

function currentPageClass($filename,$sideNav)
{
  if($sideNav){
    
    $after_underscore = explode("_",basename($_SERVER["REQUEST_URI"]))[1];
    $subsection_without_params = explode("?",$after_underscore)[0];
    if ($subsection_without_params == explode("_",$filename)[1]) { echo "active"; }//sidenav branch
  }
  else{
    if (explode("_",$filename)[0] == explode("_",basename($_SERVER["REQUEST_URI"]))[0]) { echo "active"; } //topnav branch
  }
} 



?>

<!DOCTYPE html>
<html>
<head>
  <title>WebIDE</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datepicker.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/panels.css">
  <meta charset="utf-8">

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
</head>
<body>
  
<!-- BLACKBAR-->
  <nav class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
      <a class="brand text" href="index.php">WebIDE</a>
      <ul class="nav pull-right">
          
            <!--<li class="divider-vertical"></li>-->
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon"></i> Neprihlaseny pouzivatel <b class="caret"></b></a> 
              <ul class="dropdown-menu">  
                <li><a href="#loginModal" role="button" data-toggle="modal">Prihlasenie</a></li>  
                <li><a href="#regModal" role="button" data-toggle="modal">Registracia</a></li>
                <li><a href="#">Zabudnute heslo...</a></li>
              </ul>  
            </li>
        </ul>
        </div>
      </div>
    </nav>
<div class="container-fluid">
  



    <!--NAV TABS-->
    <ul class="nav nav-tabs">
        <li class="<?php currentPageClass("home",false);?>"><a href="home"><i class="icon icon-home"></i></a></li>
        <li class="<?php currentPageClass("lectures",false);?>"><a href="lectures">Prednasky</a></li>
        <!-- <li class="<?php currentPageClass("zadania.php",false);?>"><a href="zadania.php">Zadania</a></li> -->
        <li class="<?php currentPageClass("editor",false);?>"><a href="editor">Editor kodu/upload</a></li>
        <li class="<?php currentPageClass("testing",false);?>"><a href="testing">Unit testing</a></li>
        <li class="<?php currentPageClass("hodnotenie",false);?>"><a href="hodnotenie">Hodnotenie</a></li>
      
    </ul>
    <ul class="breadcrumb">
  <li><a href="#">Programovanie 3</a> <span class="divider">/</span></li>
  <li class="active"><a href="#">Tyzden 5</a><span class="divider">/</span></li>
  
</ul>
</div>
  <div class="container-fluid">

