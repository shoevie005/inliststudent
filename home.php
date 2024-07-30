<?php
session_start(); 
if(!isset($_SESSION['logged-in'])){
    $msg = "Access denied!";
    header("Location: login.php?msg=$msg");
    exit(); 
}

include 'db_conn.php';
include 'header.php';

// Pagination
$limit = 5; 
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Search
$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT * FROM `graduates`";

// Add search condition if search term is provided
if(!empty($search)) {
    $query .= " WHERE `first_name` LIKE '%$search%' OR `last_name` LIKE '%$search%' OR `student_id` LIKE '%$search%'";
}

$query .= " LIMIT $start, $limit";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("query Failed" . mysqli_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .box1 {
            margin-bottom: 20px;
        }
        .pagination {
            margin-top: 20px;
        }
        .search-input {
            border-radius: 20px; 
        }
        .search-bar-sm {
            width: 200px; /* Adjust width as needed */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6"> <!-- Adjusted column size -->
            <div class="box1">
                <h2 class="text-center">Students Information</h2>
                <form method="GET" action="" class="mb-3"> <!-- Added margin-bottom for better spacing -->
                    <div class="input-group">
                        <input type="text" name="search" class="form-control search-input" placeholder="Search by name or student ID" value="<?php echo $search; ?>"> <!-- Added form-control class for nicer search bar -->
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-lg">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 text-end"> <!-- Adjusted column size and aligned content to the right -->
            <button class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
            <a href="logout.php" class="btn btn-info" type="button">Logout</a>
        </div>
    </div>

    <main class="container mt-4">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Id</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Message</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['middle_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><a href="update_page.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination d-flex justify-content-center"> 
                <div class="pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo $prev_page; ?>">Previous</a>
        </li>
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<li class='page-item";
            if ($i == $page) {
                echo " active";
            }
            echo "'><a class='page-link' href='?page=" . $i . "'>" . $i . "</a></li>";
        }
        ?>
        <li class="page-item <?php echo ($page == $total_pages) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo $next_page; ?>">Next</a>
        </li>
    </ul>
</div>
                </div>
            </main>
        </div>

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
      
</body>
</html>



<?php
if (isset($_GET['insert_msg'])) {
  echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>

<?php
if (isset($_GET['delete_msg'])) {
  echo "<h6>".$_GET['delete_msg']."</h6>";
}
?>

<?php
if (isset($_GET['update_msg'])) {
  echo "<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php
if (isset($_GET['login_msg'])) {
  echo "<h6>".$_GET['login_msg']."</h6>";
}
?>

<form action="add_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="form-group">
        <label for="student_id">Student Id</label>
        <input type="text" name="student_id" class="form-control">
      </div>
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" class="form-control">
      </div>
      <div class="form-group">
        <label for="mname">MIddle Name</label>
        <input type="text" name="mname" class="form-control">
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" class="form-control">
      </div>
      <div class="form-group">
        <label for="gen">Gender</label>
        <input type="text" name="gen" class="form-control">
      </div>
      <div class="form-group">
        <label for="mssg">Message</label>
        <input type="text" name="mssg" class="form-control">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
      
    </div>
  </div>
</div>
</form>

 