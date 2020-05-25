<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if (!isset($_SESSION)) {
    session_start();
    if (!isset($_SESSION['Name'])) {
        header("location:../index.php");
    }
}
?>

<?php require_once('../Connections/CMS.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
<?php
$Id = $_GET['UserId'];
// Establish Connection with MYSQL

// Select Database
mysqli_select_db($CMS ,$database_CMS);
// Specify the query to Insert Record
$sql = "DELETE from admin_tbl where Admin_Id='" . $Id . "'";
// execute query
mysqli_query($CMS,$sql);
// Close The Connection
mysqli_close($CMS);
echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';
?>
    </body>
</html>
