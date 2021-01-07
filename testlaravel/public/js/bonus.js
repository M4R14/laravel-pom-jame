$(document).ready(function(){

    $('.deleteForm').click(function(evt){
evt.preventDefault();
swal({
    title:"คุณต้องการลบข้อมูลหรือไม่"
})
    });
});