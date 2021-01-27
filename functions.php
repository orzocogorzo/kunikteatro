<?php
add_action("wp_enqueue_scripts", "my_theme_enqueue_styles");
function my_theme_enqueue_styles () {
  $stylehandle = "kunikteatro-style";
  $parenthandle = "stan-style";
  $bootstraphandle = "bootstrap-min";
  $fontawesomehandle = "font-awesome-min";

  $theme = wp_get_theme();

  wp_enqueue_style($parenthandle, get_template_directory_uri() . "/style.css",
    array(),
    $theme->parent()->get("Version"),
    "all"
  );

  wp_enqueue_style($bootstraphandle, get_template_directory_uri() . "/css/bootstrap.min.css",
    array(),
    null,
    "all"
  );

  wp_enqueue_style($fontawesomehandle, get_template_directory_uri() . "/css/font-awesome.min.css",
    array(),
    null,
    "all"
  );

  wp_enqueue_style($stylehandle, get_stylesheet_uri(),
    array($parenthandle),
    $theme->get("Version"),
    "all"
  );
}
?>
