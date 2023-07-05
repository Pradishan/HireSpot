<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HireSpot | login</title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--main css-->
        <link rel="stylesheet" href="maincss.css"/>

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
        </style>
        <!--navication bar-->
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
                                <input class="form-control me-2 border-0" type="search" placeholder="Search" aria-label="Search" style="border-radius: 50px;background-color: #F4F4F4" size="50px">
                                <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i class="fa fa-magnifying-glass " ></i></button>
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
    <!--main content-->
    <!-- login  -->
    <div
      class="container d-flex flex-column flex-lg-row justify-content-evenly mt-5 pt-5"
    >
      <!-- heading -->
      <div class="text-center text-lg-center mt-lg-5 pt-lg-5">
        <img src="img/logo.png" width="688px" height="216px" alt="HireSpot"/>
        <p class="w-75 mx-auto ma-lg-0 fs-4">
         Unleash your potential, embrace the extraordinary! test
        </p>
      </div>
      <!-- form  -->
      <div style="max-width: 28rem; width: 100%">
        <div class="bg-white shadow rounded p-3 input-group-lg">
          <h1 class="text-center">Log in</h1>
          <div class="form-floating my-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"   style="background-color: #F4F4F4">
              <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password"   style="background-color: #F4F4F4">
              <label for="floatingPassword">Password</label>
          </div>
          <a href="./index.php">
            <button
              class="btn btn-primary my-3 w-100"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              login
            </button>
          </a>
          <a href="#" class="text-decoration-none text-center">
            <p>Forgotten password?</p>
          </a>
          <!-- create from modal -->
          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="">
                    <h1 class="modal-title fs-2" id="exampleModalLabel">
                      sing up
                    </h1>
                    <span class="text-muted fs-7"
                      >Join with us to discover somehting</span
                    >
                  </div>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <input
                        type="text"
                        name=""
                        id=""
                        class="form-control"
                        placeholder="first name"
                      />
                    </div>
                    <div class="col">
                      <input
                        type="text"
                        name=""
                        id=""
                        class="form-control"
                        placeholder="last name"
                      />
                    </div>
                  </div>
                  <input
                    type="email"
                    name=""
                    class="form-control my-3"
                    placeholder="Email"
                    id=""
                  />
                  <input
                    type="password"
                    name=""
                    class="form-control my-3"
                    placeholder="password"
                    id=""
                  />

                  <div class="row my-3">
                    <span class="text-muted fs-7">
                      Date of Birth
                      <i
                        type="button"
                        class="fa-solid fa-circle-question"
                        data-bs-container="body"
                        data-bs-toggle="popover"
                        data-bs-placement="right"
                        data-bs-content="Right popover"
                      ></i>
                    </span>
                    <div class="col">
                      <select name="" id="" class="form-select">
                      <?php
                        $startYear = 1950;
                        $endYear = 2022;

                        for ($i = 1; $i <= 72; $i++) {
                            $year = $startYear + $i - 1;
                            echo '<option value="' . $i . '">' . $year . '</option><br>';
                        }
                      ?>
                      </select>
                    </div>
                    <div class="col">
                      <select name="" id="" class="form-select">
                      <option value="1">January</option><br>
                        <option value="2">February</option><br>
                        <option value="3">March</option><br>
                        <option value="4">April</option><br>
                        <option value="5">May</option><br>
                        <option value="6">June</option><br>
                        <option value="7">July</option><br>
                        <option value="8">August</option><br>
                        <option value="9">September</option><br>
                        <option value="10">October</option><br>
                        <option value="11">Novermber</option><br>
                        <option value="12">December</option><br>
                      </select>
                    </div>
                    <div class="col">
                      <select name="" id="" class="form-select">
                      <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo '<option value="' . $i . '">' . $i. '</option>';
                        }
                      ?>
                      </select>
                    </div>
                  </div>
                  <div class="row my-3 jus">
                    <span class="text-muted fs-7">
                      Gender
                      <i
                        type="button"
                        class="fa-solid fa-circle-question"
                        data-bs-container="body"
                        data-bs-toggle="popover"
                        data-bs-placement="right"
                        data-bs-content="Right popover"
                      ></i>
                    </span>
                    <div class="col">
                      <div class="">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Male
                        </label>
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault1"
                          checked
                        />
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Female
                        </label>
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault2"
                        />
                      </div>
                    </div>
                    <div class="col">
                      <div class="">
                        <label class="form-check-label" for="flexRadioDefault3">
                          Coustom
                        </label>
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault3"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="d-none" id="selectGender">
                    <select name="" id="" class="form-select">
                      <option value="1">one</option>
                      <option value="2">two</option>
                      <option value="3">three</option>
                    </select>
                    <div class="my-3">
                      <span class="text-muted"
                        >Your pronoun is visible to everyone.</span
                      >
                      <input
                        type="text"
                        name=""
                        id=""
                        class="form-control"
                        placeholder="Gender (optional)"
                      />
                    </div>
                  </div>
                  <div class="">
                    <span class="text-muted fs-7"
                      >Lorem ipsum dolor, sit amet consectetur
                      adipisicing.</span
                    >
                  </div>
                  <div class="text-center">
                    <button
                      type="button"
                      class="btn btn-outline-primary my-3"
                      data-bs-dismiss="modal"
                    >
                      Sing up
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr />
          <div class="text-center my-4">
            <button
              class="btn btn-outline-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Create new Account
            </button>
          </div>
        </div>
        <div class="text-center my-5 pb-5">
          <p>
             Stay focused, stay motivated, and conquer your dream job.
          </p>
        </div>
      </div>
    </div>

    <!-- footer  -->
    <footer class="bg-white p-4 text-muted fixed-bottom">
      <div class="container">

        <!-- action -->
        <hr />
           <div class="d-flex flex-column align-items-center justify-content-cente mt-3">
                <!--quick link-->
                <p class="mb-0 fs-7 ">
                    <a href="#"class="text-decoration-none text-muted active-quicklink fs-7"> Privacy </a> |
                    <a href="#"class="text-decoration-none text-muted active-quicklink fs-7"> Terms </a> |
                    <a href="#"class="text-decoration-none text-muted active-quicklink fs-7"> Advertising </a> |
                    <a href="#"class="text-decoration-none text-muted active-quicklink fs-7"> Ad Chooses </a> |
                    <a href="#"class="text-decoration-none text-muted active-quicklink fs-7"> Cookies </a>
                </p>
                <!--copyrights-->
                <div class="d-flex">
                    <a class=" " href="#"><img src="img/logo.png" width="58px" height="16px" alt="HireSpot" class="mb-2"/></a>
                    <p class="fs-7">&copy; 2023</p>
                </div>
            </div>
      </div>
    </footer>



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
