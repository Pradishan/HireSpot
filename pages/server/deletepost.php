<?php

require_once './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['compid']) && !empty($_GET['compid'])) {
         $id = $_GET['id'];
         $companid = $_GET['compid'];

    try {
        $con = $dbcon->getConnection();
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Prepare the DELETE query
        $stmt =  $con->prepare("DELETE FROM job WHERE jobID = :id");

        // Bind the parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // check if any rows were affected (deleted)
        $rowCount = $stmt->rowCount();

        if ($rowCount > 0) {
            echo "Record deleted successfully.";
               header("Location: ../CompanyPages/posts.php?id=".$_GET['compid']."&success=1");
        } else {
            echo "No records were deleted.";
             header("Location: ../CompanyPages/posts.php?id=".$_GET['compid']."&error=1");
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    } else {
        echo 'id empty';
    }
    
}else{
    echo 'error in method';
}