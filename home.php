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
			jQuery("#formOne").validationEngine();
		});

    </script>

<div class="container">

            <form id="formOne" name="formOne" method="POST" action="" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">ชื่อสินค้า</label>
                            <input type="text" class="form-control " id="p_name" name="p_name" placeholder="ชื่อสินค้า" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">ราคา</label>
                            <input type="text" class="form-control" id="p_price" name="p_price" placeholder="ราคา" onKeyUp="IsNumeric(this.value,this)" >
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">จำนวนสินค้า</label>
                            <input type="text" class="form-control" id="p_amount" name="p_amount" placeholder="จำนวนสินค้า" onKeyUp="if(this.value*1!=this.value) this.value='' ;" >
                    </div>

                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="">คำอธิบาย</label>
                            <textarea type="text" class="form-control" id="p_detail" name="p_detail" placeholder="คำอธิบาย" rows="3" ></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">หมวดหมู่สินค้า</label>
                            <select class="form-control" name="c_id">
                            <option selected value="">เลือก...</option>
                            <option id="c_id" value="1">อาหาร</option>
                            <option id="c_id" value="2">เสื้อผ้า</option>
                            </select>
                    </div>
                    <!-- <div class="form-group col-md-2">
                        <label for="">อัพโหลดรูปภาพ</label>
                        <input id="p_picture" type="file" accept="image/*" name="p_picture" />
                    </div>-->
                    
                </div> 
                <button type="button" class="btn btn-primary" id="sendOne" value=" ">ส่งค่า</button>
                </form>
                <div id="alertJa"  role="alert"></div>

                <script type="text/javascript" src="js/exam.js"></script>
                