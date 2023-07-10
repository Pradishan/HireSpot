<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HireSpot | Company </title>
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
            .bg-darkgray{
                background-color: #D9D9D9 !important;
            }
        </style>
      <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <div>
                    <a class="navbar-brand " href="#">Home</a>
                </div>
                <div class="c justify-content-center ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!--logo-->
                            <img src="./../img/logo.png" width="137px" height="43px" alt="HireSpot"/>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                <div class="d-flex ">
           
                </div>
                <!--profile--> 
                <div class="dropdown ">
                    <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <a class="navbar-brand  dropdown-toggle" href="#" type="button" > <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 "
                                                                               style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip" data-bs-title=" See your profile" data-bs-placement="bottom" data-bs-title="Tooltip on bottom" /></a>
                    </dvi>                                                                       
                    <ul class="dropdown-menu border-0 shadow">
                        <!--avatar-->
                        <li><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="https://source.unsplash.com/random/5" alt="avatar" class="rounded-circle me-2 "style="width: 48px; height: 48px; object-fit: cover" />
                                    <div class="d-flex flex-column mt-3 p-0">
                                        <span class="fw-bold fs-6">Name</span>
                                    </div>
                                </div>
                            </a></li>
                        <hr>
                        <!--logout-->
                        <li><a class="dropdown-item" href="./../Admin.php">
                                <div class="d-flex align-items-center me-2">
                                    <i class="fa fa-sign-out justify-content-center fs-5"></i>
                                    <p class="m-0 ms-2">Log out</p>
                                </div>
                            </a></li>
                    </ul>
                </div>
                
                </div>
            </div>
        </div>
    </nav>
        <div class="row">      
  <!--side nav bar-->
  <div class="col-1 col-lg-2 d-block sidebar ">
      <div class=" h-100 fixed-top overflow-hidden"
           style="padding-top: 56px;min-width: 20rem;z-index: 4">
              <!--large nav bar-->
              <div class="d-flex flex-column flex-shrink-0 p-3 d-none d-lg-block vh-100 bg-white " style="max-width: 20rem">
                  <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                      <img src="./../img/logo.png" height="43px" alt="HireSpot"/>
                      <span class="fs-4"> </span>
                  </a>
                  <hr>
                  <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                          <a href="./adminUser.php" class="nav-link active" aria-current="page">
                              <i class="fa-solid fa-user"></i>
                              Profile
                          </a>
                      </li>
                      <li>
                          <a href="./adminCompanies.php" class="nav-link link-body-emphasis">
                              <i class="fa-solid fa-building"></i>
                              Applications
                          </a>
                      </li>
                      <li>
                          <a href="./adminPosts.php" class="nav-link link-body-emphasis">
                              <i class="fa-solid fa-address-card"></i>
                              Post
                          </a>
                      </li>
                  </ul>
                  <hr>
                  <div class="dropdown fixed-bottom m-3">
                      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://source.unsplash.com/random/5" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                          <strong>name</strong>
                      </a>
                      <ul class="dropdown-menu text-small shadow">
                          <li><a class="dropdown-item" href="./../Admin.php"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a></li>
                      </ul>
                  </div>
              </div>
              <!--small nav bar-->
              <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
                  <a href="#" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                      <img src="./../img/logo only.png" height="43px" alt="HireSpot"/>
                      <span class="visually-hidden">Icon-only</span>
                  </a>
                  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                      <li class="nav-item">
                          <a href="adminUser.php" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
                              <i class="fa-solid fa-user"></i>
                          </a>
                      </li>
                      <li>
                          <a href="./adminCompanies.php" class="nav-link  py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                              <i class="fa-solid fa-building"></i>
                          </a>
                      </li>
                      <li>
                          <a href="./adminUser.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                              <i class="fa-solid fa-address-card"></i>
                          </a>
                      </li>
                  </ul>
                  
                  <div class="dropdown border-top">
                      <a href="./../Admin.php" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://source.unsplash.com/random/5" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                      </a>
                      <ul class="dropdown-menu text-small shadow">
                          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a></li>
                      </ul>
                  </div>
              </div>
      </div>
  </div>
  
  <!--main content-->
  <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px;">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Users</li>
          </ol>
      </nav>
      
        <h1>User</h1>
 
  </div>
        </div>
    </body>
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
