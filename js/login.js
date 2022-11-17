$(document).ready(function(){
  $("#sub").click(function(){
    function vldtlogin(){
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
    }
    $.ajax({
        url: "php/login.php",
        type: "POST",
        data: $("#loginform").serialize(),
        success: function(phpresponse){
          $("#result").html(phpresponse);
          if(phpresponse=="Login success"){
            window.location.href="profile.html";
          }
        }
    });
  });
});