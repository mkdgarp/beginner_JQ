//del

$(function(){
    $(".deleteItem").on("click",function(event){
    
    event.preventDefault();
    var ID = $(this).attr("item_id");
    var dataString='action=delete&p_id=' + ID;
            
    if(confirm("ต้องการจะลบข้อมูลนี้ใช่หรือไม่!")){
        $(this).parent("td").parent("tr").fadeOut("slow");
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
                
            }
        });//สิ้นสุดการส่งข้อมูล
    }
    
});
});

//edit
/*
$(function(){
    $(".editItem").on("click",function(event){
    
        $(this).parent("td").parent("tr").fadeOut("slow");
        var formTwo = document.getElementById("formTwo");
        var fd = new FormData(formTwo);
        $.ajax({
            url: "edit.php",
            data: $("#formTwo").serialize(),
            type: 'POST',
            success: function (dataofconfirm) {
                // do something with the result
            }
        });
        
    
    
});
$('#myModal').modal('hide');
});
*/
