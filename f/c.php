<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>นายนิพัทธ์ ชาญศรี(เก้า)</title>
</head>

<body>

<h1>นายนิพัทธ์ ชาญศรี(เก้า)</h1>

<form method="post" action="">
  กรอกคะแนน:
  <input type="number" name="a" min="0" max="100" autofocus required>
  <button type="submit" name="Submit">OK</button>
</form>

<?php
if (isset($_POST['Submit'])) {

    $score = (int)$_POST['a'];

    // ตรวจช่วงคะแนน
    if ($score < 0 || $score > 100) {
        echo "<p style='color:red;'>❌ คะแนนต้องอยู่ระหว่าง 0 - 100</p>";
    } else {
        echo "<p>คะแนนที่ได้: <strong>$score</strong></p>";

        if ($score >= 80) {
            echo "เกรด A";
        } else if ($score >= 70) {
            echo "เกรด B";
        } else if ($score >= 60) {
            echo "เกรด C";
        } else if ($score >= 50) {
            echo "เกรด D";
        } else {
            echo "เกรด F";
        }
    }
}
?>

</body>
</html>
