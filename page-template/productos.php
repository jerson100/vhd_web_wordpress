<?php
/*
    Template name: productos
*/

get_header();

$taxonomy  = 'productosgenero';

?>

<div class="min-h-[250px] desktop:min-h-[480px] flex items-center" style="background: url(<?php echo get_field('banner')['url'] ?>) no-repeat;background-size:cover;">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold banner-title title-line title-line--light title-line--lg text-white-150">
                NUESTROS PRODUCTOS
            </h1>
        </div>
    </div>
</div>

<?php 
    global $wp_query, $paged;
    $curpage = $paged ? $paged : 1;

    $wp_query = new WP_Query( array(
        'post_type' => 'producto', 
        'posts_per_page' => 18,
        'post_status' => 'publish',
        'paged' => $paged
    ));

    $paginas = $wp_query->max_num_pages;
?>

<main>
    <div class="bg-white-150 section">
        <div class="container">
            <div class="flex justify-between flex-col md:flex-row gap-8">
                <div class="flex flex-col md:flex-row">
                    <label for="typeProduct" class="text-[22px] desktop:text-[25px] text-text-nav font-bold w-[120px] mb-4">Mostrar:</label>
                    <?php 
                        wp_dropdown_categories(array(
                            'show_option_all'    => '',
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'style'              => 'list',
                            'show_count'         => 0,
                            'hide_empty'         => FALSE,
                            'use_desc_for_title' => 1,
                            'child_of'           => 0,
                            'feed'               => '',
                            'feed_type'          => '',
                            'feed_image'         => '',
                            'exclude'            => '',
                            'exclude_tree'       => '',
                            'include'            => '',
                            'hierarchical'       => 1,
                            'title_li'           => __( '' ),
                            'show_option_none'   => __( 'Todos' ),
                            'number'             => null,
                            'echo'               => 1,
                            'depth'              => 0,
                            'current_category'   => 0,
                            'pad_counts'         => 0,
                            'taxonomy'           => $taxonomy,
                            'walker'             => null,
                            'class'              => 'min-w-[220px] text-text-primary input text'
                        )); 
                    ?>
                </div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="bg-white-150 section">
        <div class="container">
            <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-[repeat(auto-fill,minmax(320px,1fr))] gap-4 lg:gap-8 justify-center lg:ml-[120px] mb-4">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php if(has_post_thumbnail()): ?>
                <article class="shadow-custom flex flex-col">
                    <!-- <img src="" alt=""> -->
                    <div class="flex items-center justify-center w-full h-[250px] md:h-[300px] desktop:h-[336px]">
                        <?php
                            $thumbID = get_post_thumbnail_id( $post->ID );
                            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                            echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" class="w-full h-full object-contain">';
                        ?>
                    </div>
                    <div class="py-6 desktop:py-8 px-4 flex items-center flex-col bg-[#F1F1F1] flex-grow">
                        <h1 class="text-[21px] lg:text-[25px] desktop:text-[30px] font-bold mb-4 flex items-center gap-2 flex-grow">
                            <?php echo get_the_title(); ?>
                        </h1>
                        <div class="flex justify-center">
                            <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="btn btn--sm">Más información</a>
                        </div>
                    </div>
                </article>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="flex justify-center p-4">
                <div class="flex gap-4 [&>*]:min-w-min [&>*]:w-[40px] [&>*]:h-[40px] [&>*]:items-center [&>*]:justify-center [&>*]:p-0">
                    <?php for($i=1;$i<=$paginas;$i++) : ?>
                    <a class="btn <?php echo ($i == $curpage ? '' : 'btn-outline')?> page btn--sm" style="text-decoration:none;line-height:39px;" href="<?php echo get_pagenum_link($i); ?>" title="Pagina <?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </div>
            </div>
            <?php else: ?>
            <p class="noone">No hay productos disponibles</p>
            <?php endif; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php wp_reset_query(); ?>
    
    <?php get_template_part('inc/section_formulario');?>
</main>

<?php get_footer(); ?>