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
  <title>HireSpot | login</title>
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--fontawesom-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--main css-->
  <link rel="stylesheet" href="maincss.css" />



</head>

<body>
  <style>
    body {
      background-color: #F1F0F0;
      overflow-x: hidden;
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
  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex justify-content-cente">
    <div class="container ">
      <!--logo-->
      <img src="../img/logo.png" width="137px" height="43px" alt="HireSpot" />
    </div>
    </div>
    </div>
  </nav <!--main content-->
  <!-- login  -->
  <div class="container d-flex flex-column flex-lg-row justify-content-evenly mt-5 pt-5" style="padding-top: 10rem;">
    <!-- heading -->
    <div class="text-center text-lg-center mt-lg-5 pt-lg-5">
      <img src="../img/logo.png" width="688px" height="216px" alt="HireSpot" />
      <p class="w-75 mx-auto ma-lg-0 fs-4">
        Unleash your potential, embrace the extraordinary! test
      </p>
    </div>
    <!-- form  -->
    <div style="max-width: 28rem; width: 100%">
      <div class="bg-white shadow rounded p-3 input-group-lg">
        <h1 class="text-center"> Company Log in</h1>
        <div class="form-floating my-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
            style="background-color: #F4F4F4">
          <label for="floatingInput">Company Name</label>
        </div>
        <div class="form-floating my-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
            style="background-color: #F4F4F4">
          <label for="floatingPassword">Password</label>
        </div>
        <a href="./CompanyPages/companyProfile.php">
          <button class="btn btn-primary my-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
            login
          </button>
        </a>
        <a href="#" class="text-decoration-none text-center">
          <p>Forgotten password?</p>
        </a>
        <!-- create from modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="">
                  <h1 class="modal-title fs-2" id="exampleModalLabel">
                    sign up
                  </h1>
                  <span class="text-muted fs-7">Join with us to discover somehting</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <!-- <div class="col">
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
                    </div> -->
                </div>

                <input type="text" name="" class="form-control my-3" placeholder="Company Name" id="" />
                <input type="text" name="" class="form-control my-3" placeholder="Main Category" id="" />
                <input type="email" name="" class="form-control my-3" placeholder="Email" id="" />

                <input type="tel" name="" class="form-control my-3" placeholder="Phone No"
                  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="" />

                <input type="password" name="" class="form-control my-3" placeholder="password" id="" />

                <input type="text" name="" class="form-control my-3" placeholder="Address" id="" />


                <!-- <label>Education Information:</label>
                    <div class="form-control my-3" id="educationContainer">
                      <input type="text"  name="education[]" placeholder="Enter your education information">
                    </div>
                    <button type="button" onclick="addEducationField()">Add Education Field</button>
                    <br> -->

                <!-- <div >
                    <label class="text-muted fs-7" >Education Information:</label>
                      <div id="educationContainer" >
                        <div class="input-group mb-3" > 
                          <span class="input-group-text" style="height: 40px; margin-top: 15px; " id="inputGroup-sizing-sm">Institute</span>
                          <input type="text" class="form-control my-3"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group input-group-sm mb-3; " >
                          <span class="input-group-text" style="height: 40px; margin-top: 15px; " id="inputGroup-sizing-sm">Edu. Level</span>
                          <input type="text" class="form-control my-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      </div>
                      <button  type="button" class="btn btn-outline-primary my-3" onclick="addEducationField()">Add new</button>

                      <br>
                  </div> -->


                <textarea class="form-control my-3" id="description" name="description" placeholder="Description"
                  oninput="countWords()" maxlength="200"></textarea>





                <div class="d-none" id="selectGender">
                  <select name="" id="" class="form-select">
                    <option value="1">one</option>
                    <option value="2">two</option>
                    <option value="3">three</option>
                  </select>
                  <div class="my-3">
                    <span class="text-muted">Your pronoun is visible to everyone.</span>
                    <input type="text" name="" id="" class="form-control" placeholder="Gender (optional)" />
                  </div>
                </div>
                <div class="">
                  <!-- <span class="text-muted fs-7"
                      >Lorem ipsum dolor, sit amet consectetur
                      adipisicing.</span -->

                </div>
                <div class="text-center">
                  <a href="./Payment.php">
                    <button type="button" class="btn btn-outline-primary my-3" data-bs-dismiss="modal">
                      Sing up
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="text-center my-4">
          <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
  </footer>
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