$(document).ready(function(){
    $("#submit").click(function(){
        let username = localStorage.getItem("username");
        let passwd = =localStorage.getItem("passwd");
        let dob = localStorage.setItem("dob",$("#dob").val());
        let mobile = localStorage.setItem("mobile",$("#mobile").val());
        let state = localStorage.setItem("state",$("#state").val());
        $.ajax({
            url: "php/profile.php",
            type: "POST",
            data: {},
            success: function(phpresponse1){
                alert(phpresponse1);
            }
        });
    });
});