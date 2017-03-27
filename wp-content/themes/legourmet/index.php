<?php get_header(); ?>
<section class="slider">
    <?php echo do_shortcode('[rev_slider alias="slideshow"]');?>
</section>
<section class="citation">
    <div class="container" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, topoffset: '-150'}">
    <?php 
        $args  = array(
            'post_type' => 'page',
            'p' => 2
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                the_content();
            endwhile;
            wp_reset_postdata(); 
        endif; 
    ?>
    </div>
</section>
<section class="propos" id="propos">
    <div class="container">
        <div class="text-center">
            <h2 class="sub-title"><exp>A</exp> PROPOS</h2>
        </div>          
        <ul class="title-propos">
            <?php 
        $args  = array(
            'post_type' => 'page',
            'cat' => 4,
            'order' => 'ASC'
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
            <li class="item-title-<?php the_ID();?>"><a href="#" data-id="<?php the_ID();?>"><?php the_title(); ?></a></li>
        <?php
            endwhile;
            wp_reset_postdata(); 
        endif; 
    ?>
        </ul>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="item-content" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, topoffset: '-150', target: '>div', delay: 300}">
            <?php 
        $args  = array(
            'post_type' => 'page',
            'cat' => 4,
            'order' => 'ASC'
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
            <div class="content-<?php the_ID();?> isActive">
                    <figure>
                        <?php the_post_thumbnail();?>
                        <div class="over-subcontent">
                            <h3><?php the_title(); ?></h3>
                            <div class="excerpt">
                                <?php the_excerpt();?>
                                <a href="#" class="lire-plus">VOIR PLUS</a>
                            </div>
                            <div class="content">
                                <?php the_content();?>
                            </div>
                        </div>
                            
                    </figure>
            </div>
        <?php
            endwhile;
            wp_reset_postdata(); 
        endif; 
    ?>
        </div>
            </div>
        </div>
    </div>
</section>
<section class="pattisserie" id="pattisserie">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg-patisserie.png">
    <div class="content-patisserie">
        <div class="container">
            <div class="text-center upTo">
                <h2 class="sub-title"><strong>P</strong>ATISSERIE</h2>
            </div>
            <div class="row">
                <?php 
                    $args  = array(
                        'post_type' => 'page',
                        'cat' => 5,
                        'order' => 'ASC'
                    );
                    $direction = 'right';
                    
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $modal = ($direction == 'right')? 'Left': 'Right';
                    $direction = ($direction == 'right')? 'left': 'right';
                    
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-<?php echo $direction;?>', repeat: true, topoffset: '-150', delay: 300}">
                    <div class="item-patis">
                        <figure class="uk-overlay uk-overlay-hover">
                            <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'uk-overlay-spin'));?>
                            </a>   
                        </figure>
                        <h3><exp>NOS</exp> <?php the_title();?></h3>
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" class="voir-plus hvr-ripple-out">VOIR PLUS</a>
                    </div>
                </div>
                <?php require 'modal.php';?>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</section>

<hr class="separation">
<section class="viennoise" id="viennoise">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg-patisserie.png">
    <div class="content-patisserie">
        <div class="container">
            <div class="text-center upTo">
                <h2 class="sub-title dark"><strong>V</strong>IENNOISERIE - <strong>B</strong>OULANGERIE</h2>
            </div>
            <div class="row">
                <?php 
                    $args  = array(
                        'post_type' => 'page',
                        'cat' => 6,
                        'order' => 'ASC'
                    );
                    $direction = 'right';
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $modal = ($direction == 'right')? 'Left': 'Right';
                    $direction = ($direction == 'right')? 'left': 'right';
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-<?php echo $direction;?>', repeat: true, topoffset: '-150', delay: 300}">
                    <div class="item-patis">
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" >
                        <figure class="uk-overlay uk-overlay-hover">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'uk-overlay-spin'));?>
                        </figure>
                        </a>
                        <h3><exp>NOS</exp> <?php the_title();?></h3>
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" class="voir-plus">VOIR PLUS</a>
                    </div>
                </div>
                <?php require 'modal.php';?>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</section>
<hr class="separation">
<section class="friandise" id="friandise">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg-patisserie.png">
    <div class="content-patisserie">
        <div class="container">
            <div class="text-center upTo">
                <h2 class="sub-title"><strong>F</strong>OURS SECS - <strong>F</strong>RIANDISES</h2>
            </div>
            <div class="row">
                <?php 
                    $args  = array(
                        'post_type' => 'page',
                        'cat' => 7,
                        'order' => 'ASC'
                    );
                    $direction = 'right';
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $modal = ($direction == 'right')? 'Left': 'Right';
                    $direction = ($direction == 'right')? 'left': 'right';
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-<?php echo $direction;?>', repeat: true, topoffset: '-150', delay: 300}">
                    <div class="item-patis">
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" >
                        <figure class="uk-overlay uk-overlay-hover">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'uk-overlay-spin'));?>
                        </figure>
                        </a>
                        <h3><exp>NOS</exp> <?php the_title();?></h3>
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" class="voir-plus hvr-ripple-out">VOIR PLUS</a>
                    </div>
                </div>
                <?php require 'modal.php';?>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</section>
