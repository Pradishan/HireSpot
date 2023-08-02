<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['jobTitle']) && !empty($_POST['jobTitle'])&&isset($_POST['jobCategory']) && !empty($_POST['jobCategory']) && isset($_POST['companyID']) && !empty($_POST['companyID']) && isset($_POST['description']) && !empty($_POST['description'])) {

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === 0) {

            $jobTitle = $_POST['jobTitle'];
            $jobCategory = $_POST['jobCategory'];
            $companyID = $_POST['companyID'];
            $date = date("Y-m-d H:i:s");
            $content = $_POST['description'];

            $targetDir = "../../upload/post/"; // stoting place
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the uploaded file is an image
            $allowedExtensions = array("jpg", "jpeg", "png");
            if (in_array($imageFileType, $allowedExtensions)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    // Image uploaded successfully, now store the file path in the database

                    try {
                        $con = $dbcon->getConnection();
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Insert the file path into the database table using a prepared statement
                        $imageFilePath = $targetFile;
                        $sql = "INSERT INTO job (jobTitle,jobcateogoryID,companyID,date,content,filePath) VALUES (?,?,?,?,?,?)";
                        $pstmt = $con->prepare($sql);
                        $pstmt->bindValue(1, $jobTitle);
                        $pstmt->bindValue(2, $jobCategory);
                        $pstmt->bindValue(3, $companyID);
                        $pstmt->bindValue(4, $date);
                        $pstmt->bindValue(5, $content);
                        $pstmt->bindValue(6, $imageFilePath);

                        if ($pstmt->execute()) {
//                            echo "Image uploaded and stored in the database successfully.";
                              header("Location: ../CompanyPages/companyProfile.php?id=$companyID&success=1");
                        } else {
                            echo "Error: Unable to insert image path into the database.";
                        }

                        $con = null;
                    } catch (PDOException $e) {
                        die("Connection failed: " . $e->getMessage());
                    }
                } else {
//                    echo "Sorry, there was an error uploading your file.";
                      header("Location: ../CompanyPages/companyProfile.php?id=".$_POST['companyID']."&error=5");
                }
            } else {
//                echo "Only JPG, JPEG, and PNG files are allowed.";
                 header("Location: ../CompanyPages/companyProfile.php?id=".$_POST['companyID']."&error=4");
            }
        } else {
//            echo "Please select an image to upload. image error";
              header("Location: ../CompanyPages/companyProfile.php?id=".$_POST['companyID']."&error=3");
        }
    } else {
//        echo "data empty";
          header("Location: ../CompanyPages/companyProfile.php?id=".$_POST['companyID']."&error=2");
    }
} else {
//    echo "Please select an image to upload. post";
      header("Location: ../CompanyPages/companyProfile.php?id=".$_POST['companyID']."&error=1");
}
?>