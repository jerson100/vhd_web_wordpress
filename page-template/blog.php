<?php
/*
    Template name: blog
*/

get_header();
?>

<div class="bg-black min-h-[250px] desktop:min-h-[480px] flex items-center" style="background:url(<?php echo IMG;?>/Blog/bannerblog.jpg) no-repeat;background-size:cover;">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold text-[100px] title-line title-line--light title-line--lg text-white-150">
                ÚLTIMOS ARTÍCULOS
            </h1>
        </div>
    </div>
</div>

<?php 
    global $wp_query, $paged;
    $curpage = $paged ? $paged : 1;

    $wp_query = new WP_Query( array(
        'post_type' => 'post', 
        'posts_per_page' => 6,
        'post_status' => 'publish',
        'paged' => $paged
    ));

    $paginas = $wp_query->max_num_pages;
?>

<main>
    <div class="bg-white-150 section">
        <div class="container flex gap-8 items-center">
            <span class="font-bold text-[25px]">Categorías:</span>
            <div class="flex flex-grow">
            <?php
                $args = array(
                    'hide_empty' => false,
                    'exclude' => get_cat_ID('Uncategorized')
                );
                $categories = get_categories($args);

                if (!empty($categories)) {
                    echo '<ul class="flex gap-8">';
                    foreach ($categories as $category) {
                        echo '<li><a href="'.get_category_link($category->term_id).'" class="btn btn--sm btn-outline">' . $category->name . '</a></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p class="noone">No se encontraron categorías.</p>';
                }
            ?>
            </div>
        </div>
    </div>
    <div class="bg-[#F2F2F2] section">
        <?php if ( have_posts() ) : ?>
        <div class="container">
            <ul class="grid grid-cols-3 gap-10 mb-16">
                <?php while ( have_posts() ) : the_post();?>
                <article>
                    <div class="bg-black h-[323px] mb-4" style="border-radius:10px;">
                        <?php
                            $thumbID = get_post_thumbnail_id( $post->ID );
                            $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                            echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" style="border-radius:10px;" class="w-full h-full object-cover object-center">';
                        ?>
                    </div>
                    <h1 class="text-[30px] font-bold text-text-primary mb-4 leading-[38px]">
                        <?php echo get_the_title(); ?>
                    </h1>
                    <p class="mb-4 line-clamp-3 text-[20px] font-normal font-roboto leading-[24px]">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="btn btn--sm">Ver más</a>
                </article>
                <?php endwhile; ?>
            </ul>
            <div class="flex justify-center p-4">
                <ul class="flex gap-4 [&>*]:min-w-min [&>*]:w-[40px] [&>*]:h-[40px] [&>*]:items-center [&>*]:justify-center [&>*]:p-0">
                    <?php for($i=1;$i<=$paginas;$i++) : ?>
                    <a class="btn <?php echo ($i == $curpage ? '' : 'btn-outline')?> page btn--sm" style="text-decoration:none;line-height:39px;" href="<?php echo get_pagenum_link($i); ?>" title="Pagina <?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        <?php else: ?>
        <div class="container">
            <p class="noone">No hay entradas disponibles</p>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>