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
    <!--main css-->
    <link rel="stylesheet" href="maincss.css" />

</head>

<body>
    <style>
        body {
            background-color: #F1F0F0;
            overflow-x: hidden;
        }

        .scrallbar:hover {
            overflow: auto !important;
        }

        .fs-0 {
            font-size: 4rem;
        }

        .fs-7 {
            font-size: 0.8rem;
        }

        .active-quicklink:hover {
            color: blue !important;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot" /></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <!--search-->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 border-0" list="datalistOptions" id="exampleDataList" type="search" placeholder="Search" aria-label="Search" style="border-radius: 50px;background-color: #F4F4F4" size="50px">
                            <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i class="fa fa-magnifying-glass "></i></button>
                            <datalist id="datalistOptions" class="bg-white text-muted">
                                <option value="Web Designer">
                                <option value="Software Engeneer">
                                <option value="Data Scientist">
                                <option value="QA Engeneer">
                                <option value="HR">
                                <option value="Developer">
                            </datalist>
                        </form>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-none d-lg-block" href="./Vacancies.php">JOB Search</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex ">
                <!--notification-->
                <div class="dropdown ">
                    <a class="navbar-brand" href="#" id="notify" style="width: 38px; height: 38px; object-fit: cover" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i class="fa-solid fa-bell" data-bs-toggle="tooltip" data-bs-title=" See your Notification" data-bs-placement="bottom" data-bs-title="Tooltip on bottom"></i></a>
                    <!-- notification dropdown -->
                    <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notify" style="width: 26em; max-height: 600px;overflow-y: auto;">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h2>Notification</h2>
                                <!-- icon -->
                                <i class="fa-solid fa-ellipsis fs-4 bg-gray rounded-circle p-3" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"></i>
                                <!-- icon dd -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>
                                    <li class="dropdown-item d-flex align-items-center" type="button">
                                        <i class="fa-solid fa-check me-3 text-muted"></i>
                                        <p class="m-0">mark all as read</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="d-flex" type="button">
                                <p class="rounded-pill bg-gray p-2">All</p>
                                <p class="ms-2 rounded-pill bg-primary text-white p-2">Unread</p>
                            </div>
                        </li>
                        <!-- news -->
                        <div class="d-flex justify-content-between mx-2">
                            <h5>News</h5>
                            <a href="#" class="text-decoration-none">see all</a>
                        </div>
                        <!-- n1 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n1 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n2 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n3 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n4 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n5 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>
                        <!-- n6 -->
                        <li class="my-1 p-2">
                            <a href="#" class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
                                <div class="d-flex justify-content-evenly align-items-center">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2" style="width: 58px; height: 58px; object-fit: cover">
                                    </div>
                                    <!-- message -->
                                    <div class="">
                                        <p class="fs-7 m-0">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, vitae?
                                        </p>
                                        <span class="fs-7 text-primary">about an hour ago</span>
                                    </div>
                                    <i class="fas fa-circle fs-7 text-primary px-1"></i>
                                </div>

                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--profile-->
            <div class="dropdown ">
                <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <a class="navbar-brand " href="" type="button"> <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom" data-bs-title="Tooltip on bottom" /></a>
                </dvi>
                <ul class="dropdown-menu border-0 shadow">
                    <!--avatar-->
                    <li><a class="dropdown-item" href="./userProfile.php">
                            <div class="d-flex align-items-center">
                                <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                <div class="d-flex flex-column mt-3 p-0">
                                    <span class="fw-bold fs-6">Name</span>
                                    <p class="text-muted fs-7">see your profile</p>
                                </div>
                            </div>
                        </a></li>
                    <!--settings-->
                    <!-- <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center me-2">
                                    <i class="fas fa-cog justify-content-center fs-5"></i>
                                    <p class="m-0 ms-2">Settings</p>
                                </div>
                            </a></li> -->
                    <hr>
                    <!--logout-->
                    <li><a class="dropdown-item" href="./Login.php">
                            <div class="d-flex align-items-center me-2">
                                <i class="fa fa-sign-out justify-content-center fs-5"></i>
                                <p class="m-0 ms-2">Log out</p>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!--main content-->
    <div class="container-fluid">
        <div class="row">
            <!--left side-->
            <div class="col-12 col-lg-3 ">
                <div class="d-none d-xxl-block h-100 fixed-top overflow-hidden scrallbar ms-4" style="max-width: 360px;width: 100%;z-index: 4;padding-top: 56px;">
                    <div class="bg-white rounded mx-4 px-4 mt-4 ">
                        <div class=" d-flex flex-column align-items-center justify-content-cente ">
                            <!--avatar-->
                            <dvi class="mt-4 p-3 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="navbar-brand " href="#" type="button"> <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 " style="width: 200px; height: 200px; object-fit: cover" data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom" data-bs-title="Tooltip on bottom" /></a>
                            </dvi>
                            <!--profile content-->

                            <!--name-->
                            <h3 class="text-center m-0">Name</h3>
                            <!--discription-->
                            <p class="text-muted text-center m-0">Tech enthusiast | Graphic Designer | Web Designer | Developer</p>
                            <!--conatact details-->
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fa fa-envelope fs-7 me-1 mb-3 "></i>
                                <p class="">name@gmail.com</p>
                            </div>
                        </div>
                        <!--preview profile-->
                        <a href="./userProfile.php"><input type="submit" value="Preview Profile" class="btn btn-outline-primary w-100 " /></a>

                        <hr>
                        <!--Education-->
                        <div class="d-flex flex-column ">
                            <h4>Education</h4>
                            <p class="fw-bold m-0">B.Sc. - computer science</p>
                            <p class="text-muted m-0">Uva Wellassa University, Sri Lanka, Graduated 2025</p>
                        </div>

                        <hr>
                        <!--skills-->
                        <div class="d-flex flex-column pb-5 ">
                            <h4>Skills</h4>
                            <!--skill 1-->
                            <p class="fw-bold m-0">Java</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                            <!--skill 2-->
                            <p class="fw-bold m-0">Html</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                            <!--skill 3-->
                            <p class="fw-bold m-0">JavaScript</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                            <!--skill 4-->
                            <p class="fw-bold m-0">css</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <!--skill 5-->
                            <p class="fw-bold m-0">c</p>
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--main time line-->
            <div class="col-12 col-lg-6 pb-5">
                <div class="d-flex justify-content-center flex-column w-100 mx-auto mt-3" style="padding-top: 56px;max-width: 680px;">
                    <?php
                    for ($i = 0; $i < 15; $i++) {
                    ?>
                        <!--post 1-->
                        <div class="bg-white shadow rounded mt-3 p-3" sy>
                            <!--company-->
                            <!-- autor -->
                            <div class="d-flex justify-content-between p-2">
                                <!-- avatar -->
                                <div class="d-flex">
                                    <img src="https://source.unsplash.com/random/<?php echo $i; ?>4" alt="avatar" srcset="" class="rounded-circle me-3" style="width: 38px; height: 38px; object-fit: cover" />
                                    <div>
                                        <p class="m-0 fw-bold">Sharoon</p>
                                        <span class="text-muted fs-7">June 14 at 1:02PM</span>
                                    </div>
                                </div>
                                <!-- edit -->
                                <i class="fas fa-ellipsis-h" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="post1meun"></i>
                                <!-- edit menu -->
                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1meun">
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="dropdown-item d-flex align-items-center justify-content-around fs-7">Edit Post</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <a href="#" class="dropdown-item d-flex align-items-center justify-content-around fs-7">Delete
                                            Post</a>
                                    </li>
                                </ul>
                            </div>

                            <div class=" p-2 ">
                                <!--content-->
                                <div class="pt-2">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, voluptates ea aliquam dignissimos
                                        minus, eius praesentium adipisci tempora voluptate veritatis qui est, officiis totam enim?</p>
                                </div>
                                <!--post image-->
                                <img src="https://source.unsplash.com/random/<?php echo $i; ?>7" alt="post" class="img-fluid" style="object-fit: cover">
                                <!--apply btn-->
                                <div class="d-flex justify-content-center pt-3">
                                    <input type="submit" value="Apply now" class="btn btn-outline-primary w-100" />
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!--right side-->
            <div class="col-12 col-lg-3">
                <div class="d-none d-xxl-block h-100 fixed-top  end-0 overflow-hidden scrallbar me-5" style="min-width: 360px;width: 100px;z-index: 4;padding-top: 56px;left: initial !important;">
                    <div class="p-3 mt-4">
                        <!--advertesement slider-->
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://source.unsplash.com/random/10" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://source.unsplash.com/random/8" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://source.unsplash.com/random/9" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <h4 class="ms-3">Applications</h4>
                    <!--Applications Status-->
                    <div class="">
                        <!--job-1-->
                        <div class="bg-white rounded d-flex align-items-center justify-content-between p-3 m-3">
                            <div class="d-flex">
                                <!--avatar of company-->
                                <img src="https://source.unsplash.com/random/11" alt="avatar" class="rounded me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                <!--job-->
                                <div class="">
                                    <p class="fw-bold mb-0">Software Engeneer</p>
                                    <p class="text-muted mb-0"> <span class="fw-bold">@</span>googler</p>
                                </div>
                            </div>
                            <!--status-->
                            <div class="alert alert-primary m-0 p-1 ms-1" role="alert">
                                Waiting
                            </div>
                        </div>
                        <!--job-2-->
                        <div class="bg-white rounded d-flex align-items-center justify-content-between p-3 m-3">
                            <div class="d-flex">
                                <!--avatar of company-->
                                <img src="https://source.unsplash.com/random/12" alt="avatar" class="rounded me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                <!--job-->
                                <div class="">
                                    <p class="fw-bold mb-0">Software Engeneer</p>
                                    <p class="text-muted mb-0"> <span class="fw-bold">@</span>microsoft</p>
                                </div>
                            </div>
                            <!--status-->
                            <div class="alert alert-danger m-0 p-1 ms-1" role="alert">
                                Rejected
                            </div>
                        </div>
                        <!--job-3-->
                        <div class="bg-white rounded d-flex align-items-center justify-content-between p-3 m-3">
                            <div class="d-flex">
                                <!--avatar of company-->
                                <img src="https://source.unsplash.com/random/13" alt="avatar" class="rounded me-2 " style="width: 48px; height: 48px; object-fit: cover" />
                                <!--job-->
                                <div class="">
                                    <p class="fw-bold mb-0">Software Engeneer</p>
                                    <p class="text-muted mb-0"> <span class="fw-bold">@</span>open AI</p>
                                </div>
                            </div>
                            <!--status-->
                            <div class="alert alert-success m-0 p-1 ms-1" role="alert">
                                Selected
                            </div>
                        </div>
                    </div>

                    <!--footer-->
                    <div class="d-flex flex-column align-items-center justify-content-cente ">
                        <!--quick link-->
                        <p class="mb-0 fs-7 ">
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                            <a href="#" class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                        </p>
                        <!--copyrights-->
                        <div class="d-flex">
                            <a class=" " href="#"><img src="img/logo.png" width="58px" height="16px" alt="HireSpot" class="mb-2" /></a>
                            <p class="fs-7">&copy; 2023</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--main js-->
    <script src="./mainjs.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
</body>

</html>