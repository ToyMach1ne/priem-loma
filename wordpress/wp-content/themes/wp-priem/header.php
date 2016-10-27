<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <meta name="keywords" content="прием металлолома, сдать металлолом, цветной металлолом, черный металлолом, спб, санкт-петербург">
    <meta name="description" content="Прием металлолома в СПб по самым высоким ценам. Хотите сдать цветной или черный металлолом в Санкт-Петербурге – звоните к нам в компанию.">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="icon" type="image/x-icon">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="over">
        <div class="all">
            <header>
                <div class="left">
                    <a class="logo" href="<?php echo home_url(); ?>"><?php the_field('underlogo', 5); ?></a>
                </div>
                <div class="head">
                    <div class="h-l">
                        <span class="besp"><?php the_field('slogan', 5); ?></span>
                        <span class="spec"><?php the_field('underslogan', 5); ?></span>
                    </div>
                    <!-- form1 -->
                    <?php echo do_shortcode('[contact-form-7 id="53" title="form 1"]'); ?>
                    <!-- form1 -->
                </div>
                <!--end head-->
                <div class="right-contact">
                    <span class="title">По любым вопросам звоните:</span>
                    <div class="tel"><span><?php the_field('phone', 5); ?></div>
                    <div class="time">Режим работы: с <?php the_field('work_time', 5); ?></div>
                    <a class="btn-recall" href="javascript:void(0)">Заказать обратный звонок</a>
                </div>
                <!--end right-contact-->
            </header>
            <nav>
                <?php wpeHeadNav(); ?>
            </nav>
            <div class="container">
                <?php get_sidebar(); ?>
                <section class="content">
                    <div class="big-banner"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/main-foto.jpg"></div>
                    <div class="b-tabs">
                        <?php wpeHeadSecondNav(); ?>
