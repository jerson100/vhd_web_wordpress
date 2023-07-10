<section class="section" style="background:url(<?php echo IMG; ?>/img-24.jpg) no-repeat;background-size:cover;">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-4 lg:justify-between items-center">
            <div class="flex flex-col gap-8 items-start">
                <h1 class="section-title font-bold inline-block text-white-150 title-line title-line--light title-line--lg">
                    Contáctanos
                </h1>
                <p class="text-white-150 max-w-xl text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                    commodo ligula eget
                </p>
            </div>
            <!-- max-w-[640px] h-[320px] desktop:h-[620px] -->
            <div class="w-full max-w-[640px] bg-white-150 flex-shrink-0 shadow-custom" style="border-radius: 5px;">
                <?php echo do_shortcode('[contact-form-7 id="51" title="Formulario de Contacto"]'); ?>
            </div>
        </div>
    </div>
</section>