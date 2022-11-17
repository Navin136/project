$(document).ready(function(){
    if(!localStorage.getItem("username")){
        window.location.url="login.html";
    }
    $("#reset").click(function(){
        localStorage.clear();
        window.location.href="register.html";
    });
    $("#submit").click(function(){
        let username = localStorage.getItem("username");
        let passwd = localStorage.getItem("passwd");
        localStorage.setItem("dob",$("#dob").val());
        localStorage.setItem("mobile",$("#mobile").val());
        localStorage.setItem("state",$("#state").val());
        let dob = localStorage.getItem("dob");
        let mobile = localStorage.getItem("mobile");
        let state = localStorage.getItem("state");
        $.ajax({
            url: "php/profile.php",
            type: "POST",
            data: {username, passwd, dob, mobile, state},
            success: function(phpresponse){
                $("#container").hide();
                $("#result").html(phpresponse);
            }
        });
    });
});