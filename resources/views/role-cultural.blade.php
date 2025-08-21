@extends('layouts.template')
@section('title', 'Rolê Cultural - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Rolê Cultural</h1>
    <div class="flex justify-center items-center flex-col">
        <div class="flex flex-col justify-center content-squares">
            <p class="text-white py-2">
                <span class="text-white py-2 text-3xl uppercase">Rolê Cultural da</span><br>
                Casa da Capoeira Pelourinho, Em Salvador, é uma experiência guiada imersiva pelo Centro Histórico da cidade, com foco na capoeira e na história afro-brasileira.
            </p>
            <h2 class="text-white py-2 text-2xl uppercase">O que é o Rolê Cultural?</h2>
            <ul class="list">
                <li class="text-white py-2">É um passeio educativo voltado especialmente para crianças e adolescentes, embora aberto a qualquer pessoa interessada na cultura local.</li>
                <li class="text-white py-2">Inclui visitações a pontos emblemáticos como Elevador Lacerda, Paço Municipal, Praça da Cruz Caída, museus e encerra com uma apresentação folclórica na sede da Casa da Capoeira Pelourinho.</li>
                <li class="text-white py-2">Funciona como parte do projeto anual que visa resguardar e reviver a memória cultural da cidade.</li>
            </ul>
        </div>
    </div>
    @php
    $files = glob(storage_path('app/public/images/fotos/role-cultural/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
    @endphp
    <h2 class="text-center text-5xl text-[#ffffff] py-5">Galeria de fotos do evento</h2>
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-5">
        @foreach($files as $file)
        <a data-fancybox data-caption="Rolê Cultural" href="{{asset('storage/images/fotos/role-cultural/' . basename($file)) }}" title="Orixás">
            <img class="w-96 rounded-xl border-solid border-2 border-green-400 h-[400px] object-cover" src="{{ asset('storage/images/fotos/role-cultural/' . basename($file)) }}" alt="Imagem show Orixás">
        </a>
        @endforeach
    </div>
</div>
@endsection