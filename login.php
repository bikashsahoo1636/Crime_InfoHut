<?php require_once('Connections/CMS.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crime InfoHut</title>
    </head>

    <body>
        <?php
        session_start();
        $UserName = $_POST['username'];
        $Password = $_POST['password'];
        $UserType = $_POST['cmbUser'];
        if ($UserType == "Admin") {
            
            mysqli_select_db($CMS ,$database_CMS);
            $sql = "SELECT * from admin_tbl where Admin_Name='" . $UserName . "' and Admin_Password='" . $Password . "'";
            $result = mysqli_query($CMS,$sql);
            $records = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if ($records == 0) {
                echo $records;
                echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
            } else {
                $_SESSION['Name'] = $row['Admin_Name'];
                header("location:Admin\index.php");
            }
            mysqli_close($CMS);
        } else if ($UserType == "Police") {
           
            mysqli_select_db($CMS ,$database_CMS);
            $sql = "SELECT * from policestation_tbl
 where UserName='" . $UserName . "' and Password='" . $Password . "'";
            $result = mysqli_query($CMS,$sql);
            $records = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if ($records == 0) {
                echo $records;
                echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
            } else {
                $_SESSION['ID'] = $row['Station_Id'];
                $_SESSION['Name'] = $row['Station_Name'];
                header("location:PoliceStation\index.php");
            }
            mysqli_close($CMS);
        } else {
           
            mysqli_select_db($CMS ,$database_CMS);
            $sql = "SELECT * from user_tbl where UserName='" . $UserName . "' and Password='" . $Password . "'";
            $result = mysqli_query($CMS,$sql);
            $records = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            if ($records == 0) {
                echo $records;
                echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
            } else {
                $_SESSION['ID'] = $row['User_Id'];
                $_SESSION['Name'] = $row['Name'];
                header("location:RegUser\index.php");
            }
            mysqli_close($CMS);
        }
        ?>
    </body>
</html>
