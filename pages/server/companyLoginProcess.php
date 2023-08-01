<?php

require_once './DBConnector.php';
require_once './company.php';

use server\DbConnector;

$dbcon = new DbConnector();
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['companyname']) && !empty($_POST['companyname']) && isset($_POST['Password']) && !empty($_POST['Password'])) {

        $companyname = $_POST["companyname"];

        $password = $_POST["Password"];

        try {
            $con = $dbcon->getConnection();
            $query = "SELECT companyID, companyname, password FROM company WHERE companyname = ? ";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $companyname);

            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if (!$row) {
                header("Location: ../LoginCompany.php?error=4");
                exit;
            }

            $dbcompanyID = $row['companyID'];
            $dbcompanyname = $row['companyname'];
            $dbpassword = $row['password'];

            if (password_verify($password, $dbpassword)) {
                session_start();
                $_SESSION["company"] = $companyname;
                header("Location: ../CompanyPages/companyProfile.php?id=$dbcompanyID");
                exit;
            } else {
                header("Location: ../CompanyPages/companyProfile.php?id=$dbcompanyID");
//                header("Location:  ../LoginCompany.php?error=2");
                exit;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    } else {
        header("Location: ../LoginCompany.php?error=5");
    }
}
?>
