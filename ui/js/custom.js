$(document).ready(function(){

	//Activate sidenav
	$(".button-collapse").sideNav();

  $('select').material_select();

  $('.dropify').dropify();

	//Owl carousel
	 $("#owl-featured").owlCarousel({
        navigation : false,
        autoplay: true,
    });
       $("#owl-featured").owlCarousel({
       	navigation : false,
        autoplay: true,
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,2],
        itemsTablet: [768,2],
        itemsTabletSmall: [568,1],
        itemsMobile : [479,1]
       });

       $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 50 // Creates a dropdown of 15 years to control year
      });

      //FORM VALIDATIONS

      //REGISTER
      $("#register").click(function(){
          if($("#fname").val() == "" || $("#lname").val() == "" || $("#uname").val() == "" || $("#email").val() == "" || $("#pass").val() == "" || $("#shipbilladdress").val() == ""){
            $("#register").attr("disabled", "disabled");
           $(".registermessage").html("<h5 class='red-text'>Empty fields found.</h5>");
        }
      });
      $("#registerForm").keyup(function(){
          $("#register").removeAttr("disabled");
        });

      //LOGIN
      $("#login").click(function(){
        if($("#username").val() == "" || $("#password").val() == ""){
          $("#login").attr("disabled", "disabled");
          $(".loginmessage").html("<h5 class='red-text'>Empty fields found.</h5>");
        }
      });
      $("#loginForm").keyup(function(){
          $("#login").removeAttr("disabled");
        });

      $("#updateForm :input").attr("readonly", true);
      $("#updateForm :input").addClass("black-text");
      $("#edit").click(function(){
        $("#updateForm :input").attr("readonly", false);
      })

      //Add product
      $("#add-product-button").click(function(){
        if( $("#categoryID").val() == "" || $("#productCode").val() == "" || $("#productName").val() == "" || $("#listPrice").val() == "" || $("#quantity").val() == "" || $("#discount").val() == "" || $("#desc").val() == "" ){
          $("#add-product-button").attr("disabled", "disabled");
          $(".addmessage").html("<h5 class='red-text'>Empty fields found.</h5>");
        }
      });
      $("#add-product").keyup(function(){
          $("#add-product-button").removeAttr("disabled");
        });
 
});