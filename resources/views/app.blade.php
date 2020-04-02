<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
<body class="font-sans">
<div id="app">
    <div class="container mx-auto">
        <header class="py-6 mb-8">
            <h1><img src="/images/logo.svg" alt="Vue Gallery"></h1>
        </header>
        <main class="flex">
            <aside class="w-1/5">
                <section class="mb-8">
                    <h5 class="uppercase font-bold mb-3">Types of painting</h5>
                    <ul>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/" exact></router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/allegory">Allegory</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/bodegón">Bodegón</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/figure-painting">Figure painting</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/illustration-painting">Illustration painting</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/landscape-painting">Landscape painting</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/portrait-painting">Portrait painting</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/still-life">Still life</router-link></li>
                        <li class="text-sm pb-4"><router-link class="text-black" to="/veduta">Veduta</router-link></li>
                    </ul>
                </section>
            </aside>
            <div class="primary flex-1">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
