<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>นิพัทธ์ ชาญศรี (เก้า)</title>
</head>

<body>
    <h1>ข้อมูลภาค -- นิพัทธ์ ชาญศรี (เก้า)</h1>

    <form method="post" action="">
        ชื่อภาค: <input type="text" name="rname" autofocus required>
        <button type="submit" name="Submit">บันทึก</button>
    </form>
    <br>

<?php
if(isset($_POST['Submit'])) { // เพิ่มปีกกาเปิด
    include_once("connectDb.php");
    $rname = $_POST['rname'];
    
    // แก้ไข: เปลี่ยน 'regions' เป็น `regions` หรือ regions และตรวจสอบจำนวน Column ให้ตรงกับ DB
    $sql2 = "INSERT INTO `regions` VALUES (NULL, '{$rname}')"; 
    mysqli_query($conn, $sql2) or die ("Insert Error: " . mysqli_error($conn));
} // เพิ่มปีกกาปิด
?>

    <table border="1">
        <tr>
            <th>รหัสภาค</th>
            <th>ชื่อภาค</th> 
        </tr>
<?php
    include_once("connectDb.php"); // ตรวจสอบชื่อไฟล์ให้ตรงกัน (connectDb.php vs connectDB.php)
    $sql = "SELECT * FROM `regions` ORDER BY `r_id` ASC";
    $rs = mysqli_query($conn , $sql); 

    while($data = mysqli_fetch_array($rs)){
?>
        <tr>
            <td><?php echo $data['r_id'];?></td>
            <td><?php echo $data['r_name'];?></td>
        </tr>
<?php } ?> 
    </table>

</body>
</html>