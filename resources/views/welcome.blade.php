{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<html lang="en" style="height:100%;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport"
        content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0, maximum-scale=1, user-scalable=yes">

    <title> Breakaway Travelclub </title>




    <!-- CSRF Token -->
    <meta name="csrf-token" content="zXbobEx9XV4cTu2ifX2nQFr4TyKtWMCVJrK7ZwBk">
    <link href="https://travelclub.com.au/css/masterstyle.css" rel="stylesheet" type="text/css">
    <link href="https://travelclub.com.au/css/livestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://travelclub.com.au/css/jquery-ui.css ">
    <link rel="stylesheet" href="https://travelclub.com.au/css/jqui-style.css">


    <link href="https://travelclub.com.au/css/roboto-css.css" rel="stylesheet" type="text/css">
    <link href="https://travelclub.com.au/css/font-css.css" rel="stylesheet" type="text/css">






    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script type="text/javascript" src="https://travelclub.com.au/js/jquery-1.8.3.js"></script>


    <script type="text/javascript" src="https://travelclub.com.au/js/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="https://travelclub.com.au/js/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="https://travelclub.com.au/js/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="https://travelclub.com.au/js/jquery.ui.datepicker.min.js"></script>
    <script type="text/javascript" src="https://travelclub.com.au/js/barba.min.js "></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>






    <style>
        .topnav,
        .navbar {
            display: none;
        }

        /*.container {*/
        /*width: 1000px;*/
        /*}*/
        #profile_menu {
            display: none;
        }

        #mobile_offers {
            display: none;

        }

        .goog-te-combo {
            width: 100%;
        }

        .goog-te-gadget {
            height: 25px !important;
            overflow-y: hidden !important;
        }

        body>.skiptranslate {
            display: none;

        }

        /*body {*/
        /*top: 0px !important;*/
        /*}*/

        #membership_category {
            width: 100%;
        }

        /*#container{width:990px;}*/
        .mobile_view {
            display: none;
        }

        #cruise_search {
            display: block;
        }

        #cruise_search_mobile {
            display: none;
        }

        #amadeus_flights {
            visibility: hidden;
            max-height: 5px;
        }

        /*.cruise_tiles{width:145px; height:45px;}*/
        #membership_holder {
            width: 379px;
            float: left;
            padding: 10px;
        }

        .required {
            border: 1px solid red !important;

        }

        #submit_btn {
            font-size: 0 !important;
        }


        @media only screen and (max-width:480px) {
            @import url('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css');
            @import url('http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css');

            #leftMenu,
            #header,
            #footer {
                display: none;
            }

            #desktop_offers {
                display: none;
            }

            #mobile_offers {
                display: block;
            }

            .desktop_view {
                display: none;
            }

            .mobile_view {
                display: block;
            }

            .small-special {
                width: 97.99%;
            }

            #content {

                padding-left: 0px;
            }

            #content,
            .subSection {

                width: 100%;
            }

            #img_head {
                width: 100%;
            }

            ul li {
                font-size: 16px;
            }

            .img {
                width: 50px !important;
            }

            #RightNav,
            #LatestSpecials,
            #SpecialsNav {
                display: none !important;
            }


            #cruise_search_mobile {
                display: block;
            }

            #cruise_search {
                display: none;
            }

            .quickSearch {
                width: 98% !important;
                margin-left: 0;
                margin-right: 0;
            }

            .PriceTable {
                width: 100% !important;
                font-size: 14pt;
                margin-left: 0 !important;
                padding-left: 0 !important;
            }


            #img_agoda_deals {
                width: 220px;
                height: 312px;
                display: none;

            }

            #agoda_deal {
                display: none;
            }

            #agoda_space {
                display: none;
            }

            #ViewSpecial_div_FareMatrix img {
                width: auto;
                height: auto;
                overflow: hidden;
                max-width: 100%;

            }

            .title {
                text-align: center;

            }

            #membership_holder {
                width: auto;
            }

            h1.title span {
                width: 100%;
                background: url(../images/heading1.png) no-repeat;
            }

            #cruise_search {
                width: 100%;
            }

            .mobile_li li {
                margin-left: 10%;
            }

            #content_membership {
                width: auto;
            }

            .rightSection {
                display: none;
            }

            #profile_sidebar {
                display: none;
            }

            #profile_menu {
                display: block;
            }

            #container {
                width: 100%;
                /*min-width:530px;*/
                /*zoom:60%;*/
                background-color: #fff;
                margin: none;
                text-align: left;
                -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
                -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
                padding-bottom: 80px;
            }

            .topnav {
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;


            }



            .topnav {
                overflow: hidden;
                background-color: #333;
                position: relative;
            }

            .topnav #myLinks {
                display: none;
            }

            .topnav a {
                color: #35bac8;
                font-weight: bold;
                background-color: white;
                padding: 24px 16px;
                text-align: center;
                text-decoration: none;
                font-size: 22px;

                display: block;
            }

            .topnav a.icon {
                background: white;
                color: black;
                display: block;
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav a:hover {
                background-color: white;
                color: black;
            }

            .active {
                background-color: white;
                color: white;
            }

            .dash {
                border-bottom: 1px dashed silver;
            }


            /*fixed overlay*/
            .navbar {
                display: block;
                overflow: hidden;
                /*background-color:#7480B0;*/
                background-color: red;
                position: fixed;
                bottom: 0;
                width: 100%;
                z-index: 9999;
            }

            .navbar a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 10px;
                text-decoration: none;
                font-size: 14px;
            }

            .navbar a:hover {
                background: #f1f1f1;
                color: black;
            }

            .navbar a.active {
                background-color: red;
                color: white;
            }

            /*end fixed overlay*/

            #main {
                padding: 5px 5px 0 5px;
            }

            #amadeus_flights {
                display: block;
                visibility: visible;
                max-height: 900px;
            }

            .center_img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 95%;

            }

            .cruise_tiles {
                width: 80px;
                height: 40px;
            }

            .custom_tbl_size {
                width: 100%;
            }

        }
    </style>


    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.cYEbrOmw59Q.L.W.O/d=0/rs=AN8SPfpU282joXDlbkUblMtWLWoZn4bb2g/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.iv1dkYHco2I.O/d=1/exm=el_conf/ed=1/rs=AN8SPfpB5eySKAAh-w3K64IDZXcfx9JHyQ/m=el_main">
    </script>
</head>

