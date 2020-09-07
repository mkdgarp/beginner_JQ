<?php include "config.php"; 

//echo $_POST['p_id'],$_POST['p_name'],$_POST['p_detail'],$_POST['p_price'],$_POST['p_amount'],$_POST['c_id'];

$sql="UPDATE tb_product set
			p_name='$_POST[p_name]',p_price='$_POST[p_price]',p_amount='$_POST[p_amount]',p_detail='$_POST[p_detail]'
            ,c_id='$_POST[c_id]' where p_id='$_POST[p_id]'";
			$result=$db->query($sql);
             $query = mysqli_query($db,$sql);

    if($query) {
        echo json_encode(array('status' => '1','message'=> 'อัพเดตข้อมูลสำเร็จ'));
        ?>
            <script language="javascript"> window.location.href='index.php?page=result'; </script>
            <?php
	}
	else
	{

        echo json_encode(array('status' => '0','message'=> 'เกิดข้อผิดพลาดจ้าาา'));
        ?>
        <script language="javascript"> window.location.href='index.php?page=result'; </script>
        <?php
	}

	mysqli_close($db);

    ?>