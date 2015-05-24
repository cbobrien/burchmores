

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

    var liftoffTime = new Date();
  liftoffTime = new Date(liftoffTime.getFullYear() + 0, 6 - 1, 26);
  liftoffTime = new Date('2015-05-22T15:00');

    

 
});

  /**
 * Enquire functions
 */

 function greaterThan767 (){
  console.log("greater than 767px");
 }

 function lowerThan767 (){
  console.log("lower than 767px");
  $('.car-menu').hide();
 } 

// Countdown initial





