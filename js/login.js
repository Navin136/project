$(document).ready(function(){
  $("#sub").click(function(){
    let un=$("#uname").val();
    let ps=$("#passwd").val();
    function vldtlogin(){
      if (un == "") {
        alert("UserName must be filled");
        return;
      }
      if (ps == "") {
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
            localStorage.setItem("username",un);
            localStorage.setItem("passwd",ps);
            window.location.href="profile.html";
          }
        }
    });
  });
});