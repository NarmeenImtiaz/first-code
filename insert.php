<?php
include("db_conn.php");
if(isset($_POST['btnsub']))
{
	$stud_name = $_POST['name'];
	$Stud_rno = $_POST['rno'];
	$Class_name = $_POST['cname'];
	$Stud_section =$_POST['Section'];



	// insert data for subjects
	

$query = "INSERT INTO `stud_table`(`name`, `roll_No`, `Class_Name`, `section`) VALUES ('$stud_name','$Stud_rno','$Class_name','$Stud_section')";
 $run = mysqli_query($conn, $query);
 if ($run) {
 	echo "Run successfully";
 }
 else {
 	echo "Found Error";
 }


 /*add subject*/
 
}
?>