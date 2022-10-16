<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ASKTHEEXPERT-Start Your Career , Grow Your Career</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="style(index).css">
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
          <a class="nav-link" aria-current="page" href="#">HOME</a>
          <a class="nav-link" href="Student_Login.php">STUDENT LOGIN</a>
          <a class="nav-link" href="Tutor_Registration.php">TUTOR REGISTRATION</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- THIS IS CODE FOR DESIGNING AND CREATING THE HERO SECTION WITH BOOSTRAP -->
  <div class="Hero_Container container-fluid d-flex justify-content-between">
    <div class="intro_container d-flex flex-column justify-content-center align-items-center mb-3 p-10">
      <div>
        <pre class="fs-4 p-5 text-success fw-bolder">
             <span class="text-danger">ARE YOU SEARCHING FOR THE BEST ADVICE ? </span> 
             THEN YOU HAVE CAME IN THE RIGHT PLACE WHERE ,
             YOU WILL GET A BEST ADVICE FROM EXPERT TUTOR 
             FOR YOUR CAREER .
          </pre>
      </div>
      <!-- SUB PART OF HERO SECTION : CREATING A MODAL MEANS WHEN SOMEONE CLICK ON BUTTON A WINDOW WILL APPEAR .
        IN THAT WINDOW A REGISTRATION FORM IS THERE . -->
      <div>
        <button type="button" class="btn btn-outline-danger btn-sm text-light" data-bs-toggle="modal"
          data-bs-target="#exampleModal" data-bs-whatever="@mdo">
          REGISTER AS A STUDENT
        </button>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                STUDENT REGISTRATION FORM
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row" name="Registration" method="post" action="Registration.php">
                <div class="col-6 mb-2">
                  <label for="Name" class="col-form-label">Name :</label>
                  <input type="text" class="form-control" id="Name" name="Student_Name" />
                </div>
                <div class="col-6 mb-3">
                  <label for="Education" class="col-form-label">Education :</label>
                  <input type="text" name="Student_Education" id="Education" />
                </div>
                <div class="col-6 mb-3">
                  <label for="Password" class="col-form-label">Create New Password :</label>
                  <input type="password" name="Student_Password" id="Password" />
                </div>
                <div class="col-6 mb-3">
                  <label for="Password" class="col-form-label">Renter New Password :</label>
                  <input type="password" name="Student_R_Password" id="Password" />
                </div>
                <div class="col-6 mb-3">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-images">
      <img src="./Images/Career-1.png" class="img-fluid rounded float-right w-80" alt="..." />
    </div>
  </div>
   
  <!-- MAIN SECTION IS STARTED FROM HERE 
      FIRST PART OF THE MAIN SECTION : CARD DESIGN USING BOOTSTRAP  -->

      
  <h1 class="fs-6 text-light text-center mt-3">
    ASK THE CAREER GUIDANCE IN THE COMPUTER FIELD ON HIGHLY DEMAND SKILLS...
  </h1>
  <div class="row">
    <div class="card-design col card m-4" style="width: 15rem">
      <img src="./Images/Ethical Hacking.jpg" class="img-design card-img-top img-fluid" alt="ETHICAL HACKING" />
      <div class="card-body">
        <h1 class="fs-5 text-light text-center">ETHICAL HACKING</h1>
      </div>
    </div>
    <div class="card-design col card m-4" style="width: 18rem">
      <img src="./Images/Web Development.jpg" class="img-design card-img-top img-fluid" alt="WEB DEVELOPMENT" />
      <div class="card-body">
        <h1 class="fs-5 text-light text-center">WEB DEVELOPMENT</h1>
      </div>
    </div>
    <div class="card-design col card m-4" style="width: 18rem">
      <img src="./Images/Data Science.jpg" class="img-design card-img-top img-fluid" alt="DATA SCIENCE" />
      <div class="card-body">
        <h1 class="fs-5 text-light text-center">DATA SCIENCE</h1>
      </div>
    </div>
    <div class="card-design col card m-4" style="width: 18rem">
      <img src="./Images/Aritificial Intelligence.jpg" class="img-design card-img-top img-fluid"
        alt="ARTIFICIAL INTELLIGENCE" />
      <div class="card-body">
        <h1 class="fs-5 text-light text-center">ARTIFICIAL INTELLIGENCE</h1>
      </div>
    </div>
  </div>
  <!-- SECOND PART OF MAIN SECTION -->
  <h1 class="fs-6 text-light text-center mt-4">ROLE OF EXPERT TUTOR</h1>
  <div class="row">
    <div class="col-6">
      <img src="./Images/Expert Tutor.png" class="rounded float-start"alt="IMAGE OF EXPERT TUTOR IN ILLUSTRATION FORM" />
    </div>
    <div class="info_container card col-6 m-2" style="width: 40rem">
      <div class="card-body text-center">
        <h5 class="card-title text-center text-light">EXPERT TUTOR</h5>
        <p class="card-text text-light p-3">
          HELP THE STUDENT BY GIVING THE PROPER GUIDANCE SO , STUDENT CAN GROW
          THEIR CAREER
        </p>
        <a class="text-center m-auto" href="Tutor_Registration.php">GO TO Tutor Registration Page</a>
      </div>
    </div>
  </div>
  
<!-- FOOTER USING BOOSTRAP -->
<div class="footer_container container-fluid">
    <footer class="py-3 my-3 h-100">
      <ul class="nav justify-content-center border-bottom-5-light pb-3 mb-3 ">
        <li class="nav-item"><a href="#" class="nav-link px-2">HOME</a></li>
        <li class="nav-item"><a href="Student_Login.php" class="nav-link px-2">STUDENT LOGIN</a></li>
        <li class="nav-item"><a href="Tutor_Registration.php" class="nav-link px-2">TUTOR REGISTRATION</a></li>
      </ul>
      <p class="text-center">© 2022 ASKTHEEXPERT-Start Your Career , Grow Your Career</p>
    </footer>
</div>
<!-- JS LINK -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
        
</body>
</html>