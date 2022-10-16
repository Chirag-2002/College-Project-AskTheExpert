<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style2(Dashboard).css">
    <link rel="stylesheet" type="text/css" href="Style(Career Page).css">
    <title>Ethical Hacking Page </title>
  </head>


<body class="d-flex">
 
  <nav class="Flex-box navbar navbar-expand-lg navbar-light bg-warning vh-100 w-25">
      <div class="Flex-box container-fluid nav-design">
        <img src="./Images/Student image 1.png" class="w-75"  alt="WELCOME">
        <h1 class="text-primary text-center fs-1 fw-bolder">DASHBOARD</h1>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav row m-auto fs-5 fw-bold ">
            <li class="nav-item col-12">
              <a class="nav-link" aria-current="page" href="Student_Dashboard.php">Home</a>
            </li>
            <li class="nav-item dropdown col-12 ">
              <a class="nav-link dropdown-toggle" href="Student_Dashboard.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Skill
              </a> 
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item" href="#">Ethical Hacking</a></li>
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

  <div class="container">
    <div class="table-responsive">
    <h1 class="text-center fs-3 m-5 text-success">LIST OF EXPERT TUTOR IN ETHICAL HACKING</h1>
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Skills</th>
          <th scope="col">Mobile Number</th>
        </tr>
      </thead>
      <tbody>
      <?php
      include "Database_Connection.php";
      $selectquery="SELECT  `Name`, `Skills`, `Mobile_Number` FROM `tutor` WHERE Skills='Ethical Hacking'";
      $query=mysqli_query($conn,$selectquery);
      $nums=mysqli_num_rows($query);
      while ($res=mysqli_fetch_array($query)){
      ?>
        <tr>
        <td><?php echo $res['Name'] ?></td>
        <td><?php echo $res['Skills'] ?></td>
        <td><a href="<?php echo 'https://wa.me/'.$res['Mobile_Number']?>" target="_blank"><img src="./Images/Whatsapp_icon.png"<?php echo $res['Mobile_Number']?>></a></td>
      </tr>
  <?php
    }
      ?>
       
      </tbody>
    </table>
    </div>
</div>




  
  
  

    
    

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>