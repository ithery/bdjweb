<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(http://berdikaridjaya.com/wp-content/uploads/2020/01/bdj-1.png); 
padding-bottom: 30px; 
} 
</style>
<?php 
} 

add_action( 'login_enqueue_scripts', 'my_login_logo_one' );