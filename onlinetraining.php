<?php
/*
Author name: <Your name>;
E-mail ID:   <Your E-mail ID>
Date:        <dd-mm-yyyy>
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
        <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
        <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
        <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
        <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
        <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
        <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a>
         
      </div>
     	<div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 9</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 10</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 11</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 12</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 13</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 14</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 15</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 16</span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->








<!-- WRITE MAIN CONTENT HERE -->


    <div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image: url('images/stock/Online Training.png');
 background-size: 100%;'">
  <div class="container">
    <h1 class="display-7"><font color="white"><center>ONLINE TRAINING</center></font></h1>
  
  </div>
</div>
<!--
  <div class="row">
    <div class="col-md-6">
      <div class="row">
      <a href="#"><div class="card" style="width: 39rem; box-shadow: 0px;">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
  <img class="card-img-top altaf" src="../DCentMASS/images/maktum/book.jpg" alt="Card image cap" height="150px;">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</font></p>
  </div>
</div>
</a>

    </div>
          <div class="row">
      <a href="#"><div class="card" style="width: 22rem; box-shadow: 0px;">
        Lorem Ipsum
  <img class="card-img-top" src="../DCentMASS/images/maktum/book.jpg" height="150px;">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </font></p>
  </div>
</div>
</a>
<a href="#"><div class="card" style="width: 15rem; box-shadow: 0px; margin: 10px;">
        Lorem Ipsum
  <img class="card-img-top" src="../DCentMASS/images/maktum/book.jpg" height="150px;">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text</font></p>
  </div>
</div>
</a>
</div>
  </div>






  <div class="row"> 
    
  </div>

    <div class="col-md-6">
      <div class="row">
      <a href="#"><div class="card" style="width: 18rem; box-shadow: 0px;">
        Lorem Ipsum
  <img class="card-img-top" src="../DCentMASS/images/maktum/book.jpg">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </font></p>
  </div>
</div>
</a>
<a href="#"><div class="card" style="width: 18rem; box-shadow: 0px; margin: 10px;">
        Lorem Ipsum
  <img class="card-img-top" src="../DCentMASS/images/maktum/book.jpg">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</font></p>
  </div>
</div>
</a>
</div>
<div class="row">
      <a href="#"><div class="card" style="width: 39rem; box-shadow: 0px;">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
  <img class="card-img-top" src="../DCentMASS/images/maktum/book.jpg" alt="Card image cap" height="150px;">
  <div class="card-body">
    <p class="card-text"><font size="2px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,but also the leap into electronic typesetting, remaining essentially unchanged. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</font></p>
  </div>
</div>
</a>
  </div>
    </div>
  </div>
-->



<div class="container-fluid">
<div class="row">
    <div class="col-md-6">
      <a href="#">
  <img src="../DCentMASS/images/maktum/back.jpg"/ style="width: 100%;">
  <h5>Lorem ipsum</h5>
  <p style="text-align: justify-all;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
  <p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
  </a>
   </div>
<div class="col-md-6">
<div class="row">
     <div class="col-md-6">
      <a href="#"> 
  <img src="../DCentMASS/images/maktum/book.jpg" style="width: 100%;">
  <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</a>
 </div>
 <div class="col-md-6">
  <a href="#">
    <img src="../DCentMASS/images/maktum/book.jpg"  style="width: 100%;">
    <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
 </a>
 </div>
</div><hr>
<div class="row">
     <div class="col-md-12">
      <a href="#"> 
  <img src="../DCentMASS/images/maktum/book.jpg" style="width: 100%;">
  <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</a>
 </div>

</div>
</div>
</div>
 </div>


<hr>


<div class="container-fluid">
<div class="row">
  <div class="col-md-6">
    <div class="row">
       <div class="col-md-6">
      <a href="#"> 
  <img src="../DCentMASS/images/maktum/book.jpg" style="width: 100%;">
  <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</a>
 </div>
 <div class="col-md-6">
  <a href="#">
    <img src="../DCentMASS/images/maktum/book.jpg"  style="width: 100%;">
    <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
 </a>
 </div>
</div><hr>
    <div class="row">
       <div class="col-md-6">
      <a href="#"> 
  <img src="../DCentMASS/images/maktum/book.jpg" style="width: 100%;">
  <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
</a>
 </div>
 <div class="col-md-6">
  <a href="#">
    <img src="../DCentMASS/images/maktum/book.jpg"  style="width: 100%;">
    <h5>Lorem ipsum</h5>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
 </a>
 </div>
</div>
</div>

    <div class="col-md-6">
      <a href="#">
  <img src="../DCentMASS/images/maktum/back.jpg"/ style="width: 100%;">
  <h5>Lorem ipsum</h5>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,but also the leap into electronic typesetting, remaining essentially unchanged. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </a>
   </div>


</div>
 </div>
<br>
<br>

<!-- NOTE: Please keep your code clean + readable and add comments -->









<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
