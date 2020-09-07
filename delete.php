<mate charset ="utf-8" />
<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php include ('config.php'); 



//สร้างตัวแปร
$p_id = $_POST['p_id'];



//แก้ไขข้อมูล
$sql = " DELETE FROM tb_product WHERE p_id='$p_id' ";

$result = mysqli_query($db, $sql) or die ("Error in query: $sql " . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($db);


if ($result){

}
else {

}
?>