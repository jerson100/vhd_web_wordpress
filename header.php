<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b72be65822.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>

    <?php if (is_404()) : ?>
        <title><?php esc_attr_e("Grupo Toratto | Página de Error"); ?></title>
    <?php else : ?>
        <title><?php the_title(); ?></title>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

    <header class="bg-white-150 shadow-custom fixed left-0 top-0 w-full z-40">
        <div class="flex flex-col">
            <div class="border-gray-50 border-b-[1px]">
                <div class="container flex justify-end">
                    <div class="flex items-center">
                        <ul class="flex gap-4 desktop:gap-8 pr-4 lg:pr-8 desktop:pr-12 [&>li>a>svg]:w-[25px] [&>li>a>svg]:h-[25px] [&>li>a>svg]:desktop:w-[25px] [&>li>a>svg]:desktop:h-[25px]">
                            <?php if (!empty(get_option('facebook'))) : ?>
                                <li>
                                    <a href="<?php echo get_option('facebook'); ?>" target="_blank">
                                        <svg id="Icon_awesome-facebook" data-name="Icon awesome-facebook" xmlns="http://www.w3.org/2000/svg" width="44.391" height="44.123" viewBox="0 0 44.391 44.123">
                                            <path id="Icon_awesome-facebook-2" data-name="Icon awesome-facebook" d="M44.954,22.758A22.2,22.2,0,1,0,19.29,44.685V29.174H13.652V22.758H19.29v-4.89c0-5.562,3.311-8.635,8.383-8.635a34.159,34.159,0,0,1,4.969.433v5.459h-2.8c-2.757,0-3.617,1.711-3.617,3.466v4.166h6.156L31.4,29.174H26.226V44.685A22.2,22.2,0,0,0,44.954,22.758Z" transform="translate(-0.563 -0.563)" fill="#161615" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty(get_option('instagram'))) : ?>
                                <li>
                                    <a href="<?php echo get_option('instagram'); ?>" target="_blank">
                                        <svg class="desktop:w-7 desktop:h-7 w-6 h-6" id="Componente_32_1" data-name="Componente 32 – 1" xmlns="http://www.w3.org/2000/svg" width="26.816" height="26.817" viewBox="0 0 26.816 26.817">
                                            <ellipse id="Elipse_9" data-name="Elipse 9" cx="13.408" cy="13.408" rx="13.408" ry="13.408" fill="#161615" />
                                            <path id="icons8-instagram" d="M7.546,3A4.4,4.4,0,0,0,3,7.229v6.766a4.4,4.4,0,0,0,4.546,4.229H14.82a4.4,4.4,0,0,0,4.546-4.229V7.229A4.4,4.4,0,0,0,14.82,3Zm0,1.691H14.82a2.641,2.641,0,0,1,2.728,2.537v6.766a2.641,2.641,0,0,1-2.728,2.537H7.546a2.641,2.641,0,0,1-2.728-2.537V7.229A2.641,2.641,0,0,1,7.546,4.691Zm8.183.846a.879.879,0,0,0-.909.846.912.912,0,0,0,1.818,0A.879.879,0,0,0,15.729,5.537Zm-4.546.846a4.4,4.4,0,0,0-4.546,4.229,4.4,4.4,0,0,0,4.546,4.229,4.4,4.4,0,0,0,4.546-4.229A4.4,4.4,0,0,0,11.183,6.383Zm0,1.691a2.641,2.641,0,0,1,2.728,2.537,2.641,2.641,0,0,1-2.728,2.537,2.641,2.641,0,0,1-2.728-2.537A2.641,2.641,0,0,1,11.183,8.074Z" transform="translate(2.336 2.797)" fill="#fff" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty(get_option('linkedin'))) : ?>
                                <li>
                                    <a href="<?php echo get_option('linkedin'); ?>" target="_blank">
                                        <svg id="Componente_2_5" data-name="Componente 2 – 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44">
                                            <path id="Sustracción_1" data-name="Sustracción 1" d="M22,44A22,22,0,0,1,6.444,6.444,22,22,0,1,1,37.556,37.556,21.857,21.857,0,0,1,22,44Zm5.274-21.767c2.907,0,2.907,2.755,2.907,4.767v8.764h5.578l.006-9.889c0-4.448-.811-8.565-6.7-8.565a5.9,5.9,0,0,0-5.289,2.907H23.7V17.761H18.337v18h5.584V26.849C23.921,24.566,24.319,22.233,27.273,22.233ZM9.245,17.761v18h5.59v-18ZM12.037,8.8a3.253,3.253,0,1,0,3.237,3.237A3.241,3.241,0,0,0,12.037,8.8Z" fill="#161615" />
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <?php if (!empty(get_option('correo'))) : ?>
                            <span class="text-text-primary text-[14px] desktop:text-[22px] pl-4 lg:pl-8 desktop:pl-12 border-l-[1px] border-gray-50 py-2">
                                <?php echo get_option('correo'); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="flex justify-between flex-wrap items-center py-4 lg:px-0">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="Inicio">
                        <svg class="h-[36px] desktop:h-[78px] w-[auto]" xmlns="http://www.w3.org/2000/svg" width="280.094" height="88.16" viewBox="0 0 280.094 88.16">
                            <g id="Grupo_1" data-name="Grupo 1" transform="translate(-115.3 -247.979)">
                                <path id="Trazado_1" data-name="Trazado 1" d="M133.942,346.691c-1.169-3.482-2.776-6.365-7.242-6.365-3.173,0-6.123,2.283-6.123,5.317,0,7.763,16.936,4.721,16.936,15.6,0,5.442-4.51,8.8-10.366,8.8-6.206,0-10.632-3.4-11.846-8.8l3.532-.753a8.623,8.623,0,0,0,8.36,6.867c3.567,0,6.658-2.428,6.658-5.75,0-8.643-16.94-5.044-16.94-15.483,0-5.118,4.474-8.466,10.008-8.466,5.495,0,9.038,3.621,10.335,8.109Z" transform="translate(0 -33.906)" fill="#161615" />
                                <path id="Trazado_2" data-name="Trazado 2" d="M172.114,374.891l-.369-2.787c-2.006,1.758-4.242,3.431-7.145,3.431a6.581,6.581,0,0,1-6.844-6.319c0-6.312,7.422-7.673,12.871-9l1.118-.287V358.7c0-2.515-1.917-3.876-4.691-3.876-2.724,0-4.6,1.59-6.026,3.468l-2.466-1.635a10.412,10.412,0,0,1,8.492-4.475c3.354,0,8.183,1.837,8.183,6.869v10.966a12.059,12.059,0,0,0,.657,4.875Zm-1.747-12.035c-3.312.88-9.339,2.082-9.339,6.046a3.775,3.775,0,0,0,3.7,3.677c2.772,0,5.327-1.726,7.013-3.6v-6.485Z" transform="translate(-16.052 -39.396)" fill="#161615" />
                                <path id="Trazado_3" data-name="Trazado 3" d="M198.106,374.891h-3.483V352.818h3.483v2.272c2.046-1.46,3.972-2.909,6.785-2.909,3.491,0,6.306,1.711,6.306,7.474v15.236h-3.483V360.459c0-2.319.451-5.719-3.263-5.719-2.144,0-4.96,1.88-6.346,3.363Z" transform="translate(-29.99 -39.396)" fill="#161615" />
                                <path id="Trazado_4" data-name="Trazado 4" d="M233.516,342.113h-3.483v-3.432h3.483Zm0,27.674h-3.483V347.714h3.483Z" transform="translate(-43.378 -34.292)" fill="#161615" />
                                <path id="Trazado_5" data-name="Trazado 5" d="M258.726,338.675h3.491v31.11h-3.491v-2.508a8.194,8.194,0,0,1-6.3,3.152c-3.352,0-9.031-2.76-9.031-11.234,0-8.681,4.919-12.121,9.16-12.121a9.5,9.5,0,0,1,6.168,2.909Zm0,14.676a6.663,6.663,0,0,0-5.768-3.559c-4.858,0-5.9,6-5.9,9.329,0,6.475,3.441,8.6,5.856,8.6,2.454,0,4.819-2.245,5.808-4.137Z" transform="translate(-48.431 -34.29)" fill="#161615" />
                                <path id="Trazado_6" data-name="Trazado 6" d="M295.811,374.891l-.359-2.787c-2,1.758-4.242,3.431-7.156,3.431a6.583,6.583,0,0,1-6.826-6.319c0-6.312,7.415-7.673,12.862-9l1.12-.287V358.7c0-2.515-1.907-3.876-4.681-3.876-2.734,0-4.61,1.59-6.036,3.468l-2.457-1.635a10.4,10.4,0,0,1,8.493-4.475c3.345,0,8.171,1.837,8.171,6.869v10.966a12.274,12.274,0,0,0,.669,4.875Zm-1.738-12.035c-3.3.88-9.339,2.082-9.339,6.046a3.781,3.781,0,0,0,3.7,3.677c2.776,0,5.331-1.726,7.018-3.6v-6.485Z" transform="translate(-62.825 -39.396)" fill="#161615" />
                                <path id="Trazado_7" data-name="Trazado 7" d="M332.651,338.675h3.483v31.11h-3.483v-2.508a8.225,8.225,0,0,1-6.306,3.152c-3.344,0-9.031-2.76-9.031-11.234,0-8.681,4.92-12.121,9.172-12.121a9.494,9.494,0,0,1,6.166,2.909Zm0,14.676a6.66,6.66,0,0,0-5.768-3.559c-4.879,0-5.9,6-5.9,9.329,0,6.475,3.434,8.6,5.848,8.6,2.466,0,4.831-2.245,5.818-4.137Z" transform="translate(-76.377 -34.29)" fill="#161615" />
                                <path id="Trazado_8" data-name="Trazado 8" d="M397.687,369.787h-3.762l-3.174-9.907H379.466l-3.013,9.907H372.7l9.8-31.106h5.181Zm-12.643-29.03h-.1l-4.551,16.317h9.51Z" transform="translate(-97.317 -34.292)" fill="#161615" />
                                <path id="Trazado_9" data-name="Trazado 9" d="M420.667,374.891h-3.492V352.818h3.492v2.272c2.055-1.46,3.982-2.909,6.786-2.909,3.493,0,6.316,1.711,6.316,7.474v15.236h-3.492V360.459c0-2.319.439-5.719-3.272-5.719-2.136,0-4.949,1.88-6.337,3.363Z" transform="translate(-114.132 -39.396)" fill="#161615" />
                                <path id="Trazado_10" data-name="Trazado 10" d="M456.094,342.113H452.6v-3.432h3.494Zm0,27.674H452.6V347.714h3.494Z" transform="translate(-127.525 -34.292)" fill="#161615" />
                                <path id="Trazado_11" data-name="Trazado 11" d="M470.449,374.891h-3.472V352.818h3.472v1.958c2.157-1.555,3.983-2.6,6.846-2.6a6.627,6.627,0,0,1,5.938,3c2.274-1.635,4.468-2.962,7.554-3,3.472,0,6.306,1.711,6.306,7.474v15.236H493.6V360.459c0-2.319.439-5.719-3.251-5.719a10.09,10.09,0,0,0-6.567,2.924v17.227h-3.491V360.459c0-2.319.447-5.719-3.274-5.719-2.983.083-4.78,1.471-6.567,2.924Z" transform="translate(-132.961 -39.396)" fill="#161615" />
                                <path id="Trazado_12" data-name="Trazado 12" d="M537.422,374.891l-.357-2.787c-2.018,1.758-4.242,3.431-7.147,3.431a6.578,6.578,0,0,1-6.833-6.319c0-6.312,7.413-7.673,12.86-9l1.12-.287V358.7c0-2.515-1.926-3.876-4.691-3.876-2.725,0-4.61,1.59-6.027,3.468l-2.466-1.635a10.412,10.412,0,0,1,8.493-4.475c3.354,0,8.172,1.837,8.172,6.869v10.966a12.441,12.441,0,0,0,.669,4.875Zm-1.736-12.035c-3.312.88-9.339,2.082-9.339,6.046a3.784,3.784,0,0,0,3.714,3.677c2.762,0,5.308-1.726,7-3.6v-6.485Z" transform="translate(-154.174 -39.396)" fill="#161615" />
                                <rect id="Rectángulo_1" data-name="Rectángulo 1" width="3.483" height="31.11" transform="translate(391.911 304.385)" fill="#161615" />
                                <path id="Trazado_13" data-name="Trazado 13" d="M150.326,295.888H131.555L115.3,247.979h16.944l8.93,29.057h.15l8.782-29.057h17.252Z" transform="translate(0 0)" fill="#161615" />
                                <path id="Trazado_14" data-name="Trazado 14" d="M200.783,247.979h16.8v16.634H233.3V247.979H250.1v47.909H233.3V276.9H217.579v18.986h-16.8Z" transform="translate(-32.319 0)" fill="#161615" />
                                <path id="Trazado_15" data-name="Trazado 15" d="M290.843,247.979h27.549c18.161,0,24.578,11.826,24.578,23.891,0,14.679-8.862,24.018-27.861,24.018H290.843Zm16.782,35.635h6.568c10.447,0,11.974-7.461,11.974-11.943,0-3.025-1.069-11.405-13.193-11.405h-5.349Z" transform="translate(-66.369)" fill="#161615" />
                            </g>
                        </svg>
                    </a>
                    <div class="lg:hidden hamburger w-[29px] h-[25px] flex flex-col gap-[5px] cursor-pointer">
                        <div class="w-full h-5 bg-zinc-800"></div>
                        <div class="w-full h-5 bg-zinc-800"></div>
                        <div class="w-full h-5 bg-zinc-800"></div>
                    </div>
                    <nav class="navigator">
                        <button class="absolute right-4 top-4 navigator__close text-white-150 text-[26px] border-none lg:hidden">
                            x
                        </button>
                        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-menus-wrapper', 'menu_class' => 'ul_menu flex gap-8 flex-wrap text-text-primary items-center text-[16px] lg:text-[18px]')); ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>