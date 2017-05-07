<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php bloginfo('template_url');?>/images/imagemin/logo.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/plugins.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/geral.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/<?php echo $style; ?>.css">
    <title><?php bloginfo('name'); ?></title>
</head>

<body <?php body_class(); ?>>
    <!-- menu superior !-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
                <!-- <a class="navbar-brand logo" href="#">AToca</a> !-->
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/imagemin/logo.png" class="img-responsive wow tada" data-wow-duration="2s" data-wow-delay="0.3s">
                </a>
            </div>
            <div class="collapse navbar-collapse wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.3s" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php wp_nav_menu(
                        array('theme_location' => 'header-menu')
                    ); ?>

                    <!-- 
                        <li><a href="sobre">sobre</a></li>
                        <li><a href="#">posts</a></li>    
                    !-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- nome, descricao e redes sociais !-->
    <style>
        <?php if(get_the_post_thumbnail()): ?>
            header{
                background-image: url('<?php the_post_thumbnail_url(); ?>');
            }
        <?php else: ?>
            header{
                background-image: url('<?php bloginfo('template_url'); ?>/images/imagemin/fundo/fundo-pagina-index.jpg')
            }
        <?php endif; ?>
    </style>
    <header>
        <div class="container">
            <div class="descricao">
                <h1><?php echo $titulo_cabecalho ?></h1>
                <p>
                    <?php echo $descricao_cabecalho ?>
                </p>
                <p>
                    <i class="fa fa-cogs" aria-hidden="true"></i> -
                    <i class="fa fa-battery-three-quarters" aria-hidden="true"></i> -
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </header>
    <!-- texto principal !-->
    <main>