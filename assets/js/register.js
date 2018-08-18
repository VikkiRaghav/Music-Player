$(document).ready(function() {
   $("#hideLogin").click(function() {
     $("#loginForm").hide();
     $("#loginForm").show();

   });

   $("#hideRegister").click(function() {
     $("#loginForm").show();
     $("#loginForm").hide();

   } );

});
