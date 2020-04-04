<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Gallery</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');

        html {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 tracking-wider tracking-normal" style="background: url('/images/bg.jpg') fixed">
<div id="app">

    <nav id="header" class="fixed w-full z-10 top-0 bg-white border-b border-gray-400">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
            <div class="pl-4 flex items-center">
                <svg class="h-5 pr-3 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM5 9l2-2 2 2 4-4 2 2-6 6-4-4z"/>
                </svg>
                <a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
                    <img src="/images/logo.svg" alt="Vue Gallery">
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                        class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-yellow-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
        <div class="w-full lg:w-1/6 lg:px-6 text-xl text-gray-800 leading-normal mr-10"
             style="background-color: #ffffff">
            <p class="text-base font-bold py-2  text-blue-700">Types of painting</p>
            <div class="block lg:hidden sticky inset-0">
                <button id="menu-toggle"
                        class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-yellow-500 appearance-none focus:outline-none">
                    <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </button>
            </div>
            <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20"
                 style="top:5em;" id="menu-content">
                <ul class="list-reset">
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm" to="/" exact>Allegory</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm" to="/bodegón">Bodegón</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm"
                                             to="/figure-painting">Figure painting</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm" to="/illustration-painting">Illustration painting</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm"
                                             to="/landscape-painting">Landscape painting</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                <router-link class="pb-1 md:pb-0 text-sm"
                                             to="/portrait-painting">Portrait painting</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                 <router-link class="pb-1 md:pb-0 text-sm" to="/still-life">Still life</router-link>
                            </span>
                    </li>
                    <li class="py-2 md:my-0 hover:bg-yellow-100 lg:hover:bg-transparent">
                            <span class="block pl-4 align-middle text-gray-700 no-underline hover:text-yellow-500 border-l-4 border-transparent lg:hover:border-gray-400">
                                 <router-link class="pb-1 md:pb-0 text-sm" to="/veduta">Veduta</router-link>
                            </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
            <router-view></router-view>
        </div>
        <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-500 px-4 py-6">
        </div>
    </div>

</div>

<footer class="bg-white border-t border-gray-400 shadow">
    <div class="container mx-auto flex py-8">
        <div class="w-full mx-auto flex flex-wrap">
            <div class="flex w-full lg:w-1/2 ">
                <div class="px-8">
                    <h3 class="font-bold text-gray-900">About</h3>
                    <p class="py-4 text-gray-600 text-sm">
                        Welcome to Vue Gallery Where You Can Learn
                        About Different Types of Painting</p>
                </div>
            </div>
            <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                <div class="px-8">
                    <h3 class="font-bold text-gray-900">Created By</h3>
                    <ul class="list-reset items-center text-sm pt-3">
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1"
                               href="mailto:a.fatahi1992@gmail.com">Ali Fatahi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
<script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    var helpMenuDiv = document.getElementById("menu-content");
    var helpMenu = document.getElementById("menu-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);


        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

        //Help Menu
        if (!checkParent(target, helpMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, helpMenu)) {
                // click on the link
                if (helpMenuDiv.classList.contains("hidden")) {
                    helpMenuDiv.classList.remove("hidden");
                } else {
                    helpMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                helpMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }

</script>
</body>
</html>
