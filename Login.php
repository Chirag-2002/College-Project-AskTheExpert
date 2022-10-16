<?php
include "Database_Connection.php";

$name=$_POST["Student_Name"];
$password=$_POST["Student_Password"];
$showError="";
$login="";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $sql="Select * from  student where Name ='$name' AND Password ='$password' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if ($num=1)
    {
        $login=true;
        header("Location:Student_Dashboard.php");
    }
    else
    {
        $showError="PASSWORD DO NOT MATCH";
    }

}
?>