<body style="position: relative; min-height: 100%; top: 0px;">
    <div id="barba-wrapper">
        <div class="barba-container">

            <div id="container">

                <div id="navbar" class="navbar" style="bottom: 0px;">
                    <a href="/" class="active no-barba"><i class="fa fa-bell"
                            aria-hidden="true"></i>&nbsp;Sale</a>
                    <a href="/memberships" class="no-barba"><i class="fa fa-user-plus"
                            aria-hidden="true"></i>&nbsp;Membership</a>
                    <a href="/summary-page" calss="no-barba"><i class="fa fa-check-circle fa-1x "
                            aria-hidden="true"></i>&nbsp;Login</a>
                    <a href="tel:1300380747" class="no-barba"><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;Call
                        US </a>
                </div>
                <!-- Top Navigation Menu -->
                <div style="background-color:white;" class="topnav mobile" id="mobi_menu">
                    <a href="#home" class="active"><img style="width:125px;float:left;"
                            src="https://travelclub.com.au/images/travelclub-logo.png"> </a>
                    <div id="myLinks">






                        <a href="#home" class="dash"><img src="https://travelclub.com.au/images/book-online.png">
                        </a>
                        <a rel="prerender" style="" href="/" class="dash home current"
                            onclick="gaEvent('MainMenu','Home')">Home</a>
                        <a rel="prerender" href="/travel-industry-flights/" class="dash flights no-barba"
                            onclick="gaEvent('MainMenu','Flights')">Flights</a>
                        <a rel="prerender" href="/live/specials/hotels/" class="dash hotels no-barba"
                            onclick="gaEvent('MainMenu','Hotels')">Hotels</a>
                        <a rel="prerender" href="/live/carhire/" class="dash cars"
                            onclick="gaEvent('MainMenu','Car Hire')">Car Hire</a>
                        <a rel="prerender" href="/live/specials/tours/" class="dash tours no-barba"
                            onclick="gaEvent('MainMenu','Tours')">Tours</a>
                        <a rel="prerender" href="/cruise/" class="dash cruise"
                            onclick="gaEvent('MainMenu','Cruise')">Cruise</a>
                        <a rel="prerender" href="/live/insurance/" class="dash insurance"
                            onclick="gaEvent('MainMenu','Insurance')">Insurance</a>
                        <a rel="prerender" href="/memberships/" class="dash membership"
                            onclick="gaEvent('MainMenu','Membership')">Membership</a>
                        <a rel="prerender" href="/tools/" class="dash tools"
                            onclick="gaEvent('MainMenu','Tools')">Tools</a>
                        <a rel="prerender" href="/help/" class="dash help"
                            onclick="gaEvent('MainMenu','Help')">Help</a>
                        <a rel="prerender" href="/contact/" class="dash contact"
                            onclick="gaEvent('MainMenu','Contact Us')">Contact Us</a>
                        <a rel="prerender" href="https://travelclub.com.au/membership" class="dash"
                            onclick="gaEvent('MainMenu','Join Now')">Join Now</a>
                        <a href="https://travelclub.com.au/summary-page" class="dash"
                            onclick="gaEvent('MainMenu','My Profile')">My Profile</a>
                        <a href="https://travelclub.com.au/verification-letters-page" class="dash"
                            onclick="gaEvent('MainMenu','Get Verified')">Get Verified</a>
                        <a href="/password/reset" class="dash"
                            onclick="gaEvent('MainMenu','Forgot Password')">Forgot Login Details?</a>
                    </div>


                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>

                </div>
                <hr>

                <!-- Top Navigation Menu -->

                <!-- header begins -->
                <div id="header">
                    <h1><a href="/" class="home" onclick="gaEvent('MainMenu','Logo')">travelclub.com.au</a>
                    </h1>
                    <div class="book-online"></div>



                    <div class="blurb">
                        <form class="form-inline no-barba" method="POST" action="https://travelclub.com.au/login">
                            <input type="hidden" name="_token" value="zXbobEx9XV4cTu2ifX2nQFr4TyKtWMCVJrK7ZwBk">
                            <table id="ctl00_LiveHeader_LoginView1_Login1" cellspacing="0" cellpadding="0"
                                border="0" style="border-collapse:collapse;">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="loginForm">
                                                <tbody>

                                                    <tr>

                                                        <td>
                                                            <input type="text" class="loginTextBox no-barba"
                                                                id="membership_no" name="membership_no"
                                                                placeholder="Membership number">
                                                        </td>
                                                        <td>
                                                            <input type="password" class="loginTextBox no-barba"
                                                                id="password" name="password"
                                                                placeholder="Password">
                                                        </td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn-login no-barba"></button>
                                                        </td>


                                                    </tr>




                                                </tbody>
                                            </table>
                                            <a href="https://travelclub.com.au/membership" class="main_menu"
                                                onclick="gaEvent('MainMenu','Join Now')">Join
                                                Now</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="https://travelclub.com.au/summary-page" class="main_menu"
                                                onclick="gaEvent('MainMenu','My Profile')">My
                                                Profile</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="https://travelclub.com.au/verification-letters-page"
                                                class="main_menu" onclick="gaEvent('MainMenu','Get Verified')">Get
                                                Verified</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="https://travelclub.com.au/password/reset"
                                                class="main_menu  no-barba"
                                                onclick="gaEvent('MainMenu','Forgot Password')">Forgot Login
                                                Details?</a>



                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>


                    </div>


                    <ul id="main-menu">
                        <li><a rel="prerender" href="/" class="home current main_menu no-barba"
                                onclick="gaEvent('MainMenu','Home')">Home</a></li>
                        <li><a rel="prerender" href="/travel-industry-flights/" class="flights main_menu no-barba"
                                onclick="gaEvent('MainMenu','Flights')">Flights</a></li>
                        <li><a rel="prerender" href="/live/specials/hotels/" class="hotels main_menu no-barba"
                                onclick="gaEvent('MainMenu','Hotels')">Hotels</a></li>
                        <li><a rel="prerender" href="/live/carhire/" class="cars main_menu no-barba"
                                onclick="gaEvent('MainMenu','Car Hire')">Car Hire</a></li>
                        <li><a rel="prerender" href="/live/specials/tours/" class="tours main_menu no-barba"
                                onclick="gaEvent('MainMenu','Tours')">Tours</a></li>
                        <li><a rel="prerender" href="/cruise/" class="cruise main_menu no-barba"
                                onclick="gaEvent('MainMenu','Cruise')">Cruise</a></li>
                        <li><a rel="prerender" href="/live/insurance/" class="insurance main_menu no-barba"
                                onclick="gaEvent('MainMenu','Insurance')">Insurance</a></li>
                        <li><a rel="prerender" href="/memberships/" class="membership main_menu no-barba"
                                onclick="gaEvent('MainMenu','Membership')">Membership</a></li>
                        <li onmouseover="showMenu('Tools')" onmouseout="menu_MouseOut('Tools')"><a rel="prerender"
                                href="/tools/" class="tools main_menu no-barba"
                                onclick="gaEvent('MainMenu','Tools')">Tools</a></li>
                        <li onmouseover="showMenu('Help')" onmouseout="menu_MouseOut('Help')"><a rel="prerender"
                                href="/help/" class="help main_menu no-barba"
                                onclick="gaEvent('MainMenu','Help')">Help</a></li>
                        <li><a rel="prerender" href="/contact/" class="contact main_menu no-barba"
                                onclick="gaEvent('MainMenu','Contact Us')">Contact Us</a></li>

                    </ul>





                    <div id="menu_Tools" class="sub-menu tools" onmouseover="menu_MouseOver('Tools');"
                        onmouseout="menu_MouseOut('Tools');">
                        <div class="menu-holder"></div>
                        <div class="menu-content">
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="width:50%" valign="top">
                                            <strong style="color:#ff0000">Flights</strong><br>
                                            <a href="http://www.checkmytrip.com/" target="_blank"
                                                onclick="gaEvent('MainMenu','Check my Trip')">Check my Trip</a><br>
                                            <a href="http://flightaware.com/" target="_blank"
                                                onclick="gaEvent('MainMenu','Flight Tracker')">Flight Tracker</a>
                                            <br><br>
                                            <strong style="color:#ff0000">Currency</strong><br>
                                            <a href="https://www1.oanda.com/currency/converter/"
                                                onclick="gaEvent('MainMenu','Currency Converter')">Currency
                                                Converter</a><br>
                                            <a href="https://www.americanexpress.com/australia/personal/te/tc/default.shtml?au_nu=subtab&amp;page=PR&amp;inav=au_menu_travel_money_cheques"
                                                target="_blank"
                                                onclick="gaEvent('MainMenu','Travellers Cheques')">Travellers
                                                Cheques</a><br>

                                            <a href="https://www.americanexpress.com/australia/" target="_blank"
                                                onclick="gaEvent('MainMenu','American Express')">American Express</a>
                                            <br><br>
                                            <strong style="color:#ff0000">Planning</strong><br>
                                            <a href="http://www.smarttraveller.gov.au" target="_blank"
                                                onclick="gaEvent('MainMenu','Smart Traveller')">Smart Traveller</a><br>
                                            <a href="https://www.australia.gov.au/information-and-services/passports-and-travel"
                                                target="_blank"
                                                onclick="gaEvent('MainMenu','Visas Passports')">Passports</a><br>
                                            <a href="https://dfat.gov.au/travel/visas/Pages/visas-for-australians-travelling-overseas.aspx"
                                                target="_blank"
                                                onclick="gaEvent('MainMenu','Visas Passports')">Visas</a><br>
                                            <a href="/live/insurance"
                                                onclick="gaEvent('MainMenu','Insurance (Tools)')">Insurance</a><br>
                                            <a href="https://www.nsw.gov.au/about-new-south-wales/school-term-dates/"
                                                target="_blank" onclick="gaEvent('MainMenu','School Holidays')">School
                                                Holidays</a><br>
                                        </td>
                                        <td style="width:50%" valign="top">
                                            <strong style="color:#ff0000">Destinations</strong><br>
                                            <a href="http://www.timeanddate.com/weather/" target="_blank"
                                                onclick="gaEvent('MainMenu','Local Weather')">Local Weather</a><br>
                                            <a href="http://www.timeanddate.com/worldclock/" target="_blank"
                                                onclick="gaEvent('MainMenu','Local Time')">Local Time</a><br>
                                            <a href="http://www.worldairportguides.com/" target="_blank"
                                                onclick="gaEvent('MainMenu','Airport Guides')">Airport Guides</a><br>
                                            <a href="http://www.lonelyplanet.com/destinations" target="_blank"
                                                onclick="gaEvent('MainMenu','Destination Guides')">Destination
                                                Guides</a>
                                            <br><br>
                                            <strong style="color:#ff0000">Travel News</strong><br>
                                            <a href="http://www.etravelblackboard.com/" target="_blank"
                                                onclick="gaEvent('MainMenu','eTravel Blackboard')">eTravel
                                                Blackboard</a><br>
                                            <a href="http://www.traveldaily.com.au/" target="_blank"
                                                onclick="gaEvent('MainMenu','Travel Daily')">Travel Daily</a><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="menu_Help" class="sub-menu help" style="display: none;"
                        onmouseover="menu_MouseOver('Help');" onmouseout="menu_MouseOut('Help');">
                        <div class="menu-holder"></div>
                        <div class="menu-content">
                            <table style="width:100%">
                                <tbody>
                                    <tr>
                                        <td style="width:50%" valign="top">
                                            <strong style="color:#ff0000">Travelclub</strong><br>
                                            <a href="/about" class="main_menu"
                                                onclick="gaEvent('MainMenu','About Travelclub')">About
                                                Travelclub</a><br>
                                            <a href="/about/how-to-book" class="main_menu"
                                                onclick="gaEvent('MainMenu','How to Book')">How to Book</a><br>
                                            <a href="/about/fees-and-charges" class="main_menu"
                                                onclick="gaEvent('MainMenu','Fees and Charges')">Fees &amp;
                                                Charges</a><br>
                                            <a href="/about/forms" class="main_menu"
                                                onclick="gaEvent('MainMenu','Forms')">Forms</a>
                                        </td>
                                        <td style="width:50%" valign="top">
                                            <strong style="color:#ff0000">Membership</strong><br>
                                            <a href="/live/membership/eligibility.aspx" class="main_menu"
                                                onclick="gaEvent('MainMenu','Eligibility')">Eligibility</a><br>
                                            <a href="/membership/" class="main_menu"
                                                onclick="gaEvent('MainMenu','Join Now (About)')">Join Now</a><br>
                                            <a href="/renew-page" class="main_menu"
                                                onclick="gaEvent('MainMenu','Renew Membership')">Renew
                                                Membership</a><br>
                                            <a href="/summary-page" class="main_menu"
                                                onclick="gaEvent('MainMenu','My Profile (About)')">My Profile</a><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <script type="text/javascript">
                        var menuTimer;
                        var cMenu = null;

                        function showMenu(id, obj) {
                            if (cMenu != id) closeMenu();
                            cMenu = id;
                            $('#menu_' + id).show();
                            if (menuTimer) window.clearTimeout(menuTimer);
                        }

                        function menu_MouseOver(id) {
                            if (menuTimer) window.clearTimeout(menuTimer);
                        }

                        function menu_MouseOut(id) {
                            cMenu = id;
                            menuTimer = window.setTimeout(closeMenu, 500);
                        }

                        function closeMenu() {
                            if (cMenu) {
                                $('#menu_' + cMenu).hide();
                                window.clearTimeout(menuTimer);
                                cMenu = null;
                            }
                        }

                        // $(document).ready(function () {
                        //     if (window.location.href.indexOf("clia") > -1) {
                        //         $(".home").attr("href", "http://travelclub.com.au/clia/")
                        //     }
                        //     else if (window.location.href.indexOf("hawaiian") > -1) {
                        //         $(".home").attr("href", "http://travelclub.com.au/hawaiian/")
                        //     }
                        //     else if (window.location.href.indexOf("iata") > -1) {
                        //         $(".home").attr("href", "/iata")
                        //     }
                        //     else {
                        //         $(".home").attr("href", "/")
                        //     }
                        // });
                    </script>



                </div>
                <!-- header ends -->



                <!-- mainframe shadow container -->
                <div id="main">
                    <!-- left sidebar begin -->
                    <div id="leftMenu">

                        <!-- CSRF Token -->
                        <meta name="csrf-token" content="zXbobEx9XV4cTu2ifX2nQFr4TyKtWMCVJrK7ZwBk">



                        <script>
                            $(function() {
                                // $( "#txtReturnDate" ).datepicker({
                                // showOn: "focus",
                                // dateFormat: "dd/mm/yy",
                                // });
                                // $( "#txtReturnDate").datepicker("setDate","+7");

                                // $( "#txtDepartureDate").datepicker({
                                // showOn: "focus",
                                // dateFormat: "dd/mm/yy",

                                // });
                                // $("#txtDepartureDate").datepicker("setDate","+3");


                                $("#txtDepartureDate").datepicker({
                                    showOn: "focus",
                                    dateFormat: "dd/mm/yy",
                                    onSelect: function(dateText, inst) {
                                        var txtDate = $(this).datepicker('getDate');
                                        txtDate.setDate(txtDate.getDate() + 7);
                                        $("#txtReturnDate").datepicker('setDate', txtDate);
                                    }

                                });


                                $("#txtReturnDate").datepicker({
                                    showOn: "focus",
                                    dateFormat: "dd/mm/yy",
                                });



                                $('#txtAccom_CheckIn').datepicker({
                                    showOn: "focus",
                                    dateFormat: "dd/mm/yy",

                                });
                                $('#txtAccom_CheckOut').datepicker({
                                    showOn: "focus",
                                    dateFormat: "dd/mm/yy",
                                });
                            });

                            jQuery(function() {
                                var onAutocompleteSelect = function(value, data, el) {
                                    document.getElementById('hf_Destination').value = data;
                                    document.getElementById('txtDestAirport').value = value.substr(0, value.indexOf(','));
                                };

                                var hotelSelect = function(value, data, el) {
                                    document.getElementById('hf_Accom_Destination').value = data;
                                    //document.getElementById(CTL+'txtAccomm_DestCity').value=value.substr(0,value.indexOf(','));
                                }


                                var options = {
                                    //serviceUrl: '/live/flights/autocomplete.ashx',
                                    width: 250,
                                    maxHeight: 100,
                                    minChars: 2,
                                    delimiter: /(,|;)\s*/,
                                    onSelect: onAutocompleteSelect,
                                    deferRequestBy: 0, //miliseconds
                                    params: {
                                        country: 'Yes'
                                    },
                                    noCache: false, //set to true, to disable caching
                                    search: function(event, ui) {}
                                };

                                var a1 = $('#txtDestAirport').autocomplete(options);
                                //a1.serviceUrl = 'http://www.travelclub.com.au/live/flights/autocomplete.ashx';
                                a1.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api';
                                a1.enable();

                                var a2 = $('#txtAccomm_DestCity').autocomplete(options);
                                a2.options.onSelect = hotelSelect;
                                a2.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api';
                                a2.enable();

                            });




                            $(document).ready(function() {

                                function detectmob() {
                                    if (navigator.userAgent.match(/iPhone/i) ||
                                        navigator.userAgent.match(/iPad/i) ||
                                        navigator.userAgent.match(/iPod/i)
                                    ) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                };

                                var cruiseTab = $('#tab_cruise .cruise-tab');
                                if (detectmob()) {
                                    $(cruiseTab).addClass('cruise-tab-ios');
                                } else {
                                    $(cruiseTab).removeClass('cruise-tab-ios');
                                }
                            });

                            jQuery(function() {
                                var onAutocompleteSelect = function(value, data, el) {
                                    document.getElementById('hf_Destination').value = data;
                                    document.getElementById('txtDestAirport').value = value.substr(0, value.indexOf(','));
                                };

                                var hotelSelect = function(value, data, el) {
                                    document.getElementById('hf_Accom_Destination').value = data;
                                    //document.getElementById(CTL+'txtAccomm_DestCity').value=value.substr(0,value.indexOf(','));
                                }


                                var options = {
                                    //serviceUrl: '/live/flights/autocomplete.ashx',
                                    width: 250,
                                    maxHeight: 100,
                                    minChars: 2,
                                    delimiter: /(,|;)\s*/,
                                    onSelect: onAutocompleteSelect,
                                    deferRequestBy: 0, //miliseconds
                                    params: {
                                        country: 'Yes'
                                    },
                                    noCache: false, //set to true, to disable caching
                                    search: function(event, ui) {}
                                };

                                var a1 = $('#txtDestAirport').autocomplete(options);
                                a1.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api?';
                                a1.enable();

                                var a2 = $('#txtAccomm_DestCity').autocomplete(options);
                                a2.options.onSelect = hotelSelect;
                                a2.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api?';
                                a2.enable();

                            });

                            function sb_selectTab(id, obj) {
                                document.getElementById('tab_flights').style.display = 'none';
                                document.getElementById('tab_hotels').style.display = 'none';
                                document.getElementById('tab_cars').style.display = 'none';
                                document.getElementById('tab_cruise').style.display = 'none';

                                document.getElementById('tab_' + id).style.display = 'block';

                                $("#SearchBox .current").removeClass('current');
                                $(obj).addClass('current');
                            }
                            /* ---- Flights ---- */
                            /* 
                            function btnGo_Flight_Click(myCTL) {

                                var QS = '';
                                //if (!myCTL) myCTL = CTL;

                                QS += 'FlightType=';
                                if (document.getElementById('rdoReturn').checked) { QS += 'RoundTrip' } else { QS += 'OneWay' }

                                QS += '&From=' + document.getElementById('txtFromAirport').value;
                                QS += '&DepartureDate=' + document.getElementById('txtDepartureDate').value;

                                // Destination
                                QS += "&To=";
                                if (document.getElementById('hf_Destination').value != '') {
                                    QS += document.getElementById('hf_Destination').value;
                                } else {
                                    QS += document.getElementById('txtDestAirport').value;
                                }

                                // Return Date
                                if (document.getElementById('rdoReturn').checked) {
                                    QS += '&ReturnDate=' + document.getElementById('txtReturnDate').value;
                                }

                                // Flexible Dates
                                if (document.getElementById('chkFlexible').checked) {
                                    QS += "&IsCalendarSearch=Y";
                                }else{
                        			   QS += "&IsCalendarSearch=N";
                        		}

                                // Passengers
                                QS += "&AdtCount=" + document.getElementById('cboAdults').value;
                                QS += "&ChdCount=" + document.getElementById('cboChildren').value;
                                QS += "&InfCount=" + document.getElementById('cboInfants').value;

                                // Cabin Class
                                if (document.getElementById('cboCabinClass').value != '') {
                                    QS += "&CabinClass=" + document.getElementById('cboCabinClass').value;
                                }

                                // Preffered Airline
                                if (document.getElementById('cboAirline')) {
                                    QS += "&PrefAirline1=" + document.getElementById('cboAirline').value;
                                }

                                //alert(QS);
                                //document.location.href = '/live/flights/?' + QS;
                                var upuri= '/live/flights/?' + QS;
                                window.open(upuri, '_blank');
                                redirectWindow.location;
                                //myCTL.preventDefault();
                                //return false;

                            }
                            */
                            /** New Amadeus Flight Redirect */

                            function btnGo_Flight_Click(myCTL) {

                                var QS = '';
                                //if (!myCTL) myCTL = CTL;

                                QS += 'Return=';
                                if (document.getElementById('rdoReturn').checked) {
                                    QS += '2'
                                } else {
                                    QS += '1'
                                }

                                QS += '&Origin=' + document.getElementById('txtFromAirport').value;

                                var departure_date = document.getElementById('txtDepartureDate').value;
                                var departure_date_splitted = departure_date.split('/');
                                var departure_date_formatted = departure_date_splitted[2] + '-' + departure_date_splitted[1] + '-' +
                                    departure_date_splitted[0];

                                QS += '&DepartDate=' + departure_date_formatted;

                                // Destination
                                QS += "&Destination=";
                                if (document.getElementById('hf_Destination').value != '') {
                                    QS += document.getElementById('hf_Destination').value;
                                } else {
                                    QS += document.getElementById('txtDestAirport').value;
                                }

                                // Return Date
                                if (document.getElementById('rdoReturn').checked) {
                                    var return_date = document.getElementById('txtReturnDate').value;
                                    var return_date_splitted = return_date.split('/');
                                    var return_date_formatted = return_date_splitted[2] + '-' + return_date_splitted[1] + '-' +
                                        return_date_splitted[0];

                                    QS += '&ReturnDate=' + return_date_formatted;
                                }

                                // Flexible Dates
                                if (document.getElementById('chkFlexible').checked) {
                                    QS += "&IsCalendarSearch=Y";
                                } else {
                                    QS += "&IsCalendarSearch=N";
                                }

                                // Passengers
                                QS += "&Adults=" + document.getElementById('cboAdults').value;
                                QS += "&Children=" + document.getElementById('cboChildren').value;
                                QS += "&Infants=" + document.getElementById('cboInfants').value;

                                // Cabin Class
                                if (document.getElementById('cboCabinClass').value != '') {

                                    var cabin_class = {
                                        'Y': 'Economy',
                                        'W': 'Premium',
                                        'C': 'Business',
                                        'F': 'First',
                                    };

                                    var cabin_value = document.getElementById('cboCabinClass').value;

                                    QS += "&CabinClass=" + cabin_class[cabin_value];
                                } else {
                                    QS += "&CabinClass=Economy";
                                }

                                // Preffered Airline
                                if (document.getElementById('cboAirline')) {
                                    QS += "&PrefAirline1=" + document.getElementById('cboAirline').value;
                                }

                                //alert(QS);
                                //document.location.href = '/live/flights/?' + QS;
                                var upuri = '/live/flights/?' + QS;
                                window.open(upuri, '_blank');
                                redirectWindow.location;
                                //myCTL.preventDefault();
                                //return false;

                            }


                            function btnGop_Flight_Click(myCTL) {

                                var QS = '';
                                //if (!myCTL) myCTL = CTL;

                                QS += 'FlightType=';
                                if (document.getElementById('rdoReturn_1').checked) {
                                    QS += 'RoundTrip'
                                } else {
                                    QS += 'OneWay'
                                }

                                QS += '&From=' + document.getElementById('txtFromAirport_1').value;
                                QS += '&DepartureDate=' + document.getElementById('txtDepartureDate_1').value;

                                // Destination
                                QS += "&To=";
                                if (document.getElementById('hf_Destination').value != '') {
                                    QS += document.getElementById('hf_Destination').value;
                                } else {
                                    QS += document.getElementById('txtDestAirport_1').value;
                                }

                                // Return Date
                                if (document.getElementById('rdoReturn_1').checked) {
                                    QS += '&ReturnDate=' + document.getElementById('txtReturnDate_1').value;
                                }

                                // Flexible Dates
                                if (document.getElementById('chkFlexible_1').checked) {
                                    QS += "&IsCalendarSearch=Y";
                                } else {
                                    QS += "&IsCalendarSearch=N";
                                }

                                // Passengers
                                QS += "&AdtCount=" + document.getElementById('cboAdults_1').value;
                                QS += "&ChdCount=" + document.getElementById('cboChildren_1').value;
                                QS += "&InfCount=" + document.getElementById('cboInfants_1').value;

                                // Cabin Class
                                if (document.getElementById('cboCabinClass').value != '') {
                                    QS += "&CabinClass=" + document.getElementById('cboCabinClass_1').value;
                                }

                                // Preffered Airline
                                if (document.getElementById('cboAirline_1')) {
                                    QS += "&PrefAirline1=" + document.getElementById('cboAirline_1').value;
                                }

                                //  alert(QS);
                                document.location.href = '/live/flights?' + QS;


                                //var redirectWindow = window.open(upuria, '_blank');
                                //redirectWindow.location;


                            }

                            /* ---- CAR HIRE ---- */
                            function ckDstn(obj) {
                                ckArea = obj.value;
                                if (ckArea != "none" && ckArea != "") {
                                    loadPickUp(obj[obj.selectedIndex].value);
                                } else if (ckArea == "none") {
                                    window.alert("Please select a specific destination from the dropdown list.");
                                    document.getElementById('cboCar_pickup').length = 1;
                                    document.getElementById('cboCar_dropoff').length = 1;
                                }
                            }

                            function loadPickUp(vlu) {
                                if (vlu == "false" || vlu == "none" || vlu == "sel") {
                                    return;
                                }
                                var src = "http://www.travelclub.com.au/js/holiday-autos.ashx?request=country&value=" + vlu;
                                document.getElementById("country").src = src;
                                loadDropOff("none");
                            }

                            function loadDropOff(vlu2) {
                                if (vlu2 == "false" || vlu2 == "none" || vlu2 == "sel") {
                                    document.getElementById('cboCar_dropoff').length = 1;
                                    return;
                                }
                                var src = "http://www.travelclub.com.au/js/holiday-autos.ashx?request=dropoff&value=" + vlu2;
                                document.getElementById("dropoff").src = src;
                            }


                            function populate(frm, arr, arrval, len, typ) {
                                var rootLength = len;
                                var obj;
                                if (typ == "tlocation") {
                                    document.aspnetForm.carsPickup.value = arr;
                                    document.aspnetForm.carsPickupVal.value = arrval;
                                    obj = document.getElementById('cboCar_pickup');
                                    //if (document.getElementById('slct')) {var slct = parseFloat (document.getElementById('slct').value);}
                                } else if (typ == "tdropoff") {
                                    //document.aspnetForm.carsDropoff.value = arr;
                                    //document.aspnetForm.carsDropoffVal.value = arrval;
                                    obj = document.getElementById('cboCar_dropoff');
                                    //if (document.getElementById('slct2')) {var slct = parseFloat (document.getElementById('slct2').value);}
                                }

                                if (obj) {
                                    obj.length = 1;
                                    for (var i = 0; i < arr.length; i++) {
                                        obj[obj.length] = new Option(arr[i], arrval[i]);
                                    }
                                    if (typ == "tlocation") {
                                        //obj[slct].selected = true;
                                        //ckPickUp(obj.options[obj.selectedIndex].value);
                                    } else if (typ == "tdropoff" && len > 0) {
                                        obj.selectedIndex = 1;
                                    }
                                }
                            }

                            function ckPickUp(itm) {
                                var ckArea = itm.value;
                                var obj;
                                //document.getElementById('slct').value=itm.selectedIndex;
                                //alert(document.getElementById(CTL+'slct').value);
                                if (ckArea != "none" && ckArea != "") {
                                    obj = document.getElementById('cboCar_pickup');
                                    splitStringDisp = document.aspnetForm.carsPickup.value.split(",");
                                    splitStringEngl = document.aspnetForm.carsPickupVal.value.split(",");
                                    string_loop: for (var i = 0; i < splitStringDisp.length; i++) {
                                        if (splitStringEngl[i] == obj[obj.selectedIndex].value) {
                                            loadDropOff(splitStringEngl[i]);
                                            break string_loop;
                                        }
                                    }
                                } else if (ckArea == "none") window.alert("pleaseselectpickup");
                                obj = document.getElementById('cboCar_dropoff');
                                if (obj) {
                                    if (obj.length) {
                                        obj.length = 1;
                                    }
                                }
                            }
                        </script>










                        <form class="no-barba" style="margin-top:-47px;">





                            <br>
                            <br>





                            <br>
                            <div id="SearchBox">
                                <ul id="SearchBox-nav">
                                    <li><a href="javascript:void(0)" onclick="sb_selectTab('flights',this);"
                                            class="flights">Flights</a></li>
                                    <li><a href="javascript:void(0)" onclick="sb_selectTab('hotels',this);"
                                            class="hotels current">Flights</a></li>
                                    <li><a href="javascript:void(0)" onclick="sb_selectTab('cruise',this);"
                                            class="cars" id="tbCruise">Flights</a></li>
                                </ul>

                                <div id="tab_flights" class="tabContent" style="display: none;">

                                    <div style="width: 100%;">

                                        <a href="https://bookingconnect.app/breakawaytravelclub" target="_blank"><img
                                                src="/images/flight_booking.jpg" alt="Book Now Offer"
                                                title="Book Now Offer" style="width: 100%"></a>
                                    </div>


                                </div>
                                <div id="tab_hotels" class="tabContent"
                                    style="display: block; min-height: 110px; position: relative;">


                                    <div style="width: 100%;">

                                        <a href="https://www.agoda.com/breakawaysale" target="_blank"><img
                                                src="/images/book_agoda_pointsmax_small.png" alt="Book Now Offer"
                                                title="Book Now Offer" style="width: 100%"></a>
                                    </div>
                                    <div
                                        style="position: absolute; bottom: 0px; text-align: right; width: auto; right:3px; padding-bottom: 4px;">
                                        <a href="https://www.agoda.com/breakawaysale" target="_blank"> <input
                                                type="button" name="cmdSearchHotel" value="" onclick=""
                                                id="cmdSearchHotel" class="btn-go"
                                                style="border-radius:7px;width:61px;"> </a>
                                    </div>


                                    <input type="hidden" name="hf_Accom_Destination" id="hf_Accom_Destination">
                                </div>

                                <div id="tab_cars" class="tabContent" style="display: none;">
                                    Currently not available.
                                </div>

                                <div id="tab_cars2" class="tabContent" style="display: none;">
                                    Destination:<br>
                                    <select name="cboCar_Dest" id="cboCar_Dest" class="cbo1"
                                        onchange="ckDstn(this)" style="width:95%;">
                                        <option value="sel">--Select Country--</option>
                                        <option value="none"> -- our top 10 destinations -- </option>
                                        <option value="C|1|0002|103"> adelaide</option>
                                        <option value="C|1|0003|103"> auckland</option>
                                        <option value="C|1|0004|103"> brisbane</option>
                                        <option value="C|1|0005|103"> cairns</option>
                                        <option value="C|1|0006|103"> coolangatta</option>
                                        <option value="C|1|0007|103"> hobart</option>
                                        <option value="C|1|0008|103"> london</option>
                                        <option value="C|1|0009|103"> melbourne</option>
                                        <option value="C|1|0010|103"> perth</option>
                                        <option value="C|1|0011|103"> sydney</option>
                                        <option value="none">-- all destinations --</option>
                                        <option value="C|226|0013|103">antigua </option>
                                        <option value="C|5|0014|103">argentina</option>
                                        <option value="C|219|0015|103">aruba</option>
                                        <option value="C|1|0016|103">australia</option>
                                        <option value="C|107|0017|103">austria</option>
                                        <option value="C|108|0018|103">azores</option>
                                        <option value="C|10000010|0019|103">bahamas</option>
                                        <option value="C|109|0020|103">bahrain </option>
                                        <option value="C|110|0021|103">barbados</option>
                                        <option value="C|112|0022|103">belgium</option>
                                        <option value="C|1|0023|103">bonaire</option>
                                        <option value="C|1|0024|103">bosnia and herzegovina</option>
                                        <option value="C|113|0025|103">botswana</option>
                                        <option value="C|114|0026|103">brazil</option>
                                        <option value="C|115|0027|103">bulgaria</option>
                                        <option value="C|117|0028|103">canada</option>
                                        <option value="C|1|0029|103">canary islands</option>
                                        <option value="C|1|0030|103">chile </option>
                                        <option value="C|120|0031|103">costa rica</option>
                                        <option value="C|121|0032|103">croatia</option>
                                        <option value="C|122|0033|103">curacao</option>
                                        <option value="C|16|0034|103">cyprus</option>
                                        <option value="C|123|0035|103">czech republic</option>
                                        <option value="C|124|0036|103">denmark</option>
                                        <option value="C|125|0037|103">dominican republic</option>
                                        <option value="C|127|0038|103">egypt</option>
                                        <option value="C|129|0039|103">estonia</option>
                                        <option value="C|131|0040|103">finland</option>
                                        <option value="C|1|0041|103">france </option>
                                        <option value="C|1|0042|103">germany</option>
                                        <option value="C|138|0043|103">gibraltar</option>
                                        <option value="C|142|0044|103">greece</option>
                                        <option value="C|1|0045|103">guadeloupe</option>
                                        <option value="C|144|0046|103">guatemala</option>
                                        <option value="C|214|0047|103">guyane</option>
                                        <option value="C|146|0048|103">holland</option>
                                        <option value="C|10000003|0049|103">honduras</option>
                                        <option value="C|147|0050|103">hungary</option>
                                        <option value="C|149|0051|103">iceland</option>
                                        <option value="C|10|0052|103">ireland - eire</option>
                                        <option value="C|150|0053|103">israel</option>
                                        <option value="C|151|0054|103">italy</option>
                                        <option value="C|152|0055|103">jamaica</option>
                                        <option value="C|225|0056|103">japan </option>
                                        <option value="C|154|0057|103">jordan</option>
                                        <option value="C|155|0058|103">kenya</option>
                                        <option value="C|156|0059|103">kuwait </option>
                                        <option value="C|160|0060|103">latvia</option>
                                        <option value="C|161|0061|103">lebanon</option>
                                        <option value="C|3|0062|103">lithuania</option>
                                        <option value="C|162|0063|103">luxembourg</option>
                                        <option value="C|1|0064|103">madeira</option>
                                        <option value="C|1|0065|103">malawi</option>
                                        <option value="C|166|0066|103">malaysia</option>
                                        <option value="C|1|0067|103">malta and gozo</option>
                                        <option value="C|168|0068|103">martinique</option>
                                        <option value="C|169|0069|103">mauritius</option>
                                        <option value="C|171|0070|103">mexico</option>
                                        <option value="C|1|0071|103">montenegro</option>
                                        <option value="C|172|0072|103">morocco</option>
                                        <option value="C|215|0073|103">mozambique</option>
                                        <option value="C|1|0074|103">namibia</option>
                                        <option value="C|176|0075|103">new zealand</option>
                                        <option value="C|1|0076|103">nicaragua</option>
                                        <option value="C|179|0077|103">norway</option>
                                        <option value="C|180|0078|103">oman </option>
                                        <option value="C|228|0079|103">panama</option>
                                        <option value="C|182|0080|103">poland</option>
                                        <option value="C|183|0081|103">portugal</option>
                                        <option value="C|184|0082|103">puerto rico</option>
                                        <option value="C|185|0083|103">qatar</option>
                                        <option value="C|216|0084|103">re union islands</option>
                                        <option value="C|189|0085|103">romania</option>
                                        <option value="C|1|0086|103">saint martin</option>
                                        <option value="C|191|0087|103">saudi arabia</option>
                                        <option value="C|1|0088|103">serbia</option>
                                        <option value="C|193|0089|103">singapore </option>
                                        <option value="C|217|0090|103">slovakia</option>
                                        <option value="C|194|0091|103">slovenia</option>
                                        <option value="C|195|0092|103">south africa</option>
                                        <option value="C|1|0093|103">spain</option>
                                        <option value="C|196|0094|103">st lucia</option>
                                        <option value="C|197|0095|103">sweden</option>
                                        <option value="C|198|0096|103">switzerland</option>
                                        <option value="C|1|0097|103">syria</option>
                                        <option value="C|201|0098|103">thailand</option>
                                        <option value="C|204|0099|103">tunisia</option>
                                        <option value="C|205|0100|103">turkey</option>
                                        <option value="C|10000007|0101|103">ukraine </option>
                                        <option value="C|206|0102|103">united arab emirates</option>
                                        <option value="C|1|0103|103">united kingdom</option>
                                        <option value="C|1|0104|103">usa - california</option>
                                        <option value="C|1|0105|103">usa - florida</option>
                                        <option value="C|1|0106|103">usa - rest of usa</option>
                                        <option value="C|212|0107|103">zimbabwe</option>

                                    </select><br>
                                    Pickup:<br>
                                    <select id="cboCar_pickup" name="cboCar_pickup" style="width: 95%"
                                        class="cbo1" onchange="ckPickUp(this);">
                                        <option value="">--Select a Location--</option>
                                    </select>
                                    Drop Off:<br>
                                    <select id="cboCar_dropoff" name="cboCar_dropoff" style="width: 95%"
                                        class="cbo1">
                                        <option value="">--Select a Location--</option>
                                    </select>
                                    <br>

                                    <table cellpadding="0" border="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="width: 70%">From:</td>
                                                <td style="width: 30%">Time:</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input name="txtCar_Pickup" type="text" value="08/02/2019"
                                                        maxlength="10" id="txtCar_Pickup" class="text1 hasDatepicker"
                                                        size="15" autocomplete="off">&nbsp;
                                                    <img src="/images/calendar.gif" alt=""
                                                        onclick="$('#txtCar_Pickup' ).datepicker('show');"
                                                        style="cursor: pointer;">
                                                </td>
                                                <td>
                                                    <select name="cboCar_PickupTime" id="cboCar_PickupTime"
                                                        class="cbo1" style="width:85%;">
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:30">09:30</option>
                                                        <option selected="selected" value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>To:</td>
                                                <td>Time:</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input name="txtCar_DropOff" type="text" value="09/02/2019"
                                                        maxlength="10" id="txtCar_DropOff"
                                                        class="text1 hasDatepicker" size="15"
                                                        autocomplete="off">
                                                    &nbsp;<img src="/images/calendar.gif" alt=""
                                                        onclick="$('#txtCar_DropOff' ).datepicker('show');"
                                                        style="cursor: pointer;">
                                                </td>
                                                <td>
                                                    <select name="cboCar_DropOffTime" id="cboCar_DropOffTime"
                                                        class="cbo1" style="width:85%;">
                                                        <option value="00:00">00:00</option>
                                                        <option value="00:30">00:30</option>
                                                        <option value="01:00">01:00</option>
                                                        <option value="01:30">01:30</option>
                                                        <option value="02:00">02:00</option>
                                                        <option value="02:30">02:30</option>
                                                        <option value="03:00">03:00</option>
                                                        <option value="03:30">03:30</option>
                                                        <option value="04:00">04:00</option>
                                                        <option value="04:30">04:30</option>
                                                        <option value="05:00">05:00</option>
                                                        <option value="05:30">05:30</option>
                                                        <option value="06:00">06:00</option>
                                                        <option value="06:30">06:30</option>
                                                        <option value="07:00">07:00</option>
                                                        <option value="07:30">07:30</option>
                                                        <option value="08:00">08:00</option>
                                                        <option value="08:30">08:30</option>
                                                        <option value="09:00">09:00</option>
                                                        <option value="09:30">09:30</option>
                                                        <option selected="selected" value="10:00">10:00</option>
                                                        <option value="10:30">10:30</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="11:30">11:30</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="12:30">12:30</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="13:30">13:30</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="14:30">14:30</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="15:30">15:30</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="16:30">16:30</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="17:30">17:30</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="18:30">18:30</option>
                                                        <option value="19:00">19:00</option>
                                                        <option value="19:30">19:30</option>
                                                        <option value="20:00">20:00</option>
                                                        <option value="20:30">20:30</option>
                                                        <option value="21:00">21:00</option>
                                                        <option value="21:30">21:30</option>
                                                        <option value="22:00">22:00</option>
                                                        <option value="22:30">22:30</option>
                                                        <option value="23:00">23:00</option>
                                                        <option value="23:30">23:30</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Driver Age:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input name="txtCar_DriverAge" type="text" maxlength="3"
                                                        id="txtCar_DriverAge" class="text1" style="width:30px;">
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div
                                        style="position: absolute; bottom: 0px; text-align: right; width: 95%; padding-bottom: 4px;">
                                        <input type="button" name="cmdSearchCar" value=""
                                            onclick="javascript:__doPostBack('cmdSearchCar','')" id="cmdSearchCar"
                                            class="btn-go">
                                    </div>

                                    <iframe frameborder="0" id="country" name="country" src=""
                                        width="0" height="0"></iframe>
                                    <iframe frameborder="0" id="dropoff" name="dropoff" src=""
                                        width="0" height="0"></iframe>
                                    <input type="hidden" name="carsPickup" value="">
                                    <input type="hidden" name="carsPickupVal" value="">
                                </div>


                                <div id="tab_cruise" class="tabContent" style="display: none;">
                                    <iframe class="cruise-tab" scrolling="no"
                                        src="https://travelclub.site.traveltek.net/search_small.phtml"></iframe>
                                </div>
                            </div>

                            <br>

                        </form>







































                        <!-- Advertising -->

                        <style>
                            .deal-box .deal-base-next {
                                padding: 10px 10px 10px 10px;
                            }
                        </style>
                        <!--
 <a href="/live/insurance/"><img rel="preload" src="https://travelclub.com.au/images/insurance_v2.png" alt="insurance" rel="prerender" style="border-width:0px;width:100%; border-radius:4px;">

