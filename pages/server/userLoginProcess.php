<?php
require_once './DBConnector.php';
require_once './jobseeker.php';

use server\DbConnector;

$dbcon = new DbConnector();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["Email"];
 
    $password = $_POST["Password"];



    try {
        $con = $dbcon->getConnection();
        $query = "SELECT * FROM jobseeker WHERE email = ? ";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $email);
       
        $pstmt->execute();

        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);

        foreach($rs as $row){
            $dbpassword = $row->password;
            $dbFirstName = $row->firstname;
            $dbLastName = $row->lastname;
            $dbEmail = $row->email;
            $dbPhoneNo = $row->phoneNo;
            $dbuserName = $row->username;
            $dbGender = $row->gender;
            $dbid = $row->userID;
            $dbaddress = $row->address;
            $dbEducation = $row->education;
            $dbDescription = $row->description;
        }
       ;
        if (password_verify($password, $dbpassword)) {
           
            $seeker = new JobSeeker($dbid, $dbuserName, $dbFirstName,$dbLastName,$dbEmail,$dbPhoneNo,$dbaddress,$dbEducation,$dbDescription,$dbGender,$dbpassword);
            session_start();
            $_SESSION["seeker"] = $seeker;
            header("Location: ../feed.php");
        exit;
        }else{
            
            header("Location: ../login.php?error=2");
            exit;
        }

    } catch (PDOException $exc) {
        echo $exc->getMessage();
    }

}

?>