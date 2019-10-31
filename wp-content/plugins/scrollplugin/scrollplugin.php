<?php 
/*
* Plugin Name: Grums scroll halløj
* Plugin URI: http://jakobnymark.dk/grumswp/
* Description: This is a WordPress popupinfo plugin based on HTML5, CSS, JS and PHP
* Version: 1.0.0
* Author: Jakob Nymark
* Author: http://jakobnymark.dk/grumswp/
* License: GPL2
*/

function scrolleffect() { 
    
    $content = '';
    $content .= '<body_class="main">';
    
    $content .= '<section id="one">';
    $content .= '<div class='content'>
			<h1 style='font-size:5vw;'>first heading</h1>
			<p style='font-size:3vw;' >description</p>	
		</div>';
    $content .= '</section>';
    
    $content .= '<section id="two" style='margin-top:100vh'>';
    $content .= '<div class='content'>
			<h1 style='font-size:5vw;'>second heading</h1>
			<p style='font-size:3vw;'>description</p>	
		</div>';
    $content .= '</section>';
    $content .= '<section id="three" style='margin-top:100vh' >';
 $content .= '<div class='content'>
			<h1 style='font-size:5vw;'>third heading</h1>
			<p style='font-size:3vw;'>description</p>	
		</div>	';
    $content .= '</section>';
     $content .= '<section id="four" style='margin-top:100vh' >';
    $content .= '<div class='content' style='margin-bottom:10%;'>
			<h1 style='font-size:5vw;'>fourth heading</h1>
			<p style='font-size:3vw;'>description</p>	
		</div>';
    $content .= '</section>';
    $content .= '</body>';
       
   
    return $content;
    #retunere vores content. Koden skal "retuneres" fordi det gør at vi kan placere koden frit på hjemmesiden. Hvis vi f.eks. skrev "print" ville koden blive printet øverst på siden. 
}
add_shortcode('scrollting','scrolleffect'); /* denne shortcode skrives i wordpress, hvilket får vores plugin frem */

   
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin'); #registrere vores styles og scripts for vores plugin. Dette omfatter bla. vores css, fonts, javascript.

    function register_styles_and_scripts_for_plugin() 
    {
        
       
        
        wp_enqueue_style('CustomStylesheet', plugins_url('scrollplugin/css/scrollplug.css'));
        
        wp_enqueue_script('CustomScript', plugins_url('scrollplugin/js/scrollscript.js'), array('jquery'), null, true);
        
    }

?>
