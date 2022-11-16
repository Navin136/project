$(document).ready(function(){
    $("#subbtn").click(function(){
        let x = $("#uname").val();
        if (x == "") {
          alert("UserName must be filled");
          return;
        }
        x = $("#passwd").val();
        if (x == "") {
          alert("Password must be filled");
          return;
        }
        $.ajax({
            url: "php/register.php",
            type: "GET",
            data: http,
            success: function(){
            }
        });
    });
});