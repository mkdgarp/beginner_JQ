<?php
include "config.php";

    $sql = "INSERT INTO tb_product (p_name, p_price, p_amount, p_detail, c_id) 
    VALUES ('".$_POST["p_name"]."','".$_POST["p_price"]."','".$_POST["p_amount"]."','".$_POST["p_detail"]."','".$_POST["c_id"]."')";
    $query = mysqli_query($db,$sql);

    if($query) {
		echo json_encode(array('status' => '1','message'=> 'บันทึกข้อมูลสำเร็จ'));
	}
	else
	{
		echo json_encode(array('status' => '0','message'=> 'เกิดข้อผิดพลาดจ้าาา'));
	}

	mysqli_close($db);

    ?>