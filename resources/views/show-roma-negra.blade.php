@extends('layouts.template')
@section('title', 'Show Roma negra - Casa da capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <div class="flex justify-center flex-col items-center">
        <div class="flex flex-col justify-center py-5">
            <h1 class="text-center text-5xl">Show Roma negra</h1>
            <h2 class="text-center text-3xl pb-8 text-[#ffffff]">Veja abaixo videos e fotos de nosso espetáculo</h2>
            <video class="mw-100 rounded-xl border-solid border-2 border-green-400" src="{{asset('storage/videos/show-roma-negra.mp4')}}" controls></video>
        </div>
        @php
        $files = glob(storage_path('app/public/images/show-roma-negra/capoeira-show/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
        @endphp
        <h2 class="text-center text-5xl text-[#ffffff] py-5">Capoeira Show</h2>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-5">
            @foreach($files as $file)
            <a data-fancybox data-caption="Capoeira Show" href="{{ asset('storage/images/show-roma-negra/capoeira-show/' . basename($file)) }}" title="Capoeira Show"><img class="w-96 rounded-xl border-solid border-2 border-green-400 h-[400px] object-cover" src="{{ asset('storage/images/show-roma-negra/capoeira-show/' . basename($file)) }}" alt="Imagem Capoeira show" title="Capoeira show"></a>
            @endforeach
        </div>
        @php
        $files = glob(storage_path('app/public/images/show-roma-negra/orixas/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
        @endphp
        <h2 class="text-center text-5xl text-[#ffffff] py-5">Orixás</h2>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5">
            @foreach($files as $file)
            <a data-fancybox data-caption="Orixás" href="{{ asset('storage/images/show-roma-negra/orixas/' . basename($file)) }}" title="Orixás">
                <img class="w-96 rounded-xl border-solid border-2 border-green-400 h-[400px] object-cover" src="{{ asset('storage/images/show-roma-negra/orixas/' . basename($file)) }}" alt="Imagem show Orixás">
            </a>
            @endforeach
        </div>
        @php
        $files = glob(storage_path('app/public/images/show-roma-negra/samba-de-roda/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
        @endphp
        <h2 class="text-center text-5xl text-[#ffffff] py-5">Samba de roda</h2>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-5">
            @foreach($files as $file)
            <a data-fancybox data-caption="Samba de roda" href="{{ asset('storage/images/show-roma-negra/samba-de-roda/' . basename($file)) }}"><img class="w-96 rounded-xl border-solid border-2 border-green-400 h-[400px] object-cover" src="{{ asset('storage/images/show-roma-negra/samba-de-roda/' . basename($file)) }}" alt="Imagem show Samba de roda" title="Samba de roda"></a>
            @endforeach
        </div>

    </div>
</div>
@endsection