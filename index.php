<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HireSpot</title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
       <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <<link rel="stylesheet" href="maincss.css"/><!--main cs-->
        
    </head>
    <body>
        <style>
            body {
                background-color: #F1F0F0;
            }
        </style>
        <nav class="navbar navbar-expand-lg bg-body-tertiary " >
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 50px" size="50px">
                                <button class="btn btn-outline-primary" type="submit" style="border-radius: 50px;"><i class="fa fa-magnifying-glass " ></i></button>
                              
                            </form>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">JOB Search</a>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="#"><i class="fa-solid fa-bell"></i></a>
                <a class="navbar-brand" href="#"><i class="fa-solid fa-user"></i></a>
            </div>
        </nav>
        <div class="container">
                    <?php
        // put your code here
        echo "<h1>hello pradi<h1>";
        ?>
        <i class="fa fa-magnifying-glass"></i>
        </div>
        <!--main js-->
        <<script src="mainjs.js"></script>
        <!--bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
