<?php
session_start();

if(isset($_SESSION['logged-in'])){
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List Webpage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <img src="uni.jpg" alt="logo" style="width:50px;" class="rounded-pill">
          <a class="navbar-brand" href="#">Central Philipines State University </a>
          <a class="navbar-brand" href="#"><span class="text-warning">(CP</span>SU)</a>
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dashboard</a>
              </li>

          <section class= "login">
            <form action="login.php" method="get">
            <input type="submit" class="nav-link" name="login_students" value="Login">
                </form>
            </section>

            <section class="register">
            <form action="register.php" method="get">
            <input type="submit" class="nav-link" name="register_students" value="Register">
            <a href="register.php"></a>
          </form>
        </section>
        </ul>
          </div>
        </div>


      
      </nav>
      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-mb-12 col-12">
              <div class="about-img">
                <img src="thumb.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8 col-mb-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">

                <h2>
                  About the Website 
                </h2>
                <p>Creating a student list website involves a harmonious integration of HTML, CSS, and PHP. HTML structures the content, defining the page layout and organizing student information. 
                  CSS brings aesthetic appeal, styling the website for a visually pleasing user experience. PHP plays a crucial role on the server side, dynamically generating and serving data from a database to populate the student list.
                   Together, these languages seamlessly collaborate to deliver a functional and well-designed website that showcases and manages the details of students information.</p>
                <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- porfolio section-->
       
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2>Content Creator</h2>
                
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-light pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                  <img src="vie.jpg" alt="" class="img-fluid">  
                  </div>
                  <h3 class="card-title">Shoevie Gustilo</h3>
                  <p class="lead">As a Programmer, I specialize in writing clean and efficient code across various programming languages.
                  I enjoy solving complex problems and implementing logical solutions.
                  </p>
                  <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-light pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                  <img src="beth.jpg" alt="" class="img-fluid">  
                  </div>
                  <h3 class="card-title">Elizabeth Gidor</h3>
                  <p class="lead">In the role of a Web Designer, I leverage my creativity and technical skills to craft visually appealing and user-friendly websites.
                  Proficient in HTML, CSS, and JavaScript, I design responsive layouts and intuitive interfaces that enhance the user experience.
                  </p>
                  <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-light pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                  <img src="yolly.jpg" alt="" style="width: 156px;" class="img-fluid">  
                  </div>
                  <h3 class="card-title">Yolly Mae Gonzales</h3>
                  <p class="lead">As a Debugger, I specialize in identifying and resolving issues within code to ensure the smooth and error-free operation of applications.
                  I possess a keen eye for detail and a systematic approach to troubleshooting.
                  </p>
                  <button class="btn bg-warning text-dark">Learn More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- masion and vision section -->

      <section id="service" class="service section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2>Mission & Vision</h2>
              
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <img src="uni.jpg" alt="logo" style="width: 80px;" class="rounded-pill">
                  <h3 class="card-tittle"> Philosophy</h3>
                  <p class="lead">Decent, affordable education for sustainable production and global competitiveness under an atmosphere of academic freedom</p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <img src="uni.jpg" alt="logo" style="width: 80px;" class="rounded-pill">
                  <h3 class="card-tittle"> Mission</h3>
                  <p class="lead">CPSU is committed tomproduce competent graduates who can generate and extend leading technologies in multi-diciplinary ereas beneficial to the communuty</p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>    <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <img src="uni.jpg" alt="logo" style="width: 80px;" class="rounded-pill">
                  <h3 class="card-tittle"> Vision</h3>
                  <p class="lead">CPSU as the leading technology-driven <br> multi-diciplinary University by <br> 2030 <br> </p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <!-- -->

      <sectiion id="team" class="team section-padding">
        <div class="container">
          <div class="row">
          
          <div class="section-header text-center pb-5">
            <h2>CONTACT US!</h2>
            
          </div>
        </div>
        </div>
        <div class="row">
          <center>
            <div class="card-body">
              <div class="card text-white  bg-dark pb-2">
              <center>
                <img src="uni.jpg" alt="CONTACT" style="width: 50px;" class="img-fluid rounded-circle">
              </center>
              <h5><i class="bi bi-telephone"></i>TEL. NO. #123 345 678</h5>
              <h5><i class="bi bi-phone"></i> +639173015565</h5>
              <h5><i class="bi bi-geo-alt-fill"></i> Brgy. Camingawan, Kabankalan City, Negros Occidental</h5>
              <h5><i class="bi bi-envelope"></i> cpsu_main@cpsu.edu.ph</h5>
              
              <p class="social">
                <i class="bi bi-twitter text-white mx-1"></i>
                <i class="bi bi-facebook text-white mx-1"></i>
                <i class="bi bi-linkedin text-white mx-1"></i>
                <i class="bi bi-instagram text-white mx-1"></i>
              </p>
            </center>
            </div>
            </div>
          </div>
        </div>
      </sectiion>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>