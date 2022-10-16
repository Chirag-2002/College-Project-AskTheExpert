<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style3(TutorR).css">
</head>
<body>
    <!-- THIS IS CODE FOR DESIGNING AND CREATING NAVBAR WITH BOOSTRAP -->
  <nav class="Nav_design my-navbar navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
      <div class="d-flex flex-column">
        <h1 class="text-primary text-center fs-4 fw-bolder">ASKTHEEXPERT</h1>
        <span class="text-primary fs-6 lh-sm">Start Your Career , Grow Your Career</span>
      </div>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="index.php">HOME</a>
          <a class="nav-link" href="Student_Login.php">STUDENT LOGIN</a>
          <a class="nav-link" href="#">TUTOR REGISTRATION</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- LOGIN PAGE CODE   -->
  <div class="Container absolute m-auto mb-5">
    <form name="Login" action="TutorRegistration.php" method="post">
      <div class="mb-3">
        <label for="Name" class="form-label">Name : </label>
        <input type="text" class="form-control" id="Name" name="Tutor_Name" />
      </div>
      <div class="mb-3">
       <label for="Email">Email:</label>
       <input type="email" class=" form-control" name="Tutor_Email" id="Email">
      </div>
      <div class="mb-3">
        <label for="Skills" class="form-label">Enter Your Specialization : </label>
        <input type="text" class="form-control" id="Skills" name="Tutor_Skills" />
      </div>
      <div class="mb-2">
        <label for="Mobile_No">Enter Your Mobile No :</label>
        <input type="number" class="form-control" name="Tutor_Mob" id="Mobile_No">
      </div>
      <button type="submit" class="btn-design btn btn-outline-success text-light">
        Register
      </button>
    </form>
  </div>
  
 <!-- FOOTER USING BOOSTRAP -->
 <div class="footer_container container-fluid fixed-bottom ">
    <footer class="py-3 my-2">
      <ul class="nav justify-content-center border-bottom-5-light pb-3 mb-3">
        <li class="nav-item"><a href="index.php" class="nav-link px-2">HOME</a></li>
        <li class="nav-item">
          <a href="Student_Login.php" class="nav-link px-2">STUDENT LOGIN</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2">TUTOR REGISTRATION</a>
        </li>
      </ul>
      <p class="text-center">
        © 2022 ASKTHEEXPERT-Start Your Career , Grow Your Career
      </p>
    </footer>
  </div>
  <!-- JS LINK -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>
</html>