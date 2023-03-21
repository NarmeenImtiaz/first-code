<?php
include("db_conn.php");
if(isset($_POST['btn']))
{
	$stud_name = $_POST['name'];
	$Stud_rno = $_POST['rno'];
	$Class_name = $_POST['cname'];
	$Stud_section =$_POST['Section'];

$query = "INSERT INTO `stud_table`(`Name`, `Roll No`, `Class Name`, `Section`) VALUES ('$stud_name','$Stud_rno','$Class_name','$Stud_section')";
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