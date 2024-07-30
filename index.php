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
            <img src="uni.jpg"  alt="logo" style="width:50px;" class="rounded-pill">
          <a class="navbar-brand" href="#">Central Philipines State University </a>
          <a class="navbar-brand" href="#"><span class="text-warning">(CP</span>SU)</a>
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
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
      <!--about section -->

      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-mb-12 col-12">
              <div class="about-img">
                <img src="thumbnail.jpg"  alt="" class="img-fluid">
                <img src="campus.jpg"  alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-8 col-mb-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>
                  Central Philippines State University
                </h2>
                <p><h5>CPSU </h5> Is a state university in the Philippines, known for its commitment to providing quality education and contributing to community development. 
                  Here are some key aspects about Central Philippines State University: 
                  <h5> History: </h5>
                    CPSU traces its roots back to the Negros Occidental Agricultural School (NONAS), which was established in 1946 immediately after World War II.
                    Over the years, the institution underwent several transformations, becoming Negros Occidental Agricultural College (NOAC) and later, Negros State College of Agriculture (NSCA). 
                    
                    <h5>Campuses:</h5> 
                    CPSU is composed of multiple campuses, totaling 10 campuses and extension classes. These campuses are strategically located to serve various communities and regions.
                  
                    <h5>Academic Programs:</h5> 
                    The university offers a wide range of academic programs, including undergraduate and graduate courses in fields such as agriculture, technology, education, business, and more.
                    CPSU is committed to providing relevant and quality education to its students, preparing them for various careers and contributing to the development of their respective fields.
                  </p>
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
                <h2>Information</h2>
                
              </div>
            </div>
          </div>

          <div class="row">
        <div class="card text-center">
        <div class="card text-white text-center bg-light pb-2">
            <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="logo1.jpeg" alt="" class="img-fluid">  
                  </div>
                  <h4 class="card-title">Content</h4>
                  <p class="lead">A student listing is a structured collection of information about students enrolled in an educational institution. 
                  This listing typically includes essential details about each student for administrative and communication purposes. 
                  Here's a description of the fields you mentioned:
                      <br>
                      <h6 class="card-title">1. School ID:</h6> 
                  A unique identifier assigned to each student within the educational institution.
                  Used for tracking purposes, such as attendance, grading, and other administrative tasks.
                      <br>
                      <h6 class="card-title">2. First Name:</h6> 
                  The given or first name of the student.
                  Used for personal identification and communication.
                      <br>
                      <h6 class="card-title">3. Middle Name:</h6>
                  The middle name of the student, if applicable.
                  Some individuals have a middle name that can be used for further identification.
                      <br>
                      <h6 class="card-title">4. Last Name:</h6> 
                  The family or surname of the student.
                  Used for formal identification and records.
                      <br>
                      <h6 class="card-title">5. Gender:</h6> 
                  The biological or self-identified gender of the student.
                  Important for demographic analysis and for addressing individuals appropriately.
                      <br>
                      <h6 class="card-title">6. Message: </h6>
                  A field that might be used for special notes, messages, or comments related to the student.
                  This could include important information about the student's academic performance, behavior, or any other relevant details.
                      <br> <br>
                      A student listing is a valuable resource for educational institutions to manage student data efficiently. It aids in various administrative tasks, such as creating class rosters, generating reports, and facilitating communication between educators, students, and parents. Additionally, the inclusion of a message field allows for personalized notes or alerts that may be important for the student's academic journey. 
                  The overall goal is to have a well-organized and accessible record of each student's information within the educational system.
                  </p>
                  <button class="btn bg-warning text-dark">Learn More</button>
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
                  <h3 class="card-tittle"> PHILOSOPHY</h3>
                  <p class="lead">Decent, affordable education for sustainable production and global competitiveness under an atmosphere of academic freedom</p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <img src="uni.jpg" alt="logo" style="width: 80px;" class="rounded-pill">
                  <h3 class="card-tittle"> MISSION</h3>
                  <p class="lead">CPSU is committed tomproduce competent graduates who can generate and extend leading technologies in multi-diciplinary ereas beneficial to the communuty</p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>    <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <img src="uni.jpg" alt="logo" style="width: 80px;" class="rounded-pill">
                  <h3 class="card-tittle"> VISION</h3>
                  <p class="lead">CPSU as the leading technology-driven <br> multi-diciplinary University by <br> 2030 <br> </p>
                  <buttom class="btn btn-warning text-dark">Read More</buttom>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <!-- -->

      <section id="team" class="team section-padding">
        <div class="container">
          <div class="row">
          
          <div class="section-header text-center pb-5">
            <h2>CONTACT US!</h2>
            
          </div>
        </div>
        </div>
        <center>
        <div class="row">
          
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
            </div>
            </div>
          </div>
        </div>
      </center>
      </sectiion>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>