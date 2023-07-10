<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HireSpot | About</title>
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

    
    <div role="main" class="pt-5>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide img-fluid w-100" src="https://img.freepik.com/free-vector/modern-flowing-blue-wave-banner-white-background_1035-17954.jpg?w=826&t=st=1688973800~exp=1688974400~hmac=1824fbb386bce36cf6e9aaf7d31a380f476033e8bc23a7c0ebd0c5470e3f3622" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left" tyle="color: blue;">
                <h1 style="color: blue;">HireSpot</h1>
                <p>Empowering Your Career Journey</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-fluid w-100" src="https://img.freepik.com/free-vector/modern-flowing-blue-wave-banner-white-background_1035-17954.jpg?w=826&t=st=1688973800~exp=1688974400~hmac=1824fbb386bce36cf6e9aaf7d31a380f476033e8bc23a7c0ebd0c5470e3f3622" alt="Second slide">
            <div class="container">
              <div class="carousel-caption" >
                <h1>Simplify Your Job Search</h1>
                <p>Say goodbye to endless scrolling and complicated applications.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide img-fluid w-100" src="https://img.freepik.com/free-vector/modern-flowing-blue-wave-banner-white-background_1035-17954.jpg?w=826&t=st=1688973800~exp=1688974400~hmac=1824fbb386bce36cf6e9aaf7d31a380f476033e8bc23a7c0ebd0c5470e3f3622" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Your Career, Your Journey</h1>
                <p>No matter where you are in your career, we're here to support your journey.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" >Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4" style="text-align: center;" >
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2 class="text-center m-0">Find Your Job Easier</h2>
            <p class="text-center m-0" >At Hirespot, we understand that finding the right job can be a challenging process. That's why we've developed a suite of powerful tools and features to make your job search easier, faster, and more efficient.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="text-align: center;">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Easy Application Process</h2>
            <p>Applying for jobs shouldn't be a time-consuming and complicated process. We've revolutionized the application experience to make it easier and more efficient. Discover how our job application portal simplifies the application process, giving you more time to focus on what matters – landing your dream job.</p>
             
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="text-align: center;" >
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Trust and Security</h2>
            <p>We understand that your trust and security are of utmost importance when using a job application portal. We take this responsibility seriously and have implemented robust measures to ensure a safe and secure environment for your job search.</p>
             
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Our Story : <span class="text-muted">Driven by Passion and Purpose.</span></h2>
            <p class="lead"> Hirespot was born out of a passion for connecting talented individuals with life-changing career opportunities. Our founders experienced the challenges of job hunting firsthand and envisioned a platform that could revolutionize the process, making it more efficient, personalized, and rewarding.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="https://img.freepik.com/free-vector/modern-resume-template_23-2147836674.jpg?size=626&ext=jpg&ga=GA1.2.1882095610.1686062107&semt=ais" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Our Vision : <span class="text-muted">Shaping the Future of Work.</span></h2>
            <p class="lead">We envision a future where finding the perfect job is a seamless and empowering experience for everyone. We are committed to leveraging technology and innovation to reshape the way people approach their career paths, providing equal opportunities and driving positive change in the world of work.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://img.freepik.com/free-vector/business-background-design_1200-89.jpg?size=626&ext=jpg&ga=GA1.1.1882095610.1686062107&semt=ais" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Our Values : <span class="text-muted">Transparency, Inclusivity, and Integrity</span></h2>
            <p class="lead">We uphold the highest standards of transparency, inclusivity, and integrity. We believe in fostering an environment where diversity is celebrated, and all individuals are treated with fairness and respect. Our commitment to ethical practices ensures a trusted and reliable platform for job seekers and employers alike.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://img.freepik.com/free-vector/choice-worker-concept_23-2148632123.jpg?size=626&ext=jpg&ga=GA1.1.1882095610.1686062107&semt=ais" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2017-2018 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!--main js-->
    <script src="mainjs.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
</html>


    


 