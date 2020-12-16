<?php
include_once 'assets/conn/dbconnect.php';
// include_once 'assets/conn/server.php';
?>



<!-- login -->
<!-- check session -->


<!-- register -->
<?php
if (isset($_POST['signup'])) {
$doctorFirstName = mysqli_real_escape_string($con,$_POST['doctorFirstName']);
$doctorLastName  = mysqli_real_escape_string($con,$_POST['doctorLastName']);
$doctorEmail     = mysqli_real_escape_string($con,$_POST['doctorEmail']);
$icDoctor     = mysqli_real_escape_string($con,$_POST['icDoctor']);
$password         = mysqli_real_escape_string($con,$_POST['password']);
$month            = mysqli_real_escape_string($con,$_POST['month']);
$day              = mysqli_real_escape_string($con,$_POST['day']);
$year             = mysqli_real_escape_string($con,$_POST['year']);
$doctorDOB       = $year . "-" . $month . "-" . $day;
$doctorGender = mysqli_real_escape_string($con,$_POST['doctorGender']);
//INSERT

$query = " INSERT INTO doctor (  icDoctor, password, doctorFirstName, doctorLastName,  doctorDOB, doctorGender,   doctorEmail )
VALUES ( '$icDoctor', '$password', '$doctorFirstName', '$doctorLastName', '$doctorDOB', '$doctorGender', '$doctorEmail' ) ";
$result = mysqli_query($con, $query);
header("Location: index.php");

// echo $result;
//if( $result )
//{
}
