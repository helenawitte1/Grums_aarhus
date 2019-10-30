<?php 
/*
* Plugin Name: Grums infopopup Plugin
* Plugin URI: http://jakobnymark.dk/grumswp/
* Description: This is a WordPress popupinfo plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.0
* Author: Jakob Nymark
* Author: http://jakobnymark.dk/grumswp/
* License: GPL2
*/

function grumsinfopopup() { 
    
    $content = '';
    $content .= '<div class="modal">';
    $content .= '<div class="login-form">';
    $content .= '<div id="hide" class="popupCloseButton">x</div>';
    $content .= '<div class="login-face">';
    $content .= '<div id="promotion-header">';
    $content .= '<div id="promotion-header"><h1 id="promotion-header-title">READY TO <br> GET MORE SUSTAINABLE?</h1></div>';
    $content .= '<div><a href="https://grumsaarhus.com/pages/shop" target="_blank"><button class="buygrums">BUY GRUMS NOW</button></a></div>';
    $content .= '<div class="flex">';
    $content .= ' <div class="quest"><p>NOT SURE YET, QUESTIONS?</p></div>';
    $content .= '<div class="faq"><a href="http://jakobnymark.dk/grumswp/why-coffee-grounds/"><button class="faqbtn">FAQ</button></a></div>';
    $content .= '</div>';
    $content .= '</div>';
    $content .= '</div>';
   
    return $content;
    #retunere vores content. Koden skal "retuneres" fordi det gør at vi kan placere koden frit på hjemmesiden. Hvis vi f.eks. skrev "print" ville koden blive printet øverst på siden. 
}
add_shortcode('grumspopup','grumsinfopopup'); /* denne shortcode skrives i wordpress, hvilket får vores plugin frem */

   
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin'); #registrere vores styles og scripts for vores plugin. Dette omfatter bla. vores css, fonts, javascript.

    function register_styles_and_scripts_for_plugin() 
    {
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap');
        
        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Dosis&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('grums-infopopup/css/styleplugingrums.css'));
        
        wp_enqueue_script('CustomScript', plugins_url('grums-infopopup/js/script.js'), array('jquery'), null, true);
        
    }

?>
