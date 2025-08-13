@extends('layouts.template')
@section('title', 'Aulas')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Fotos</h1>
    <div class="flex justify-center items-center flex-row gap-20 flex-wrap">       
        <a href="{{route('fotos.role-cultural')}}" title="Aulas de Percurssão">
            <div class="card card--aulas">
                <div class="card-info">
                    <img class="diretoria-img my-2" src="{{asset('storage/images/fotos/role-cultural-cover.webp')}}" alt="Aulas" title="Aulas">                    
                    <h2 class="title uppercase text-center">Rolê Cultural</h2>                    
                </div>
            </div>
        </a>
         <a href="{{route('fotos.medalha-zumbi-capoeira')}}" title="Medalha Zumbi da Capoeira">
            <div class="card card--aulas">
                <div class="card-info">
                    <img class="diretoria-img my-2" src="{{asset('storage/images/fotos/medalha-zumbi-capoeira-cover.webp')}}" alt="Aulas" title="Aulas">
                    <div>                        
                        <h2 class="title uppercase text-center">Medalha Zumbi da Capoeira</h2>                       
                    </div>
                </div>
            </div>
        </a>       
    </div>
</div>
@endsection