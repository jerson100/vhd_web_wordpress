<?php
/*
    Template name: politicas-privacidad
*/

get_header();
?>

<div class="bg-black min-h-[480px] flex items-center">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold text-[100px] title-line title-line--light title-line--lg text-white-150">
                Políticas de privacidad
            </h1>
        </div>
    </div>
</div>
<main>
    <div class="section bg-white-150">
        <div class="container">
            <div class="px-8">
                <div class="bg-red px-52 pt-14 pb-28 bg-[#F2F2F2] [&>p]:font-roboto [&>p]:text-[23px] politicas">
                    <?php the_content(); ?>                    
                    <div class="flex justify-center home">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--sm" title="Inicio">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>