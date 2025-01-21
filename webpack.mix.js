const mix = require('laravel-mix');
const webpack = require('webpack'); // Thêm dòng này

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/product-detail.js', 'public/js')
    .js('resources/js/cart.js', 'public/js')
    .js('resources/js/product-admin.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]).webpackConfig({
        plugins: [
            new webpack.DefinePlugin({
                USER_ID: JSON.stringify(process.env.USER_ID),
            }),
        ],
    });
    
if (mix.inProduction()) {
    mix.version();
}
