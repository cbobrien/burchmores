

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

  var liftoffTime = new Date();
  liftoffTime = new Date(liftoffTime.getFullYear() + 0, 6 - 1, 26);

  $('#countdown-jhb').countdown({until: liftoffTime, padZeroes: true, layout: '{dnn} {hnn} {mnn}'});
  $('#countdown-cpt').countdown({until: liftoffTime, padZeroes: true, layout: '{dnn} {hnn} {mnn}'});
  $('#countdown-dbn').countdown({until: liftoffTime, padZeroes: true, layout: '{dnn} {hnn} {mnn}'});

  $('#countdown-jhb-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hnn} Hours, {mn} Minutes '});
  $('#countdown-jhb-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
  $('#countdown-jhb-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});


  $('#countdown-cpt-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
  $('#countdown-cpt-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
  $('#countdown-cpt-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});

  $('#countdown-dbn-1').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
  $('#countdown-dbn-2').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});
  $('#countdown-dbn-3').countdown({until: liftoffTime, padZeroes: true, layout: 'Auction Thereafter:<br>{dn} Days, {hn} Hours, {mn} Minutes '});    




