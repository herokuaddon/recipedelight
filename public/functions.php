<?php
function recipe_delight_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'recipe-delight'),
    ));
}
add_action('after_setup_theme', 'recipe_delight_setup');

function recipe_delight_assets() {
    wp_enqueue_style('recipe-delight-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'recipe_delight_assets');

function recipe_delight_image_fallback() {
    ?>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("img").forEach(function(img){
          img.onerror = function() {
            this.onerror = null;
            this.src = "https://via.placeholder.com/1200x800?text=Recipe+Image";
          };
        });
      });
    </script>
    <?php
}
add_action('wp_footer', 'recipe_delight_image_fallback');
?>