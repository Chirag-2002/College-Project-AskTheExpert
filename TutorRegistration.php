<?php
include "Database_Connection.php";

$name = $_POST['Tutor_Name'];
$email= $_POST['Tutor_Email'];
$skills= $_POST['Tutor_Skills'];
$number=$_POST['Tutor_Mob'];
$duplicatemsg="";
$datamsg="";

if ($name==Null or $email==Null or $skills==Null or $number==Null)
{
  $nmsg="";
  $emsg="";
  $smsg="";
  $mobmsg="";

  if ($name==Null)
  {
    $nmsg="Please enter your name";
  }
  elseif ($email==Null)
  {
    $emsg="Please enter your email";
  }
  elseif ($skills==Null)
  {
    $smsg="Please enter your specialization";
  }
  elseif ($number==Null)
  {
    $mobmsg="Please enter your mobile number";
  }
  header("Location:Tutor_Registration.php");
}
else
{
    $query="select * from  tutor where Name ='$name' && Email = '$email' && Skills='$skills' && Mobile_Number='$number' ";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
    if($num==1){
      $duplicatemsg =  "You have already register . ";
    }
    else
    {
      $new_query= "insert  into tutor(Name ,Email,Skills,Mobile_Number) values ('$name' , '$email' , '$skills','$number')";
      $insert = mysqli_query($conn,$new_query);

      if($insert)
      {
        session_start();
        $_SESSION['message'] = "Thank you $name for register";
        header("Location: Tutor_Registration.php");
      }
      else 
      {
        $datamsg="Some technical problem is there from our side . Please try again later . Sorry ! For Inconvience";
      }
    }

}
?>