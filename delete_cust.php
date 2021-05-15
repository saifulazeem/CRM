<?php
include("connection.php");
if (isset($_GET["id"]))
{
	$cid=$_GET["id"];
        $query31=$con->prepare("UPDATE customers SET is_delete=1 WHERE c_id=$cid");
        // $query31->bind_param("s",$product);
        $query31->execute();
        $query31->close();
        echo '<script language=javascript>';
        echo 'alert("Customer Record has been Deleted sucessfully")';
        echo '</script>';
        echo '<script> location.replace("customer-list.php"); </script>';
        // echo '<script> location.replace("customer-list.php"); </script>';
}
if (isset($_GET["uid"]))
{
	$uid=$_GET["uid"];
        $query31=$con->prepare("UPDATE users SET is_delete=1 WHERE id=$uid");
        // $query31->bind_param("s",$product);
        $query31->execute();
        $query31->close();
        echo '<script language=javascript>';
        echo 'alert("Engineer Record has been Deleted sucessfully")';
        echo '</script>';
        echo '<script> location.replace("manage_engineer.php"); </script>';
        // echo '<script> location.replace("customer-list.php"); </script>';
}
?>