<hr class="separation">
<section class="sales" id="sales">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg-patisserie.png">
    <div class="content-patisserie">
        <div class="container">
            <div class="text-center upTo">
                <h2 class="sub-title dark"><strong>S</strong>ALES</h2>
            </div>
            <div class="row">
                <?php 
                    $args  = array(
                        'post_type' => 'page',
                        'cat' => 8,
                        'order' => 'ASC'
                    );
                    $direction = 'right';
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            $modal = ($direction == 'right')? 'Left': 'Right';
                            $direction = ($direction == 'right')? 'left': 'right';
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-<?php echo $direction;?>', repeat: true, topoffset: '-150', delay: 300}">
                    <div class="item-patis">
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal">
                        <figure class="uk-overlay uk-overlay-hover">
                            <?php the_post_thumbnail('post-thumbnail', array('class' => 'uk-overlay-spin'));?>
                        </figure>
                        </a>
                        <h3><exp>NOS</exp> <?php the_title();?></h3>
                        <a href="#modal<?php the_ID();?>" role="button"  data-toggle="modal" class="voir-plus">VOIR PLUS</a>
                    </div>
                </div>
                <?php require 'modal.php';?>
                <?php
                        endwhile;
                        wp_reset_postdata(); 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</section>
<?php /*<section class="terrasse" id="terrasse">
    <div class="container">
        <div class="text-center">
            <h2 class="sub-title"><exp>LA</exp> TERRASSE</h2>
        </div>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="uk-slidenav-position" data-uk-slider="{infinite: false}">
                <div class="uk-slider-container" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, topoffset: '-150', delay: 300, target: 'li'}">
                    <ul class="uk-slider uk-grid-width-medium-1-2">
                        <?php 
                            $args  = array(
                                'post_type' => 'page',
                                'cat' => 9,
                                'order' => 'ASC'
                            );
                            $the_query = new WP_Query( $args ); 
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                 if( have_rows('images') ):   
                                     while ( have_rows('images') ) : the_row();
                        ?>
                        <li>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="<?php the_sub_field('image');?>">
                                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                                <a class="uk-position-cover" href="<?php the_sub_field('image');?>" data-uk-lightbox></a>
                            </figure>
                        </li>
                        <?php
                        endwhile;
                                endif;
                                    endwhile;
                                    wp_reset_postdata(); 
                                endif; 
                            ?>
                    </ul>
                </div>

                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>

            </div>
        </div>

    </div>
</section> */ ?>
<hr class="separation">
<section class="terrasse galerie" id="galerie">
    <div class="container">
        <div class="text-center">
            <h2 class="sub-title"><exp>G</exp>ALERIE</h2>
        </div>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="uk-slidenav-position" data-uk-slider="{infinite: false}">
                <div class="uk-slider-container" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, topoffset: '-150', delay: 300, target: 'li'}">
                    <ul class="uk-slider uk-grid-width-medium-1-2">
                        <?php 
                            $args  = array(
                                'post_type' => 'page',
                                'cat' => 13,
                            );
                            $the_query = new WP_Query( $args ); 
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                 
                        ?>
                        <li>
                            <h3>PHOTOS</h3>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/La-Terrasse1.png">
                                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                                <?php 
                                    if( have_rows('photos') ):   
                                    while ( have_rows('photos') ) : the_row();
                                ?>
                                    <a class="lightboximage uk-position-cover" href="<?php the_sub_field('image');?>" data-uk-lightbox="{group:'image'}"></a>
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                            </figure>
                        </li>
                        <li>
                            <h3>VIDéOS</h3>
                            <figure class="uk-overlay uk-overlay-hover">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/La-Terrassfe1.png">
                                <div class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></div>
                                <?php 
                                    if( have_rows('videos') ):   
                                    while ( have_rows('videos') ) : the_row();
                                ?>
                                    <a class="lightboxvideo uk-position-cover" href="<?php the_sub_field('url');?>" data-uk-lightbox="{group:'video'}"></a>
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                            </figure>
                        </li>
                        
                        <?php
                                    endwhile;
                                    wp_reset_postdata(); 
                                endif; 
                            ?>
                    </ul>
                </div>


            </div>
        </div>

    </div>
</section>
<section class="boutiques" id="boutiques">
    <div class="text-center">
        <h2 class="sub-title dark"><exp>NOS</exp> BOUTIQUES</h2>
    </div>
    <div class="text-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-boutique.png" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, topoffset: '-150', delay: 300}">
    </div>
    <div class="container ">
        <div class="border-dashed">
            <div class="row">
                <?php 
                    $args  = array(
                        'post_type' => 'page',
                        'cat' => 11,
                        'order' => 'ASC'
                    );
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                         if( have_rows('boutique') ):   
                             while ( have_rows('boutique') ) : the_row();
                ?>
                <div class="col-lg-4 col-md-4 text-center">
                    <h3 data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, topoffset: '-150', delay: 300}"><?php the_sub_field('titre');?></h3>
                    <figure data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, topoffset: '-150', delay: 300}">
                        <img src="<?php the_sub_field('image');?>">
                    </figure>
                    <div class="texte">
                        <?php the_sub_field('texte');?>
                    </div>
                </div>
                <?php
                endwhile;
                        endif;
                            endwhile;
                            wp_reset_postdata(); 
                        endif; 
                    ?>
            </div>
        </div>            
    </div>
</section>
<section class="contact" id="contact" >
    <div class="text-center border-dashed">
        <h2 class="sub-title"><strong>C</strong>ONTACT</h2>
    </div>
    <div id="map" data-uk-scrollspy="{repeat: true, topoffset: '-150'}"></div>
</section>
<hr class="separation">
<section class="formulaire">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg-formulaire.png" >
    <div class="content-formulaire">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php echo do_shortcode('[contact-form-7 id="71" title="Formulaire de contact 1"]')?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>