@extends('layouts.template')
@section('title', 'Aulas')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Aulas</h1>
    <div class="flex justify-center items-center flex-row gap-20 flex-wrap">
        <a href="{{route('aulas.capoeira')}}" title="Aulas de Capoeira">
            <div class="card card--aulas">
                <div class="card-info">
                    <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/capoeira.webp')}}" alt="Aulas" title="Aulas">
                    <div>                        
                        <h2 class="title uppercase text-center">Aulas de Capoeira</h2>                       
                    </div>
                </div>
            </div>
        </a>
        <a href="{{route('aulas.percussao')}}" title="Aulas de Percurssão">
            <div class="card card--aulas">
                <div class="card-info">
                    <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/percussao.webp')}}" alt="Aulas" title="Aulas">                    
                    <h2 class="title uppercase text-center">Aulas de Percussão</h2>                    
                </div>
            </div>
        </a>
        <a href="{{route('aulas.danca-afro')}}" title="Aulas de Dança Afro">
            <div class="card card--aulas">
                <div class="card-info">
                    <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/danca-afro.webp')}}" alt="Aulas" title="Aulas">                    
                    <div class="container md mx-auto">
                        <h2 class="title uppercase text-center">Aulas de Dança Afro</h2>                  
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection