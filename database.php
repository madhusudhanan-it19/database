<?php
$servername ="121.200.55.60:3307";
$username ="2019UIT1114";
$password ="2019UIT1114";
$dbname ="2019UIT1114";
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect-error) {
die("connection failed: " .$conn->connect-error);
}
$sql ="select s_no, enrollment_no, student_name, course_name from 2019UIT1114.student";
$result =$conn->query($sql);
echo  $result->num_rows;
if ($result->num_rows>0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
echo "s_no: ".$row["s_no"]."enrollment_no: ".$row[" student_name"]. " " .$row["course_name"]."<br />";
}
}
else 
{
echo "0 results";
}
$conn->close();
?>
