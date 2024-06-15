<?php 

/*function my_gutenberg_blocks_register_blocks(){
    $asset_file = include(plugin_dir_path(__FILE__) . '../build/index.asset.php');

    //registrar scripts en el editor del bloque 
    wp_enqueue_script(
        "my-blocks-editor",
        plugin_dir_url(__FILE__) . 'build/index.js',
        $asset_file['dependencies'],
        $asset_file['version']
    );

    //registrar los estilos del editor de bloques 
    wp_register_style(
        "my-blocks-editor-style",
        plugins_url("built/editor.css", __FILE__ . "/../"),
        array(),
        $asset_file["version"]
    );

    //registrar los estilos del frontend
    wp_register_style(
        "my-blocks-style",
        plugins_url("built/style.css", __FILE__ . "/../"),
        array(),
    );

    require_once plugin_dir_path(__FILE__ ). 'blocks/sketchfab-block.php';
   // require_once plugin_dir_path(__FILE__ ). 'blocks/poke-block.php';
}

add_action('init', 'my_gutenberg_blocks_register_blocks');*/