<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php require_once('../Connections/CMS.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
if (isset($_SESSION['ID'])) {
    $Id = $_SESSION['ID'];
    $Name = $_POST['txtName'];
    $txtAdd = $_POST['txtAdd'];
    $txtCity = $_POST['txtCity'];
    $txtMobile = $_POST['txtMobile'];
    $txtEmail = $_POST['txtEmail'];
    $Gender = $_POST['cmbGender'];
    $BirthDate = $_POST['txtBirthDate'];
    $txtUser = $_POST['txtUser'];
    $txtPass = $_POST['txtPass'];
// Establish Connection with MYSQL

// Select Database
mysqli_select_db($CMS ,$database_CMS);
// Specify the query to Update Record
    $sql = "UPDATE user_tbl set Name='" . $Name . "',Address='" . $txtAdd . "',City='" . $txtCity . "',Mobile='" . $txtMobile . "',Email='" . $txtEmail . "',Gender='" . $Gender . "',BirthDate='" . $BirthDate . "',UserName='" . $txtUser . "',Password='" . $txtPass . "' where User_Id=" . $Id . "";
// Execute query
    mysqli_query($CMS,$sql);
// Close The Connection
    mysqli_close($CMS);
    echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
} else {
    header("location:../index.php");
}
?>
    </body>
</html>
