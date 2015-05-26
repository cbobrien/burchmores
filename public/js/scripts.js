

$(document).ready(function() {

 $('.form-container form').submit(function() {
  if($('.terms-checkbox').is(':checked')) {
   return(true);
  } else {
    alert("Please agree to the terms and conditions and privacy statement of this website");
    };
    return(false);
 });  

  // Mobile navigation
  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
    type : 'cover'
  } );     

  // Copyright date
  var currentYear = (new Date).getFullYear();
  $("#copyright-year").text( (new Date).getFullYear() );



});

