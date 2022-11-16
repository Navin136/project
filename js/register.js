$(document).ready(function(){
    $("#subbtn").click(function(){
        $.ajax({
            url: "php/register.php",
            type: "POST",
            data: $("#regform").serialize(),
            success: function(){
            }
        });
        // $.get("php/register.php",function(data){
        //         alert(data);
        // });
    });
});