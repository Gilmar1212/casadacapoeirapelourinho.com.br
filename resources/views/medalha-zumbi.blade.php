@extends('layouts.template')
@section('title', 'Outorga da Medalha Zumbi da Capoeira - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Outorga da Medalha Zumbi da Capoeira</h1>
    <div class="flex justify-center items-center flex-col">
        <div class="flex flex-col justify-center content-squares">
            <p class="text-white py-2">
                A Medalha Zumbi da Capoeira, é uma cerimônia de reconhecimento, respeito e valorização àqueles e àquelas que dedicam suas vidas à salvaguarda da capoeira e da cultura afro-brasileira.
            </p>
            <p class="text-white py-2">A Medalha Zumbi da Capoeira é concedida a mestres, mestras, professores, contra-mestres, Autoridade Políticas, pesquisadores, artistas, líderes comunitários e instituições que se destacam por suas contribuições relevantes à arte da capoeira, à luta antirracista e à preservação da memória do povo negro no Brasil.</p>
            <p class="text-white py-2">Inspirada no legado de Zumbi dos Palmares, símbolo da resistência negra, esta homenagem afirma o compromisso da Casa da Capoeira com a valorização histórica e cultural de nossos ancestrais e contemporâneos que constroem, diariamente, a identidade e a força da capoeira.</p>
        </div>
    </div>
    @php
    $files = glob(storage_path('app/public/images/fotos/medalha-zumbi-capoeira/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
    @endphp
    <h2 class="text-center text-5xl text-[#ffffff] py-5">Galeria de fotos do evento</h2>
    <div class="grid grid-cols-4 gap-5">
        @foreach($files as $file)
        <a data-fancybox data-caption="Rolê Cultural" href="{{asset('storage/images/fotos/medalha-zumbi-capoeira/' . basename($file)) }}" title="Orixás">
            <img class="w-96 rounded-xl border-solid border-2 border-green-400 h-[400px] object-cover" src="{{ asset('storage/images/fotos/medalha-zumbi-capoeira/' . basename($file)) }}" alt="Imagem show Orixás">
        </a>
        @endforeach
    </div>
</div>
@endsection