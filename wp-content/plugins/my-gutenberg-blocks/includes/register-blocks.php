<?php 

function my_gutenberg_blocks_register_blocks(){
    $asset_file = include(plugin_dir_path(__FILE__) . '../build/index.asset.php');

    //registrar scripts en el editor del bloque 
    wp_register_script(
        "my-gutenberg-blocks",
        plugins_url("build/index.js", __DIR__ . "/../"),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    //registrar los estilos del editor de bloques 
    wp_register_style(
        "my-gutenberg-blocks-editor-style",
        plugins_url("built/editor.css", __DIR__ . "/../"),
        array(),
        $asset_file["version"]
    );

    //registrar los estilos del frontend
    wp_register_style(
        "my-gutenberg-blocks-style",
        plugins_url("built/style.css", __DIR__ . "/../"),
        array(),
    );

    require_once plugin_dir_path(__FILE__ ). 'blocks/sketchfab-block.php';
   // require_once plugin_dir_path(__FILE__ ). 'blocks/poke-block.php';
}

add_action('init', 'my_gutenberg_blocks_register_blocks');