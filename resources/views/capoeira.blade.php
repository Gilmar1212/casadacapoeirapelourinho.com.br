@extends('layouts.template')
@section('title', 'Aulas de Capoeira -  Casa da Capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
    <h1 class="text-5xl text-center py-5">Aulas de Capoeira</h1>
    <div class="flex justify-center items-center flex-col">
        <div class="card">
            <div class="card-info">
                <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-jorge-encruzilhada.webp')}}" alt="Banner" title="Banner">
                <div>
                    <h3 class="subtitle">AULAS DE CAPOEIRA<br> com o Mestre Jorge Encruzilhada</h3>
                    <h2 class="title">ANTONIO JORGE DA PAZ BARBOZA</h2>
                    <ul class="list">
                        <li class="text-[#ffffff]">📅 Nascido em 27/04/1957</li>
                        <li class="text-[#ffffff]">🕰️ Iniciou na Capoeira em 1965</li>
                        <li class="text-[#ffffff]">🧭 Discípulo de Mestre Caiçara e Mestre Paulo dos Anjos</li>
                    </ul>
                    <p class="text-[#ffffff]">
                        🔻 As aulas do Mestre Jorge carregam a força da capoeira de rua,<br>
                        vivenciada no Mercado Modelo, e a tradição viva da Capoeira Angola.
                    </p>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">Rua do Açouguinho, nº 10 – 1º andar – Pelourinho</li>
                        <li class="text-[#ffffff]">🕘 Terça a Sábado | 9h às 17h</li>
                        <li class="text-[#ffffff]">📅 Ou em dia e horário a combinar (aula avulsa ou mensalidade)</li>
                    </ul>
                    <p class="text-[#ffffff]">Vem aprender com quem vive a história da Capoeira!</p>
                    <p class="text-[#ffffff]">📲 @casadacapoeirapelourinho</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-info">
                <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-pitbull.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">AULAS DE CAPOEIRA<br> com o Mestre Pitbull</h3>
                <h2 class="title">Presidente da Casa da Capoeira Pelourinho</h2>
                <div>
                    <ul class="list">
                        <li class="text-[#ffffff]">🕰️ Iniciou na Capoeira Nas ruas</li>
                        <li class="text-[#ffffff]">🌍 Experiência na capoeira de rua do Pelourinho</li>
                        <li class="text-[#ffffff]">🎶 Especialista em musicalidade, toques de berimbau, cantigas e movimentações</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">💥 Além da capoeira, o Mestre Pitbull compartilha:</li>
                        <li class="text-[#ffffff]">✨ Dança Afro e Movimentos dos Orixás</li>
                        <li class="text-[#ffffff]">🔥 Maculelê, Puxada de Rede, Samba de Roda e outras expressões folclóricas</li>
                        <li class="text-[#ffffff]">📍 Um verdadeiro mergulho na ancestralidade corporal e cultural</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Local: Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">Rua do Açouguinho, nº 10 – 1º andar – Pelourinho</li>
                        <li class="text-[#ffffff]">🕘 Terça a Sábado | 9h às 17h</li>
                        <li class="text-[#ffffff]">📅 Aulas avulsas ou mensais | Horários a combinar</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-info">
                <img class="diretoria-img my-2" src="{{asset('storage/images/aulas/anderson-galvao.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">AULAS DE CAPOEIRA<br>na Casa da Capoeira Pelourinho<br> com o Professor Anderson Gavião</h3>
                <h2 class="title">Professor da Casa da Capoeira Pelourinho</h2>
                <div>
                    <ul class="list">
                        <li class="text-[#ffffff]">🌀 Vivência e Classicidade</li>
                        <li class="text-[#ffffff]">🎶 Musicalidade e Ritmo</li>
                        <li class="text-[#ffffff]">🤸‍♂️ Acrobacias e Movimentações</li>
                        <li class="text-[#ffffff]">🧘‍♂️ Alongamento profissional, com base na fisioterapia</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📚 Aulas voltadas para iniciantes e nível intermediário</li>
                        <li class="text-[#ffffff]">🌟 Incluem uma vivência experimental para novos alunos</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Local: Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">📅 Aulas regulares e horários flexíveis – consulte disponibilidade</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">Aprenda com quem une técnica, tradição e cuidado com o corpo.</li>
                        <li class="text-[#ffffff]">📲 @casadacapoeirapelourinho | @anderson.gaviao</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-info content-squares">
                <img class="diretoria-img my-2" src="{{asset('storage/images/diretoria/mestre-crente.webp')}}" alt="Banner" title="Banner">
                <h3 class="subtitle">
                    AULAS DE CAPOEIRA<br>
                    na Casa da Capoeira Pelourinho<br>
                    com o Mestre Crente
                </h3>
                <h2 class="title">🎓 Diretor da Casa da Capoeira Pelourinho</h2>
                <div>
                    <ul class="list">
                        <li class="text-[#ffffff]">📘 Estudante de Educação Física</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">🌀 Vivência e Classicidade</li>
                        <li class="text-[#ffffff]">🎶 Musicalidade e Ritmo</li>
                        <li class="text-[#ffffff]">🤸‍♂️ Acrobacias e Movimentações</li>
                        <li class="text-[#ffffff]">🧘‍♂️ Alongamento com base profissional, voltado ao cuidado corporal</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📚 Aulas para iniciantes e nível intermediário</li>
                        <li class="text-[#ffffff]">🌟 Incluem uma vivência experimental para novos alunos</li>
                    </ul>
                    <ul class="list">
                        <li class="text-[#ffffff]">📍 Local: Casa da Capoeira Pelourinho</li>
                        <li class="text-[#ffffff]">Rua do Açouguinho, nº 10 – 1º andar – Pelourinho</li>
                        <li class="text-[#ffffff]">📅 Aulas regulares com horários flexíveis – consulte disponibilidade</li>
                    </ul>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection