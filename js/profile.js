$(document).ready(function(){
    if(localStorage.getItem("username")){
        let username = localStorage.getItem("username");
        let passwd = localStorage.getItem("passwd");
        localStorage.setItem("dob",$("#dob").val());
        localStorage.setItem("mobile",$("#mobile").val());
        localStorage.setItem("state",$("#state").val());
        let dob = localStorage.getItem("dob");
        let mobile = localStorage.getItem("mobile");
        let state = localStorage.getItem("state");
        let mode = "display";
        $.ajax({
            url: "php/profile.php",
            type: "POST",
            data: {username, passwd, dob, mobile, state,mode},
            success: function(phpresponse){
                $("#result").html("");
                $("#result").html(phpresponse);
            }
        });
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
        let mode = "update";
        $.ajax({
            url: "php/profile.php",
            type: "POST",
            data: {username, passwd, dob, mobile, state,mode},
            success: function(phpresponse){
                $("#result").html(phpresponse);
            }
        });
    });
});