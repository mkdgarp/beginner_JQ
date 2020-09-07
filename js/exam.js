$(document).ready(function(){
    $("#sendOne").click(function(){

    $(":input + span.require").remove();  
    $(":input").each(function(){  
        $(this).each(function(){      
            if($(this).val()==""){  
                $(this).after("<span class=require><small style='color:red'>* ไม่พบข้อมูล</small></span>");  
            }  
        });  
    });  
    if($(":input").next().is(".require")==false){  
            $.ajax({
        type: "POST", //เมธอด
        url: "procress.php", //ปลายทาง
        data: $("#formOne").serialize(), //ตัวแปรที่จะส่ง ในที่นี้ส่ง Form ที่มี id = formOne
        success: function(result) {
        formOne.reset()
        alert("Success :D");
         // reset form
        /*
            if(result.status == 1) // Success
            {
                alert("Success :D"); 
            }
            else // Err
            {
                alert("Error :(");
            }*/
            //อัพรูป
            /*$.ajax({
                url: "upload.php",
                type: "POST",
                data: formData,
                processData: false, //Not to process data
                contentType: false, //Not to set contentType
                success: function (data) {
                    alert(data);
                }
            });*/
        }
        
    });
    }else{  
        return false;  
    }  
    });
});
