<?php

require './DBConnector.php';

use server\DbConnector;

$dbcon = new DbConnector();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['companyname']) && !empty($_POST['companyname']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['employee']) && !empty($_POST['employee'])) {

        $companyname = $_POST['companyname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
        $employee = $_POST['employee'];

        try {
            $con = $dbcon->getConnection();
            $query = "INSERT INTO company(companyname, email, address, description, password, employee) VALUES(?, ?, ?, ?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $companyname);
            $pstmt->bindValue(2, $email);
            $pstmt->bindValue(3, $address);
            $pstmt->bindValue(4, $description);
            $pstmt->bindValue(5, $password);
            $pstmt->bindValue(6, $employee);
          
            $pstmt->execute();
            if (($pstmt->rowCount()) > 0) {

                header("Location: ../LoginCompany.php?success=1");
                exit;
            } else {
                echo "Error, try again.";
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    } else {
        header("Location: ../LoginCompany.php?error=1");
        exit;
    }
}


