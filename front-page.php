<?php
/*
    Template name: inicio
*/

get_header();
?>

<div class="relative items-center flex screen-top px-0 py-4 desktop:p-8">
    <div class="z-10 absolute left-0 top-0 w-full h-full brightness-50" style="background:url(<?php echo get_field('fondo')['url']; ?>) no-repeat;background-size:cover;"></div>
    <div class="container relative z-20">
        <div class="flex flex-col gap-12 items-center max-w-7xl mx-auto">
            <h1 class="text-white-150 banner-title text-center font-bold title-line title-line--light title-line--sm">
                <?php echo get_field('titulo_general'); ?>
            </h1>
            <?php if(have_rows('atributos')): ?>
            <ul class="atributos flex flex-col desktop:flex-row items-center desktop:items-[initial] desktop:flex-wrap desktop:gap-4 text-[14px] md:text-[16px] lg:text-[18px] desktop:text-[30px] text-white-150 justify-center md:max-w-[97%] md:mx-auto">
                <?php while(have_rows('atributos')): the_row(); ?>
                <li><?php echo get_sub_field('texto_atr') ?></li>
                <li>-</li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url(home_url('productos')); ?>" class="btn btn-outline btn-white">
                Conoce nuestros productos
            </a>
        </div>
    </div>
</div>

<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'producto', 
        'posts_per_page' => 10,
        'post_status' => 'publish'
    ));
?>

<main>
    <?php if ( have_posts() ) : ?>
    <section class="section bg-white-150 nuestros_productos">
        <div class="container">
            <div class="flex flex-col gap-8 desktop:gap-24">
                <h1 class="section-title title-line text-center max-w-[500px] mx-auto">
                    Nuestros <span class="font-bold">productos</span>
                </h1>
                <div class="splide" id="splide_productos">
                    <div class="splide__track w-full">
		                <ul class="splide__list w-full">
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php if(has_post_thumbnail()): ?>
			                <li class="splide__slide shadow-custom flex">
                                <article class="flex flex-col-reverse md:flex-row gap-4 desktop:gap-8 items-center p-4 md:p-8 w-full">
                                    <div class="flex flex-col items-center md:items-start gap-4 desktop:gap-8">
                                        <h1 class="text-text-primary font-bold section-subtitle">
                                            <?php echo get_the_title(); ?>
                                        </h1>
                                        <p class="text text-text-secondary line-clamp-2 font-roboto text-center md:text-left">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn--sm btn-primary" title="<?php echo get_the_title(); ?>">
                                            Más información
                                        </a>
                                    </div>
                                    <div class="h-[220px] desktop:w-[250px] desktop:h-auto desktop:flex-shrink-0">
                                        <?php
                                            $thumbID = get_post_thumbnail_id( $post->ID );
                                            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                            echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" class="w-full h-full object-contain object-center">';
                                        ?>
                                    </div>
                                </article>        
                            </li>
                            <?php endif; ?>
                            <?php endwhile; ?>
		                </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
    <section class="section bg-[#F2F2F2] nosotros">
        <div class="flex flex-col md:flex-row">
            <div class="flex-shrink-0 max-h-[800px] w-full md:w-1/2">
                <img 
                    src="<?php echo get_field('imagen_n')['url'] ?>" 
                    title="<?php echo get_field('imagen_n')['title'] ?>" 
                    alt="<?php echo get_field('imagen_n')['alt'] ?>" 
                    width="<?php echo get_field('imagen_n')['width'] ?>" 
                    height="<?php echo get_field('imagen_n')['height'] ?>" 
                    loading="lazy" class="w-full h-full object-cover object-center"
                >
            </div>
            <div class="p-4 desktop:p-36 flex items-start flex-col gap-8 desktop:gap-12 w-full max-w-[750px] justify-center">
                <h1 class="section-title title-line title-line--lg font-bold">
                    <?php echo get_field('titulo_n') ?>
                </h1>
                <p class="text text-text-primary font-roboto">
                    <?php echo get_field('descripcion_n') ?>
                </p>
                <a href="<?php echo esc_url(home_url('nosotros')); ?>" class="btn btn--sm">Ver más</a>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/section_formulario');?>

    <?php 
        $args = array(
            'post_type' => 'post', 
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'post_date',
            'order' => 'DESC',
        );
        $latest_posts = get_posts($args);

        if(isset($latest_posts) && !empty($latest_posts)):
    ?>
    <section class="section bg-white-150">
        <div class="container">
            <div class="flex flex-col gap-8">
                <h1 class="section-title text-text-primary font-bold">
                    Últimas noticias
                </h1>
                <div class="flex flex-col lg:flex-row gap-4 desktop::gap-16">
                    <div class="flex flex-col w-full desktop:w-[60%] gap-4 desktop:gap-8">
                        <?php foreach ($latest_posts as $x => $post): ?>
                        <?php if($x==0): ?>
                        <div class="w-full h-[250px] lg:h-[320px] desktop:h-[500px]">
                            <?php
                                $thumbID = get_post_thumbnail_id( $post->ID );
                                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                echo '<img src="'.$imgDestacada[0].'" alt="Preview" title="Preview" loading="lazy" class="h-full w-full object-cover" id="preview">';
                            ?>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>

                        <div class="grid grid-cols-3 [&>*]:h-[80px] md:[&>*]:h-[120px] desktop:[&>*]:h-[157px] gap-4 desktop:gap-8">
                            <?php foreach ($latest_posts as $post): ?>
                            <div>
                                <?php
                                    $thumbID = get_post_thumbnail_id( $post->ID );
                                    $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                    echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" class="object-cover w-full h-full">';
                                ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="flex flex-col flex-shrink-0">
                        <?php 
                            foreach ($latest_posts as $n => $post):
                            setup_postdata($post); 
                            $post_date = date_i18n('j \d\e F \d\e Y', strtotime(get_the_date())); 

                            $thumbID = get_post_thumbnail_id( $post->ID );
                            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                        ?>
                        <div class="after:content-[''] after:bg-[#707070] after:w-[calc(100%-2.5rem)] after:ml-auto after:h-[1px] after:mt-4 after:mb-4 desktop:after:mt-8 desktop:after:mb-8 after:block notice" data-bg="<?php echo $imgDestacada[0]; ?>">
                            <div class="p-4 desktop:pl-10 desktop:pr-10 desktop:pt-10 desktop:pb-14 flex flex-col gap-2 <?php echo $n==0 ? 'bg-celeste' : ''; ?>">
                                <p class="text-[18px] lg:text-[20px] desktop:text-[25px] text-green-150 font-roboto font-light">
                                    <?php echo $post_date; ?>
                                </p>
                                <p class="text-text-secondary text font-semibold">
                                    <?php echo get_the_title(); ?>
                                </p>
                            </div>
                        </div>
                        <?php $n++; endforeach; ?>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="<?php echo esc_url(home_url('blog')); ?>" class="btn btn--sm desktop:mt-16">Ver más</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php //get_template_part('inc/section'); ?>

<?php get_footer(); ?>