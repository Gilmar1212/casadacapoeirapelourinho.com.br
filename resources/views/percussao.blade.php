@extends('layouts.template')
@section('title', 'Aulas de Percussão - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Aulas de Percussão</h1>
    <div class="flex justify-center items-center flex-col">    
        <div class="card">
            <div class="card-info content-squares">
                <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/mestre-jorel.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">
                    AULAS DE PERCUSSÃO AFRO-BAIANA<br>
                    na Casa da Capoeira Pelourinho<br>
                    com o Mestre Joel
                </h3>
                <h2 class="title">Músico do Balé Folclórico da Bahia</h2>
                <h3 class="text-yellow-200 text-xl">🥁 Ritmos tradicionais afro-baianos:</h3>
                <div>
                    <ul class="list list-disc ml-7">
                        <li class="text-[#ffffff]">Ijexá</li>
                        <li class="text-[#ffffff]">Ketu</li>
                        <li class="text-[#ffffff]">Angola</li>
                        <li class="text-[#ffffff]">Barravento</li>
                        <li class="text-[#ffffff]">Todos os toques de Atabaque, Pandeiro, Agogô</li>
                        <li class="text-[#ffffff]">Timbau</li>
                        <li class="text-[#ffffff]">Samba-Reggae e muito mais!</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">🎶 Para iniciantes, músicos e amantes da cultura afro-brasileira</li>
                        <li class="text-[#ffffff]">🤲 Aulas práticas com vivência corporal e conexão ancestral</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Local: Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">Rua do Açouguinho, nº 10 – 1º andar – Pelourinho</li>
                        <li class="text-[#ffffff]">📅 Aulas regulares | Horários a combinar</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">Toque, sinta e viva o ritmo da Bahia!</li>
                        <li class="text-[#ffffff]">📲 @casadacapoeirapelourinho</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-info content-squares">
                <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/contra-mestre-brown.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">
                    AULAS DE PERCUSSÃO AFRO-BAIANA<br>
                    na Casa da Capoeira Pelourinho<br>
                    com o ContraMestre Brown
                </h3>
                <h2 class="title">🎵 Músico da Bahia</h2>
                <h3 class="text-yellow-200 text-xl">🥁 Ritmos tradicionais afro-baianos:</h3>
                <div>
                    <ul class="list list-disc ml-7">
                        <li class="text-[#ffffff]">Ijexá</li>
                        <li class="text-[#ffffff]">Ketu</li>
                        <li class="text-[#ffffff]">Angola</li>
                        <li class="text-[#ffffff]">Barravento</li>
                        <li class="text-[#ffffff]">Todos os toques de Atabaque, Pandeiro, Agogô</li>
                        <li class="text-[#ffffff]">Timbau</li>
                        <li class="text-[#ffffff]">Samba-Reggae e muito mais!</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">🎶 Para iniciantes, músicos e amantes da cultura afro-brasileira</li>
                        <li class="text-[#ffffff]">🤲 Aulas práticas com vivência corporal e conexão ancestral</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Local: Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">Rua do Açouguinho, nº 10 – 1º andar – Pelourinho</li>
                        <li class="text-[#ffffff]">📅 Aulas regulares | Horários a combinar</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">Toque, sinta e viva o ritmo da Bahia!</li>
                        <li class="text-[#ffffff]">📲 @casadacapoeirapelourinho</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection