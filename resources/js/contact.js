
$(function(){
   $( 'input[name="contact_area"]:radio').change(function() {
      var radioval = $(this).val();
      if(radioval == 6){
         $('#contact_text').removeAttr('disabled');
         $('.other_label').removeClass('disabled');
      } else {
         $('#contact_text').attr('disabled','disabled'); 
         $('.other_label').addClass('disabled');
      }
   }); 
});

$('#input_check').on('click', function () {
  $(this).css('pointer-events','none');
});

$('#check_send').on('click', function () {
   $(this).css('pointer-events','none');
 });