<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebProgramming";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if ($conn) {
    echo"it is connected";
    }
//sql = "INSERT INTO student (name, email, gender, date_of_birth)
//VALUES ('Ara','ara@gmail.com','male','2023-04-09')";

//if (mysqli_query($conn, $sql)) {
//echo "New record created successfully";
//} else {
//echo mysqli_error($conn);
//}

//$sql= "UPDATE student set name='yad' where name=mohammed'";

//$sql = "SELECT * FROM student ";
$sql = "SELECT * FROM student LIMIT 1,5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo " - Name: ".$row["name"]."<br>";
}
} else {
echo "No records";
}
?>