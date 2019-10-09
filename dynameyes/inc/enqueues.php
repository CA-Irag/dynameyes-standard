<?php 

function dynameyes_enqueue_styles(){
    wp_enqueue_style( 'dynameyes-new-fonts', 'https://fonts.googleapis.com/css?family=Lobster|Crete+Round|Oswald|Roboto|Roboto+Slab|PT+Sans|Open+Sans|Montserrat:300,400,500,600,700' );
    wp_enqueue_style('dynameyes-main-style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynameyes_enqueue_styles');