</a>
-->
                        <div class="break"></div>

                        <img style="border-radius: 4px;" rel="preload"
                            src="https://travelclub.com.au/images/iata_ad.jpg" alt="IATA">
                        <div class="break"></div>
                        <a href="https://www.atas.com.au/travel-agents/4146" target="_blank"
                            onclick="javascript:gaEvent('sponsor', 'ATAS');">
                            <img rel="preload" src="https://travelclub.com.au/images/atas.jpg" alt="ATAS">
                        </a>
                        <div class="break"></div>
                        <a href="https://www.cruising.org.au/Home" target="_blank"
                            onclick="javascript:gaEvent('sponsor', 'CLIA');">
                            <img rel="preload" width="219.99" src="https://travelclub.com.au/images/clia.jpg"
                                alt="CLIA">
                        </a>
                        <div class="break"></div>
                        <a href="/membership">
                            <img rel="preload" src="https://travelclub.com.au/images/not-yet-a-member.png"
                                alt="Not yet a Member?"></a>
                        <div class="break"></div>
                        <div class="deal-box big-special-old">
                            <div class="deal-base-next">
                                <div class="deal">
                                    <a href="https://www.youtube.com/watch?v=VIjUTXA0oLQ" target="_blank">
                                        <img rel="preload" src="https://travelclub.com.au/images/youtube.png"
                                            alt="How to make a booking"></a><br>
                                    <h1>How to Make a Booking</h1>
                                    View our short video on how to make a booking online using our new online booking
                                    engine.
                                    <br>
                                    <a href="https://www.youtube.com/watch?v=VIjUTXA0oLQ" target="_blank"
                                        class="more">Play &gt;</a>
                                </div>
                            </div>
                        </div>

                        <div class="break"></div>

                        <a href="http://www.traveltek.net/" target="_blank"
                            onclick="javascript:gaEvent('sponsor', 'TravelTek');">
                            <img rel="preload" src="https://travelclub.com.au/images/traveltek.png"
                                alt="Traveltek"></a>


                        <div class="break"></div>






                        <a href="http://www.traveldaily.com.au" target="_blank"
                            onclick="javascript:gaEvent('sponsor', 'Travel Daily');">
                            <img rel="preload" src="https://travelclub.com.au/images/travel-daily.png"
                                alt="Travel Daily - First with the News"></a>
                        <div class="break"></div>
                        <a href="http://www.centrecom.com.fj/" target="_blank"
                            onclick="javascript:gaEvent('sponsor', 'Pacific centrecom');">
                            <img rel="preload" src="https://travelclub.com.au/images/pcfl_ad.jpg"
                                alt="Pacific centrecom"></a>
                        <div class="break"></div>
                        <div style="text-align: center;">
                            <img rel="preload" src="https://travelclub.com.au/images/amex-cards-welcome.jpg"
                                alt="American Express Cards Welcome">
                            <img rel="preload" src="https://travelclub.com.au/images/ccsafe.jpg"
                                alt="Credit Card Safe">

                        </div>

                    </div>
                    <!-- end left sidebar -->



                    <!-- start right hand content -->
                    <div id="content">

                        <img rel="prefetch" id="img_head" src="https://travelclub.com.au/images/flights-banner.jpg"
                            alt="flights">
                        <br><br>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%" id="RedHotSpecial">
                            <tbody>
                                <tr>
                                    <td valign="top">


                                        <div class="subSection">
                                            <div id="membership_category_div" class="round">
                                                <span class="subTitle">Membership Category:</span><br>
                                                <form class="form-horizontal" id="submit_form">
                                                    <input type="hidden" name="_token"
                                                        value="zXbobEx9XV4cTu2ifX2nQFr4TyKtWMCVJrK7ZwBk">
                                                    <input type="hidden" name="page_type" value="airfare">
                                                    <select name="membership_category" id="membership_category"
                                                        data-pagetype="airfare" class="membership_category">
                                                        <option selected="selected" value="">--All Categories--
                                                        </option>
                                                        <option value="A">(A) Travel Agent</option>
                                                        <option value="B">(B) Airline Staff</option>
                                                        <option value="C">(C) Intl. Air Freight Forwarder</option>
                                                        <option value="D">(D) Cruise Company Employee</option>
                                                        <option value="E">(E) International Hotel Chain</option>
                                                        <option value="F">(F) International Hire Car Company
                                                        </option>
                                                        <option value="G">(G) CRS Company</option>
                                                        <option value="H">(H) Intl./Natnl. State Tourist Offices
                                                        </option>
                                                        <option value="I">(I) Intl. Sea Freight Forwarders
                                                        </option>
                                                        <option value="J">(J) Retired Airline Employee</option>
                                                        <option value="K">(K) TCA Card Holder</option>
                                                        <option value="L">(L) Airlines Catering Company</option>
                                                        <option value="M">(M) ASTW / Travel Media</option>
                                                        <option value="N">(N) Tour Guide</option>
                                                        <option value="O">(O) National Hotel Employee</option>
                                                        <option value="P">(P) Airport Security Card Holders
                                                        </option>
                                                        <option value="Q">(Q) AUSATTS Members</option>
                                                        <option value="R">(R) Resort Staff</option>
                                                        <option value="S">(S) Airport Corporation Employee
                                                        </option>
                                                        <option value="T">(T) Duty Free Store</option>
                                                        <option value="U">(U) CASA Employee</option>
                                                        <option value="V">(V) Professional Conference Organisers
                                                        </option>
                                                        <option value="W">(W) Non Industry Member</option>
                                                        <option value="X">(X) AMEX Card and Foreign Exchange
                                                            Employees</option>
                                                        <option value="Y">(Y) IATA Employees</option>

                                                    </select>
                                                </form>
                                            </div>
                                            <br>
                                            <div class="round">
                                                <table id="flight_specials" cellspacing="0" border="0"
                                                    style="width:100%;border-collapse:collapse;">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <table cellpadding="0" cellspacing="0" border="0"
                                                                    width="100%" style="height:100%">

                                                                    <tbody id="populate_specials">
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                        <br>
                                        *Note: Prices displayed are in
                                        <span id="ctl00_MainBody_objSpecialsList_lblDisplayCurrency">AUD</span> and are
                                        may change without notice. Prices are subject to availability and do not include
                                        taxes, fees &amp; charges.
                                    </td>
                                    <td valign="top" id="RightNav">
                                        <div>


                                            <div id="LatestSpecials">

                                                <table cellpadding="0" cellspacing="0" border="0"
                                                    class="HotDeals" style="float:right;">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="3" class="t"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="l"></td>
                                                            <td class="m">
                                                                <table width="100%">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    style="overflow:hidden;width:133px;">
                                                                                    <strong>
                                                                                        <a
                                                                                            href="https://travelclub.com.au/">
                                                                                            Los Angeles
                                                                                        </a>
                                                                                    </strong>
                                                                                </div>
                                                                            </td>
                                                                            <td align="right" valign="top">
                                                                                <div class="Price">
                                                                                    <a
                                                                                        href="https://travelclub.com.au/">
                                                                                        $CALL*
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    style="overflow:hidden;width:133px;">
                                                                                    <strong>
                                                                                        <a
                                                                                            href="https://www.travelclub.com.au/">
                                                                                            Hawaii
                                                                                        </a>
                                                                                    </strong>
                                                                                </div>
                                                                            </td>
                                                                            <td align="right" valign="top">
                                                                                <div class="Price">
                                                                                    <a
                                                                                        href="https://www.travelclub.com.au/">
                                                                                        $CALL*
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    style="overflow:hidden;width:133px;">
                                                                                    <strong>
                                                                                        <a
                                                                                            href="https://www.travelclub.com.au/">
                                                                                            North America
                                                                                        </a>
                                                                                    </strong>
                                                                                </div>
                                                                            </td>
                                                                            <td align="right" valign="top">
                                                                                <div class="Price">
                                                                                    <a
                                                                                        href="https://www.travelclub.com.au/">
                                                                                        $CALL*
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <div
                                                                                    style="overflow:hidden;width:133px;">
                                                                                    <strong>
                                                                                        <a
                                                                                            href="https://www.travelclub.com.au/">
                                                                                            Fiji
                                                                                        </a>
                                                                                    </strong>
                                                                                </div>
                                                                            </td>
                                                                            <td align="right" valign="top">
                                                                                <div class="Price">
                                                                                    <a
                                                                                        href="https://www.travelclub.com.au/">
                                                                                        $CALL*
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>




                                                                        <tr style="height:8px"></tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <div
                                                                                    style="background-color:#efefef;padding: 3px; border: solid 1px #81CFF6;">
                                                                                    <span
                                                                                        style="font-size: 7pt">*Prices
                                                                                        are subject to availability
                                                                                        and<br>
                                                                                        do not include taxes, fees &amp;
                                                                                        charges.</span><br>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td class="r"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bl"></td>
                                                            <td class="b"></td>
                                                            <td class="br"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br style="clear:both;"><br>

                                            </div>
                                            <br>
                                            <div id="SpecialsNav">

                                                <ul class="navIcons">

                                                    <li class="vertical"><a href="/travel-industry-flights/"
                                                            class="flights"></a></li>

                                                    <li class="vertical"><a href="/live/specials/hotels/"
                                                            class="hotels"></a></li>

                                                    <li class="vertical"><a href="/cruise/" class="cruise"></a></li>

                                                    <li class="vertical"><a href="/live/specials/tours/"
                                                            class="tours"></a></li>

                                                    <li class="vertical"><a href="/live/carhire/" class="cars"></a>
                                                    </li>

                                                </ul>
                                                <br style="clear:both;">



                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>


                    <!-- end right content -->

                </div>
                <!-- mainframe end -->
                <br style="clear: both;">

            </div>
            <!-- end container -->
            <br>
            <br>
            <!-- start footer -->
            <div id="footer">
                ))

                <table width="100%" style="margin:12px 10px 12px 10px;">
                    <tbody>
                        <tr>

                            <td style="width:25%" align="right"><span class="social">Follow Us</span>&nbsp;&nbsp;<a
                                    href="https://www.facebook.com/btctravel/"
                                    onclick="javascript:gaEvent('footer', 'Facebook');" target="_blank">
                                    <img src="https://travelclub.com.au/images/icon_facebook.png"
                                        alt="Facebook"></a>&nbsp;&nbsp;
                                <a href="https://twitter.com/breakaway_au"
                                    onclick="javascript:gaEvent('footer', 'Twitter');" target="_blank">
                                    <img src="https://travelclub.com.au/images/icon_twitter.png"
                                        alt="Twitter"></a>&nbsp;&nbsp;
                                <a href="http://www.youtube.com/user/BreakawayTravelclub"
                                    onclick="javascript:gaEvent('footer', 'YouTube');" target="_blank">
                                    <img src="https://travelclub.com.au/images/icon_youtube.png"
                                        alt="You Tube"></a>&nbsp;
                                <a href="https://www.instagram.com/breakawaytravelclub"
                                    onclick="javascript:gaEvent('footer', 'instagram');" target="_blank">
                                    <img src="https://travelclub.com.au/images/instagram.png"
                                        alt="Instagram"></a>&nbsp;&nbsp;<a
                                    href="https://www.linkedin.com/company/breakaway-travelclub/"
                                    onclick="javascript:gaEvent('footer', 'Linkedin');" target="_blank">
                                    <img src="https://travelclub.com.au/images/icon-linkedin.jpg" alt="Linkedin"></a>
                            </td>
                            <td style="width:25%"><span class="social"> &nbsp; &nbsp;Contact Us &nbsp;<span
                                        class="phone">1300 380 747</span></span></td>

                        </tr>
                    </tbody>
                </table>

                <hr>
                <table width="100%" style="margin:12px 10px 12px 10px;">
                    <tbody>
                        <tr>
                            <td style="width:25%">
                                <h1>Flights</h1>
                            </td>
                            <td style="width:25%"></td>
                            <td style="width:25%">
                                <h1>Cruises</h1>
                            </td>
                            <td style="width:25%">
                                <h1>Tours</h1>
                            </td>
                        </tr>
                        <tr>


                            <td valign="top">
                            </td>


                            <td valign="top">

                            </td>


                            <td valign="top">
                                <a href="/interlines/azamara-cruises/">Azamara Cruises </a>
                                <br>
                                <a href="/interlines/carnival-cruises/">Carnival Cruises </a>
                                <br>
                                <a href="/interlines/celebrity-x-cruises/">Celebrity X Cruises </a>
                                <br>
                                <a href="/interlines/royal-caribbean-cruises/">Royal Caribbean Cruises </a>
                                <br>
                                <a href="/interlines/seabourn/">Seabourn </a>
                                <br>
                                <a href="https://travelclub.com.au/travel-industry-cru">Tweet World Cruises</a>
                                <br>
                                <a href="https://travelclub.com.au/interline/CAPCOOK">Captain Cook Cruises Fiji</a>
                                <br>
                            </td>


                            <td valign="top">

                                <br>

                                <h1>About</h1>


                                <a href="/">Home</a>
                                <br>
                                <a href="/about">About Breakaway Travelclub</a>
                                <br>
                                <a href="/about/privacy">Privacy Policy</a>
                                <br>
                                <a href="/contact">Contact Us</a>
                                <br>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <hr>

                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



            </div>
            <!-- end footer -->
            <br><br>
            <div style="text-align:center;">
                Breakaway Travelclub<br>
                ABN 49 067 679 627
            </div>
        </div>
    </div>




    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            var mx = document.getElementById("main");
            if (x.style.display === "block") {
                x.style.display = "none";
                mx.style.display = "block";

            } else {
                x.style.display = "block";
                mx.style.display = "none";

            }
        }
    </script>







    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-10703974-1']);
        _gaq.push(['_setDomainName', 'travelclub.com.au']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        function gaEvent(Category, Action) {
            _gaq.push(['_trackEvent', Category, Action]);
        }

        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.bottom = "0";
            } else {
                document.getElementById("navbar").style.bottom = "-100px";
            }
            prevScrollpos = 50;
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        // amazing gg
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'mt,zh-CN,en,fr,es,it,de'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript">
        //   const mq = window.matchMedia( "(min-width: 960px)" );
        //                 if (mq.matches) {alert("window width >= 960px"); }
        //                  else {window.location.replace("http://stackoverflow.com");
        // }




        $(document).ready(function() {
            $('.addon').show();
            $("#content_membership").innerHeight(500);
            //Barba.Pjax.start();

            Barba.Prefetch.init();


            // var FadeTransition = Barba.BaseTransition.extend({
            //     start: function() {
            //         Promise
            //             .all([this.newContainerLoading, this.fadeOut()])
            //             .then(this.fadeIn.bind(this));
            //     },
            //
            //     fadeOut: function() {
            //         return $(this.oldContainer).animate({ opacity: 0 }).promise();
            //     },
            //
            //     fadeIn: function() {
            //         var _this = this;
            //         var $el = $(this.newContainer);
            //
            //         $(this.oldContainer).hide();
            //
            //         $el.css({
            //             visibility : 'visible',
            //             opacity : 1
            //         });
            //
            //         $el.animate({ opacity: 1 },0.1, function() {
            //             _this.done();
            //         });
            //     }
            // });
            //
            // Barba.Pjax.getTransition = function() {
            //     return FadeTransition;
            // };


            Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {


                var txtEnqDepCity = 'txtDepCity';
                var txtEnqDest = 'txtDestination';

                $(function() {
                    $("#txtEnqDepDate").datepicker({
                        showOn: "focus",
                        dateFormat: "dd/mm/yy",
                    });

                    $("#txtEnqRetDate").datepicker({
                        showOn: "focus",
                        dateFormat: "dd/mm/yy",

                    });

                    $("#txtEnqDepDate").datepicker("setDate", "+3");

                    $("#txtEnqRetDate").datepicker("setDate", "+7");


                });





                jQuery(function() {
                    var onEnqDest = function(value, data) {
                        //document.getElementById(txtEnqDest).value=value.substr(0,value.indexOf(','));
                    };
                    var onEnqDep = function(value, data) {
                        //document.getElementById(txtEnqDepCity).value=value.substr(0,value.indexOf(','));
                    };


                    var options = {
                        serviceUrl: 'https://travelclub.com.au/autocomplete/countries-api?',
                        width: 250,
                        maxHeight: 100,
                        minChars: 2,
                        delimiter: /(,|;)\s*/,
                        //onSelect: onEnqDest,
                        deferRequestBy: 0, //miliseconds
                        params: {
                            country: 'Yes'
                        },
                        noCache: false //set to true, to disable caching
                    };

                    a1 = $('#' + txtEnqDest).autocomplete(options);
                    a1.enable();

                    a2 = $('#' + txtEnqDepCity).autocomplete(options);
                    a2.enable();
                });


                $("#txtReturnDate_1").datepicker({
                    showOn: "focus",
                    dateFormat: "dd/mm/yy",
                });

                $("#txtDepartureDate_1").datepicker({
                    showOn: "focus",
                    dateFormat: "dd/mm/yy",

                });
                $("#txtDepartureDate_1").datepicker("setDate", "+3");

                $("#txtReturnDate_1").datepicker("setDate", "+7");


            });


        });



        $(document).on("ready pjax:end", function() {
            // initialize plugins


            $(".dash").click(function() {

                myFunction();
            });



        });

        $("#promo_code_link").click(function() {
            if ($('.addon:visible').length) {
                $('.addon').hide();
                $("#content_membership").innerHeight(435);

            } else {
                $('.addon').fadeIn(700);
                $("#content_membership").innerHeight(500);

            }


        });

        Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {

            $("#promo_code_link").click(function() {
                if ($('.addon:visible').length) {
                    $('.addon').hide();
                    $("#content_membership").innerHeight(435);

                } else {
                    $('.addon').fadeIn(700);
                    $("#content_membership").innerHeight(500);

                }


            });




            $('.ui-datepicker').addClass('notranslate');

            // amazing gg
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'mt,zh-CN,en,fr,es,it,de'
                }, 'google_translate_element');
            }

            // document.getElementById("cruise_placeholder").addEventListener("click",show_now);
            function show_now() {
                document.getElementById("cruise_placeholder").style.display = "none";
                document.getElementById("trk_cruise").style.visibility = "visible";

            }

            // document.getElementById("cruise_placeholder").addEventListener("click",show_now);

            var doc = document.getElementById("trk_cruise");
            var tr_waiting = document.getElementById("tr_waiting");
            if (doc) {
                document.getElementById('trk_cruise').onload = function() {
                    document.getElementById("cruise_placeholder").style.display = "none";
                    document.getElementById("trk_cruise").style.visibility = "visible";

                    if (tr_waiting) {
                        document.getElementById("tr_waiting").style.display = "none";
                    }

                };

                var cruise_placeholder = document.getElementById("cruise_placeholder");
                if (cruise_placeholder) {
                    setTimeout(function() {
                        document.getElementById("cruise_placeholder").style.display = "none";
                        document.getElementById("trk_cruise").style.visibility = "visible";

                    }, 5000);
                }

            }


            $("#cboEmploymentdate").datepicker({
                showOn: "focus",
                dateFormat: "yy-mm-dd",
            });
        });



        $(function() {
            $("#txtReturnDate").datepicker({
                showOn: "focus",
                dateFormat: "dd/mm/yy",
            });
            $("#txtReturnDate").datepicker("setDate", "+7");

            $("#txtDepartureDate").datepicker({
                showOn: "focus",
                dateFormat: "dd/mm/yy",

            });
            $("#txtDepartureDate").datepicker("setDate", "+3");


            $('#txtAccom_CheckIn').datepicker({
                showOn: "focus",
                dateFormat: "dd/mm/yy",

            });
            $('#txtAccom_CheckOut').datepicker({
                showOn: "focus",
                dateFormat: "dd/mm/yy",
            });
        });

        jQuery(function() {
            var onAutocompleteSelect = function(value, data, el) {
                document.getElementById('hf_Destination').value = data;
                document.getElementById('txtDestAirport').value = value.substr(0, value.indexOf(','));
            };

            var hotelSelect = function(value, data, el) {
                document.getElementById('hf_Accom_Destination').value = data;
                //document.getElementById(CTL+'txtAccomm_DestCity').value=value.substr(0,value.indexOf(','));
            }


            var options = {
                //serviceUrl: '/live/flights/autocomplete.ashx',
                width: 250,
                maxHeight: 100,
                minChars: 2,
                delimiter: /(,|;)\s*/,
                onSelect: onAutocompleteSelect,
                deferRequestBy: 0, //miliseconds
                params: {
                    country: 'Yes'
                },
                noCache: false, //set to true, to disable caching
                search: function(event, ui) {}
            };

            var a1 = $('#txtDestAirport').autocomplete(options);
            //a1.serviceUrl = 'http://www.travelclub.com.au/live/flights/autocomplete.ashx';
            a1.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api';
            a1.enable();

            var a2 = $('#txtAccomm_DestCity').autocomplete(options);
            a2.options.onSelect = hotelSelect;
            a2.serviceUrl = 'https://travelclub.com.au/autocomplete/countries-api';
            a2.enable();

        });
    </script>






    <script>
        $("#membership_category").on('change', function(e) {

            e.preventDefault();
            var urs = 'https://travelclub.com.au/Categorical-search';
            $('#submit_form').attr('action', urs).submit();

        });
    </script>

























































    <div id="AutocompleteContainter_9567a" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_9567a"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div id="AutocompleteContainter_4d04e" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_4d04e"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div id="AutocompleteContainter_e1ee9" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_e1ee9"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div id="AutocompleteContainter_f3b30" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_f3b30"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div id="AutocompleteContainter_dea39" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_dea39"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div id="goog-gt-" class="skiptranslate VIpgJd-yAWNEb-L7lbkb" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="VIpgJd-yAWNEb-l4eHX"><img
                        src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20"
                        height="20" alt="Google Translate"></div>
            </div>
        </div>
        <div style="padding: 8px; float: left; width: 100%;">
            <h1 class="VIpgJd-yAWNEb-r4nke VIpgJd-yAWNEb-mrxPge">Original text</h1>
        </div>
        <div style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-nVMfcd-fmcmS"></div>
        </div>
        <div class="VIpgJd-yAWNEb-cGMI2b" style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-Z0Arqf-PLDbbf"><span class="VIpgJd-yAWNEb-Z0Arqf-hSRGPd">Contribute a better
                    translation</span></div>
            <div class="VIpgJd-yAWNEb-fw42Ze-Z0Arqf-haAclf">
                <hr style="color: #ccc; background-color: #ccc; height: 1px; border: none;">
                <div class="VIpgJd-yAWNEb-Z0Arqf-H9tDt"></div>
            </div>
        </div>
        <div class="VIpgJd-yAWNEb-jOfkMb-Ne3sFf" style="display: none;"></div>
    </div>
    <div id="AutocompleteContainter_4bc93" style="position: absolute; z-index: 9999; top: 0px; left: 0px;">
        <div class="autocomplete-w1">
            <div class="autocomplete" id="Autocomplete_4bc93"
                style="display: none; width: 250px; max-height: 100px;"></div>
        </div>
    </div>
    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe"
                width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round"
                    cx="33" cy="33" r="30"></circle>
            </svg></div>
    </div>
</body>

</html>
