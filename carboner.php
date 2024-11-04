<?php
/**
 * Plugin Name: Scoopy
 * Description: Scoopy est le plugin qui gère le calendrier de l'avant
 * Plugin URI: https://virgile-prevalet.fr/
 * Author: Territoires Landscape Architects
 * Version: 1.0.0
 * Author URI: https://territoirespaysagistes.com/
 * License: GPLv2 or later
 */
//Fonction qui affiche le HTML
function carboner_add(){
    
    $html = file_get_contents( plugin_dir_path( __FILE__ ) . 'calcule.html' );
    echo $html;
    //Chargement du js
    echo '<script src="'. plugin_dir_url( __FILE__ ) . 'script.js' .'"></script>';
    echo '<link rel="stylesheet" href="' . plugin_dir_url( __FILE__ ) . 'style.css">' ;
}

//chargement du css

add_shortcode('Scoopy','carboner_add');


//Gestion du shortcode

 ?>