<?php
/**
 * HTML Template using TailwindCSS
 *
 * Filename:        index.php
 * Location:        /
 * Project:         SaaS-Vanilla-MVC
 * Date Created:    30/08/2024
 *
 * Author:          Adrian Gould <Adrian.Gould@nmtafe.wa.edu.au>
 *
 */?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <!-- During DEVELOPMENT the src/source.css file is used -->
    <link rel="stylesheet" href="./src/source.css">
    <!-- For production the assets/css/site.css file will be used -->

    <!-- Font Awesome -->    <link rel="stylesheet" href="./assets/css/all.css">

</head>
<body class="bg-white flex flex-col h-screen justify-between">

<header class="bg-gray-950 text-gray-200 p-4 flex-grow-0 flex flex-row align-middle content-center">
    <h1 class="flex-0 w-32 text-xl p-4 ">
        <a href="#"
           class="py-4 px-4 -mx-4 -my-4 font-bold rounded text-gray-300 hover:text-gray-700 hover:bg-gray-300
                     transition ease-in-out duration-500">
            MVC
        </a>
    </h1>
    <nav class="flex flex-row py-4 flex-grow ml-8">
        <ul class="flex flex-row gap-4 flex-grow">
            <li>
                <a href="/"
                   class="pb-2 px-1 text-gray-400 hover:text-gray-300
                     border-0 border-b-2 hover:border-b-gray-500                     transition ease-in-out duration-500">
                    Home
                </a>
            </li>

            <li>                <a href="#"
                                   class="pb-2 px-1 text-gray-400 hover:text-gray-300
                     border-0 border-b-2 hover:border-b-gray-500                     transition ease-in-out duration-500">
                    Link 1
                </a>
            </li>
        </ul>

        <ul class="flex flex-row gap-4">
            <li>
                <form method="POST" action="#" class="">
                    <button class="pb-2 px-1 text-sm text-gray-400 hover:text-gray-300
                     border-0 border-b-2 hover:border-b-gray-500                     transition ease-in-out duration-500">
                        <i class="fa fa-door-open"></i> Login
                    </button>
                </form>
            </li>
            <li>                <form method="POST" action="#" class="">
                    <button class="pb-2 px-1 text-sm text-gray-400 hover:text-gray-300
                     border-0 border-b-2 hover:border-b-gray-500                     transition ease-in-out duration-500">
                        <i class="fa fa-user-plus"></i> Register
                    </button>
                </form>
            </li>
            <li>                <form method="POST" action="#" class="">
                    <button class="pb-2 px-1 text-sm text-gray-400 hover:text-gray-300
                     border-0 border-b-2 hover:border-b-gray-500                     transition ease-in-out duration-500">
                        <i class="fa fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
            <li>                <form method="GET" action="#" class="block mx-5">
                    <input type="text" name="keywords" placeholder="Product search..."
                           class="w-full md:w-auto px-4 py-2 focus:outline-none"/>
                    <button class="w-full md:w-auto bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 focus:outline-none transition ease-in-out duration-500">
                        <i class="fa fa-search"></i> Search
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</header>

<main class="container mx-auto bg-gray-50 py-8 px-4 shadow shadow-black/25 rounded-b-lg">
    Main Page Content
</main>


<footer class="bg-black text-text-gray-700-400 p-4 mt-8">
    The footer
</footer>

</body>
</html>