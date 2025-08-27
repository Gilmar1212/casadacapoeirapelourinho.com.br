<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Casa da Capoeira Pelourinho">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body class="bg-body">
    <div>
        <div class="pb-10">
            <header>
                <div>
                    <div class="flex items-center justify-between gap-4">
                        <div class="col-md-2"><img class="w-[150px] md:w-[200px] p-2" src="{{asset('storage/images/logo.webp')}}" alt="Logo" title="Logo"></div>
                        <div class="col-md-10">
                            <nav class="xs:shadow-md p-4 bg-white">
                                <!-- Mobile: botão hamburguer -->
                                <div class="flex items-center justify-between lg:hidden md:block ">
                                    <button onclick="toggleMobileMenu()" class="text-2xl bg-white px-4 py-2">
                                        ☰
                                    </button>
                                </div>

                                <!-- Menu principal -->
                                <ul id="main-menu" class="mt-4 lg:flex menu-hidden lg:flex-row gap-4  md:flex-col md:items-center md:mt-0 relative">

                                    <li class="text-[#3a3939]"><a href="{{route('index')}}" class="hover:underline">Início</a></li>
                                    <li class="text-[#3a3939]"><a href="{{route('quem-somos')}}" class="hover:underline">Quem somos</a></li>
                                    <li class="text-[#3a3939]"><a href="{{route('a-diretoria')}}" class="hover:underline">A Diretoria</a></li>
                                    <li class="text-[#3a3939]"><a href="{{route('show-roma-negra')}}" class="hover:underline">Show Roma Negra</a></li>

                                    <!-- Submenu: Aulas -->
                                    <li class="relative group">
                                        <a class="text-[#3a3939]" href="{{route('aulas.index')}}" class="hover:underline">Aulas</a>
                                        <ul id="submenu1"
                                            class="absolute hidden group-hover:block bg-white border rounded shadow-md top-4 z-50 mt-2">
                                            <li class="text-[#3a3939]"><a href="{{route('aulas.capoeira')}}" class="block px-4 py-2 hover:bg-gray-100">Capoeira</a></li>
                                            <li class="text-[#3a3939]"><a href="{{route('aulas.percussao')}}" class="block px-4 py-2 hover:bg-gray-100">Percussão</a></li>
                                            <li class="text-[#3a3939]"><a href="{{route('aulas.danca-afro')}}" class="block px-4 py-2 hover:bg-gray-100">Dança</a></li>
                                        </ul>
                                    </li>

                                    <!-- Submenu: Fotos -->
                                    <li class="relative group">
                                        <a class="text-[#3a3939]" href="{{route('fotos.index')}}" class="hover:underline">Fotos</a>
                                        <ul id="submenu2"
                                            class="absolute hidden group-hover:block bg-white border rounded shadow-md top-4 z-50 mt-2">
                                            <li class="text-[#3a3939]"><a href="{{route('fotos.role-cultural')}}" class="block px-4 py-2 hover:bg-gray-100">Rolê Cultural</a></li>
                                            <li class="text-[#3a3939]"><a href="{{route('fotos.medalha-zumbi-capoeira')}}" class="block px-4 py-2 hover:bg-gray-100">Medalha Zumbi da Capoeira</a></li>
                                        </ul>
                                    </li>

                                    <li class="text-[#3a3939]"><a class="text-[#3a3939]" href="{{route('videos')}}" class="hover:underline">Vídeos</a></li>

                                    <!-- Submenu: Nossas Ações -->
                                    <li class="relative group">
                                        <a class="text-[#3a3939]" href="#" class="hover:underline">Nossas Ações</a>
                                        <ul id="submenu-acoes"
                                            class="absolute hidden group-hover:block bg-white border rounded shadow-md top-4 z-50 mt-2">
                                            <li class="text-[#3a3939]"><a href="#" class="block px-4 py-2 hover:bg-gray-100">Ação Cultural</a></li>
                                            <li class="text-[#3a3939]"><a href="#" class="block px-4 py-2 hover:bg-gray-100">Feira de Artes</a></li>
                                        </ul>
                                    </li>

                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Editais Executados</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Filiados</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Eventos</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Faça Sua Filiação</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Contatos</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Redes Sociais</a></li>
                                    <li class="text-[#3a3939]"><a href="#" class="hover:underline">Doações</a></li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
    <script>
        function toggleMobileMenu() {
            if (window.innerWidth <= 1024) {
                const menu = document.getElementById('main-menu');
                menu.classList.toggle('menu-hidden');
            }
        }
    </script>
</body>

</html>