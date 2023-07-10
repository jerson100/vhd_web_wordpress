<?php
/*
    Template name: gracias
*/

get_header();
?>

<main>
    <div class="bg-black items-center flex min-h-[calc(100vh-155px)] p-8 justify-center" style="background: url(<?php echo get_field('imagen_de_fondo')['url'] ?>) no-repeat;background-size:cover;">
        <div class="container text-white-150 flex justify-center">
            <div class="flex flex-col gap-20 items-center max-w-xl">
                <div class="flex flex-col gap-4 mx-auto items-center [&>button]:min-w-[260px]">
                    <h1 class="text-[50px] text-center">
                        <span class="font-bold text-[60px] block">¡GRACIAS </span>
                        POR CONTACTARNOS!
                    </h1>
                    <p class="text-[20px] font-roboto font-light text-center mb-11">
                        Nos comunicaremos contigo a la brevedad.
                    </p>
                    <a class="btn btn-outline btn-white btn--sm" href="<?php echo esc_url(home_url('/')); ?>" title="Inicio">
                        Volver al inicio
                    </a>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-[20px] font-normal text-center">
                        También puedes seguirnos en nuestras redes sociales:
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>