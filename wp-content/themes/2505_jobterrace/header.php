<?php 
    $locale = get_locale(); 
    $logo_id = get_theme_mod( 'custom_logo' );
    $logo_url = wp_get_attachment_image_src( $logo_id , 'full' );    
?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?>>
    <head prefix="og: http://ogp.me/ns# <?php $type = is_home() ? 'website' : 'article'; echo 'fb: http://ogp.me/ns/fb# '.$type.': http://ogp.me/ns/'.$type.'#'; ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="ジョブテラス">
        <meta name="description" content="ジョブテラスは、「人と仕事、そして社会に未来を照らす」ビジョンのもと、企業の採用活動を社外人事担当として全面的にサポートしています。採用戦略の立案から実行、効果測定まで、一貫して伴走することで、採用担当者様の負担を軽減し、最適な人材との出会いを創出します。">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- <title><?php wp_title('|', true, 'right').bloginfo('name'); ?></title> -->
        <?php wp_head(); ?>
    </head>
    <?php global $body_class; ?>
    <body <?php body_class($body_class); ?>>
        <div id="top"></div>
        <header class="header">
            <div class="header__inner">
                <h1 class="header-logo">
                    <a href="<?php echo home_url(); ?>" class="header-logo__link">
                        <img src="<?= get_site_icon_url(); ?>" class="header-logo__img" alt="Jobterrace">
                    </a>
                </h1>
                <?php
                    wp_nav_menu(array( 
                        'container'       => 'nav', 
                        'container_id'    => 'header-nav',
                        'container_class' => 'header-navi',
                        'menu_class'      => 'header-navi__lists',
                        'add_li_class'    => 'header-navi__list',
                        'add_a_class'     => 'header-navi__link',
                        'theme_location'  => 'global-nav' 
                    )); 
                ?>
                <div class="header-btn">
                    <span class="header-btn__bar"></span>
                </div>
            </div>
        </header>
