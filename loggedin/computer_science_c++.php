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
        <ol class="breadcrumb"
            style="background:linear-gradient(to right,rgba(242, 120, 159, 1),rgba(98, 205, 255, 1))">
            <li class="breadcrumb-item"><a href="../loggedin.php" style="color:white;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="computer_science.php"
                    style="color:white;font-size:bold;">Computer Science</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color:white;">C++</li>

        </ol>
    </nav>

    <div class="java-container">

        <div class="card">
            <img src="c.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">C++ - Course</p>

                <p class="card-text details">Language : Hindi</p>
                <p class="card-text details">Tutor : CodeWithHarry</p>

            </div>
            <a href="computer_science/c++/description_formationvideo.php" class="fa-regular fa-folder-open fa-xl"></a><br>
            <a href="computer_science/c++/computer_science_c++_formationvideo.php" class="fa-solid fa-tv fa-xl"></a>
        </div>

        <div class="card">
            <img src="file1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Learn C++ Programming | Video Tutorial for Beginners</p>

                <p class="card-text details">Language : English</p>
                <p class="card-text details">Tutor : LearningLad </p>
            </div>
            <a href="computer_science/c++/description_learninglad.php" class="fa-regular fa-folder-open fa-xl"></a><br>
            <a href="computer_science/c++/computer_science_c++_learninglad.php" class="fa-solid fa-tv fa-xl"></a>
        </div>

        <div class="card">
            <img src="file2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">C++ Programming Tutorials</p>
                <p class="card-text details">Language : English</p>
                <p class="card-text details ">Tutor : thenewboston </p>
            </div>
            <a href="computer_science/c++/description_thenewboston.php" class="fa-regular fa-folder-open fa-xl"></a><br>
            <a href="computer_science/c++/computer_science_c++_thenewboston.php" class="fa-solid fa-tv fa-xl"></a>
        </div>

    </div>

    <?php
    require "../footer.php";
  ?>