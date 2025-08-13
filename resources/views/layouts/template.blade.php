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
                    <div class="flex items-center justify-between md:justify-around gap-4">
                        <div class="col-md-2"><img class="w-[150px] p-2" src="{{asset('storage/images/logo.webp')}}" alt="Logo" title="Logo"></div>
                        <div class="col-md-10">
                            <nav class="bg-white xs:shadow-md p-4">
                                <!-- Mobile: botão hamburguer -->
                                <div class="flex items-center justify-between md:hidden">
                                    <button onclick="toggleMobileMenu()" class="text-2xl">
                                        ☰
                                    </button>
                                </div>

                                <!-- Menu principal -->
                                <ul id="main-menu" class="mt-4 hidden flex-col gap-4 md:flex md:flex-row md:items-center md:mt-0 relative">
                                    <li><a href="{{route('index')}}" class="hover:underline">Início</a></li>
                                    <li><a href="{{route('quem-somos')}}" class="hover:underline">Quem somos</a></li>
                                    <li><a href="{{route('a-diretoria')}}" class="hover:underline">A Diretoria</a></li>
                                    <li><a href="{{route('show-roma-negra')}}" class="hover:underline">Show Roma Negra</a></li>

                                    <!-- Submenu: Aulas -->
                                    <li class="relative group">
                                        <a href="{{route('aulas.index')}}" onclick="toggleSubmenu('submenu')" class=" hover:underline">
                                            Aulas
                                        </a>
                                        <ul class="submenu md:absolute bg-white border rounded shadow-md z-50">
                                            <li><a href="{{route('aulas.capoeira')}}" class="block px-4 py-2 hover:bg-gray-100">Capoeira</a></li>
                                            <li><a href="{{route('aulas.percussao')}}" class="block px-4 py-2 hover:bg-gray-100">Percussão</a></li>
                                            <li><a href="{{route('aulas.danca-afro')}}" class="block px-4 py-2 hover:bg-gray-100">Dança</a></li>
                                        </ul>
                                    </li>

                                    <li class="relative group">
                                        <a href="{{route('fotos.index')}}" onclick="toggleSubmenu('submenu')" class=" hover:underline">
                                            Fotos
                                        </a>
                                        <ul class="submenu md:absolute bg-white border rounded shadow-md z-50">
                                            <li><a href="{{route('fotos.role-cultural')}}" class="block px-4 py-2 hover:bg-gray-100">Rolê Cultural</a></li>
                                            <li><a href="{{route('fotos.medalha-zumbi-capoeira')}}" class="block px-4 py-2 hover:bg-gray-100">Outorga da Medalha Zumbi da Capoeira</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="hover:underline">Vídeos</a></li>

                                    <!-- Submenu: Nossas Ações -->
                                    <li class="relative group">
                                        <button onclick="toggleSubmenu('submenu')" class="md:pointer-events-none hover:underline">
                                            Nossas Ações
                                        </button>
                                        <ul id="submenu-acoes" class="submenu md:absolute bg-white border rounded shadow-md mt-2 z-50">
                                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Ação Cultural</a></li>
                                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Feira de Artes</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#" class="hover:underline">Editais Executados</a></li>
                                    <li><a href="#" class="hover:underline">Filiados</a></li>
                                    <li><a href="#" class="hover:underline">Eventos</a></li>
                                    <li><a href="#" class="hover:underline">Faça Sua Filiação</a></li>
                                    <li><a href="#" class="hover:underline">Contatos</a></li>
                                    <li><a href="#" class="hover:underline">Redes Sociais</a></li>
                                    <li><a href="#" class="hover:underline">Doações</a></li>
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
      const menu = document.getElementById('main-menu');
      menu.classList.toggle('hidden');
    }

    function toggleSubmenu(id) {
        console.log(id);
      const submenu = document.getElementById(id);
      submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    }
  </script>
</body>

</html>