<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CMS = "localhost";
$database_CMS = "id13839881_cms";
$username_CMS = "id13839881_crime";
$password_CMS = "5&k23zU-SoHleYF#";
$CMS = mysqli_connect($hostname_CMS, $username_CMS, $password_CMS,$database_CMS) or trigger_error(mysqli_connect_error(), E_USER_ERROR);
?>