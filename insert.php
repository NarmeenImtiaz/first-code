<?php
include("db_conn.php");
if(isset($_POST['savbtn']))
{
	$stud_name = $_POST['name'];
	$Stud_rno = $_POST['rno'];
	$Class_name = $_POST['cname'];
	$Stud_section =$_POST['section'];


$subject_numbers = $_POST['subnum'];
$subject_name = $_POST['subname'];
	
	

$sql1 = "INSERT INTO `student_table` (`name`, `roll_no`, `class_name`, `section`) VALUES ('$stud_name', '$Stud_rno', '$Class_name', '$Stud_section')";
$sql2 = "INSERT INTO `subject` (`Subjects_number`, `Sub_names`) VALUES ('$subject_numbers', '$subject_name')";

if ($conn->query($sql1) === true && $conn->query($sql2) === true) {
	echo "New records created successfully";
  } else {
	echo "Error: " . $sql1 . "<br>" . $conn->error;
	echo "Error: " . $sql2 . "<br>" . $conn->error;
  }


 
 
}
?>