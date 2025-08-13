@extends('layouts.template')
@section('title', 'A Diretoria - Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
  <h1 class="text-5xl text-center pb-7">Nossa Diretoria</h1>
  <div class="flex flex-wrap justify-center gap-10">
    <div class="flex flex-col justify-start items-center">
      <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-pitbull.webp')}}" alt="Banner" title="Banner">
      <div class="content-squares-diretoria">
        <h2 class="text-[#ffffff] text-3xl">Mestre Pitbull</h2>
        <h3 class="text-[#ffffff] text-2xl">Doutor Honoris Causa</h3>
        <ul class="list">
          <li class="text-[#ffffff]">Presidente e Fundador da Casa da Capoeira Pelourinho</li>
          <li class="text-[#ffffff]">Idelizador do Papo de Mestres</li>
          <li class="text-[#ffffff]">Caminhada cultural quebrou pra são Caetano</li>
          <li class="text-[#ffffff]">Medalha Zumbi da Capoeira</li>
        </ul>
      </div>
    </div>
    <div class="flex flex-col justify-start items-center">
      <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestra-geisa-torres.webp')}}" alt="Banner" title="Banner">
      <div class="content-squares-diretoria">
        <h2 class="text-[#ffffff] text-3xl">Mestra Geisa Torres</h2>
        <h3 class="text-[#ffffff] text-2xl">Diretora da Casa da Capoeira Pelourinho</h3>
        <ul class="list">
          <li class="text-[#ffffff]">Idealizadora do projeto</li>
          <li class="text-[#ffffff]">O Papo é D’Elas</li>
          <li class="text-[#ffffff]">Autora de livros sobre Capoeira e Cultura Afro-brasileira</li>
        </ul>
      </div>
    </div>
    <div class="flex flex-col justify-start items-center">
      <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/lucineide-alves.webp')}}" alt="Banner" title="Banner">
      <div class="content-squares-diretoria">
        <h2 class="text-[#ffffff] text-3xl">Lucineide Alves</h2>
        <h3 class="text-[#ffffff] text-2xl">Diretora da Casa da Capoeira Pelourinho</h3>
        <p class="text-[#ffffff]">Psicopedagoga da Casa da Capoeira Pelourinho</p>
      </div>
    </div>
    <div class="flex flex-col justify-start diretoria-img">
      <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-crente.webp')}}" alt="Banner" title="Banner">
      <div class="content-squares-diretoria">
        <h2 class="text-[#ffffff] text-3xl">Mestre Crente</h2>
        <h3 class="text-[#ffffff] text-2xl">Diretor da Casa da Capoeira Pelourinho</h3>
        <p class="text-[#ffffff]">Idealizador do Rolê Cultural Atividade realizada na Casa da Capoeira Pelourinho</p>
      </div>
    </div>
    <div class="flex flex-col justify-start diretoria-img">
      <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-jorge-encruzilhada.webp')}}" alt="Banner" title="Banner">
      <div class="content-squares-diretoria">
        <h2 class="text-[#ffffff] text-3xl">Mestre Jorge Encruzilhada</h2>
        <h3 class="text-[#ffffff] text-2xl">Diretor da Casa da Capoeira Pelourinho</h3>
        <p class="text-[#ffffff]">Organizador da Roda da Velha Guarde de Mestres de Capoeira da Bahia da Casa da Capoeira Pelourinho</p>
        <h4 class="text-[#ffffff] text-2xl">Discípulo do Mestres</h4>
        <p class="text-[#ffffff]">
          Mestre Caiçara e do Mestre Paulo dos Anjos<br>
          Ambos ( In Memória )
        </p>
      </div>
    </div>
  </div>
</div>
@endsection