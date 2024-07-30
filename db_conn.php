<?php
$hostname = 'localhost';
$username = 'root';
$password = ''; 
$database = 'inliststudent';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Pagination variables
$limit = 5; // Number of records per page
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
$start = ($page - 1) * $limit; // Starting record for this page

// Fetch data from database with pagination
$sql = "SELECT * FROM graduates LIMIT $start, $limit";
$result = $conn->query($sql);

// Count total number of records for pagination
$total_records = mysqli_num_rows($conn->query("SELECT * FROM graduates"));
$total_pages = ceil($total_records / $limit);

// Previous and next page numbers
$prev_page = max($page - 1, 1);
$next_page = min($page + 1, $total_pages);
?>
