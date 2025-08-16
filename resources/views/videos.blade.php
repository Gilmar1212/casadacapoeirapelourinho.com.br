@extends('layouts.template')
@section('title', 'Videos - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Videos</h1>
    <div class="flex justify-center items-center flex-col">        
        <div class="flex flex-col justify-center content-squares">
            <h2 class="text-white py-2 text-3xl uppercase text-center">
                🌍 Aula Multicultural - <br>
                Cultura Baiana ao Vivo
            </h2>
            <p class="text-[#ffffff] text-center">@CasadaCapoeiraPelourinho</p>
            
            <ul class="list">
                <li class="text-center text-[#ffffff]">Capoeira • Puxada de Rede • Musicalidade</li>
                <li class="text-center text-[#ffffff]">Maculelê • Samba de Roda • Axé Music</li>
                <li class="text-center text-[#ffffff]">Estilo Timbalada • Dança Afro</li>
            </ul>

            <p class="text-[#ffffff] text-center text-lg">✨ Tradição, ritmo e energia num só lugar!</p>
            <p class="text-[#ffffff] text-center text-lg">📅 Agende sua turma</p>        
        </div>
        <video class="mw-100 rounded-xl border-solid border-2 border-green-400 my-5 video-content" src="{{asset('storage/videos/aula-multicultural.mp4')}}" controls></video>
    </div>
</div>
@endsection