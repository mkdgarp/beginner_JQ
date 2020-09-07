<?php 
include "config.php";
?>
<script language="javascript">
		function IsNumeric(sText,obj)
		{
			var ValidChars = "0123456789.";
			var IsNumber=true;
			var Char;
				for (i = 0; i < sText.length && IsNumber == true; i++) { 
					Char = sText.charAt(i); 
					if (ValidChars.indexOf(Char) == -1) {
						 IsNumber = false;
					}
				}
				if(IsNumber==false){
					obj.value=sText.substr(0,sText.length-1);
				}
		  }
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formTwo").validationEngine();
		});

	</script>
                    <hr>
                    </div>
                    <div class="container-fluid col-md-12" style=" padding-left: 5em;padding-right: 5em;"> 
                    <b>Result</b>
                    <div class="table table-responsive">
                        <table class="table table-hover" border="0">
                    <thead align="center">
                        <tr>
                        <th scope="col" >ลำดับ</th>
                        <th >ชื่อสินค้า</th>
                        <th >รายละเอียด</th>
                        <th >ราคา</th>
                        <th>จำนวน</th>
                        <th>ประเภทสินค้า</th>
                        <th style="color:yellow;background-color:black;">แก้ไขสินค้า</th>
                        <th style="color:red;background-color:black;">ลบสินค้า</th>
                        </tr>
                            </thead>
                        <tbody align="center">
                            <?php
                            
                            $sql="SELECT * FROM tb_product ORDER BY p_id ASC";
                            $result=$db->query($sql);
                            $i=0;
                            while($row=$result->fetch_array(MYSQLI_BOTH)){
                            $i++;
                            ?>
                        <tr >
                        <td>
                        <?=$i?>
                            </td>
                            
                        <td >		  
                            <?=$row['p_name']?>
                            </td>
                            
                        <td>
                            <?=$row['p_detail']?>
                            </td>
                            
                        <td >
                            <?=$row['p_price']?>
                            </td>
                        <td >

                            <?=$row['p_amount']?>
                            </td>
                        <td >
                            
                            <?php 
                                if ($row['c_id'] == 1) {
                                    $row['c_id'] = "อาหาร";
                                    ?>
                                    <?=$row['c_id']?>
                                <?php
                                } else {
                                    $row['c_id'] = "เสื้อผ้า";
                                    ?>
                                    <?=$row['c_id']?>
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                            <a type="input" class="btn btn-block btn-outline-warning btn-xs glyphicon glyphicon-trash del-co" 
                            href="#myModal<?php echo $row['p_id']; ?>" data-toggle="modal"  data-toggle="tooltip" title="แก้ไข">แก้ไข</a>

    </td>
    <td>
	<a item_id="<?=$row['p_id']?>" class="deleteItem btn btn-outline-danger btn-block"></i>
 ลบข้อมูล</a>
	</td>
                        <?php
                            }
                        ?>
                        </tr>
                    </tbody>
                    </table>
                        </div>

                </div>
  <!-- Modal -->
  <?php

  $result = $db->query("SELECT * FROM tb_product JOIN tb_category ON tb_product.c_id = tb_category.c_id ORDER BY tb_product.p_id ASC");
     foreach ($result as $key => $row) {

                            
                            /*$sql="SELECT * FROM tb_product JOIN tb_category ON tb_product.c_id = tb_category.c_id ORDER BY tb_product.p_id ASC";
                            $result=$db->query($sql);
                            
                            while($row=$result->fetch_array(MYSQLI_BOTH)){
                            */
                            ?>

  <div class="modal fade bd-example-modal-lg" id="myModal<?php echo $row['p_id']; ?>" role="dialog">
      
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      
      <div class="modal-content">
          
        <div class="modal-header" >
            
            <h4 ><b>แก้ไข </b> </h4>&nbsp;&nbsp;<h6>เลข&nbsp;ID:<?=$row['p_id']?></h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
        <div class="modal-body">
            
        <form id="formTwo" name="formTwo" method="POST" action="index.php?page=edit" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">ชื่อสินค้า</label>
                        <input type="hidden" id="p_id" name="p_id" value="<?=$row['p_id']?>">
                            <input type="text" class="form-control " id="p_name" name="p_name" placeholder="ชื่อสินค้า" value="<?=$row['p_name']?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">ราคา</label>
                            <input type="text" class="form-control" id="p_price" name="p_price" placeholder="ราคา" onKeyUp="IsNumeric(this.value,this)" value="<?=$row['p_price']?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">จำนวนสินค้า</label>
                            <input type="text" class="form-control" id="p_amount" name="p_amount" placeholder="จำนวนสินค้า" onKeyUp="if(this.value*1!=this.value) this.value='' ;" value="<?=$row['p_amount']?>" >
                    </div>

                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="">คำอธิบาย</label>
                            <textarea type="text" class="form-control" id="p_detail" name="p_detail" placeholder="คำอธิบาย" rows="3" value="<?=$row['p_detail']?>" ><?=$row['p_detail']?></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">หมวดหมู่สินค้า</label>
                            <select class="form-control" name="c_id">
                            <option selected value="<?=$row['c_id']?>"><?=$row['c_name']?></option>
                            <option id="c_id" value="1">อาหาร</option>
                            <option id="c_id" value="2">เสื้อผ้า</option>
                            </select>
                    </div>
                    <span id='xx'></span>
                    <div id="divDataview"></div>
                    <!-- <div class="form-group col-md-2">
                        <label for="">อัพโหลดรูปภาพ</label>
                        <input id="p_picture" type="file" accept="image/*" name="p_picture" />
                    </div>-->
                    
                </div> 
                            
                            <button type="submit" class="btn btn-outline-success">แก้ไข</button>

                </form>

        </div>
        
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
        </div>
      </div>
      
    </div>
  </div> 
            </div>
              <!-- --><?php
                            }
                            ?>

<script>
  $(document).ready(function(){
    $('.sendBtn').click(function(){
        $('#xx').text($(this).data('id'));
    });
  })
</script>  

<script type="text/javascript" src="js/edit_del.js"></script>