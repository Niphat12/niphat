<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นิพัทธ์ ชาญศรี(เก้า)</title>
</head>

<body>
<h1>นิพัทธ์ ชาญศรี(เก้า)</h1>

<form method="post"action="">
กรอกตัวเลข<input type="number"name="a" autofocus required>
<button type="submit"name="Submit">OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])){
	$gender = $_POST['gender'];
if ($gender == 1) {
    echo "เพศชาย";
} elseif ($gender == 2) {
    echo "เพศหญิง";
} elseif ($gender == 3) {
    echo "เพศทางเลือก";
}
}
?>



</body>
</html>