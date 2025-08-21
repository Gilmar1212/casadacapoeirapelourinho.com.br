@extends('layouts.template')
@section('title', 'Home - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
  <div class="flex justify-center max-lg:flex-row max-sm:flex-col items-center gap-10">
    <img class="quem-somos-img my-2" src="{{asset('storage/images/banner.webp')}}" alt="Banner" title="Banner">
    <div class="flex flex-col justify-center content-squares">
      <h1 class="text-5xl">Casa da Capoeira Pelourinho</h1>
      <h2 class="text-2xl text-[#f9f032]">Visite a Casa da Capoeira Pelourinho</h2>
        <p class="text-[#ffffff]">
          Conheça a exposição No Caminho do Som, participe de rolês culturais,roda da Velha guarda  assista a shows folclóricos e tire sua foto na sacada com vista para o Pelô.
          Aulas com grandes mestres da capoeira baiana, dança afro e percussão também fazem parte da vivência.
          Filie-se à Casa e venha fazer parte dessa história!
        </p>
      <a class="bg-[#f0f0f0] w-40 text-center p-2 rounded-xl mt-4" href="#" title="Quem somos">Saiba mais</a>
    </div>
  </div>      
</div>
@endsection