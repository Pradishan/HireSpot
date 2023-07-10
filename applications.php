<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HireSpot | Admin</title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--main css-->
        <link rel="stylesheet" href="maincss.css"/>
        <link rel="stylesheet" href="application.css"/>

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
            .active-quicklink:hover{
                color: blue !important;
            }
            .bg-darkgray{
                background-color: #D9D9D9 !important;
            }
        </style>
        <nav class="navbar navbar-expand-lg bg-white fixed-top" >
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand " href="#"><img src="img/logo.png" width="137px" height="43px" alt="HireSpot"/></a>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <!--search-->
                            <form class="d-flex" role="search">
                                <input class="form-control me-2 border-0" list="datalistOptions" id="exampleDataList" type="search" placeholder="Search" aria-label="Search" style="border-radius: 50px;background-color: #F4F4F4" size="50px">
                                <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i class="fa fa-magnifying-glass " ></i></button>
                                <datalist id="datalistOptions">
                                    <option value="Software Engeneer">
                                    <option value="Data Scientist">
                                    <option value="QA Engeneer">
                                    <option value="HR">
                                    <option value="Developer">
                                </datalist>
                            </form>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-none d-lg-block" href="#">JOB Search</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex ">
                    <!--notification-->
                    <div class="dropdown ">
                        <a class="navbar-brand" href="#" id="notify"
                           style="width: 38px; height: 38px; object-fit: cover" type="button" data-bs-toggle="dropdown"
                           aria-expanded="false" data-bs-auto-close="outside"><i class="fa-solid fa-bell"data-bs-toggle="tooltip" data-bs-title=" See your Notification" data-bs-placement="bottom" data-bs-title="Tooltip on bottom"></i></a>
                        <!-- notification dropdown -->
                        <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notify"
                            style="width: 26em; max-height: 600px;overflow-y: auto;">
                            <!-- header -->
                            <li class="p-1">
                                <div class="d-flex justify-content-between">
                                    <h2>Notification</h2>
                                    <!-- icon -->
                                    <i class="fa-solid fa-ellipsis fs-4 bg-gray rounded-circle p-3" type="button" data-bs-toggle="dropdown"
                                       aria-expanded="false" data-bs-auto-close="outside"></i>
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                                            <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
                                                 style="width: 58px; height: 58px; object-fit: cover">
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
                        <a class="navbar-brand " href="#" type="button" > <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 "
                                                                               style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom" data-bs-title="Tooltip on bottom" /></a>
                    </dvi>                                                                       
                    <ul class="dropdown-menu border-0 shadow">
                        <!--avatar-->
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 "style="width: 48px; height: 48px; object-fit: cover" />
                                    <div class="d-flex flex-column mt-3 p-0">
                                        <span class="fw-bold fs-6">Name</span>
                                        <p class="text-muted fs-7">see your profile</p>
                                    </div>
                                </div>
                            </a></li>
                        <!--settings-->
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center me-2">
                                    <i class="fas fa-cog justify-content-center fs-5"></i>
                                    <p class="m-0 ms-2">Settings</p>
                                </div>
                            </a></li>
                        <hr>
                        <!--logout-->
                        <li><a class="dropdown-item" href="#">
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

   


        <!--side nav bar-->
     <div class ="fixed-top" data-new-gr-c-s-check-loaded="14.1113.0" data-gr-ext-installed="">   
         <!--svg images-->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"></path>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
  </symbol>
</svg>

<main class="d-flex flex-nowrap" style ="padding-right: 0px;">
  <h1 class="visually-hidden">Sidebars examples</h1>
<!--large nav bar-->
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-white d-none d-lg-block vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
         <img src="img/logo only.png" height="43px" alt="HireSpot"/></use></svg>
      <span class="fs-4"></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
<!--small nav bar-->
  <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
    <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <img src="img/logo only.png" height="43px" alt="HireSpot"/>
        </use></svg>
      <span class="visually-hidden">Icon-only</span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
          <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
          <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
          <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
          <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>
        </a>
      </li>
    </ul>
    <div class="dropdown border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>

</main> 
<!-- <section class="section"> -->
    <div class="container" style="padding-top: 90px;" style="padding-right  : 0px;" !important>
        <div class="justify-content-center row">
            <div class="col-lg-12">
                <div class="candidate-list-widgets mb-4">
                    <form action="#" class="">
                        <div class="g-2 row">
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-briefcase-alt"></i><input id="exampleFormControlInput1" placeholder="Job, Company name... " type="search" class="form-control filler-job-input-box form-control" />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-location-point"></i>
                                    <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="AF">Sri Lanka</option>
                                        <option value="AX">Australia</option>
                                        <option value="AL">USA</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-clipboard-notes"></i>
                                    <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                        <option value="4">IT &amp; Software</option>
                                        <option value="1">Accounting</option>
                                        <option value="3">Marketing</option>
                                        <option value="5">Banking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div>
                                    <a class="btn btn-primary" href="#"><i class="uil uil-filter"></i> Filter</a><a class="btn btn-success ms-2" href="#"><i class="uil uil-cog"></i> Advance</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="align-items-center row">
                    <div class="col-lg-8">
                        <div class="mb-3 mb-lg-0"><h6 class="fs-16 mb-0">Showing 1 – 8 of 11 results</h6></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="candidate-list-widgets">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="selection-widget">
                                        <select class="form-select" data-trigger="true" name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                            <option value="df">Default</option>
                                            <option value="ne">Newest</option>
                                            <option value="od">Oldest</option>
                                            <option value="rd">Random</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="selection-widget mt-2 mt-lg-0">
                                        <select class="form-select" data-trigger="true" name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                            <option value="df">All</option>
                                            <option value="ne">8 per Page</option>
                                            <option value="ne">12 per Page</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="candidate-list">
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">Software Engineer</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 21 May 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 34 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger  fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box bookmark-post card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">Data Scientist</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 1 June 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 43 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">QA Engineer</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 30 May 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 40 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box bookmark-post card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">Front end Developer</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 4 May 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 55 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">Back end Developer</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 18 June 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 58 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">Business Analyst</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 7 June 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 41 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">UI/UX Designer</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 14 May 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 48 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0" style="padding-bottom: 10px;">
                                            <a class="primary-link"  href="#">HR</a>
                                        </h5>
                                        <p class="text-muted mb-2">Posted on 16 June 2023</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"> 65 Applications</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-3">
                                        <span class="btn btn-primary fs-14 mt-1">View Detail</span><span class="btn btn-primary fs-14 mt-1">Download Application</span><span class="btn btn-success fs-14 mt-1">Accept</span><span class="btn btn-danger fs-14 mt-1">Reject</span>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </div>
<!-- </section> -->



</body>
 

    <!--main content-->
 <!--bootstrap-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <!--main js-->
            <script src="mainjs.js"></script>
            <script>
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
            </script>
    </body>
            </html>
