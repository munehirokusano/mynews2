
$(function(){
   $( 'input[name="area"]:radio').change(function() {
      var radioval = $(this).val();
      if(radioval == 6){
         $('#inputother').removeAttr('disabled');
         $('.other_label').removeClass('disabled');
      } else {
         $('#inputother').attr('disabled','disabled'); 
         $('.other_label').addClass('disabled');
      }
   }); 
});
