<?php
/*
    Template name: contacto
*/

get_header();
?>

<div class="bg-black min-h-[250px] desktop:min-h-[480px] flex items-center" style="background: url(<?php echo get_field('banner')['url'] ?>) no-repeat;background-size:cover;">
    <div class="container h-full">
        <div class="flex justify-center items-center py-10 h-full">
            <h1 class="font-bold text-[100px] title-line title-line--light title-line--lg text-white-150">
                CONTÁCTANOS
            </h1>
        </div>
    </div>
</div>
<main>
    <div class="section">
        <div class="container">
            <div class="mx-auto max-w-[90%]">
                <div class="grid grid-cols-2">
                    <ul class="flex flex-col px-28 py-10 text text-text-primary gap-14">
                        <li class="flex gap-4">
                            <span class="inline-block w-7 h-7  flex align-center flex-shrink-0">
                                <img src="<?php echo IMG; ?>/Contactanos/phone.svg" alt="Teléfono" title="Teléfono">
                            </span>
                            <span> 
                                <?php echo get_option('nro_1'); ?> /
                                <?php echo get_option('nro_2'); ?> /
                                <?php echo get_option('nro_3'); ?>
                            </span>
                        </li>
                        <?php if(!empty(get_option('correo'))): ?>
                        <li class="flex gap-4">
                            <span class="inline-block w-7 h-7 flex-shrink-0 flex align-center">
                                <img src="<?php echo IMG; ?>/Contactanos/mail.svg" alt="Correo" title="Correo">
                            </span>
                            <span> <?php echo get_option('correo'); ?> </span>
                        </li>
                        <?php endif; ?>
                        <?php if(!empty(get_option('direccion'))): ?>
                        <li class="flex gap-4">
                            <span class="inline-block w-7 h-7  flex align-center flex-shrink-0">
                                <img src="<?php echo IMG; ?>/Contactanos/map.svg" alt="Dirección" title="Dirección">
                            </span>
                            <span>
                                <?php echo get_option('direccion'); ?>
                            </span>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="shadow-custom">
                        <?php echo do_shortcode('[contact-form-7 id="51" title="Formulario de Contacto"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-900 h-[680px]">
        <img 
            src="<?php echo get_field('mapa')['url'] ?>" 
            title="<?php echo get_field('mapa')['title'] ?>" 
            alt="<?php echo get_field('mapa')['alt'] ?>" 
            width="<?php echo get_field('mapa')['width'] ?>" 
            height="<?php echo get_field('mapa')['height'] ?>" 
            loading="lazy" class="w-full h-full object-cover object-center"
        >
    </div>
</main>

<?php get_footer(); ?>