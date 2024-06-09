<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<script src="https://kit.fontawesome.com/f6b369aa9b.js" crossorigin="anonymous"></script>
<title>Brainiacs</title>
</head>

 <body>
 <style>
    .fa-regular {
        padding: 10%;
        color: #F2789F;
    }

    .fa-solid {
        padding: 10%;
        color: #F2789F;
    }
    </style>

   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(242, 120, 159, 1),rgba(98, 205, 255, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Engineering</li>

  </ol>
</nav>

<div class="java-container">
  <div class="card" >
      <img src="file4.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to Chemical Engineering</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : Stanford</p>

      </div>
      <a href="engineering/chemical/description_stanford.php" class="fa-regular fa-folder-open fa-xl"></a><br>
      <a href="engineering/chemical/engineering_chemical_stanford.php" class="fa-solid fa-tv fa-xl"></a>
  </div>
  <div class="card" >
      <img src="img21.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Mass transfer</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : lund </p>
      </div>
      <a href="engineering/chemical/description_lund.php" class="fa-regular fa-folder-open fa-xl"></a><br>
      <a href="engineering/chemical/engineering_chemical_lund.php" class="fa-solid fa-tv fa-xl"></a>
  </div>

  <div class="card" >
      <img src="img18.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >MIT 16.885J Aircraft Systems Engineering, Fall 2005</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : MIT OpenCourseWare</p>

      </div>
      <a href="engineering/aerospace/description_mit.php" class="fa-regular fa-folder-open fa-xl"></a><br>
      <a href="engineering/aerospace/engineering_aerospace_mit.php" class="fa-solid fa-tv fa-xl"></a>
  </div>
  <div class="card" >
      <img src="img19.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Aerospace-Introduction to Helicopter Aerodynamics & Dynamics</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : nptelhrd </p>
      </div>
      <a href="engineering/aerospace/description_nptelhrd.php" class="fa-regular fa-folder-open fa-xl"></a><br>
      <a href="engineering/aerospace/engineering_aerospace_nptelhrd.php" class="fa-solid fa-tv fa-xl"></a>
  </div>
  <div class="card" >
    <img src="img16.jpg" class="card-img-top" alt="..." >
    <div class="card-body">
      <p class="card-text" >Computer Science Crash Course</p>

      <p class="card-text details">Language : English</p>
      <p class="card-text details">Tutor : CrashCourse</p>

    </div>
    <a href="engineering/software/description_crashcourse.php" class="fa-regular fa-folder-open fa-xl"></a><br>
    <a href="engineering/software/engineering_software_crashcourse.php" class="fa-solid fa-tv fa-xl"></a>
  </div>

  <div class="card" >
    <img src="img17.jpg" class="card-img-top" alt="..." >
    <div class="card-body">
      <p class="card-text" >Computer Science and Software Engineering Theory with Briana</p>

      <p class="card-text details" >Language : English</p>
      <p class="card-text details" >Tutor : freeCodeCamp.org </p>
    </div>
    <a href="engineering/software/description_freecodecamp.php" class="fa-regular fa-folder-open fa-xl"></a><br>
    <a href="engineering/software/engineering_software_freecodecamp.php" class="fa-solid fa-tv fa-xl"></a>
  </div>

</div>
