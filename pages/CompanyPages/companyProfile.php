<!DOCTYPE html>
<?php
require_once '../server/DBConnector.php';
require_once '../server/company.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET["id"];

    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM company WHERE companyID  = ? ";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $id);

        $pstmt->execute();

        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($rs as $row) {

            $companyID = $row->companyID;
            $companyname = $row->companyname;
            $email = $row->email;
            $address = $row->address;
            $description = $row->description;
            $password = $row->password;
            $profilePic = $row->profilePic;
            $coverPic = $row->coverPic;
            $employee = $row->employee;
        }
        ;
        if (empty($rs)) {
            header("Location: ../LoginCompany.php?error=4");
            exit;
        }

        if ($profilePic === null) {
            $profil = '../../img/userDefault.jpg';
        } else {
            $profil = $profilePic;
        }

        ?>

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
                        <div class="d-flex ">

                        </div>
                        <!--profile-->
                        <div class="dropdown ">
                            <dvi class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="navbar-brand  dropdown-toggle" href="#" type="button"> <img
                                        src="<?php echo $profil; ?>" alt="avatar" class="rounded-circle me-2 "
                                        style="width: 38px; height: 38px; object-fit: cover" data-bs-toggle="tooltip"
                                        data-bs-title=" click for more option" data-bs-placement="bottom"
                                        data-bs-title="Tooltip on bottom" /></a>
                            </dvi>
                            <ul class="dropdown-menu border-0 shadow">
                                <!--avatar-->
                                <li>
                                    <div class="d-flex align-items-center p-2">
                                        <img src="<?php echo $profil; ?>" alt="avatar" width="32" height="32"
                                            class="rounded-circle me-2" style="width: 48px; height: 48px; object-fit: cover">
                                        <div class="d-flex flex-column mt-3 p-0">
                                            <span class="fw-bold fs-6">
                                                <?php echo $companyname; ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <!--settings-->
                                <li><a class="dropdown-item" href="../LoginCompany.php" data-bs-toggle="tooltip"
                                        data-bs-title="Edite your profile">
                                        <div class="d-flex align-items-center me-2">
                                            <i class="fa-solid fa-gear justify-content-center fs-5"></i>
                                            <p class="m-0 ms-2">Settings</p>
                                        </div>
                                    </a></li>
                                <!--logout-->
                                <li><a class="dropdown-item" href="../LoginCompany.php" data-bs-toggle="tooltip"
                                        data-bs-title="logout from this account">
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
                                    <a href="./companyProfile.php" class="nav-link active" aria-current="page">
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
                                    <a href="./application.php" class="nav-link link-body-emphasis">
                                        <i class="fa-solid fa-address-card"></i>
                                        Applications
                                    </a>
                                </li>
                                <li>
                                    <a href="./application.php" class="nav-link link-body-emphasis">
                                        <i class="fa-solid fa-gear"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <hr>

                        </div>
                        <!--small nav bar-->
                        <div class="d-flex flex-column flex-shrink-0 bg-white d-lg-none d-block  vh-100" style="width: 4.5rem;">
                            <a href="#" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-original-title="HireSpot">
                                <img src="../../img/logo only.png" height="43px" alt="HireSpot" />
                                <span class="visually-hidden">Icon-only</span>
                            </a>
                            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                                <li class="nav-item">
                                    <a href="adminUser.php" class="nav-link active py-3 border-bottom rounded-0"
                                        aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                        aria-label="Profile" data-bs-original-title="Profile">
                                        <i class="fa-solid fa-user"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./adminCompanies.php" class="nav-link  py-3 border-bottom rounded-0"
                                        aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right"
                                        aria-label="posts" data-bs-original-title="posts">
                                        <i class="fa-solid fa-building"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./adminUser.php" class="nav-link py-3 border-bottom rounded-0" aria-current="page"
                                        data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Applicatons"
                                        data-bs-original-title="Applicatons">
                                        <i class="fa-solid fa-address-card"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./admin.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                        aria-current="page" data-bs-placement="right" aria-label="Settings"
                                        data-bs-original-title="Settings">
                                        <i class="fa-solid fa-gear"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!--main content-->
                <div class="col-11 ml-sm-auto col-lg-10 px-4 " style="padding-top: 70px;z-index: 5;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Company Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 1) {
                            echo "
            <div class='alert alert-danger py-2' role='alert'>
            Error in post method!
            </div> ";
                        }
                        if ($_GET['error'] == 2) {
                            echo "
          <div class='alert alert-danger py-2' role='alert'>
         Please Fill All Fields to Post!
          </div> ";
                        }
                        if ($_GET['error'] == 3) {
                            echo "
          <div class='alert alert-danger py-2' role='alert'>
          Please select an image to upload. error in image selection!
          </div> ";
                        }
                        if ($_GET['error'] == 4) {
                            echo "
          <div class='alert alert-danger py-2' role='alert'>
          Only JPG, JPEG, and PNG files are allowed.
          </div> ";
                        }
                        if ($_GET['error'] == 5) {
                            echo "
          <div class='alert alert-danger py-2' role='alert'>
         Sorry, there was an error uploading your file.
          </div> ";
                        }
                    }
                    if (isset($_GET['success'])) {
                        if ($_GET['success'] == 1) {
                            echo "
          <div class='alert alert-success py-2' role='alert'>
          You have successfully posted!
          </div> ";
                        }
                    }
                    ?>

                    <div class="mx-1 bg-white rounded " style="max-height: 200px">
                        <div class="bg-white rounded p-3">
                            <img src="<?php
                            if ($coverPic === null) {
                                echo '../../img/coverDefault.jpg';
                            } else {
                                echo $coverPic;
                            }
                            ?>" alt="story post" srcset="" class="card-img-top"
                                style="min-height: 125px;object-fit: cover;max-height: 200px;" />
                            <div class="d-flex align-items-center justify-content-left position-relative "
                                style="min-height: 65px;">
                                <div class="position-absolute top-0 translate-middle" style="padding-left: 20rem">
                                    <img src="<?php echo $profil; ?>" alt="avatar" width="200px" height="200px"
                                        class="rounded-circle me-2 bg-white rounded-circle p-1">
                                </div>
                                <div class="d-flex justify-content-between" style="margin-left: 16rem">
                                    <div class="mx-3">
                                        <h1>
                                            <?php echo $companyname; ?>
                                        </h1>
                                        <p class="text-muted"><i class="fa-solid fa-location-dot me-2"></i>
                                            <?php echo $address; ?>
                                        </p>
                                    </div>
                                    <div class="">
                                        <div data-bs-toggle="tooltip" data-bs-title="Post vacancies and hire jobseekers">
                                            <button type="button" class="btn btn-outline-primary my-3" data-bs-toggle="modal"
                                                data-bs-target="#postModal">Add post <i class="fa-sharp fa-solid fa-plus"></i>
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <form action="../server/post.php" method="post" enctype="multipart/form-data">
                                            <div class="modal fade shadow" id="postModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Job post</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input class="form-control" type="hidden" name="companyID"
                                                                value="<?php echo $companyID; ?>">
                                                            <div class="input-group mb-3">
                                                                <label class="input-group-text" for="inputGroupSelect01">Job
                                                                    category</label>
                                                                <select class="form-select" id="inputGroupSelect01"
                                                                    name="jobCategory">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">Information Technology (IT)</option>
                                                                    <option value="2">Healthcare</option>
                                                                    <option value="3">Finance</option>
                                                                    <option value="4">Education</option>
                                                                    <option value="5">Marketing and Sales</option>
                                                                    <option value="6">Engineering</option>
                                                                    <option value="7">Hospitality and Tourism</option>
                                                                    <option value="8">Creative Arts</option>
                                                                    <option value="9">Human Resources</option>
                                                                    <option value="10">Construction and Trades</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-floating">
                                                                <textarea class="form-control" name="description"
                                                                    placeholder="Leave a comment here" id="floatingTextarea2"
                                                                    style="height: 100px"></textarea>
                                                                <label for="floatingTextarea2">Description about the job</label>
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="formFile" class="form-label fs-5 my-2">Upload your
                                                                    Flyer</label>
                                                                <input class="form-control" type="file" id="image"
                                                                    accept="image/*" name="image">
                                                                <img id="previewImage" src="" alt="Selected Image"
                                                                    style="display: none; object-fit: cover" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary w-100" value="Upload"
                                                                name="submit">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- JavaScript for image preview -->
                                        <script>
                                            document.getElementById( "image" ).addEventListener( "change", function ()
                                            {
                                                var fileInput = this;
                                                if ( fileInput.files && fileInput.files[ 0 ] )
                                                {
                                                    var reader = new FileReader();
                                                    reader.onload = function ( e )
                                                    {
                                                        var previewImage = document.getElementById( "previewImage" );
                                                        previewImage.src = e.target.result;
                                                        previewImage.style.display = "block";
                                                    };

                                                    reader.readAsDataURL( fileInput.files[ 0 ] );
                                                }
                                            } );
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--about-->
                    <div class="bg-white rounded p-3 " style="margin-top: 9rem">
                        <h2 class="mx-4">About</h2>
                        <p class="mx-4 text-muted">
                            <?php echo $description; ?>
                        </p>

                    </div>

                    <!--emloyee-->
                    <div class="bg-white rounded p-3 mt-3">
                        <h2 class="mx-4">
                            <?php echo $employee; ?> employees
                        </h2>
                    </div>

                    <?php
    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }
}
?>
            <!--footer-->
            <div class="container  mt-5">

                <!-- action -->
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
                        <a class=" " href="#"><img src="../../img/logo.png" width="58px" height="16px" alt="HireSpot"
                                class="mb-2" /></a>
                        <p class="fs-7">&copy; 2023</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
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