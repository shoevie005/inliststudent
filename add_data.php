<?php include 'db_conn.php';

if(isset($_POST['add_students'])){
    $student_id = $_POST['student_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gen = $_POST['gen'];
    $mssg = $_POST['mssg'];

    // Insert data into the 'graduates' table (replace 'graduates' with the actual table name)
    $query = "INSERT INTO graduates (student_id, first_name, middle_name, last_name, gender, message) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->execute([$student_id, $fname, $mname, $lname, $gen, $mssg]);
        header('location:home.php?insert_msg=The data has been successfully added');
        exit();
    } else {
        die("Query Failed" . mysqli_error());
    }
}
?>
