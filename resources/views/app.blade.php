<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite([
            "resources/js/app.js",
            "resources/js/Pages/{$page['component']}.vue"
            ])
        @inertiaHead
    </head>
    <body class="font-sans antialiased dark:bg-gray-800 bg-gray-200">
        @inertia
    </body>
    <script>
        //habilita el modo nocturno detectado por el sistema
        var mql = window.matchMedia('(prefers-color-scheme: dark)');
        //if al iniciar o recargar
        if(mql.matches)
            document.querySelector('html').classList.add('dark')
        else
            document.querySelector('html').classList.remove('dark')
        //al detectar cambios
        mql.addEventListener("change", (e) => {
            if (e.matches) {
                document.querySelector('html').classList.add('dark')
            } else {
                document.querySelector('html').classList.remove('dark')
            }
        });
    </script>
</html>
