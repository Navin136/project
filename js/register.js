$(document).ready(function(){
    $("#subbtn").click(function() {
        $.ajax({
            url: "php/register.php",
            type: "post",
            data: $("#regform").serialize(),
            success: function(res){
                alert(res);
            }
        });
    });
});