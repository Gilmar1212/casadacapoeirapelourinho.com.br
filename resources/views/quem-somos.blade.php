@extends('layouts.template')
@section('title', 'Quem somos - Casa da capoeira Pelourinho')
@section('content')
<div class="container mx-auto">
  <div class="flex justify-center flex-col items-center">
    <img class="quem-somos-img my-2" src="{{asset('storage/images/banner.webp')}}" alt="Banner" title="Banner">
    <div class="flex flex-col justify-center content-squares">
      <h1 class="text-center text-5xl">A casa da capoeira Pelourinho</h1>
      <p class="text-white py-2">
        A Casa da Capoeira Pelourinho é um Ponto de Cultura certificado pelo Ministério da Cultura (MINC), Governo Federal,
        Ponto de Cultura a partir dos critérios estabelecidos na Lei Cultura Viva (13.018/2014).
      </p>
      <h2 class="text-white text-xl">Certificado pelo Ministério da Cultura</h2>
      <p class="text-white py-2">
        Localizada no coração do Pelourinho, no Centro Histórico de Salvador,
        A Casa é um espaço aberto e acolhedor para todos os públicos: estudantes, turistas, pessoas negras, LGBTQIAPN+, moradores da cidade, pesquisadores, capoeiristas e visitantes do Brasil e do mundo.
      </p>
      <p class="text-white py-2">
        Aberta ao público de terça a sábado, das 9h às 17h, a Casa oferece uma variedade de experiências e vivências. As pessoas podem subir para ler um livro, tirar fotos, conhecer exposições, assistir apresentações e sentir a energia viva da capoeira em sua essência.
        A Casa atua como espaço de salvaguarda da capoeira, preservando suas tradições, histórias e valores, ao mesmo tempo em que promove sua atualização e resistência nos tempos atuais.
      </p>
      <h3 class="text-white">Projetos e Ações Continuadas:</h3>
      <ul>
        <li class="text-white">
          • Roda da Velha Guarda dos Mestres da Capoeira da Bahia
          Iniciativa fundamental da Casa da Capoeira Pelourinho, a Roda da Velha Guarda é um espaço de salvaguarda dedicado aos Mestres da Capoeira da Bahia.
          Realizada de forma periódica, ela reúne mestres experientes para partilhar saberes, fortalecer vínculos, manter viva a ancestralidade e garantir o respeito à memória dos que construíram a capoeira baiana. É um momento de reverência, escuta e valorização dos verdadeiros guardiões da tradição.
        </li>
        <li class="text-white">
          • Papo de Mestre – Que Viva a Capoeira
          Roda de diálogo entre mestres da Bahia que discutem políticas públicas e temas relevantes para a capoeira, com foco em valorização, preservação e protagonismo dos mestres.
        </li>
        <li class="text-white">
          • O Papo é Delas
          – A Capoeira no Olhar Feminino
          Evento especial realizado em 25 de julho, durante o Julho das Pretas, que reconhece e premia mulheres que contribuem com a capoeira e a cultura baiana, dando visibilidade à força feminina nesse universo.
        </li>
        <li class="text-white">
          • Rolê Cultural
          Atividade lúdica, pedagógica e turística. Um dos coordenadores da Casa acompanha grupos desde o Elevador Lacerda até o Pelourinho, narrando a história do Centro Histórico. O percurso termina com uma vivência na Casa e um espetáculo de show folclórico, proporcionando uma imersão cultural única para jovens e visitantes.
        </li>
        <li class="text-white">
          • Medalha Zumbi da Capoeira
          Honraria simbólica entregue a mestres, professores, ativistas, autoridades, políticos, pessoas negras e LGBTQIAPN+ que, de forma significativa, contribuem com a capoeira, a cultura afro-brasileira e a valorização da diversidade.
        </li>
      </ul>
      <h2 class="text-white text-xl">Acolhimento e Apoio aos Capoeiristas</h2>
      <p class="text-white py-2">A Casa da Capoeira Pelourinho também se posiciona como um alicerce de apoio para capoeiristas da Bahia, de Salvador e de todo o Brasil. O espaço está sempre de portas abertas, especialmente para aqueles que enfrentam barreiras de acesso ao Centro Histórico, oferecendo infraestrutura para eventos, rodas, workshops, ensaios e atividades formativas.</p>
      <p class="text-white py-2">Grupos de capoeira das periferias filiadas à Casa recebem apoio em diversas frentes, incluindo elaboração de projetos, inscrição em editais, criação de materiais gráficos e promoção de eventos. A Casa atua como uma verdadeira ponte entre os mestres e o poder público, fortalecendo o papel da capoeira como instrumento de transformação social.</p>
    </div>
  </div>      
</div>
@endsection