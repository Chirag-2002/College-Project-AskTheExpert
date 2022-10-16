<?php
include "Database_Connection.php";

$name = $_POST['Student_Name'];
$education = $_POST['Student_Education'];
$password = $_POST['Student_Password'];
$duplicatemsg="";
$datamsg="";
$RePmsg="";

if ($name==Null or $password==Null or $education==Null)
{
  $nmsg="";
  $pmsg="";
  $emsg="";

  if ($name==Null)
  {
    $nmsg="Please enter your name";
  }
  elseif ($password==Null)
  {
    $pmsg="Please enter your password";
  }
  elseif ($education==Null)
  {
    $emsg="Please enter your education details";
  }
  header("Location:index.php");
}
else
{
  // if ($password==$R_Password)
  // {
    $query="select * from  student where Name ='$name' && Education = '$education' && Password='$password' ";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
    if($num==1){
      $duplicatemsg =  "You have already register . Please Try To Login";
    }
    else
    {
      $new_query= "insert  into student(Name , Education , Password) values ('$name' , '$education' , '$password')";
      $insert = mysqli_query($conn,$new_query);

      if($insert)
      {
        session_start();
        $_SESSION['message'] = "Thank you $name for register";
        header("Location: Student_Login.php");
      }
      else 
      {
        $datamsg="Some technical problem is there from our side . Please try again later . Sorry ! For Inconvience";
      }
    }
}
?>