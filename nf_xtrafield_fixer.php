<?php
 /**
 * Plugin Name: NinjaForms Extra Field Fixer
 * Description: Create extra user fields
 * Version: 0.1 Caisoft
 * Author: Nick Mole
 * Text Domain: nxff-NinjaForms-Extra-Field-Fixer
 */


add_shortcode( 'nxff_jquery_fix_demos', 'nxff_jquery_fix_demos' );


function nxff_jquery_fix_demos(){

  ?>
  <script type="text/javascript"> 

      var myVar = setInterval(myTimer, 100);

      function myTimer() {
          if ( jQuery(".address-here").val() ==  '{user_meta:address}'){
                  jQuery(".address-here").val(' ');
          }
      if ( jQuery(".phone-here").val() ==  '{user_meta:phone}'){
                  jQuery(".phone-here").val(' ');
          }
      if ( jQuery(".city-here").val() ==  '{user_meta:city}'){
                  jQuery(".city-here").val(' ');
          }
      if ( jQuery(".company-here").val() ==  '{user_meta:company}'){
                  jQuery(".company-here").val('');
          }
      if ( jQuery(".title-here").val() ==  '{user_meta:title}'){
                  jQuery(".title-here").val('');
                myVar = "";
          }
        colorAgain();
      }
      function colorAgain(){
        jQuery(".address-here").css("color", "rgb(85, 85, 85)");
        jQuery(".phone-here").css("color", "rgb(85, 85, 85)");
        jQuery(".city-here").css("color", "rgb(85, 85, 85)");
        jQuery(".company-here").css("color", "rgb(85, 85, 85)");
        jQuery(".title-here").css("color", "rgb(85, 85, 85)");

      }

 </script>

<?php

}