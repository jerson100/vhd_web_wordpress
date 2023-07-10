<?php
/*
    Template name: marcas
*/

get_header();
?>

<!-- mt-[155px] -->
<div class="bg-black min-h-[250px] desktop:min-h-[480px] flex items-center" style="background: url(<?php echo get_field('banner')['url'] ?>) no-repeat;background-size:cover;">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold banner-title title-line title-line--light title-line--lg text-white-150">
                PAISES PROVEEDORES
            </h1>
        </div>
    </div>
</div>
<main>
    <div class="bg-[#E5F5E8] pt-[120px] pb-12 lg:py-12 w-full overflow-x-hidden">
        <div class="container relative">
            <p class="font-roboto font-bold absolute left-[1rem] section-subtitle lg:text-[30px] top-0 max-w-[394px] mt-[-6rem] lg:mt-[initial]">Nuestros productos son de la más <span class="text-[#009A17]">
                alta calidad</span>
                 a nivel internacional</p>
                 <img src="/vhd/wp-content/themes/theme_invitro/images/mapa.png" class="w-full h-full" alt="">
        </div>
    </div>
    <?php if(have_rows('marcas')): ?>
    <section class="section">
        <div class="container">
            <div class="flex justify-center mb-16">
                <h1 class="section-title title-line title-line--xl">
                    Nuestras <span class="font-bold">Marcas</span>
                </h1>
            </div>
            <div class="bg-[#F2F2F2] shadow-custom py-16 px-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while(have_rows('marcas')): the_row(); ?>
                    <div class="h-[90px] md:h-[120px] lg:h-[200px]">
                        <img 
                            src="<?php echo get_sub_field('logo')['url'] ?>" 
                            title="<?php echo get_sub_field('logo')['title'] ?>" 
                            alt="<?php echo get_sub_field('logo')['alt'] ?>" 
                            width="<?php echo get_sub_field('logo')['width'] ?>" 
                            height="<?php echo get_sub_field('logo')['height'] ?>" 
                            loading="lazy" class="w-full h-full object-contain object-center"
                        >
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'producto', 
        'posts_per_page' => 10,
        'post_status' => 'publish'
    ));
?>
    <?php if ( have_posts() ) : ?>
    <section class="section mb-10 our_products overflow-hidden">
        <div class="lg:w-[calc(100%-(100%-(1500px))/2)] ml-auto">
            <div class="grid grid-cols-1 lg:grid-cols-[250px_1fr] gap-10 lg:gap-20">
                <div class="flex flex-col items-center gap-8 lg:gap-12 lg:items-start justify-center lg:py-14 max-w-[100vw]">
                    <h1 class="section-title title-line title-line--xl title-line--dl">
                        Nuestros <span class="font-bold">productos</span>
                    </h1>
                    <div>
                        <a href="" class="btn btn--sm">Ver más</a>
                    </div>
                </div>

                <div class="splide w-full" id="splide_marcas">
                    <div class="splide__track w-full h-full">
                		<ul class="splide__list h-full">
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php if(has_post_thumbnail()): ?>
                		    <li class="splide__slide h-full">
                                <article class="h-full flex shadow-custom px-4 py-8 lg:px-8 lg:py-14 gap-4 lg:gap-9" style="width: fit-content;">
                                    <div class="flex flex-col justify-between">
                                        <h1 class="font-bold text-[22px] md-[24px xl-[30] lg:text-[40px]"><?php echo get_the_title(); ?></h1>
                                        <p class="text line-clamp-2">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                        <div>
                                            <a href="" class="btn btn--sm">Más información</a>
                                        </div>
                                    </div>
                                    <!-- h-full -->
                                    <div class="md:w-[250px] h-[200px]">
                                        <!-- bg-black -->
                                        <div class="h-full w-full">
                                            <?php
                                                $thumbID = get_post_thumbnail_id( $post->ID );
                                                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                                                echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" class="w-full h-full object-contain object-center">';
                                            ?>
                                        </div>
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
</main>

<?php get_footer(); ?>