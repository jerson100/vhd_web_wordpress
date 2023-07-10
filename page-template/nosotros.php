<?php
/*
    Template name: nosotros
*/

get_header();
?>

<div class="items-center flex min-h-[250px] desktop:min-h-[480px] p-8" style="background: url(<?php echo get_field('banner')['url'] ?>) no-repeat;background-size:cover;">
    <div class="container">
        <div class="flex flex-col gap-14 md:gap-20 lg:gap-28 desktop:gap-56 items-center max-w-7xl mx-auto text-white-150">
            <h1 class="banner-title text-center font-bold title-line title-line--light title-line--lg">
                NOSOTROS
            </h1>
        </div>
    </div>
</div>
<main>
    <section class="flex flex-col gap-8 lg:gap-12">
        <div class="container [&>div]:pb-0">
            <div class="section flex flex-col gap-4 lg:gap-8 desktop:gap-16 items-center max-w-[1300px] mx-auto">
                <p class="font-bold text-[25px] md:text-[30px] lg:text-[36px] desktop:text-[45px] leading-[35px]">
                    <?php echo get_field('titulo_d') ?>
                </p>
                <p class="text text-center">
                    <?php echo get_field('descripcion_d') ?>
                </p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 border border-solid border-[#D2D2D2]">
            <div class="px-4 py-8 lg:p-28 flex flex-col justify-center gap-8 lg:gap-14 items-start lg:w-[calc(100%-(100%-750px))] lg:ml-auto">
                <div class="w-12 h-12">
                    <img 
                        src="<?php echo get_field('icono_m')['url'] ?>" 
                        title="<?php echo get_field('icono_m')['title'] ?>" 
                        alt="<?php echo get_field('icono_m')['alt'] ?>" 
                        width="<?php echo get_field('icono_m')['width'] ?>" 
                        height="<?php echo get_field('icono_m')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-cover object-center"
                    >
                </div>
                <h1 class="section-title title-line font-bold title-line--xl">
                    <?php echo get_field('titulo_m') ?>
                </h1>
                <p class="text">
                    <?php echo get_field('descripcion_m') ?>
                </p>
            </div>
            <div class="border-l border-solid border-[#D2D2D2] pb-8 pt-8">
                <div class="w-full min-h-[360px] desktop:min-h-[570px]">
                    <img 
                        src="<?php echo get_field('imagen_m')['url'] ?>" 
                        title="<?php echo get_field('imagen_m')['title'] ?>" 
                        alt="<?php echo get_field('imagen_m')['alt'] ?>" 
                        width="<?php echo get_field('imagen_m')['width'] ?>" 
                        height="<?php echo get_field('imagen_m')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-contain object-center"
                    >
                </div>
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 border-b border-l border-r border-solid border-[#D2D2D2]">
            <div class="pl:pr-0 lg:pt-8 lg:pb-16 lg:pr-8 row-start-2 lg:row-start-1">
                <div class="w-full min-h-[360px] desktop:min-h-[570px]">
                    <img 
                        src="<?php echo get_field('imagen_v')['url'] ?>" 
                        title="<?php echo get_field('imagen_v')['title'] ?>" 
                        alt="<?php echo get_field('imagen_v')['alt'] ?>" 
                        width="<?php echo get_field('imagen_v')['width'] ?>" 
                        height="<?php echo get_field('imagen_v')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-contain object-center"
                    >
                </div>
            </div>
            <div class="px-4 py-8 border-l border-solid border-[#D2D2D2] lg:p-28 gap-8 flex flex-col justify-center lg:gap-14 items-start lg:w-[calc(100%-(100%-750px))]">
                <div class="w-12 h-12">
                    <img 
                        src="<?php echo get_field('icono_v')['url'] ?>" 
                        title="<?php echo get_field('icono_v')['title'] ?>" 
                        alt="<?php echo get_field('icono_v')['alt'] ?>" 
                        width="<?php echo get_field('icono_v')['width'] ?>" 
                        height="<?php echo get_field('icono_v')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-cover object-center"
                    >
                </div>
                <h1 class="section-title title-line font-bold title-line--xl">
                    <?php echo get_field('titulo_v') ?>
                </h1>
                <p class="text">
                    <?php echo get_field('descripcion_v') ?>
                </p>
            </div>
        </div>
    </section>
    <section class="flex flex-col gap-12 bg-[#E5F5E8]">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="px-4 py-8 lg:p-28 flex flex-col justify-center gap-8 lg:gap-14 items-start lg:w-[calc(100%-(100%-750px))] lg:ml-auto">
                <div class="w-12 h-12">
                    <img 
                        src="<?php echo get_field('icono_f')['url'] ?>" 
                        title="<?php echo get_field('icono_f')['title'] ?>" 
                        alt="<?php echo get_field('icono_f')['alt'] ?>" 
                        width="<?php echo get_field('icono_f')['width'] ?>" 
                        height="<?php echo get_field('icono_f')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-contain object-center"
                    >
                </div>
                <h1 class="section-title title-line font-bold title-line--xl">
                    <?php echo get_field('titulo_f') ?>
                </h1>
                <p class="text">
                    <?php echo get_field('descripcion_f') ?>
                </p>
            </div>
            <div class="pb-8 lg:pb-14 lg:pt-14 lg:pl-8 lg:pr-0">
                <div class="w-full min-h-[360px] desktop:min-h-[570px]">
                    <img 
                        src="<?php echo get_field('imagen_f')['url'] ?>" 
                        title="<?php echo get_field('imagen_f')['title'] ?>" 
                        alt="<?php echo get_field('imagen_f')['alt'] ?>" 
                        width="<?php echo get_field('imagen_f')['width'] ?>" 
                        height="<?php echo get_field('imagen_f')['height'] ?>" 
                        loading="lazy" class="w-full h-full object-contain object-center"
                    >
                </div>
            </div>
        </div>
    </section>
    <?php if(have_rows('valores')): ?>
    <section class="section bg-[#F2F2F2]">
        <div class="container">
            <div class="flex justify-center mb-20">
                <h1 class="section-title title-line title-line--lg font-bold">
                    Valores
                </h1>
            </div>
            <div class="flex flex-wrap justify-center gap-y-20">
                <?php while(have_rows('valores')): the_row(); ?>
                <div class="flex flex-col gap-4 w-full md:w-1/2 lg:w-1/3 items-center">
                    <div class="w-24 h-24">
                        <img 
                            src="<?php echo get_sub_field('icono_valor')['url'] ?>" 
                            title="<?php echo get_sub_field('icono_valor')['title'] ?>" 
                            alt="<?php echo get_sub_field('icono_valor')['alt'] ?>" 
                            width="<?php echo get_sub_field('icono_valor')['width'] ?>" 
                            height="<?php echo get_sub_field('icono_valor')['height'] ?>" 
                            loading="lazy" class="w-full h-full object-contain object-center"
                        >
                    </div>
                    <p class="font-roboto text-[20px] lg:text-[30px] desktop:text-[40px] text-text-primary font-normal">
                        <?php echo get_sub_field('nombre_valor') ?>
                    </p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="bg-white-150 section">
        <div class="container">
            <div class="flex justify-center mb-14">
                <h1 class="section-title title-line title-line--xl">
                    Líneas de <span class="font-bold">producto</span>
                </h1>
            </div>
            <ul class="grid grid-cols-3 gap-12">
                <li class="shadow-custom p-8 rounded-[15px]">
                    <article class="flex flex-col h-full">
                        <!-- <img src="" alt=""> -->
                        <div class="bg-black h-[230px] mb-4"></div>
                        <div class="flex justify-start flex-grow items-end">
                            <h1 class="text-[30px] font-bold text-text-primary mb-6 leading-[38px] title-line title-line--lg title-line--gray title-line--dl">
                                Antibióticos
                            </h1>
                        </div>
                        <p class="mb-6 line-clamp-2 text-[20px] font-normal font-roboto leading-[24px]">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                            eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                            dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                            nulla ut metus varius laoreet. Quisque rutrum. Aenean
                            imperdiet. Etiam ultricies nisi vel augue. Curabitur
                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                            quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                            ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                            orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                            mauris sit amet nibh. Donec sodales sagittis magna. Sed
                            consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        </p>
                        <div>
                            <button class="btn btn--sm">Ver más</button>
                        </div>
                    </article>
                </li>
                <li class="shadow-custom p-8 rounded-[15px]">
                    <article class="flex flex-col h-full">
                        <!-- <img src="" alt=""> -->
                        <div class="bg-black h-[230px] mb-4"></div>
                        <div class="flex justify-start flex-grow items-end">
                            <h1 class="text-[30px] font-bold text-text-primary mb-6 leading-[38px] title-line title-line--lg title-line--gray title-line--dl">
                                Promotores de Crecimiento
                            </h1>
                        </div>
                        <p class="mb-6 line-clamp-2 text-[20px] font-normal font-roboto leading-[24px]">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                            eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                            dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                            nulla ut metus varius laoreet. Quisque rutrum. Aenean
                            imperdiet. Etiam ultricies nisi vel augue. Curabitur
                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                            quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                            ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                            orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                            mauris sit amet nibh. Donec sodales sagittis magna. Sed
                            consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        </p>
                        <div>
                            <button class="btn btn--sm">Ver más</button>
                        </div>
                    </article>
                </li>
                <li class="shadow-custom p-8 rounded-[15px]">
                    <article class="flex flex-col h-full">
                        <!-- <img src="" alt=""> -->
                        <div class="bg-black h-[230px] mb-4"></div>
                        <div class="flex justify-start flex-grow items-end">
                            <h1 class="text-[30px] font-bold text-text-primary mb-6 leading-[38px] title-line title-line--lg title-line--gray title-line--dl">
                                Cáscara del Huevo
                            </h1>
                        </div>
                        <p class="mb-6 line-clamp-2 text-[20px] font-normal font-roboto leading-[24px]">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                            eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                            tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                            dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                            nulla ut metus varius laoreet. Quisque rutrum. Aenean
                            imperdiet. Etiam ultricies nisi vel augue. Curabitur
                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                            semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                            quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                            ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet
                            orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                            mauris sit amet nibh. Donec sodales sagittis magna. Sed
                            consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        </p>
                        <div>
                            <button class="btn btn--sm">Ver más</button>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>