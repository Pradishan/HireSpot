<?php
require_once '../server/DBConnector.php';
require_once '../server/company.php';

use server\DbConnector;

$dbcon = new DbConnector();

session_start();

// Check if the company session variables are set 
if (!isset($_SESSION['companyID']) || !isset($_SESSION['companyname'])) {
    // Company user not logged in, redirect to the login page or any other appropriate page
    header("Location: ../LoginCompany.php");
    exit;
}
$id = $_SESSION['companyID'];
$companyname = $_SESSION['companyname'];

try {
    $con = $dbcon->getConnection();
    $query = "SELECT companyID,companyname,profilePic FROM company WHERE companyID = ? ";
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1, $id);

    $pstmt->execute();

    $comp = $pstmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($comp as $row) {

        $companyID1 = $row->companyID;
        $companyname1 = $row->companyname;
        $profilePic1 = $row->profilePic;
    }
    ;
    if (empty($companyID1)) {
        header("Location: ../LoginCompany.php?error=4");
        exit;
    }

    if ($profilePic1 === null) {
        $profil = '../../img/userDefault.jpg';
    } else {
        $profil = $profilePic1;
    }
    ?>
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
        <title>HireSpot | Company </title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--fontawesom-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--main css-->
        <link rel="stylesheet" href="../../css/maincss.css" />

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
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <div>
                    <a class="navbar-brand " href="../../index.php">Home</a>
                </div>
                <div class="justify-content-center ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!--logo-->
                            <img src="../../img/logo.png" width="137px" height="43px" alt="HireSpot" />
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <!--profile-->
                    <div class="dropdown ">
                        <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="navbar-brand  dropdown-toggle" href="#" type="button" data-bs-toggle="tooltip"
                                data-bs-title=" click here to logout" data-bs-placement="left"
                                data-bs-title="Tooltip on left"> <img src="<?php echo $profil; ?>" alt="avatar"
                                    class="rounded-circle me-2 " style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="fw-bold fs-6">
                                    <?php echo $companyname1; ?>
                                </span>
                            </a>
                        </dvi>
                        <ul class="dropdown-menu border-0 shadow">
                            <!--logout-->
                            <li><a class="dropdown-item" href="../server/companyLogout.php" data-bs-toggle="tooltip"
                                    data-bs-title="logout from this account" data-bs-placement="left"
                                    data-bs-title="Tooltip on left">
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
        <div class="row">
            <!--side nav bar-->
            <div class="col-1 col-lg-2 d-block sidebar ">
                <div class=" h-100 fixed-top overflow-hidden"
                    style="padding-top: 56px;min-width: 10rem;max-width: 12rem;z-index: 4">
                    <!--large nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 p-3 d-none d-lg-block vh-100 bg-white "
                        style="max-width: 20rem">
                        <a href="../../index.php"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <img src="../../img/logo.png" height="43px" alt="HireSpot" />
                            <span class="fs-4"> </span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="./companyProfile.php" class="nav-link link-body-emphasis" aria-current="page">
                                    <i class="fa-solid fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="./posts.php" class="nav-link link-body-emphasis">
                                    <i class="fa-solid fa-building"></i>
                                    Posts
                                </a>
                            </li>
                            <li>
                                <div class="nav-link active" aria-current="page" style="cursor: pointer;">
                                    <i class="fa-solid fa-address-card"></i>
                                    Applications
                                </div>
                            </li>
                        </ul>
                        <hr>

                    </div>
                    <!--small nav bar-->
                    <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
                        <a href="../../index.php" class="d-block p-3 link-body-emphasis text-decoration-none"
                            data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="HireSpot">
                            <img src="../../img/logo only.png" height="43px" alt="HireSpot" />
                            <span class="visually-hidden">Icon-only</span>
                        </a>
                        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                            <li class="nav-item">
                                <a href="./companyProfile.php" class="nav-link py-3 border-bottom rounded-0"
                                    aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                    aria-label="Profile" data-bs-original-title="Profile">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./posts.php" class="nav-link  py-3 border-bottom rounded-0" aria-current="page"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="posts"
                                    data-bs-original-title="posts">
                                    <i class="fa-solid fa-building"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                                    data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Applicatons"
                                    data-bs-original-title="Applicatons" style="cursor: pointer;">
                                    <i class="fa-solid fa-address-card"></i>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!--main content-->
            <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px; z-index:5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Company</li>
                        <li class="breadcrumb-item active" aria-current="page">Applications</li>
                    </ol>
                </nav>

                <h1>Applications</h1>

                <table class="table table-hover bg-white rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Applicant Name</th>
                            <th scope="col">Applicant Contact Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 20; $i++) { ?>


                            <tr>
                                <th scope="row">A001</th>
                                <td>Vacancy for Software Engineer</td>
                                <td>31 Aug 2000</td>
                                <td>R.W. Nimal Perera</td>
                                <td>+94704470004</td>
                                <td class="d-flex align-items-center p-1">
                                    <a href=""> <button class="btn btn-primary mx-1 p-1">Download CV</button> </a>
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check btn-success" name="btnradio" id="btnradio1"
                                            autocomplete="off">
                                        <label class="btn btn-outline-success" for="btnradio1">Accept</label>

                                        <input type="radio" class="btn-check btn-danger" name="btnradio" id="btnradio2"
                                            autocomplete="off">
                                        <label class="btn btn-outline-danger" for="btnradio2">Reject</label>
                                    </div>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </body>
    <?php
} catch (PDOException $exc) {
    echo $exc->getMessage();
}

?>
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