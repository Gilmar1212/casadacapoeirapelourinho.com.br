@extends('layouts.template')
@section('title', 'Aulas de Dança Afro  - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Aulas de Dança Afro</h1>
    <div class="flex justify-center items-center flex-col">
        <div class="card">
            <div class="card-info content-squares">
                <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/professora-gisele-soares.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">
                    AULA DE DANÇA AFRO<br>
                    na Casa da Capoeira Pelourinho<br>
                </h3>
                <h3 class="text-xl text-red-200 uppercase">✨ Com a professora Deusa do Ébano</h3>
                <h2 class="title">Gisele Soares, Rainha do Bloco Afro Ilê Aiyê</h2>
                <h3 class="text-xl text-red-200 uppercase">🌺 Herdeira da força, da beleza e da tradição afro-baiana</h3>
                <h3 class="text-yellow-200 text-xl">👑 Uma vivência especial:</h3>
                <div class="py-5">
                    <p class="text-[#ffffff]">
                        A Dança dos Reis e Rainhas dos Blocos Afros<br>
                        Corpo, ancestralidade, elegância e resistência em movimento
                    </p>
                    <p class="text-[#ffffff]">
                        🎭 Expressão, realeza e identidade dos blocos afros da Bahia<br>
                        🔥 Uma aula de corpo e alma — reverência viva à cultura negra
                    </p>
                    <div class="py-">
                        <ul class="list">
                            <li class="text-[#ffffff]">Toque, sinta e viva o ritmo da Bahia!</li>
                            <li class="text-[#ffffff]">📲 @casadacapoeirapelourinho</li>
                        </ul>
                        <ul class="list">
                            <li class="text-[#ffffff]">Viva a força da coroa que dança!</li>
                            <li class="text-[#ffffff]">📲 @casadacapoeirapelourinho</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection