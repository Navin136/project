$(document).ready(function(){
    function vldt(){
        let x = $("#uname").val();
        if (x == "") {
          alert("UserName must be filled");
          return;
        }
        let pw = $("#passwd").val();
        if (x == "") {
          alert("Password must be filled");
          return;
        }
        if(pw.length<5){
            alert("Password must be more than 5 characters");
            return;
        } 
        let cpw = $("#confirmpasswd").val();
        if (x == "") {
          alert("Confirm Password must be filled");
          return;
        }
        if(pw!=cpw) {
            alert("Passwords doesn't match");
          return;
        }
    }
    $("#submit").click(function(){
        vldt();
        $.ajax({
            url: "php/register.php",
            type: "POST",
            data: $("#regform").serialize(),
            success: function(phpresponse){
                $("#regform").hide();
                $("#result").html(phpresponse);
            }
        });
        // $.get("php/register.php",function(data){
        //         alert(data);
        // });
        
    });
});