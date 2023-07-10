<?php
get_header();

$ID = get_the_ID();

$taxonomy  = 'productosgenero';
$categories = get_the_terms($ID, $taxonomy);

?>

<div class="min-h-[250px] desktop:min-h-[480px] flex items-center" style="background:url(<?php echo IMG; ?>/productSimpleBanner.jpg) no-repeat;background-size:cover;">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold banner-title title-line title-line--light title-line--lg text-white-150">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </div>
</div>
<main>
    <div class="section">
        <div class="bg-[#F2F2F2] max-w-[680px] w-full text-[20px] md:text-[23px] lg:text-[25px] desktop:text-[30px] font-normal text-text-primary leading-[43px] pl-4 desktop:pl-[calc(((100%-1500px)/2)+1rem)] pr-4 py-6">
            Solución a problemas respiratorios a través de aceites escánciales
            étericos
        </div>
    </div>
    <div class="container">
        <div class="flex items-center flex-col">
            <?php
                $thumbID = get_post_thumbnail_id( $post->ID );
                $imgDestacada = wp_get_attachment_image_src( $thumbID, 'thumbnail' );
                echo '<img src="'.$imgDestacada[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" loading="lazy" 
                class="w-full max-w-[884px] md:h-[320px] lg:h-[500px] desktop:h-[554px] mx-auto object-contain object-center">';
            ?>
            <div class="w-11/12 bg-green-10 py-8 px-8 md:py-10 md:px-10 desktop:py-14 desktop:px-28">
                <p class="text text-text-secondary">
                    <?php echo get_the_content(); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="border-t-[#D2D2D2] border-solid border-t-[1px] border-b-[1px]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <?php if(have_rows('beneficios')): ?>
                <section class="flex flex-col gap-8 items-start px-4 py-8 lg:py-28 lg:pr-28 desktop::pl-0">
                    <h1 class="title-line title-line--lg text-dark text-[22px] lg:text-[25px] desktop:text-[35px] font-bold">
                        Beneficios
                    </h1>
                    <ul class="flex flex-col text text-darkest gap-2 list-disc">
                        <?php while(have_rows('beneficios')): the_row(); ?>
                        <li><?php echo get_sub_field('beneficio') ?></li>
                        <?php endwhile; ?>
                    </ul>
                </section>
                <?php endif; ?>
                <div class="flex flex-col border-l-[#D2D2D2] border-solid border-l-[1px]">
                    <?php if(have_rows('especies')): ?>
                    <section class="flex-grow flex-col flex items-start gap-8 border-b-[#D2D2D2] border-solid border-b-[1px] desktop:py-28 desktop:pl-28 desktop:pr-0 p-8">
                        <h1 class="title-line title-line--lg text-dark text-[22px] lg:text-[25px] desktop:text-[35px] font-bold">
                            Especies
                        </h1>
                        <ul class="flex-grow flex flex-row text-darkest text list-disc list-inside" style="list-style:none;gap:14px;">
                            <?php while(have_rows('especies')): the_row(); ?>
                            <li>
                                <div class="inline-flex items-center">
                                    <div style="width:50px;aspect-ratio:1/1;">
                                        <img 
                                            src="<?php echo get_sub_field('especie_imagen')['url'] ?>" 
                                            title="<?php echo get_sub_field('especie_imagen')['title'] ?>" 
                                            alt="<?php echo get_sub_field('especie_imagen')['alt'] ?>" 
                                            width="<?php echo get_sub_field('especie_imagen')['width'] ?>" 
                                            height="<?php echo get_sub_field('especie_imagen')['height'] ?>" 
                                            loading="lazy" class="w-full h-full object-contain object-center"
                                        >
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </section>
                    <?php endif; ?>
                    <section class="flex flex-col items-start gap-8 flex-grow justify-end desktop:py-28 desktop:pl-28 desktop:pr-0 p-8 list-disc">
                        <h1 class="title-line title-line--lg text-dark text-[22px] lg:text-[25px] desktop:text-[35px] font-bold">
                            Presentación
                        </h1>
                        <ul class="flex flex-col text-darkest text gap-2 list-disc list-inside">
                            <li>Caja (6 Frascos x 600 ML)</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex justify-center section">
            <a href="<?php echo esc_url(home_url('productos')); ?>" class="btn btn--sm">Volver a productos</a>
        </div>
    </div>
    <section class="bg-[#F5FFF7] section">
        <div class="container">
            <div class="flex relative justify-center mb-16">
                <h1 class="section-title title-line title-line--lg font-bold">
                    Otros Productos
                </h1>
            </div>
            <div class="grid grid-cols-[repeat(auto-fill,minmax(320px,1fr))] gap-4 lg:gap-16 justify-center mb-4">
                <article class="shadow-custom flex flex-col">
                    <!-- <img src="" alt=""> -->
                    <div class="flex items-center justify-center w-full h-[250px] md:h-[300px] desktop:h-[336px]">
                        <img src="./public/img/pr1.jpg" alt="Product1" class="w-full h-full object-contain" />
                    </div>
                    <div class="py-6 desktop:py-8 px-4 flex items-center flex-col bg-[#F1F1F1] flex-grow">
                        <h1 class="text-[21px] lg:text-[25px] desktop:text-[30px] font-bold mb-4 flex items-center gap-2 flex-grow">
                            Aromax
                        </h1>
                        <div class="flex justify-center">
                            <a href="./product.html" class="btn btn--sm">Más información</a>
                        </div>
                    </div>
                </article>
                <article class="shadow-custom flex flex-col">
                    <!-- <img src="" alt=""> -->
                    <div class="flex items-center justify-center w-full h-[250px] md:h-[300px] desktop:h-[336px]">
                        <img src="./public/img/pr2.jpg" alt="Product1" class="w-full h-full object-contain" />
                    </div>
                    <div class="py-6 desktop:py-8 px-4 flex items-center flex-col bg-[#F1F1F1] flex-grow">
                        <h1 class="text-[21px] lg:text-[25px] desktop:text-[30px] font-bold mb-4 flex items-center gap-2 flex-grow">
                            Bacflora BR
                        </h1>
                        <div class="flex justify-center">
                            <a href="./product.html" class="btn btn--sm">Más información</a>
                        </div>
                    </div>
                </article>
                <article class="shadow-custom flex flex-col">
                    <!-- <img src="" alt=""> -->
                    <div class="flex items-center justify-center w-full h-[250px] md:h-[300px] desktop:h-[336px]">
                        <img src="./public/img/pr3.jpg" alt="Product1" class="w-full h-full object-contain" />
                    </div>
                    <div class="py-6 desktop:py-8 px-4 flex items-center flex-col bg-[#F1F1F1] flex-grow">
                        <h1 class="text-[21px] lg:text-[25px] desktop:text-[30px] font-bold mb-4 flex items-center gap-2 flex-grow">
                            Dixxolin
                        </h1>
                        <div class="flex justify-center">
                            <a href="./product.html" class="btn btn--sm">Más información</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>