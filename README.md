# WP Developer Theme - WordPress #

*Version 2.0 - WITH GULP*

*Description English*

This theme is designed to be a quick tool in the developer's hand through it the developer can now create the theme without worrying about the file structure that is ready and pre-defined loops without influence in html / css

*Descrição Português*

Esse Tema foi desenvolvido para ser uma ferramenta rápida na mão do desenvolvedor, através dele o desenvolvedor já pode criar o tema sem se preocupar com a estrutura de arquivos que já está pronta e com loops pré-definidos sem influencia em html/css/

*Addons*

<b>RESET CSS (a reset in css to have no differences between browsers)</b>
- RESET CSS -> declared in /inc/enqueues.php

<b>Bootstrap GRID (a bootstrap grid-only version)</b>
- Bootstrap GRID CSS -> declared in /inc/enqueues.php

<b>Yoast SEO Breadcrumb (https://yoast.com/wordpress/plugins/breadcrumbs/)</b>
- Breadcrumb -> declared in archive.php | taxonomy.php | category.php | page.php | single.php
(if the YOAST SEO plugin is not enabled, you will have no problem in your theme, just will not show up)

*Best Pratices for the theme*

###GULP
> 1. Install with comands: npm install gulp / npm install gulp-sass / npm install gulp-rename
> 2. Run in the root folder of theme: gulp
> 3. After run gulp: an already mined css file will be saved in /wp-developer-theme/assets/css/
> 4. A query-only file CSS will be saved in /wp-developer-theme/css-dev/

###CSS FILES CALLS
> 1. Always try to individualize the css files for better maintenance in the future using the 'conditional styles' of the file 'enqueues.php'
> 2.  Example THAT IS ALREADY IN THE FILE '/inc/enqueues.php' and it should be used:
```sh
    <?php
        wp_enqueue_style('styles-common', get_template_directory_uri() . '/assets/css/style-common.min.css', '', '1.0.0');
        
        //conditional styles
        if (is_page() || is_404() || is_search()) {
            wp_enqueue_style('styles-page', get_template_directory_uri() . '/assets/css/style-page.min.css', '', '1.1.1');
        }
        if(is_front_page()){
            wp_enqueue_style( 'styles-home',  get_template_directory_uri() . '/assets/css/style-home.min.css', '','1.0');
        }
        if(is_single()){
            wp_enqueue_style( 'styles-product-single',  get_template_directory_uri() . '/assets/css/style-single.min.css', '','1.0');
        }
    ?>
```

### CALL FOR JS FILES
> 1. The JS file other than CSS, instead separating into multiple files, maintain the file structure 'main.js' by firing functions according to the body class you need
> 2. If you need to import another JS file, import using conditions, as in CSS, in the file '/inc/enqueues.php'
> 3. DO NOT CARE ANY OTHER FILE JS WITHOUT BEING THROUGH THIS PATH
> 4. NEVER CALL ANOTHER JQUERY, THE DECLARATION OF MORE OF A JQUERY CAUSES CONFLICT, AND THE ISSUE ALREADY HAS A JQUERY DECLARED IN THE FILE 'ENQUEUES.PHP'
> 5. Example THAT IS ALREADY IN THE FILE '/inc/enqueues.php' and it should be used:
```sh
    <?php
    //Include the enqueue footer SCRIPTS
    function wp_developer_theme_scripts(){
        wp_enqueue_script('jquery');
        // wp_enqueue_script( 'bootstrap-script','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js','','',true);
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', '1.0',true);
    }
    add_action( 'wp_enqueue_scripts', 'wp_developer_theme_scripts' );
   ?>
```

