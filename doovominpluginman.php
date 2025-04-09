<?php
/*
Plugin Name: 2vomin plugin man
Description: A plugin to display images in a gallery format.
Version: 1.0
Author: amir mohammad barzgar
*/

function display_image_gallery($dir) {
    if (!is_dir($dir)) {
        echo "Directory not found!";
        return;
    }

    $images = array_diff(scandir($dir), array('.', '..'));
    
    echo '<div style="display: flex; flex-wrap: wrap;">';
    
    foreach ($images as $image) {
        $imagePath = $dir . '/' . $image;
        if (is_file($imagePath)) {
            echo '<div style="margin: 10px;">';
            echo '<img src="' . $imagePath . '" style="width: 200px; height: auto;">';
            echo '</div>';
        }
    }
    
    echo '</div>';
}

// Example usage:
display_image_gallery('C:\Users\siyav\Pictures\Screenshots');
?>