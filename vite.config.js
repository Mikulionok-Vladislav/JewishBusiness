import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [

        laravel({
            input: [
                'resources/sass/app.scss',

                'resources/css/animate.css',
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/color-switcher.css',
                'resources/css/line-icons.css',
                'resources/css/main.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.css',
                'resources/css/responsive.css',
                'resources/css/slicknav.min.css',
                'resources/css/summernote.css',

                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/color-switcher.js',
                'resources/js/contact-form-script.js',
                'resources/js/form-validator.min.js',
                'resources/js/jquery.counterup.min.js',
                'resources/js/jquery.slicknav.js',
                'resources/js/jquery-min.js',
                'resources/js/main.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/popper.min.js',
                'resources/js/summernote.js',
                'resources/js/waypoints.js',
                'resources/js/wow.js',



            ],
            refresh: true,
        }),
    ],
});
