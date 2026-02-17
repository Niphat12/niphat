
<meta charset="utf-8">
<?php
    include_once("connectDb.php");
    $id = $_GET['id'];
    $sql2 = "DELETE FROM 'regions' WHERE r_id='{$id}"; 
    mysqli_query($conn, $sql2) or die ("ลบไม่ได้ ");
	
	echo "<script>";
	echo "window.location='a.php';";
	echo "</script>";

?>