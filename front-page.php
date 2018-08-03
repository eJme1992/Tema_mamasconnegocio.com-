<?php
/**
 * @package WordPress
 * @subpackage ID-Peru-Theme-Wordpress
 * @since HTML5 ID 2.0
 */
get_header();
?>
<?php
// include_once 'url.php';
$settings = pods('datos_del_sitio');
$portada = $settings->field('portada');
$logo = $settings->field('logo');
?>
<section id="home" class="row">
    <div class="encabezado" style="background: url('<?= $portada["guid"]; ?>') no-repeat center center fixed;" >
        <div class="encabezadofondo" id="banner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-4 col-md-offset-2 text-justify  texto">
                        <a class="logo-top" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo $logo['guid']; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/></a>
                        </a>
                        <?php the_content(); ?>
                    </div>      
                    <div class="col-md-4 ">
                        <div class="panel-body panel sombra">
                            <h4><b>Contactanos</b></h4>
                            <?php echo do_shortcode('[si-contact-form form="1"]'); ?>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
    <section class="servicios row">
        <div class="container col-md-offset-2 col-md-8" id="servicios-sec" >
            <?php
            $args = array(
                'post_type' => 'servicios',
                'orderby' => 'date',
                'order' => 'asc',
                'posts_per_page' => 4
            );
            $servicio = new WP_query($args);

            if ($servicio->have_posts()) : while ($servicio->have_posts()) : $servicio->the_post();
                    $title = get_the_title($post->ID);
                    $contenido = get_post_meta($post->ID, 'descripcion_corta', true);
                    $nombre = get_post_meta($post->ID, 'nombre', true);
                    $thumbID = get_post_thumbnail_id($post->ID);
                    $imgDestacada = wp_get_attachment_url($thumbID);
                    ?>
                    <div class="col-md-3">
                        <div class="item center-block text-center">
                            <a href="<?php the_permalink(); ?>">
                                <img width="60" src="<?php echo $imgDestacada ?>" class="img-responsive center-block" alt="Logo"/>
                                <h3 class="title"><?= $title; ?></h3> </a>
                            <div class="w-body">
                                <div class="detail">
                                    <p>
        <?= $contenido; ?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <section class="opinion">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        $args = array(
                            'post_type' => 'testimonios',
                            'orderby' => 'date',
                            'order' => 'asc',
                            'posts_per_page' => -1
                        );
                        $servicio = new WP_query($args);
                        $i = 0;
                        if ($servicio->have_posts()) : while ($servicio->have_posts()) : $servicio->the_post();
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?= $i; ?>" <?php
                                if ($i == 0) {
                                    echo "class='active'";
                                }
                                ?>></li>
                                    <?php
                                    $i++;
                                endwhile;
                            endif;
                            ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner slider-slick">
                        <?php
                        $args = array(
                            'post_type' => 'opiniones',
                            'orderby' => 'date',
                            'order' => 'asc',
                            'posts_per_page' => -1
                        );
                        $servicio = new WP_query($args);
                        $i = 0;
                        if ($servicio->have_posts()) : while ($servicio->have_posts()) : $servicio->the_post();
                                $title = get_the_title($post->ID);
                                $contenido = get_the_content($post->ID);
                                $thumbID = get_post_thumbnail_id($post->ID);
                                $imgDestacada = wp_get_attachment_url($thumbID);
                                ?>    
                                <div class="item slider-item  <?php
                                if ($i == 0) {
                                    echo "active";
                                }
                                ?>">
                                    <div class="text col-md-6 col-md-offset-3">
                                        <div class="text-justify"><?= $contenido; ?></div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right " href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>    
<?php get_footer(); ?>

