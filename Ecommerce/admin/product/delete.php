<?php
 $Id = $_GET['ID'];
include("Config.php");
mysqli_query($con,"DELETE FROM `product` WHERE id = '$Id'");
header("location:index.php");
?>