<!DOCTYPE html>
<!--
   Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
   Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
   -->
<html>

<head>
   <meta charset="UTF-8">
   <!-- favicon -->
   <link rel="shortcut icon" href="../../img/logo only.png" type="image/x-icon">
   <title>HireSpot | My Profile</title>
   <!--bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <!--fontawesom-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--main css-->
   <link rel="stylesheet" href="../css/maincss.css" />
   <link rel="stylesheet" href="../css/UserProfile.css">
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

      .bg-darkgray {
         background-color: #D9D9D9 !important;
      }
   </style>
   <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <div class="container">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand " href="../index.php"><img src="../img/logo.png" width="137px" height="43px"
               alt="HireSpot" /></a>
         <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./About.php">About</a>
               </li>
               <li class="nav-item">
                  <!--search-->
                  <form class="d-flex" role="search">
                     <input class="form-control me-2 border-0" list="datalistOptions" id="exampleDataList" type="search"
                        placeholder="Search" aria-label="Search" style="border-radius: 50px;background-color: #F4F4F4"
                        size="50px">
                     <button class="btn btn-outline-primary " type="submit" style="border-radius: 50px;"><i
                           class="fa fa-magnifying-glass "></i></button>
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
               <a class="navbar-brand" href="#" id="notify" style="width: 38px; height: 38px; object-fit: cover"
                  type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><i
                     class="fa-solid fa-bell" data-bs-toggle="tooltip" data-bs-title=" See your Notification"
                     data-bs-placement="bottom" data-bs-title="Tooltip on bottom"></i></a>
               <!-- notification dropdown -->
               <ul class="dropdown-menu border-0 shadow p-3" aria-labelledby="notify"
                  style="width: 26em; max-height: 600px;overflow-y: auto;">
                  <!-- header -->
                  <li class="p-1">
                     <div class="d-flex justify-content-between">
                        <h2>Notification</h2>
                        <!-- icon -->
                        <i class="fa-solid fa-ellipsis fs-4 bg-gray rounded-circle p-3" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"></i>
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
                     <a href="#"
                        class="d-flex justify-content-evenly align-items-center text-decoration-none text-dark">
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
               <a class="navbar-brand " href="#" type="button"> <img src="https://source.unsplash.com/random/5"
                     alt="avatar" class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover"
                     data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom"
                     data-bs-title="Tooltip on bottom" /></a>
            </dvi>
            <ul class="dropdown-menu border-0 shadow">
               <!--avatar-->
               <li><a class="dropdown-item" href="#">
                     <div class="d-flex align-items-center">
                        <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 "
                           style="width: 48px; height: 48px; object-fit: cover" />
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
   <div class="container pt-5">
      <div class="main-body">
         <!-- Breadcrumb -->
         <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
               <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
         </nav>
         <!-- /Breadcrumb -->
         <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                           width="150">
                        <div class="mt-3">
                           <h4>Migara Thiyunuwan</h4>
                           <p class="text-secondary mb-1"><b>Software Engineer</b></p>
                           <p class="text-muted text-center m-0">Tech enthusiast | Graphic Designer | Web Designer |
                              Developer</p>
                           <p class="text-muted font-size-sm">Nittambuwa, Gampaha, Sri Lanka</p>
                           <!-- <button class="btn btn-primary">Follow</button>
         <button class="btn btn-outline-primary">Message</button> -->
                        </div>
                     </div>
                     <div class="pt-2">
                        <h6 class="mb-0" style="padding-bottom: 10px;">About Me</h6>
                        <p>Skilled software engineer with expertise in problem-solving, development, and
                           cross-functional collaboration. Committed to delivering innovative
                           solutions and staying at the forefront of the industry. Let's connect and create something
                           amazing together.</p>
                     </div>
                  </div>
               </div>
               <div class="card mt-3">
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <div class="">
                                 <h1 class="modal-title fs-2" id="exampleModalLabel">
                                    upload Resume
                                 </h1>
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="text-center">
                                 <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <label for="myfile">Select a file:</label>
                                    <input type="file" id="myFile" name="myFile"><br>
                                    <input type="submit" class="btn btn-outline-primary my-3" value="Upload" />
                                 </form>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="text-center my-4">
                     <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Upload Your Resume
                     </button>
                  </div>

               </div>
            </div>
            <div class="col-md-8">
               <div class="card mb-3">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-3">
                           <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           Migara Thiyunuwan
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-sm-3">
                           <h6 class="mb-0">Email</h6>
                        </div>

                        <div class="col-sm-9 text-secondary">
                           migarathiyunuwan@gmail.com
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-sm-3">
                           <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           033 22 124 23
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-sm-3">
                           <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           +94 77 141 6968
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-sm-3">
                           <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           No. 58/1, Waragoda, Aththanagalla
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-sm-12">
                           <a class="btn btn-info " href="./editUser.php">Edit</a>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row gutters-sm">
                  <div class="col-sm-6 mb-3">
                     <div class="card h-100">
                        <div class="card-body">
                           <h6 class="d-flex align-items-center mb-3"><i
                                 class="material-icons text-info mr-2">Skills</i>XYZ</h6>
                           <small>HTML</small>
                           <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small>JAVA</small>
                           <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                 aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small>C++</small>
                           <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                 aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small>JS</small>
                           <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                 aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <small>CSS</small>
                           <div class="progress mb-3" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                 aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                     <div class="card h-100">
                        <div class="card-body">
                           <h6 class="d-flex align-items-center mb-3"><i
                                 class="material-icons text-info mr-2">Education</i>XYZ</h6>
                           <div class="d-flex flex-column " style="padding-bottom: 10px;">
                              <p class="fw-bold m-0">(BSc) in Computer Science and Technology</p>
                              <p class="text-muted m-0">Uva Wellassa University, Sri Lanka, Graduated 2025</p>
                           </div>
                           <div class="d-flex flex-column " style="padding-bottom: 10px;">
                              <p class="fw-bold m-0">Dip.in Information Technology</p>
                              <p class="text-muted m-0">ESOFT Metro Campus, Sri Lanka, Graduated 2021</p>
                           </div>
                           <div class="d-flex flex-column " style="padding-bottom: 10px;">
                              <p class="fw-bold m-0">Dip.in English Language & Literature</p>
                              <p class="text-muted m-0">Aquinas College of Higher Studies, Sri Lanka, Graduated 2019</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


         </div>
         <!--main content-->
         <!--bootstrap-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
         <!--main js-->
         <script src="mainjs.js"></script>
         <script>
            const tooltipTriggerList = document.querySelectorAll( '[data-bs-toggle="tooltip"]' );
            const tooltipList = [ ...tooltipTriggerList ].map( tooltipTriggerEl => new bootstrap.Tooltip( tooltipTriggerEl ) );
         </script>
</body>

</html>