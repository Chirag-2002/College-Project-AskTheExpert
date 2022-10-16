<?php
include "Database_Connection.php";

session_start();
if(isset($_SESSION['message'])) 
{
   $Message = $_SESSION['message'];
   unset($_SESSION['message']);
   echo $Message;
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Style2(Dashboard).css">

    <title>Student Dashboard Page</title>
  </head>


<body class="d-flex">


    <nav class="Flex-box navbar navbar-expand-lg navbar-light bg-warning vh-100 w-25">
      <div class="Flex-box container-fluid nav-design">
        <img src="./Images/Student image 1.png" class="w-75"  alt="WELCOME">
        <h1 class="text-primary text-center fs-1 fw-bolder">DASHBOARD</h1>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav row m-auto fs-5 fw-bold ">
            <li class="nav-item col-12">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown col-12 ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Skill
              </a> 
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item" href="Ethical_Hacking.php">Ethical Hacking</a></li>
               <li><a class="dropdown-item" href="Web_Dev.php">Web Development</a></li>
               <li><a class="dropdown-item" href="Data_Science.php">Data Science</a></li>
               <li><a class="dropdown-item" href="AI.php">Aritificial Intelligence</a></li>
               </ul>
              </li>
              <li class="nav-item col-12">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
            </ul>
          </div>
        </div>
    </nav>
    
<div class="accordion m-3" id="accordionExample">
  <h1 class="text-center">COMMON QUESTIONS ASKED WHILE STARTING THE CAREER IN THIS FIELD </h1>
  <div class="accordion-item bg-light text-dark">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-primary text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        WEB DEVELOPMENT
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex">
      <img src="./Images/Web dev 1.jpg" alt="" width="350" class="align-self-end">
        <ol>
          <li>STARTING WEB DEVELOPMENT IN 2022 IS CORRECT CHOICE ?</li>
          <li>ROADMAP TO LEARN WEB DEVELOPMENT</li>
          <li>HOW TO FIND WEB DEVELOPMENT SPECIFIC COMPANY FOR JOB ?</li>
          <li>WHICH SKILLS A BEGINNER SHIOULD HAVE WHILE STARTING WEB DEVELOPMENT ? </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item accordion-item bg-light text-dark">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ETHICAL HACKING
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex">
      <img src="./Images/Ethical H.jpg" alt="" width="350" class="align-self-end">
       <ol>
        <li>IS ETHICAL HACKINH LEGAL ?</li>
        <li>HOW LONG DOES IT TAKE TO BECOME A ETHICAL HACKER ? </li>
        <li>CAN WE LEARN ETHICAL HACKING WITHOUT CODING ?</li>
        <li>WHAT IS SALARY OF ETHICAL HACKER ? </li>
       </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item accordion-item bg-light text-dark">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-primary text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ARTIFICIAL INTELLIGENCE
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex">
      <img src="./Images/AI.jpg" alt="" width="350" class="align-self-end">
        <ol>
          <li>WHAT SHOULD I KNOW BEFORE STARTING AI ?</li>
          <li>WILL AI STEAL THE JOBS ?</li>
          <li>WHAT SKILLS IS REQUIRED TO START A AI ?</li>
          <li>ROADMAP TO START A AI ? </li>
        </ol>
      </div>
    </div>
  </div>
  <div class="accordion-item accordion-item bg-light text-dark">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        DATA SCIENCE
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex">
      <img src="./Images/Data S.jpg" alt="" width="350" class="align-self-end">
        <ol>
          <li>ROADMAP TO START A DATA SCIENCE </li>
          <li>HOW MUCH SHOULD I KNOW TO START A DATA SCIENCE ?</li>
          <li>HOW DO I PREPARE FOR MY FIRST DATA SCIENCE JOB ?</li>
          <li>WHAT ARE THE BEST COURSE TO LEARN DATA SCIENCE ? </li>
        </ol>
      </div>
    </div>
  </div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
 </script>

</body>
</html>


