<?php include 'header.php';?>
<?php include 'db_conn.php';?>


<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

$query = "SELECT * FROM `graduates` WHERE `id` = '$id'";

$result = mysqli_query($conn, $query);

if(!$result){
    die("Query Failed".mysqli_error());

}
else{
    
    $row = mysqli_fetch_assoc($result);


    }
}

?>

<?php

if (isset($_POST['update_students'])) {

    $student_id = $_POST['student_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gen = $_POST['gen'];
    $mssg = $_POST['mssg'];

    $query = "UPDATE `graduates` SET `student_id`='$student_id', `first_name`='$fname', `middle_name`='$mname', `last_name`='$lname', `gender`='$gen', `message`='$mssg' WHERE `id`='$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($conn));
    } else {
        header('location: home.php?update_msg= The data has been updated successfully');
    }
}
?>




<form action="update_page.php?id=<?php echo $id; ?>" method="post">
<div class="form-group">
        <label for="student_id">Student Id</label>
        <input type="text" name="student_id" class="form-control" value="<?php echo $row['student_id'];?>">
      </div>
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name'];?>">
      </div>
      <div class="form-group">
        <label for="mname">Middle Name</label>
        <input type="text" name="mname" class="form-control" value="<?php echo $row['middle_name'];?>">
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name'];?>">
      </div>
      <div class="form-group">
        <label for="gen">Gender</label>
        <input type="text" name="gen" class="form-control" value="<?php echo $row['gender'];?>">
      </div>
      <div class="form-group">
        <label for="mssg">Message</label>
        <input type="text" name="mssg" class="form-control" value="<?php echo $row['message'];?>">
      </div>
      <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
    </form>