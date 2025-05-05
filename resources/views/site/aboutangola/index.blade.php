@extends('layouts.merge.site')
@section('titulo', 'Infação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section>

        <div class="gdlr-core-pbf-wrapper  " style="height: auto; width:100%;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url(&quot;/site/assets/upload/img-background-page.png&quot;); background-size: cover; background-position: center top; height: 500px;">
                </div>
            </div>
            <div class="financity-page-title-wrap  financity-style-custom financity-left-align">
                <div class="financity-header-transparent-substitute" style="height: 183px;"></div>
                <div class="financity-page-title-overlay"></div>
                <div class="financity-page-title-container financity-container">
                    <div class="financity-page-title-content financity-item-pdlr">
                        <h1 class="financity-page-title">Sobre Angola</h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper " style="padding: 10px 0px 10px 40px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color:#ffb400;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-breadcrumbs-item gdlr-core-item-pdlr gdlr-core-item-pdb "> <span
                                property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    title="Go to Financity." href="http://127.0.0.1:8000" class="home"><span
                                        property="name">Início</span></a>
                                <meta property="position" content="1">
                            </span>

                            •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                    href="#" class="post post-page"><span
                                        property="name">Angola</span></a>

                                •<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        href="{{ route('site.aboutangola') }}" class="post post-page"><span
                                            property="name">Sobre Angola</span></a>

                                </span></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row my-5 flex-column-reverse flex-lg-row">


                <div class="col-md-4 col-12">

                    @include('extra._calendar.index')

                    @include('extra._tags.index')
                    @include('extra._publicity.index')

                    <div id="gdlr-core-recent-post-widget-4 "
                        class="widget widget_gdlr-core-recent-post-widget financity-widget mt-4">
                        <h6 class="financity-widget-title">Últimas Notícias</h6>
                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                            @foreach ($lastedNews as $item)
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                            src="/storage/{{ $item->path }}" alt="" width="150" height="150">
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a
                                                href="{!! url('/noticia/' . urlencode($item->title)) !!}">{{ $item->title }}</a></div>
                                        <div class="gdlr-core-recent-post-widget-info"><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">{{ date('d-m-Y', strtotime($item->date)) }}</a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>


                        <h6 class="financity-widget-title mt-5">Últimos Eventos</h6>
                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">

                            @foreach ($lastedEvents as $item)
                                <div class="gdlr-core-recent-post-widget clearfix">
                                    <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img
                                            src="/storage/{{ $item->path }}" alt="" width="150" height="150">
                                    </div>
                                    <div class="gdlr-core-recent-post-widget-content">
                                        <div class="gdlr-core-recent-post-widget-title"><a
                                                href="{!! url('/evento/' . urlencode($item->title)) !!}">{{ $item->title }}</a></div>
                                        <div class="gdlr-core-recent-post-widget-info"><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span
                                                    class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a
                                                    href="#">{{ date('d-m-Y', strtotime($item->dateEvent)) }}
                                                </a></span><span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>

                    @include('extra._VideoImage.index')


                </div>


                <div class="col-md-8 col-12 container">


                    <section class="">
                        <div class=container-fluid>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <h3 class=" mb-3">Cultura</h3>
                                    <p style="text-align: justify;">
                                        A riqueza cultural de Angola manifesta-se em diferentes áreas. No artesanato,
                                        destaca-se a
                                        variedade de materiais utilizados. Através de estatuetas em madeira, instrumentos
                                        musicais,
                                        máscaras para danças rituais, objectos de uso comum, ricamente ornamentados,
                                        pinturas a óleo e
                                        areia, é comprovada a qualidade artística angolana, patente em museus, galerias de
                                        arte e
                                        feiras. Associado às festas tradicionais promovidas por etnias locais está também um
                                        grande
                                        valor cultural. A presença constante da dança no quotidiano é produto de um contexto
                                        cultural
                                        apelativo para a interiorização de estruturas rítmicas desde cedo. Iniciando-se pelo
                                        estreito
                                        contacto da criança com os movimentos da mãe (às costas da qual é transportada),
                                        esta ligação é
                                        fortalecida através da participação dos jovens nas diferentes celebrações sociais
                                        (os jovens são
                                        os que mais se envolvem), onde a dança se revela determinante enquanto factor de
                                        integração e
                                        preservação da identidade e do sentimento comunitário. <br><br>

                                        Neste particular, destaca-se algumas festas típicas em Angola:

                                    </p>
                                    <ul style="text-align: justify;">

                                        <li class="mt-4">
                                            <b>Festas do Mar</b>- estas festas tradicionais designadas por “Festas do Mar”,
                                            têm lugar na
                                            cidade
                                            do Namibe. Estas festas provêm de antiga tradição com carácter cultural,
                                            recreativo e
                                            desportivo. Realizam-se na época de verão e é habitual terem exposições de
                                            produtos
                                            relacionados
                                            com a agricultura, pescas, construção civil, petróleos e agro-pecuária;
                                        </li>
                                        <li class="mt-4">
                                            <b>Carnaval </b>- o desfile principal realiza-se na avenida da marginal de
                                            Luanda. Vários
                                            corsos
                                            carnavalescos e corsos alegóricos desfilam numa das principais avenidas de
                                            Luanda e de
                                            Benguela;
                                        </li>
                                        <li class="mt-4">
                                            <b>Festa da Nossa Senhora da Múxima</b>- o santuário da Múxima está localizado
                                            no Município
                                            da
                                            Kissama, Província de Luanda e durante todo o ano recebe milhares de fiéis. É
                                            uma festa
                                            muito
                                            popular que se realiza todos os anos e que inevitavelmente atrai inúmeros
                                            turistas, pelas
                                            suas
                                            características religiosas. <br>
                                            Depois de vários séculos de colonização portuguesa, Angola acabou por também
                                            sofrer misturas
                                            com
                                            outras culturas e a música anuncia a riqueza artística de Angola, com os ritmos
                                            do kizomba,
                                            semba, rebita, cabetula, kilapanga e os novos estilos, como o zouk e kuduro, a
                                            animar as
                                            noites
                                            africanas. As danças tradicionais assumem, paralelamente, a sua relevância, a
                                            par da
                                            gastronomia
                                            rica e variada. A literatura angolana tem origem no século XIX, com uma função
                                            marcadamente
                                            “intervencionista e panfletária de uma imprensa feita pelos nativos da terra”,
                                            sendo que a
                                            mesma
                                            reflecte também a riqueza cultural do país. É a cultura que molda a imagem de
                                            Angola no
                                            mundo.
                                            Uma política cultural externa para a representação da diversidade cultural de
                                            Angola é,
                                            portanto, uma grande preocupação do Governo angolano.
                                        </li>

                                    </ul>

                                    <h3 class="mt-5 pt-5 mb-3">Política</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="/site/assets/upload/pr-angola.gif" alt="" width="100%">
                                        </div>
                                        <div class="col-md-8">
                                            <p style="text-align: justify;">
                                                O cidadão João Manuel Gonçalves Lourenço nasceu no dia 5 de Março de 1954,
                                                na cidade do
                                                Lobito, província de Benguela, filho de Sequeira João Lourenço, enfermeiro,
                                                e de Josefa
                                                Gonçalves Cipriano Lourenço, costureira, ambos falecidos. É casado com Ana
                                                Afonso Dias
                                                Lourenço e pai de seis filhos. <br><br>

                                                Fez os estudos primários e secundários na província do Bié e também na
                                                cidade capital,
                                                na antiga Escola Industrial de Luanda e no Instituto Industrial de Luanda.
                                                De 1978 a
                                                1982, recebeu na então União Soviética formação militar, tendo-se
                                                especializado em
                                                artilharia pesada. Nesse país, obteve igualmente o grau académico de Mestre
                                                em Ciências
                                                Históricas. Tem o domínio fluente do inglês, do russo e do espanhol.<br>
                                                <br>

                                                Participou a partir de Agosto de 1974 na luta de Libertação Nacional,
                                                conduzida pelo
                                                MPLA, tendo feito a sua primeira instrução político-militar no Centro de
                                                Instrução
                                                Revolucionária – CIR ‘Kalunga’ – no Congo Brazzaville. Integrou o primeiro
                                                grupo de
                                                combatentes do MPLA que em 1974 entrou em território nacional, via Miconge,
                                                em direcção
                                                à cidade de Cabinda. <br><br>

                                                Nas vésperas da Independência, participou em combates em Ntó-Iema, na
                                                província de
                                                Cabinda, e em outras localidades, contra a invasão do exército zairense que
                                                pretendia
                                                ocupar o território daquela província de Angola. Exerceu também as funções
                                                de Comissário
                                                Político das então Forças Armadas Populares de Libertação de Angola (FAPLA)
                                                em diversos
                                                escalões, incluindo a de Comissário Político da 2ª Região Político-Militar
                                                de Cabinda.
                                                <br><br>

                                                Durante a década de 80 do século XX, participou em várias operações
                                                militares no centro
                                                do país, nomeadamente nas províncias do Cuanza Sul, Huambo e Bié. Em 1983
                                                exerceu a
                                                Presidência do Conselho Militar Regional da 3ª Região Político-Militar. Nas
                                                Forças
                                                Armadas, desempenhou ainda as funções de Chefe da Direcção Política das
                                                FAPLA, de 1989 a
                                                1990. Actualmente é General-de-Três-Estrelas, na reserva, das Forças Armadas
                                                Angolanas
                                                (FAA).<br><br>

                                                Integra o Comité Central do MPLA desde 1985, é membro do seu Bureau Político
                                                desde 1990
                                                e, na sequência do VII Congresso Ordinário do MPLA, realizado em 2016, foi
                                                eleito
                                                Vice-Presidente do MPLA. Anteriormente, já tinha desempenhado as funções de
                                                1º
                                                Secretário do Bureau Político e também Secretário do Bureau Político do MPLA
                                                para a
                                                Informação e para a Esfera Económica e Social.<br><br>

                                                No domínio das funções governativas, foi nomeado em 1983, aos 29 anos de
                                                idade, para
                                                exercer o cargo de Comissário Provincial do Moxico, equivalente ao cargo
                                                actual de
                                                Governador de Província. Foi posteriormente, de 1986 a 1989, Comissário
                                                Provincial de
                                                Benguela. Em 2014, por Decreto Presidencial, foi nomeado Ministro da Defesa
                                                Nacional,
                                                cargo que exerceu até ao início da campanha eleitoral de 2017.<br><br>

                                                Ao nível parlamentar, o cidadão João Lourenço foi Presidente do Grupo
                                                Parlamentar do
                                                MPLA, de 1991 a 1998, e posteriormente Presidente da Comissão Constitucional
                                                da
                                                Assembleia Nacional, tendo desempenhado as funções de 1º Vice-Presidente da
                                                Assembleia
                                                Nacional, de 2003 a 2014.<br><br>

                                                O cidadão João Lourenço tem como passatempo a leitura, o xadrez, a equitação
                                                e é um
                                                apaixonado pelas novas Tecnologias de Informação.
                                            </p>
                                        </div>
                                    </div>

                                    <h3 class="mt-5 pt-5 mb-3">Moeda</h3>
                                    <p style="text-align: justify;">

                                        A moeda oficial é o Kwanza.
                                    </p>
                                    <h3 class="mt-5 pt-5 mb-3">Geografia</h3>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <p style="text-align: justify;">

                                                Angola situa-se na região ocidental da África Austral, tendo os seguintes
                                                dados
                                                geográficos: <br><br>
                                                Latitude – Norte – 04°22'G / Sul - 18°02'G. <br>
                                                Longitude – Leste – 24°05'E.G / Oeste – 11°41'E.G <br>
                                                Superfície: 1.246.700 km2 <br>
                                                Extensão da Costa Atlântica: 1.650 Km <br>
                                                Fronteiras Terrestres: 4.837 Km <br>
                                                Países limítrofes a Norte: República do Congo e República Democrática do
                                                Congo. <br>
                                                Países limítrofes a Leste: República Democrática do Congo e República da
                                                Zâmbia. <br>
                                                Países limítrofes a Sul: República da Namíbia. <br>
                                                Oeste: Oceano Atlântico. <br>



                                            </p>
                                        </div>
                                        <div class="col-12 col-md-12 mt-0">

                                            <xml version="1.0" encoding="UTF-8" standalone="no" ?="">
                                                <svg xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                    xmlns:cc="http://creativecommons.org/ns#"
                                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                    xmlns:svg="http://www.w3.org/2000/svg"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                                                    xml:space="preserve" version="1.1"
                                                    style="border-radius:20px;padding: 20px;background: linear-gradient(45deg, #fff 30%, #fff);width:100%;shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;fill-rule:evenodd;clip-rule:evenodd"
                                                    viewBox="0 0 19647 23144" id="svg45"
                                                    sodipodi:docname="mapa_angola.svg"
                                                    inkscape:version="1.0.2 (e86c870879, 2021-01-15)">
                                                    <metadata id="metadata49">
                                                        <rdf:rdf>
                                                            <cc:work rdf:about="">
                                                                <dc:format>image/svg+xml</dc:format>
                                                                <dc:type
                                                                    rdf:resource="http://purl.org/dc/dcmitype/StillImage">
                                                                </dc:type>
                                                                <dc:title></dc:title>
                                                            </cc:work>
                                                        </rdf:rdf>
                                                    </metadata>
                                                    <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666"
                                                        borderopacity="1" objecttolerance="10" gridtolerance="10"
                                                        guidetolerance="10" inkscape:pageopacity="0"
                                                        inkscape:pageshadow="2" inkscape:window-width="1366"
                                                        inkscape:window-height="715" id="namedview47" showgrid="false"
                                                        inkscape:zoom="0.46161663" inkscape:cx="374.06999"
                                                        inkscape:cy="350.90907" inkscape:window-x="-8"
                                                        inkscape:window-y="-8" inkscape:window-maximized="1"
                                                        inkscape:current-layer="Layer_x0020_1"></sodipodi:namedview>
                                                    <defs id="defs4">
                                                        <style type="text/css" id="style2">
                                                            .fil0 {
                                                                fill: red
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="Layer_x0020_1" transform="translate(126.70434,-549.05225)">
                                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                        <g id="g1687">
                                                            <a href="https://governo.gov.ao/provincia/cuando-cubango"
                                                                data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: José Martins
                                                                Capital: Menongue
                                                                Nº de Municípios: 9
                                                                Extensão: 199.049 km²
                                                                Língua: Nganguela
                                                                Etnia: Ovanganguela">
                                                                <path class="province"
                                                                    d="m 9472.7196,16681.521 c 284,424 -100,456 -547,456 -148,309 -243,852 -977.9996,339 -256,-179 -38,-83 -436,-293 0,742 -164,642 10,853 504,611 -53,687 412,1234 145,170 138,121 347.9996,198 288,107 370,326 370,725 171,90 274,107 274,592 0,517 -79,705 -319,958 28,342 182,554 182,958 289,0 381,-46 684,-46 1332.0004,0 962.0004,-84 1341.0004,483 250,374 967,279 1571,345 823,89 794,-186 1572,207 409,206 346,-32 806,-32 600,0 163,237 1321,-46 413,-101 1034,-138 1477,-257 241,-65 448,-147 667,-198 l -1573,-1483 c -149,-164 -394,-374 -468,-580 -158,-440 10,-340 -394,-609 -300,-199 -272,-322 -439,-610 -141,-244 -704,-1096 -1002,-1096 -660,0 -1075,183 -1470,-217 -509,-514 -368,-969 -1038,-969 -109,0 -759,696 -820,-274 -29,-451 -494,-536 -959.001,-731 -228.9994,-96 -192.9994,-98 -591.9994,93 z"
                                                                    id="path7"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/moxico"
                                                                data-toggle="tooltip" data-placement="top"
                                                                data-original-title="
                                                                Governador: Ernesto Muangala
                                                                Capital: Luena
                                                                Nº de Municípios: 9
                                                                Extensão: 223.023 km²
                                                                Língua: Cokwe, Nganguela
                                                                Etnia: Ovanga">
                                                                <path class="province"
                                                                    d="m 15811.72,11711.521 54,637 c -101,23 -310,74 -384,78 -158,7 -200,-48 -348,17 -382,170 -189,792 -1313,210 -810,-419 -1201,-162 -1789,66 -482,187 -49,168 -518,577 -223,193 -136,343 -574,885 -141,173 -874.001,904 -874.001,1360 0,238 118.001,196 -70.9998,383 -134.9996,134 -229.9996,127 -247.9996,347 261.9994,61 1203.0004,408 1393.0004,750 80,143 69,434 112,618 568,0 50,-228 866,-228 376,0 673,1006 1143,1184 140,53 926,2 1183,2 463,0 1240,1579 1342,1667 61,53 223,136 299,157 v -4104 c 0,-1084 -190,-1132 1005,-1096 241,7 345,48 637,48 l 1596,-47 c -5,-206 -46,-181 -46,-410 0,-577 -14,-1201 65,-1760 48,-342 118,-779 118,-1113 -210,56 -116,137 -274,137 -209,0 -259,-137 -547,-137 -123,0 -477,410 -867,410 -224,0 -459,-182 -684,-182 -100,0 -638,723 -638,-137 0,-586 566,-638 -365,-638 -125,0 -285,204 -273,319 z"
                                                                    id="path9"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/lunda-norte"
                                                                data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Deolinda Ódia Paulo Satula Vilarinho
                                                                Capital: Dundo
                                                                Nº de Municípios: 10
                                                                Extensão: 103.760 km²
                                                                Língua: Cokwe
                                                                Etnia: Cokwe">
                                                                <path class="province"
                                                                    d="m 12163.72,6877.5207 c -420,0 -615,91 -1186,91 -912.001,0 -554,13 -1440.0004,157 -268,43 -370,-48 -390,205 l 95,1055 c 47,517 -61,635 -454,727 0,955.0003 901,490 1505.0004,1185.0003 -76,144 -137,178 -137,320 0,159 197,273 411,273 343,0 2051,-821 2217,-973.9996 119,-109.0006 91,-149.0004 121,-335.0007 128,-798 890,-750 1147,-1133 87,-129 101,-148 194,-263 612,-762 678,-154 1154,-441 79,-47 152,-113 250,-161 112,-54 197,-65 297,-113 -98,-423 -294,-81 -104,-1198 38,-218 100,-389 104,-580 -174,72 -856,35 -1095,48 -696,38 -220,66 -1048,-3 -72,-301 -47,-172 9,-637 -331,-28 -1071,-146 -1335,40 -162,114 -126,380 -99,565 47,326 -42,912 -216,1172 z"
                                                                    id="path11"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/malanje"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Marcos Alexandre Nhunga
                                                                Capital: Malanje
                                                                Nº de Municípios: 14
                                                                Extensão: 2.422 km²
                                                                Língua: Kimbundu
                                                                Etnia: Ambundu">
                                                                <path class="province"
                                                                    d="m 7374.72,5874.5207 c -252,133 -106,83 -283,264 -87,88 -309,171 -309,238 0,306 353,398 -78,879 -123,138 -180,169 -424,169 l -222,686 c 205,314 203,159 132,638 -58,397 -168,272 -548,272 -38,449 -444,912.0007 -137,912.0007 635,0 848,-681.0007 1637,140.9996 358,373 139,256 50,589 123,142 246,247 352,424 504,847 330,218 951.9996,460 626,244 498,1244 566,1533 645,0 164,-654 524,-551 129,36 217,149 251,277 434.0004,0 856.0004,-168 1140.0004,-319 -16,-731 -386,-807 -182,-1231 -234,-62 -821.0004,-324 -821.0004,-638 0,-166 53.9994,-160 90.9994,-320 -291.9994,-154 -561.9994,-258 -906.9994,-369.9996 -400,-129.0006 -552,-296.0007 -552,-815.0007 0,-186 293,-236 456,-274 l -64,-1350 c -58,-433 -24,-226 -255,-702 -55,-114 -105,-209 -168,-334 -58,-118 -103,-200 -150,-306 -19,-42 -45,-112 -69,-159 -38,-73 -74,-111 -115,-159 0,1059 -827.9996,72 -866.9996,46 z"
                                                                    id="path13"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/hu%C3%ADla"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Nuno Bernabé Mahapi Dala
                                                                Capital: Lubango
                                                                Nº de Municípios: 14
                                                                Extensão: 79022
                                                                Língua: Olunhaneka, Umbundu
                                                                Etnia: Ovambu">
                                                                <path class="province"
                                                                    d="m 6736.72,16271.521 c -149,-100 -63,-119 -274,-137 -38,143 -329,593 -456,593 -760,0 -240,-593 -547,-593 -399,0 -778,441 -957,411 l -364,-54 c -319,694 -359,327 -1278,327 -309,0 21,233 75,473 274,1229 -759,1153 -759,1716 0,137 55,111 148,171 354,228 497,406 447,1108 -25,358 -93,25 -93,591 l 317,97 c 114,-424 486,-374 662,-440 251,-95 420,-478 662,-478 128,0 41,13 223,96 l 521,209 c 171,91 57,88 259,105 30,-128 245,-692 311,-784 207,-289 621,-480 1010,-347 313,106 206,57 490,-250 133,-142 174,-209 424,-215 0,-919 -51,-423 -264,-880 -125,-269 81,-200 81,-625 0,-225 -108,-151 -91,-451 l 46,-825 -364,-54 -109,128 c -70,74 -33,50 -120,108 z"
                                                                    id="path15"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/cunene"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Gerdina Ulipamue Didalewa
                                                                Capital: Ondijiva
                                                                Nº de Municípios: 6
                                                                Extensão: 78.342 km²
                                                                Língua: Oshiwambo
                                                                Etnia: Ovambu">
                                                                <path class="province"
                                                                    d="m 6782.72,19554.521 c -199,0 -363,-249 -849,64 -326,209 -401,1031 -611,1031 -184,0 -269,-126 -483,-201 -127,-44 -465,-210 -520,-210 -142,0 -378,339 -526,432 -284,178 -371,17 -541,188 -71,71 -53,100 -111,165 -177,200 -333,46 -466,55 l -353,130 c -202,93 6,21 -101,303 -41,106 -48,26 -91,186 193,52 197,128 268,280 113,239 635,815 918,815 362,0 525,-91 865,-93 358,-1 540,-44 913,-44 1211,0 2286,46 3511.9996,46 0,-330 -210,-809 -144,-1015 76,-238 281,-58 281,-1037 0,-308 -157,-190 -244,-440 -86,-245 29,-404 -194,-537 -182,-108 -335.9996,-81 -482.9996,-246 -122,-136 -147,-373 -356,-373 -254,0 -290,501 -684,501 z"
                                                                    id="path17"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/lunda-sul"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Daniel Félix Neto
                                                                Capital: Saurimo
                                                                Nº de Municípios: 4
                                                                Extensão: 77.636 km²
                                                                Língua: Cokwe
                                                                Etnia: Cokwe">
                                                                <path class="province"
                                                                    d="m 10795.72,11027.521 c 257,385 179,105 121,392 -135,662 973,620 973,930 0,123 -22,126 -46,228 351,-29 1011,-612 2049,-88 1008,510 700,44 1071,-166 379,-214 784,152 703,-279 -110,-587 224,-835 373,-835 h 592 c 0,-1245.9998 -581,-1182 -784,-1588.0003 -182,-362 139,-956 187,-1381 18,-169 5,-411 5,-588 -385,32 -428,234 -722,330 -418,136 -424,-220 -819,182 -317,323 -365,497 -505,589 l -345,202 c -886,544 -398,443 -664,978.0007 -94,189.9996 -455,312.9996 -665,428.9996 -342,189 -1148,577 -1524,665 z"
                                                                    id="path19"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/bi%C3%A9"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Pereira Alfredo
                                                                Capital: Cuíto
                                                                Nº de Municípios: 9
                                                                Extensão: 70.314 km²
                                                                Língua: Umbundu, Cokwe
                                                                Etnia: Ovimbundo, Tucokwe">
                                                                <path class="province"
                                                                    d="m 6918.72,12030.521 c -171,0 -86,-30 -273,-45 l -274,684 c 0,293 151,-46 411,-46 317,0 246,238 401,419 36,42 941.9996,415 9,1040 426,637 12,297 -91,684 596,139 501,-133 501,1140 0,143 -58,81 -95,176 l -51,918 c 389,32 699.9996,502 966.9996,502 232,0 266,-383 419,-493 161,-114 206,-22 404,-58 444,-81 -315,-209 257,-472 322,-149 60,-79 60,-208 0,-267 188,-408 365,-502 -14,-640 -132,-166 273.0004,-958 63,-122 157,-275 246,-392 80,-104 85,-87 164,-155 463,-399 582,-902 681,-1006 120,-125 231,-113 297,-342 l 118,-567 c -110,-58 -456,-216 -593,-228 115,497 72,519 -671,789 -704.0004,255 -731.0004,-29 -834.0004,-105 -9,422 -272,456 -547,456 -359,0 -89,-790 -377,-1310 -320,-577 -963.9996,101 -1127.9996,-514 -261,70 -556,593 -639,593 z"
                                                                    id="path21"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/u%C3%ADge"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: José Carvalho da Rocha
                                                                Capital: Uíge
                                                                Nº de Municípios: 16
                                                                Extensão: 58.698 km²
                                                                Língua: Kikongo, Kimbundu
                                                                Etnia: Bakongo, Ambundu">
                                                                <path class="province"
                                                                    d="m 5003.72,4096.5203 c 0,103 -21,227 -59,305 -141,286.0004 -567,160 -911,274.0004 -279,93 -33,39 -344,432 -34,43 -135,154 -177,187 -160,126 -119,43 -287,124 66,286 137,349 137,730 398,33 400,224 547,501 289,0 381,-45 684,-45 172,738 53,546 45,866 292,-6 67,-44 455,-139 326,-80 184,-25 184,-454 0,-325 400,-113 486,-73 389,183 12,-55 563,73 26,115 46,271 91,365 252,-21 365,-312 365,-319 0,-209 -137,-259 -137,-547 0,-176 233,-236 352,-332 249,-201 361,-547 752,-88 126,147 95,186 355,192 0,-479 -91,-354 -91,-639 0,-315 124.9996,88 -74,-472 -175,-493.0004 -264,-1075.0004 -382,-1580.0004 -552,-128 -1994,-45 -2691,-45 22,257 137,364 137,684 z"
                                                                    id="path23"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/namibe"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Augusto Archer de Sousa Mangueira
                                                                Capital: Moçâmedes
                                                                Nº de Municípios: 5
                                                                Extensão: 8916
                                                                Língua: Oluherero
                                                                Etnia: Minoria Oluyaneka">
                                                                <path class="province"
                                                                    d="m 1629.72,16499.521 c -248,0 -246,-86 -502,-91 -47,563 -441.99996,1994 -668.99996,2523 l -350.00002,1038 c -17,85 -28.99999,158 -80.999985,307 -47.999995,142 -61.999995,178 -92.99999,365 l -105.000005,1267 c -41,285 2,199 21,428 231.99998,0 248.99998,-46 502,-46 415,0 595,337 946.99996,-11 274,-270 488,-308 877,-308 -83,-311 -228,43 -228,-502 244,-65 97,-97 91,-364 210,-49 125,-92 411,-92 486,-2089 -456,-1450 -456,-2006 0,-290 468,-667 698,-897 136,-137 150,-143 113,-411 -9,-65 -40,-360 -67,-440 l -191,-356 c -169,-250 -227,-55 -508,-586 -135,71 -238,182 -410,182 z"
                                                                    id="path25"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/cuanza-sul"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Job Pedro Castelo Capapinha
                                                                Capital: Sumbe
                                                                Nº de Municípios: 12
                                                                Extensão: 55.660 km²
                                                                Língua: Kimbundu, Ubundu
                                                                Etnia: Ambundu, Ovimbundu">
                                                                <path class="province"
                                                                    d="m 4319.72,10024.521 c 0,210 -10,360 38,509 57,176 297,540 8,540 -283,0 -318,-257 -554,-190 -117,34 -253,154 -677,190 0,397 48,654 46,1002 -1,365 -1,730 -1,1095 418,97 416,121 593,456 155,-104 198,-319 365,-319 320,0 154,426 602,485 180,24 114,7 264,108 243,-363 217,-250 352,-424 22,-28 120,-207 127,-238 50,-196 -287,-638 752,-661 55,-234 203,-601 320,-775 382,0 262,105 490,-147 75,-82 92,-114 168,-197 115,-126 126,-92 208,-203 -53,-228 -113,-158 -308,-424 -189,-256 -25,-280 34,-534 -675,-452.0004 -327,-563 -1100,-324.9998 -220,67.9998 -735,339.9998 -860,-131.0006 -837,0 -393,143.0006 -867,183.0004 z"
                                                                    id="path27"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/zaire"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Adriano Mendes de Carvalho
                                                                Capital: Mbanza Congo
                                                                Nº de Municípios: 6
                                                                Extensão: 40130
                                                                Língua: Kikongo
                                                                Etnia: Bakongo">
                                                                <path class="province"
                                                                    d="m 899.72004,3776.5203 c 96.99997,416 799.99996,1767.0004 866.99996,2052.0004 -387,205 -409,116 -615,344 -67,74 -83,114 -205.99996,158 0,681 -87,688 852.99996,352 l 924,-262 c 859,-396 366,-119 366,-1230 226,5 290,137 562,-350 51,-92 64,-160 134,-231.0004 251,-253 1037,-60 1037,-377 0,-665 -108,-476 -137,-820 h -2827 c -100,189 -99,243 -366,273 -242,26 -392,75 -591.99996,91 z"
                                                                    id="path29"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/benguela"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Luís Manuel da Fonseca Nunes
                                                                Capital: Benguela
                                                                Nº de Municípios: 10
                                                                Extensão: 39.827 km²
                                                                Língua: Umbundu, Ohvanyaneka
                                                                Etnia: Ovimbundu, Ohvanyaneka">
                                                                <path class="province"
                                                                    d="m 1173.72,16225.521 c 962,225 375,-45 866,-45 207,0 310,522 661,518 454,-6 718,29 1163,29 74,-140 115,-270 183,-410 703,0 193,197 912,-183 -53,-227 -80,-103 -181,-595 -57,-282 -357,-409 -140,-818 89,-167 206,-189 366,-274 -28,-120 -56,-283 -118,-387 -97,-161 -113,-67 -260,-92 -261,-43 -267,-331 -488,-479 -203,149 -90,311 -456,320 -24,-90 -119,-271 -179,-323 -87,-75 -245,-105 -368,-133 0,270 -25,505 -160,706 -5,8 -14,19 -19,27 -458,676 -883,750 -1362,1329 -143,174 -398,543 -420,810 z"
                                                                    id="path31"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/huambo"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Lotti Nolika
                                                                Capital: Huambo
                                                                Nº de Municípios: 11
                                                                Extensão: 2609
                                                                Língua: Umbundu
                                                                Etnia: Ovimbundu">
                                                                <path class="province"
                                                                    d="m 5140.72,14493.521 c 0,156 -660,222 -326,736 265,406 -84,80 280,768 929,0 686,59 593,456 333,176 372,110 547,-228 86,-167 120,-216 274,-319 102,54 137,76 228,137 194,-290 318,-137 684,-137 v -912 c -136,-32 -113,-17 -235,-31 l -221,-60 c 0,-386 14,-364 274,-502 -100,-149 -181,-142 -228,-319 142,-212 389,-307 456,-593 -134,-154 -201,-157 -354,-284 -93,-78 -94,-91 -139,-180 -38,-74 -57,-220 -146,-220 -273,0 -195,157 -501,183 -98,-146 -75,-32 -92,-228 -145,3 -549,83 -597,168 -50,90 29,126 24,238 -4,122 -83,198 -142,292 -5,8 -12,20 -17,28 l -282,403 c -227,325 -80,216 -80,604 z"
                                                                    id="path33"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/luanda"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Manuel Gomes da Conceição Homem
                                                                Capital: Luanda
                                                                Nº de Municípios: 9
                                                                Extensão: 18.826 km²
                                                                Língua: Kimbundu
                                                                Etnia: Ambundu">
                                                                <path class="province"
                                                                    d="m 1674.72,7972.5207 c 20,235 110,359 365,364 0,511 100,1037 237,1541.9999 161,596.0004 180,500.0004 565,803.0004 185,145 182,312 637,143 459,-169 419,-186 796,66 0,-239 -43,-234 -94,-411 -156,-537.9996 311,-553.9996 -636,-775 0,-883.0003 137,-273.0003 137,-957.0003 0,-364 -461,-207 -746,-440 -528,-430 -290,-518 -713,-518 -234,0 -279,160 -548,183 z"
                                                                    id="path35"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/cuanza-norte"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Pedro Maquita Armando Júlia
                                                                Capital: Ndalatando
                                                                Nº de Municípios: 10
                                                                Extensão: 24.110 km²
                                                                Língua: Kimbundu
                                                                Etnia: Ambundu">
                                                                <path class="province"
                                                                    d="m 5459.72,7242.5207 c -73,84 -127,151 -248,208 -407,190 -539,145 -809,116 -201,-21 -265,37 -448,41 0,342 130,310 137,638 -148,4 -311,44 -410,91 21,254 182,183 182,502 0,322 -168,426 -228,684 162,78 220,54 391,111 206,70.0003 186,207.9999 339,207.9999 227,0 -42,-181.9999 866,-181.9999 243,-458 172,-562 274,-775 524,-123 432,118 501,-136 9,-34 36,-292 31,-310 -100,-366 -383,360 106,-1158 138,-426 -162,-220 -456,-220 -22,-203 -87,-183 -319,-183 14,165 57,218 91,365 z"
                                                                    id="path37"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/bengo"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Maria Antónia Nelumba
                                                                Capital: Caxito
                                                                Nº de Municípios: 6
                                                                Extensão: 31.371 km²
                                                                Língua: Kimbundu, Kikongo
                                                                Etnia: Ambundu, Bakongo">
                                                                <path class="province"
                                                                    d="m 1082.72,7060.5207 c 246,465 20,498 501,820 1045,-552 1016,-6 1419,315 432,344 453,-53 861,-87 -18,-213 -91,-225 -91,-456 0,-362 684,-128 684,-410 0,-740 -34,-456 -502,-456 -425,0 -219,-502 -592,-502 -136,0 -513,189 -733,266 l -53,18 c -370,111 -1183,327 -1494,492 z"
                                                                    id="path39"></path>
                                                            </a>

                                                            <a href="https://governo.gov.ao/provincia/cabinda"
                                                                title="" data-toggle="tooltip" data-html="true"
                                                                data-placement="auto"
                                                                data-original-title="
                                                                Governador: Mara Regina da Silva Baptista Domingos Quiosa
                                                                Capital: Cabinda
                                                                Nº de Municípios: 4
                                                                Extensão: 7.283 km²
                                                                Língua: Fiote, Kikongo
                                                                Etnia: Bakongo">
                                                                <path class="province"
                                                                    d="m 443.72004,2408.5203 c 0,193 -91,218 -91,456 0,200 774.99996,523 774.99996,-45 0,-366 -286.99996,-769 430,-1258 216,-147 583,-228 158,-698.00003 -99,-109 0,-35.00001 -138,-135 -90,-64.99997 -103,-69.99997 -222,-97.99997 -104,70 -124,115.99997 -229,180.99996 L 500.72004,1234.5203 c -206,155 -509.9999999,207 -353.00002,601 43.00001,108 296.00002,512 296.00002,573 z"
                                                                    id="path41"></path>
                                                            </a>

                                                            <g aria-label="Namibe" id="text1004"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path class="province_nome"
                                                                    d="m 637.03381,20415.965 q -35.46357,-62.988 -76.74951,-124.387 -41.28595,-61.4 -87.86497,-115.919 v 240.306 h -81.51328 v -366.81 h 67.22199 q 17.46713,17.467 38.63941,42.874 21.17229,25.407 42.87387,54.519 22.2309,28.582 43.93248,59.811 21.70159,30.7 40.75664,59.283 v -216.487 h 82.04259 v 366.81 z"
                                                                    id="path1258"></path>
                                                                <path
                                                                    d="m 892.15906,20360.917 q 11.64475,0 22.23089,-0.529 10.58614,-0.53 16.93783,-1.588 v -59.812 q -4.76377,-1.059 -14.29129,-2.117 -9.52753,-1.059 -17.46714,-1.059 -11.11544,0 -21.17228,1.588 -9.52752,1.059 -16.93782,4.764 -7.4103,3.705 -11.64475,10.057 -4.23446,6.351 -4.23446,15.879 0,18.526 12.17406,25.936 12.70337,6.881 34.40496,6.881 z m -6.35169,-230.778 q 34.93427,0 58.22377,7.94 23.28951,7.939 37.05149,22.76 14.29129,14.82 20.11367,35.993 5.8224,21.172 5.8224,47.108 v 164.085 q -16.93785,3.705 -47.10835,8.469 -30.1705,5.293 -73.04436,5.293 -26.99466,0 -49.22555,-4.764 -21.70159,-4.763 -37.5808,-15.349 -15.87921,-11.116 -24.34812,-28.583 -8.46892,-17.467 -8.46892,-42.874 0,-24.348 9.52753,-41.286 10.05683,-16.938 26.46535,-26.994 16.40852,-10.057 37.5808,-14.292 21.17228,-4.764 43.93248,-4.764 15.3499,0 26.99466,1.588 12.17406,1.059 19.58436,3.176 v -7.41 q 0,-20.114 -12.17407,-32.288 -12.17406,-12.174 -42.34456,-12.174 -20.11366,0 -39.69802,3.176 -19.58436,2.647 -33.87565,7.94 l -10.05683,-63.517 q 6.88099,-2.117 16.93782,-4.235 10.58614,-2.646 22.7602,-4.234 12.17406,-2.117 25.40674,-3.176 13.76198,-1.588 27.52396,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1260"></path>
                                                                <path
                                                                    d="m 1231.4446,20268.288 q 0,-38.11 -10.0568,-53.989 -9.5276,-15.879 -33.3464,-15.879 -7.4103,0 -15.3499,1.058 -7.9396,0.53 -15.3499,1.588 v 214.899 h -78.8667 v -268.888 q 10.0568,-2.647 23.2895,-5.293 13.762,-3.176 28.5825,-5.293 15.35,-2.647 31.2292,-3.705 15.8792,-1.588 31.2291,-1.588 30.1705,0 48.6962,7.939 19.0551,7.411 31.2291,17.997 16.9379,-12.174 38.6394,-19.055 22.2309,-6.881 40.7567,-6.881 33.3463,0 54.5186,9.527 21.7016,8.998 34.405,25.936 12.7033,16.938 17.4671,40.228 4.7638,23.289 4.7638,51.872 v 157.204 h -78.8668 v -147.677 q 0,-38.11 -10.0568,-53.989 -9.5275,-15.879 -33.3464,-15.879 -6.3516,0 -17.9964,3.176 -11.1154,3.175 -18.5257,7.939 3.7051,12.174 4.7637,25.936 1.0586,13.233 1.0586,28.583 v 151.911 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1262"></path>
                                                                <path
                                                                    d="m 1613.604,20415.965 h -78.8667 v -278.416 h 78.8667 z m 7.4103,-358.87 q 0,21.701 -14.2913,34.405 -13.762,12.174 -32.817,12.174 -19.0551,0 -33.3464,-12.174 -13.762,-12.704 -13.762,-34.405 0,-21.702 13.762,-33.876 14.2913,-12.703 33.3464,-12.703 19.055,0 32.817,12.703 14.2913,12.174 14.2913,33.876 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1264"></path>
                                                                <path
                                                                    d="m 1866.0832,20274.64 q 0,-76.22 -56.1065,-76.22 -12.1741,0 -24.3482,3.176 -11.6447,3.175 -19.055,7.939 v 143.442 q 5.8224,1.059 14.8206,2.118 8.9982,0.529 19.5843,0.529 32.2878,0 48.6963,-22.231 16.4085,-22.231 16.4085,-58.753 z m 80.4547,2.117 q 0,33.346 -10.0569,60.341 -9.5275,26.995 -28.0532,46.05 -18.5258,19.055 -45.5204,29.641 -26.9947,10.057 -61.3997,10.057 -14.2912,0 -30.1705,-1.588 -15.3499,-1.059 -30.6998,-3.176 -14.8206,-2.117 -28.5825,-4.764 -13.762,-3.176 -24.3482,-6.351 v -389.041 l 78.8668,-12.703 v 138.678 q 13.2327,-5.822 27.5239,-8.998 14.2913,-3.176 30.6998,-3.176 29.6412,0 52.4014,10.586 22.7602,10.057 38.1101,29.112 15.3499,19.055 23.2896,46.05 7.9396,26.465 7.9396,59.282 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1266"></path>
                                                                <path
                                                                    d="m 1994.1745,20278.874 q 0,-37.051 11.1154,-64.575 11.6448,-28.053 30.1705,-46.579 18.5258,-18.526 42.3446,-28.053 24.3481,-9.528 49.7549,-9.528 59.2823,0 93.6873,36.522 34.405,35.993 34.405,106.391 0,6.881 -0.5293,15.35 -0.5294,7.939 -1.0587,14.291 h -178.9057 q 2.6465,24.348 22.7602,38.64 20.1136,14.291 53.9893,14.291 21.7016,0 42.3445,-3.705 21.1723,-4.235 34.405,-10.057 l 10.5861,64.046 q -6.3516,3.176 -16.9378,6.352 -10.5861,3.176 -23.8188,5.293 -12.7034,2.646 -27.524,4.234 -14.8206,1.588 -29.6412,1.588 -37.5808,0 -65.634,-11.115 -27.524,-11.116 -46.0497,-30.171 -17.9965,-19.584 -26.9947,-46.05 -8.4689,-26.465 -8.4689,-57.165 z m 185.2575,-30.17 q -0.5294,-10.057 -3.7052,-19.585 -2.6465,-9.527 -8.9982,-16.937 -5.8224,-7.411 -15.3499,-12.174 -8.9982,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5275,4.234 -15.8792,11.644 -6.3517,7.411 -10.0569,17.467 -3.1758,9.528 -4.7637,19.585 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1268"></path>
                                                            </g>
                                                            <g aria-label="Cunene" id="text1036"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 5694.8614,21647.82 q -89.4529,0 -136.5612,-49.754 -46.579,-49.755 -46.579,-141.325 0,-45.521 14.2913,-80.984 14.2913,-35.993 39.1687,-60.341 24.8774,-24.878 59.2824,-37.581 34.405,-12.704 74.6323,-12.704 23.2895,0 42.3446,3.706 19.055,3.175 33.3463,7.939 14.2913,4.235 23.8188,8.998 9.5275,4.764 13.762,7.411 l -23.8188,66.692 q -16.9378,-8.998 -39.6981,-15.349 -22.2308,-6.352 -50.8134,-6.352 -19.0551,0 -37.5808,6.352 -17.9965,6.351 -32.2877,20.643 -13.762,13.761 -22.2309,35.992 -8.469,22.231 -8.469,53.99 0,25.406 5.2931,47.637 5.8224,21.702 17.9965,37.581 12.7033,15.879 32.817,25.407 20.1137,8.998 48.6962,8.998 17.9965,0 32.2878,-2.117 14.2912,-2.117 25.4067,-4.764 11.1154,-3.176 19.5844,-6.881 8.4689,-3.705 15.3499,-6.881 l 22.7602,66.163 q -17.4672,10.587 -49.2256,19.056 -31.7584,8.468 -73.5737,8.468 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1271"></path>
                                                                <path
                                                                    d="m 6096.0753,21630.883 q -20.1137,5.822 -51.8721,10.586 -31.7584,5.293 -66.6927,5.293 -35.4636,0 -59.2824,-9.528 -23.2895,-9.527 -37.0515,-26.465 -13.762,-17.467 -19.5843,-41.286 -5.8224,-23.819 -5.8224,-52.401 v -155.087 h 78.8667 v 145.559 q 0,38.11 10.0569,55.048 10.0568,16.938 37.5808,16.938 8.4689,0 17.9964,-0.529 9.5275,-1.059 16.9378,-2.118 v -214.898 h 78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1273"></path>
                                                                <path
                                                                    d="m 6170.1776,21371.522 q 20.1137,-5.822 51.8721,-10.586 31.7584,-5.293 66.6927,-5.293 35.4635,0 58.753,9.528 23.8189,8.998 37.5808,25.936 13.762,16.937 19.5844,40.227 5.8224,23.289 5.8224,51.872 v 157.204 h -78.8668 v -147.676 q 0,-38.111 -10.0568,-53.99 -10.0568,-15.879 -37.5808,-15.879 -8.4689,0 -17.9964,1.059 -9.5276,0.529 -16.9379,1.588 v 214.898 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1275"></path>
                                                                <path
                                                                    d="m 6468.7061,21503.32 q 0,-37.052 11.1155,-64.576 11.6447,-28.053 30.1705,-46.579 18.5257,-18.526 42.3446,-28.053 24.3481,-9.528 49.7548,-9.528 59.2824,0 93.6874,36.523 34.4049,35.992 34.4049,106.39 0,6.881 -0.5293,15.35 -0.5293,7.94 -1.0586,14.291 h -178.9058 q 2.6466,24.349 22.7602,38.64 20.1137,14.291 53.9893,14.291 21.7016,0 42.3446,-3.705 21.1723,-4.234 34.4049,-10.057 l 10.5862,64.046 q -6.3517,3.176 -16.9378,6.352 -10.5862,3.176 -23.8189,5.293 -12.7033,2.647 -27.5239,4.235 -14.8206,1.587 -29.6412,1.587 -37.5808,0 -65.6341,-11.115 -27.5239,-11.115 -46.0497,-30.17 -17.9964,-19.585 -26.9946,-46.05 -8.469,-26.466 -8.469,-57.165 z m 185.2575,-30.171 q -0.5293,-10.057 -3.7052,-19.584 -2.6465,-9.528 -8.9982,-16.938 -5.8223,-7.41 -15.3499,-12.174 -8.9982,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5275,4.234 -15.8792,11.645 -6.3517,7.41 -10.0568,17.467 -3.1759,9.527 -4.7638,19.584 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1277"></path>
                                                                <path
                                                                    d="m 6791.0539,21371.522 q 20.1137,-5.822 51.8721,-10.586 31.7584,-5.293 66.6927,-5.293 35.4636,0 58.7531,9.528 23.8188,8.998 37.5808,25.936 13.762,16.937 19.5843,40.227 5.8224,23.289 5.8224,51.872 v 157.204 h -78.8667 v -147.676 q 0,-38.111 -10.0569,-53.99 -10.0568,-15.879 -37.5808,-15.879 -8.4689,0 -17.9964,1.059 -9.5275,0.529 -16.9378,1.588 v 214.898 h -78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1279"></path>
                                                                <path
                                                                    d="m 7089.5825,21503.32 q 0,-37.052 11.1154,-64.576 11.6448,-28.053 30.1705,-46.579 18.5258,-18.526 42.3446,-28.053 24.3481,-9.528 49.7549,-9.528 59.2823,0 93.6873,36.523 34.4049,35.992 34.4049,106.39 0,6.881 -0.5293,15.35 -0.5293,7.94 -1.0586,14.291 h -178.9057 q 2.6465,24.349 22.7602,38.64 20.1136,14.291 53.9893,14.291 21.7016,0 42.3445,-3.705 21.1723,-4.234 34.405,-10.057 l 10.5861,64.046 q -6.3517,3.176 -16.9378,6.352 -10.5861,3.176 -23.8188,5.293 -12.7034,2.647 -27.524,4.235 -14.8206,1.587 -29.6412,1.587 -37.5808,0 -65.634,-11.115 -27.524,-11.115 -46.0497,-30.17 -17.9965,-19.585 -26.9947,-46.05 -8.4689,-26.466 -8.4689,-57.165 z m 185.2574,-30.171 q -0.5293,-10.057 -3.7051,-19.584 -2.6465,-9.528 -8.9982,-16.938 -5.8224,-7.41 -15.3499,-12.174 -8.9983,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5276,4.234 -15.8792,11.645 -6.3517,7.41 -10.0569,17.467 -3.1758,9.527 -4.7637,19.584 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1281"></path>
                                                            </g>
                                                            <g aria-label="Huíla" id="text1040"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 4046.5744,18346.878 h 82.5719 v 366.809 h -82.5719 v -155.616 h -138.6785 v 155.616 h -82.5718 v -366.809 h 82.5718 v 140.266 h 138.6785 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1284"></path>
                                                                <path
                                                                    d="m 4446.2008,18704.16 q -20.1137,5.822 -51.8721,10.586 -31.7584,5.293 -66.6927,5.293 -35.4636,0 -59.2824,-9.527 -23.2895,-9.528 -37.0515,-26.466 -13.7619,-17.467 -19.5843,-41.286 -5.8224,-23.818 -5.8224,-52.401 v -155.087 h 78.8667 v 145.559 q 0,38.111 10.0569,55.048 10.0568,16.938 37.5808,16.938 8.4689,0 17.9964,-0.529 9.5275,-1.059 16.9378,-2.117 v -214.899 h 78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1286"></path>
                                                                <path
                                                                    d="m 4599.1699,18713.687 h -78.8668 v -278.415 h 78.8668 z m 29.1119,-378.454 -87.3357,73.574 -35.9929,-32.288 75.1616,-85.748 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1288"></path>
                                                                <path
                                                                    d="m 4784.4271,18718.981 q -34.405,-0.53 -56.1066,-7.411 -21.1722,-6.881 -33.8756,-19.055 -12.1741,-12.703 -16.9378,-30.17 -4.2345,-17.997 -4.2345,-40.228 v -306.468 l 78.8668,-12.704 v 303.293 q 0,10.586 1.5879,19.055 1.5879,8.469 5.8224,14.292 4.7637,5.822 13.2326,9.527 8.469,3.705 22.7602,4.764 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1290"></path>
                                                                <path
                                                                    d="m 4954.8636,18658.64 q 11.6447,0 22.2309,-0.53 10.5861,-0.529 16.9378,-1.588 v -59.811 q -4.7638,-1.059 -14.2913,-2.118 -9.5275,-1.058 -17.4671,-1.058 -11.1155,0 -21.1723,1.588 -9.5275,1.058 -16.9378,4.763 -7.4103,3.706 -11.6448,10.057 -4.2344,6.352 -4.2344,15.88 0,18.525 12.174,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.778 q 34.9343,0 58.2238,7.939 23.2895,7.94 37.0515,22.761 14.2913,14.82 20.1136,35.992 5.8224,21.173 5.8224,47.109 v 164.085 q -16.9378,3.705 -47.1083,8.469 -30.1705,5.293 -73.0444,5.293 -26.9946,0 -49.2255,-4.764 -21.7016,-4.764 -37.5808,-15.35 -15.8792,-11.115 -24.3482,-28.582 -8.4689,-17.467 -8.4689,-42.874 0,-24.348 9.5276,-41.286 10.0568,-16.938 26.4653,-26.995 16.4085,-10.057 37.5808,-14.291 21.1723,-4.764 43.9325,-4.764 15.3499,0 26.9946,1.588 12.1741,1.059 19.5844,3.176 v -7.41 q 0,-20.114 -12.1741,-32.288 -12.174,-12.174 -42.3445,-12.174 -20.1137,0 -39.698,3.176 -19.5844,2.646 -33.8757,7.939 l -10.0568,-63.517 q 6.881,-2.117 16.9378,-4.234 10.5861,-2.647 22.7602,-4.235 12.1741,-2.117 25.4067,-3.175 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1292"></path>
                                                            </g>
                                                            <g aria-label="Benguela" id="text1044"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 2095.9946,15702.138 q -30.1705,0 -60.341,-2.117 -29.6412,-1.588 -61.9289,-8.469 v -355.695 q 25.4067,-4.763 55.5772,-6.881 30.1705,-2.646 56.1066,-2.646 34.9342,0 64.0461,5.293 29.6412,4.764 50.8135,16.938 21.1723,12.174 32.817,32.287 12.1741,19.585 12.1741,48.697 0,43.932 -42.3446,69.339 34.9343,13.233 47.6377,35.993 12.7033,22.76 12.7033,51.343 0,57.694 -42.3445,86.806 -41.8153,29.112 -124.9165,29.112 z m -41.8152,-164.615 v 94.746 q 8.9982,1.059 19.5843,1.588 10.5862,0.529 23.2895,0.529 37.0515,0 59.8117,-10.586 22.7602,-10.586 22.7602,-39.168 0,-25.407 -19.055,-35.993 -19.0551,-11.116 -54.5187,-11.116 z m 0,-62.987 h 40.2273 q 38.1101,0 54.5186,-9.528 16.4085,-10.057 16.4085,-31.758 0,-22.231 -16.9378,-31.229 -16.9378,-8.999 -49.7549,-8.999 -10.5861,0 -22.7602,0.53 -12.174,0 -21.7015,1.058 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1295"></path>
                                                                <path
                                                                    d="m 2310.8927,15560.284 q 0,-37.052 11.1154,-64.576 11.6448,-28.053 30.1705,-46.579 18.5258,-18.526 42.3446,-28.053 24.3481,-9.528 49.7549,-9.528 59.2823,0 93.6873,36.522 34.405,35.993 34.405,106.391 0,6.881 -0.5293,15.35 -0.5294,7.94 -1.0587,14.291 h -178.9057 q 2.6465,24.348 22.7602,38.64 20.1136,14.291 53.9893,14.291 21.7016,0 42.3445,-3.705 21.1723,-4.235 34.405,-10.057 l 10.5861,64.046 q -6.3516,3.176 -16.9378,6.352 -10.5861,3.176 -23.8188,5.293 -12.7034,2.646 -27.524,4.234 -14.8206,1.588 -29.6412,1.588 -37.5808,0 -65.634,-11.115 -27.524,-11.116 -46.0497,-30.171 -17.9965,-19.584 -26.9947,-46.049 -8.4689,-26.466 -8.4689,-57.165 z m 185.2575,-30.171 q -0.5294,-10.057 -3.7052,-19.584 -2.6465,-9.528 -8.9982,-16.938 -5.8224,-7.41 -15.3499,-12.174 -8.9982,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5275,4.234 -15.8792,11.645 -6.3517,7.41 -10.0569,17.467 -3.1758,9.527 -4.7637,19.584 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1297"></path>
                                                                <path
                                                                    d="m 2633.2405,15428.486 q 20.1136,-5.822 51.872,-10.586 31.7585,-5.293 66.6927,-5.293 35.4636,0 58.7531,9.527 23.8188,8.999 37.5808,25.936 13.762,16.938 19.5844,40.228 5.8223,23.289 5.8223,51.872 v 157.204 h -78.8667 v -147.677 q 0,-38.11 -10.0568,-53.989 -10.0569,-15.879 -37.5808,-15.879 -8.469,0 -17.9965,1.058 -9.5275,0.53 -16.9378,1.588 v 214.899 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1299"></path>
                                                                <path
                                                                    d="m 3012.2237,15549.168 q 0,66.163 53.46,66.163 12.174,0 22.7602,-3.175 10.5861,-3.176 17.9964,-7.411 v -125.975 q -5.8224,-1.058 -13.762,-1.588 -7.9396,-1.058 -18.5257,-1.058 -31.2291,0 -46.579,20.643 -15.3499,20.643 -15.3499,52.401 z m 173.0834,113.272 q 0,68.28 -34.9343,101.097 -34.405,33.347 -106.92,33.347 -25.4067,0 -50.8135,-4.764 -25.4067,-4.234 -47.1083,-11.645 l 13.762,-66.163 q 18.5257,7.41 38.6394,11.645 20.643,4.234 46.579,4.234 33.8757,0 47.6376,-14.821 14.2913,-14.82 14.2913,-38.11 v -10.056 q -12.7033,5.822 -26.4653,8.998 -13.2327,2.646 -29.1119,2.646 -57.6945,0 -88.3943,-33.875 -30.6998,-34.405 -30.6998,-95.805 0,-30.7 9.5275,-55.577 9.5276,-25.407 27.524,-43.403 18.5257,-17.997 44.9911,-27.524 26.4653,-10.057 59.8117,-10.057 14.2913,0 29.1119,1.588 15.3499,1.058 30.1705,3.176 14.8206,2.117 28.0532,5.293 13.762,2.646 24.3482,5.822 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1301"></path>
                                                                <path
                                                                    d="m 3497.0689,15687.846 q -20.1137,5.823 -51.8721,10.587 -31.7585,5.293 -66.6927,5.293 -35.4636,0 -59.2824,-9.528 -23.2895,-9.527 -37.0515,-26.465 -13.762,-17.467 -19.5843,-41.286 -5.8224,-23.819 -5.8224,-52.402 v -155.086 h 78.8667 v 145.559 q 0,38.11 10.0569,55.048 10.0568,16.938 37.5808,16.938 8.4689,0 17.9964,-0.53 9.5275,-1.058 16.9378,-2.117 v -214.898 h 78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1303"></path>
                                                                <path
                                                                    d="m 3557.9384,15560.284 q 0,-37.052 11.1155,-64.576 11.6447,-28.053 30.1705,-46.579 18.5257,-18.526 42.3446,-28.053 24.3481,-9.528 49.7548,-9.528 59.2824,0 93.6874,36.522 34.4049,35.993 34.4049,106.391 0,6.881 -0.5293,15.35 -0.5293,7.94 -1.0586,14.291 h -178.9058 q 2.6466,24.348 22.7602,38.64 20.1137,14.291 53.9893,14.291 21.7016,0 42.3446,-3.705 21.1723,-4.235 34.4049,-10.057 l 10.5862,64.046 q -6.3517,3.176 -16.9378,6.352 -10.5862,3.176 -23.8189,5.293 -12.7033,2.646 -27.5239,4.234 -14.8206,1.588 -29.6412,1.588 -37.5808,0 -65.6341,-11.115 -27.5239,-11.116 -46.0497,-30.171 -17.9964,-19.584 -26.9946,-46.049 -8.469,-26.466 -8.469,-57.165 z m 185.2575,-30.171 q -0.5293,-10.057 -3.7052,-19.584 -2.6465,-9.528 -8.9982,-16.938 -5.8223,-7.41 -15.3499,-12.174 -8.9982,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5275,4.234 -15.8792,11.645 -6.3517,7.41 -10.0568,17.467 -3.1759,9.527 -4.7638,19.584 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1305"></path>
                                                                <path
                                                                    d="m 3991.4408,15702.667 q -34.4049,-0.529 -56.1065,-7.41 -21.1723,-6.881 -33.8757,-19.055 -12.174,-12.704 -16.9378,-30.171 -4.2344,-17.996 -4.2344,-40.227 v -306.469 l 78.8667,-12.703 v 303.293 q 0,10.586 1.5879,19.055 1.5879,8.469 5.8224,14.291 4.7638,5.822 13.2327,9.528 8.4689,3.705 22.7602,4.763 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1307"></path>
                                                                <path
                                                                    d="m 4161.8773,15642.326 q 11.6447,0 22.2309,-0.529 10.5861,-0.53 16.9378,-1.588 v -59.812 q -4.7638,-1.058 -14.2913,-2.117 -9.5275,-1.059 -17.4671,-1.059 -11.1155,0 -21.1723,1.588 -9.5276,1.059 -16.9378,4.764 -7.4103,3.705 -11.6448,10.057 -4.2345,6.352 -4.2345,15.879 0,18.526 12.1741,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.778 q 34.9342,0 58.2237,7.94 23.2896,7.939 37.0515,22.76 14.2913,14.821 20.1137,35.993 5.8224,21.172 5.8224,47.108 v 164.085 q -16.9378,3.706 -47.1083,8.469 -30.1705,5.293 -73.0444,5.293 -26.9947,0 -49.2256,-4.763 -21.7016,-4.764 -37.5808,-15.35 -15.8792,-11.116 -24.3481,-28.583 -8.4689,-17.467 -8.4689,-42.874 0,-24.348 9.5275,-41.286 10.0569,-16.937 26.4654,-26.994 16.4085,-10.057 37.5808,-14.292 21.1723,-4.763 43.9325,-4.763 15.3499,0 26.9946,1.588 12.1741,1.058 19.5844,3.175 v -7.41 q 0,-20.114 -12.1741,-32.288 -12.174,-12.174 -42.3445,-12.174 -20.1137,0 -39.6981,3.176 -19.5843,2.647 -33.8756,7.94 l -10.0569,-63.517 q 6.881,-2.117 16.9379,-4.235 10.5861,-2.646 22.7602,-4.234 12.174,-2.117 25.4067,-3.176 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1309"></path>
                                                            </g>
                                                            <g aria-label="Huambo" id="text1048"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 5406.5866,15091.648 h 82.5719 v 366.81 h -82.5719 v -155.616 h -138.6784 v 155.616 h -82.5719 v -366.81 h 82.5719 v 140.267 h 138.6784 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1312"></path>
                                                                <path
                                                                    d="m 5806.213,15448.93 q -20.1137,5.823 -51.8721,10.587 -31.7584,5.293 -66.6927,5.293 -35.4635,0 -59.2824,-9.528 -23.2895,-9.527 -37.0515,-26.465 -13.7619,-17.467 -19.5843,-41.286 -5.8224,-23.819 -5.8224,-52.402 v -155.086 h 78.8668 v 145.559 q 0,38.11 10.0568,55.048 10.0568,16.938 37.5808,16.938 8.4689,0 17.9964,-0.53 9.5275,-1.058 16.9378,-2.117 v -214.898 h 78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1314"></path>
                                                                <path
                                                                    d="m 5986.7061,15403.41 q 11.6447,0 22.2308,-0.529 10.5862,-0.53 16.9379,-1.588 v -59.812 q -4.7638,-1.058 -14.2913,-2.117 -9.5275,-1.059 -17.4671,-1.059 -11.1155,0 -21.1723,1.588 -9.5276,1.059 -16.9379,4.764 -7.4103,3.705 -11.6447,10.057 -4.2345,6.352 -4.2345,15.879 0,18.526 12.1741,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.778 q 34.9342,0 58.2237,7.94 23.2895,7.939 37.0515,22.76 14.2913,14.821 20.1137,35.993 5.8224,21.172 5.8224,47.108 v 164.085 q -16.9378,3.706 -47.1083,8.469 -30.1705,5.293 -73.0444,5.293 -26.9947,0 -49.2256,-4.763 -21.7016,-4.764 -37.5808,-15.35 -15.8792,-11.116 -24.3481,-28.583 -8.4689,-17.467 -8.4689,-42.874 0,-24.348 9.5275,-41.286 10.0569,-16.937 26.4654,-26.994 16.4085,-10.057 37.5808,-14.292 21.1723,-4.763 43.9325,-4.763 15.3499,0 26.9946,1.588 12.1741,1.058 19.5844,3.175 v -7.41 q 0,-20.114 -12.1741,-32.288 -12.174,-12.174 -42.3445,-12.174 -20.1137,0 -39.6981,3.176 -19.5843,2.647 -33.8756,7.94 l -10.0569,-63.517 q 6.881,-2.117 16.9379,-4.235 10.5861,-2.646 22.7602,-4.234 12.174,-2.117 25.4067,-3.176 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1316"></path>
                                                                <path
                                                                    d="m 6325.9916,15310.781 q 0,-38.11 -10.0569,-53.989 -9.5275,-15.879 -33.3463,-15.879 -7.4103,0 -15.3499,1.058 -7.9396,0.53 -15.3499,1.588 v 214.899 h -78.8668 v -268.888 q 10.0569,-2.646 23.2895,-5.293 13.762,-3.176 28.5826,-5.293 15.3499,-2.647 31.2291,-3.705 15.8792,-1.588 31.2291,-1.588 30.1705,0 48.6963,7.939 19.055,7.411 31.2291,17.997 16.9378,-12.174 38.6394,-19.055 22.2309,-6.881 40.7566,-6.881 33.3464,0 54.5187,9.527 21.7016,8.999 34.4049,25.936 12.7034,16.938 17.4672,40.228 4.7637,23.289 4.7637,51.872 v 157.204 h -78.8667 v -147.677 q 0,-38.11 -10.0569,-53.989 -9.5275,-15.879 -33.3463,-15.879 -6.3517,0 -17.9964,3.176 -11.1155,3.176 -18.5258,7.939 3.7052,12.174 4.7638,25.936 1.0586,13.233 1.0586,28.583 v 151.911 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1318"></path>
                                                                <path
                                                                    d="m 6807.6607,15317.133 q 0,-76.22 -56.1065,-76.22 -12.1741,0 -24.3481,3.176 -11.6448,3.176 -19.0551,7.939 v 143.442 q 5.8224,1.059 14.8206,2.118 8.9982,0.529 19.5844,0.529 32.2877,0 48.6962,-22.231 16.4085,-22.231 16.4085,-58.753 z m 80.4547,2.117 q 0,33.347 -10.0568,60.341 -9.5276,26.995 -28.0533,46.05 -18.5257,19.055 -45.5204,29.641 -26.9947,10.057 -61.3996,10.057 -14.2913,0 -30.1705,-1.588 -15.3499,-1.059 -30.6998,-3.176 -14.8206,-2.117 -28.5826,-4.764 -13.762,-3.175 -24.3481,-6.351 v -389.041 l 78.8667,-12.703 v 138.678 q 13.2327,-5.822 27.524,-8.998 14.2913,-3.176 30.6998,-3.176 29.6412,0 52.4014,10.586 22.7602,10.057 38.1101,29.112 15.3499,19.055 23.2895,46.05 7.9396,26.465 7.9396,59.282 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1320"></path>
                                                                <path
                                                                    d="m 7209.4038,15318.721 q 0,32.817 -9.5276,60.341 -9.5275,26.995 -27.5239,46.579 -17.9965,19.055 -43.4032,29.641 -24.8774,10.586 -56.1065,10.586 -30.6998,0 -56.1066,-10.586 -24.8774,-10.586 -42.8739,-29.641 -17.9964,-19.584 -28.0532,-46.579 -10.0569,-27.524 -10.0569,-60.341 0,-32.817 10.0569,-59.812 10.5861,-26.994 28.5826,-46.049 18.5257,-19.055 43.4031,-29.642 25.4068,-10.586 55.048,-10.586 30.1705,0 55.0479,10.586 25.4067,10.587 43.4032,29.642 17.9964,19.055 28.0532,46.049 10.0569,26.995 10.0569,59.812 z m -80.4547,0 q 0,-36.522 -14.8206,-57.165 -14.2913,-21.172 -41.2859,-21.172 -26.9947,0 -41.8153,21.172 -14.8206,20.643 -14.8206,57.165 0,36.522 14.8206,58.224 14.8206,21.172 41.8153,21.172 26.9946,0 41.2859,-21.172 14.8206,-21.702 14.8206,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1322"></path>
                                                            </g>
                                                            <g aria-label="Cuando Cubango" id="text1052"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 10310.106,20960.936 q -89.453,0 -136.562,-49.755 -46.579,-49.755 -46.579,-141.325 0,-45.521 14.292,-80.984 14.291,-35.993 39.168,-60.341 24.878,-24.878 59.283,-37.581 34.405,-12.703 74.632,-12.703 23.29,0 42.345,3.705 19.055,3.176 33.346,7.939 14.291,4.235 23.819,8.999 9.527,4.763 13.762,7.41 l -23.819,66.693 q -16.938,-8.999 -39.698,-15.35 -22.231,-6.352 -50.814,-6.352 -19.055,0 -37.58,6.352 -17.997,6.351 -32.288,20.643 -13.762,13.762 -22.231,35.993 -8.469,22.231 -8.469,53.989 0,25.407 5.293,47.638 5.823,21.701 17.997,37.58 12.703,15.88 32.817,25.407 20.113,8.998 48.696,8.998 17.996,0 32.288,-2.117 14.291,-2.117 25.406,-4.764 11.116,-3.176 19.585,-6.881 8.469,-3.705 15.35,-6.881 l 22.76,66.164 q -17.467,10.586 -49.226,19.055 -31.758,8.469 -73.573,8.469 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1325"></path>
                                                                <path
                                                                    d="m 10711.319,20943.998 q -20.113,5.822 -51.872,10.586 -31.758,5.293 -66.692,5.293 -35.464,0 -59.283,-9.527 -23.289,-9.528 -37.051,-26.466 -13.762,-17.467 -19.585,-41.286 -5.822,-23.819 -5.822,-52.401 v -155.087 h 78.867 v 145.559 q 0,38.11 10.057,55.048 10.056,16.938 37.58,16.938 8.469,0 17.997,-0.529 9.527,-1.059 16.938,-2.117 v -214.899 h 78.866 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1327"></path>
                                                                <path
                                                                    d="m 10891.812,20898.477 q 11.645,0 22.231,-0.529 10.586,-0.529 16.938,-1.588 v -59.811 q -4.764,-1.059 -14.291,-2.118 -9.528,-1.058 -17.467,-1.058 -11.116,0 -21.173,1.588 -9.527,1.058 -16.937,4.763 -7.411,3.706 -11.645,10.057 -4.235,6.352 -4.235,15.879 0,18.526 12.174,25.936 12.704,6.881 34.405,6.881 z m -6.351,-230.777 q 34.934,0 58.224,7.939 23.289,7.94 37.051,22.76 14.291,14.821 20.114,35.993 5.822,21.173 5.822,47.109 v 164.085 q -16.938,3.705 -47.108,8.469 -30.171,5.293 -73.045,5.293 -26.994,0 -49.225,-4.764 -21.702,-4.764 -37.581,-15.35 -15.879,-11.115 -24.348,-28.582 -8.469,-17.468 -8.469,-42.874 0,-24.348 9.528,-41.286 10.056,-16.938 26.465,-26.995 16.408,-10.057 37.581,-14.291 21.172,-4.764 43.932,-4.764 15.35,0 26.995,1.588 12.174,1.059 19.584,3.176 v -7.411 q 0,-20.113 -12.174,-32.287 -12.174,-12.174 -42.344,-12.174 -20.114,0 -39.698,3.176 -19.585,2.646 -33.876,7.939 l -10.057,-63.517 q 6.881,-2.117 16.938,-4.234 10.586,-2.647 22.76,-4.235 12.174,-2.117 25.407,-3.175 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1329"></path>
                                                                <path
                                                                    d="m 11078.128,20684.637 q 20.114,-5.822 51.872,-10.586 31.759,-5.293 66.693,-5.293 35.464,0 58.753,9.528 23.819,8.998 37.581,25.936 13.762,16.938 19.584,40.227 5.823,23.29 5.823,51.872 v 157.204 h -78.867 v -147.676 q 0,-38.11 -10.057,-53.99 -10.057,-15.879 -37.581,-15.879 -8.469,0 -17.996,1.059 -9.528,0.529 -16.938,1.588 v 214.898 h -78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1331"></path>
                                                                <path
                                                                    d="m 11457.111,20812.2 q 0,36.523 16.409,58.753 16.409,22.231 48.696,22.231 10.586,0 19.585,-0.529 8.998,-1.059 14.82,-2.117 v -143.442 q -7.41,-4.764 -19.584,-7.94 -11.645,-3.176 -23.819,-3.176 -56.107,0 -56.107,76.22 z m 178.377,132.327 q -10.586,3.176 -24.348,6.352 -13.762,2.646 -29.112,4.764 -14.821,2.117 -30.7,3.175 -15.35,1.588 -29.641,1.588 -34.405,0 -61.4,-10.056 -26.994,-10.057 -45.52,-28.583 -18.526,-19.055 -28.583,-45.52 -9.527,-26.995 -9.527,-60.341 0,-33.876 8.469,-60.871 8.469,-27.524 24.348,-46.579 15.879,-19.055 38.639,-29.112 23.29,-10.056 52.931,-10.056 16.408,0 29.112,3.175 13.233,3.176 26.465,8.999 v -125.975 l 78.867,-12.704 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1333"></path>
                                                                <path
                                                                    d="m 11970.009,20813.788 q 0,32.817 -9.528,60.341 -9.527,26.995 -27.524,46.579 -17.996,19.055 -43.403,29.642 -24.877,10.586 -56.106,10.586 -30.7,0 -56.107,-10.586 -24.877,-10.587 -42.874,-29.642 -17.996,-19.584 -28.053,-46.579 -10.057,-27.524 -10.057,-60.341 0,-32.817 10.057,-59.811 10.586,-26.995 28.583,-46.05 18.525,-19.055 43.403,-29.641 25.407,-10.586 55.048,-10.586 30.17,0 55.048,10.586 25.406,10.586 43.403,29.641 17.996,19.055 28.053,46.05 10.057,26.994 10.057,59.811 z m -80.455,0 q 0,-36.522 -14.82,-57.165 -14.292,-21.172 -41.286,-21.172 -26.995,0 -41.815,21.172 -14.821,20.643 -14.821,57.165 0,36.523 14.821,58.224 14.82,21.172 41.815,21.172 26.994,0 41.286,-21.172 14.82,-21.701 14.82,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1335"></path>
                                                                <path
                                                                    d="m 12330.466,20960.936 q -89.453,0 -136.561,-49.755 -46.579,-49.755 -46.579,-141.325 0,-45.521 14.291,-80.984 14.292,-35.993 39.169,-60.341 24.877,-24.878 59.282,-37.581 34.405,-12.703 74.633,-12.703 23.289,0 42.344,3.705 19.055,3.176 33.347,7.939 14.291,4.235 23.818,8.999 9.528,4.763 13.762,7.41 l -23.818,66.693 q -16.938,-8.999 -39.699,-15.35 -22.23,-6.352 -50.813,-6.352 -19.055,0 -37.581,6.352 -17.996,6.351 -32.288,20.643 -13.761,13.762 -22.23,35.993 -8.469,22.231 -8.469,53.989 0,25.407 5.293,47.638 5.822,21.701 17.996,37.58 12.704,15.88 32.817,25.407 20.114,8.998 48.696,8.998 17.997,0 32.288,-2.117 14.291,-2.117 25.407,-4.764 11.115,-3.176 19.584,-6.881 8.469,-3.705 15.35,-6.881 l 22.76,66.164 q -17.467,10.586 -49.225,19.055 -31.759,8.469 -73.574,8.469 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1337"></path>
                                                                <path
                                                                    d="m 12731.68,20943.998 q -20.114,5.822 -51.872,10.586 -31.758,5.293 -66.693,5.293 -35.463,0 -59.282,-9.527 -23.29,-9.528 -37.052,-26.466 -13.762,-17.467 -19.584,-41.286 -5.822,-23.819 -5.822,-52.401 v -155.087 h 78.866 v 145.559 q 0,38.11 10.057,55.048 10.057,16.938 37.581,16.938 8.469,0 17.996,-0.529 9.528,-1.059 16.938,-2.117 v -214.899 h 78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1339"></path>
                                                                <path
                                                                    d="m 12984.159,20812.2 q 0,-76.22 -56.107,-76.22 -12.174,0 -24.348,3.176 -11.645,3.176 -19.055,7.94 v 143.442 q 5.822,1.058 14.821,2.117 8.998,0.529 19.584,0.529 32.288,0 48.696,-22.231 16.409,-22.23 16.409,-58.753 z m 80.454,2.118 q 0,33.346 -10.057,60.341 -9.527,26.994 -28.053,46.049 -18.526,19.055 -45.52,29.642 -26.995,10.056 -61.4,10.056 -14.291,0 -30.17,-1.588 -15.35,-1.058 -30.7,-3.175 -14.821,-2.118 -28.583,-4.764 -13.762,-3.176 -24.348,-6.352 v -389.04 l 78.867,-12.704 v 138.679 q 13.233,-5.823 27.524,-8.999 14.291,-3.175 30.7,-3.175 29.641,0 52.401,10.586 22.76,10.057 38.11,29.112 15.35,19.055 23.29,46.049 7.939,26.466 7.939,59.283 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1341"></path>
                                                                <path
                                                                    d="m 13231.874,20898.477 q 11.644,0 22.23,-0.529 10.587,-0.529 16.938,-1.588 v -59.811 q -4.763,-1.059 -14.291,-2.118 -9.528,-1.058 -17.467,-1.058 -11.116,0 -21.172,1.588 -9.528,1.058 -16.938,4.763 -7.411,3.706 -11.645,10.057 -4.234,6.352 -4.234,15.879 0,18.526 12.174,25.936 12.703,6.881 34.405,6.881 z m -6.352,-230.777 q 34.934,0 58.224,7.939 23.289,7.94 37.051,22.76 14.291,14.821 20.114,35.993 5.822,21.173 5.822,47.109 v 164.085 q -16.938,3.705 -47.108,8.469 -30.171,5.293 -73.044,5.293 -26.995,0 -49.226,-4.764 -21.702,-4.764 -37.581,-15.35 -15.879,-11.115 -24.348,-28.582 -8.469,-17.468 -8.469,-42.874 0,-24.348 9.528,-41.286 10.057,-16.938 26.465,-26.995 16.409,-10.057 37.581,-14.291 21.172,-4.764 43.932,-4.764 15.35,0 26.995,1.588 12.174,1.059 19.584,3.176 v -7.411 q 0,-20.113 -12.174,-32.287 -12.174,-12.174 -42.344,-12.174 -20.114,0 -39.698,3.176 -19.585,2.646 -33.876,7.939 l -10.057,-63.517 q 6.881,-2.117 16.938,-4.234 10.586,-2.647 22.76,-4.235 12.174,-2.117 25.407,-3.175 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1343"></path>
                                                                <path
                                                                    d="m 13418.189,20684.637 q 20.114,-5.822 51.872,-10.586 31.759,-5.293 66.693,-5.293 35.464,0 58.753,9.528 23.819,8.998 37.581,25.936 13.762,16.938 19.584,40.227 5.823,23.29 5.823,51.872 v 157.204 h -78.867 v -147.676 q 0,-38.11 -10.057,-53.99 -10.057,-15.879 -37.581,-15.879 -8.469,0 -17.996,1.059 -9.528,0.529 -16.938,1.588 v 214.898 h -78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1345"></path>
                                                                <path
                                                                    d="m 13797.172,20805.319 q 0,66.164 53.46,66.164 12.174,0 22.761,-3.176 10.586,-3.176 17.996,-7.41 v -125.975 q -5.822,-1.059 -13.762,-1.588 -7.94,-1.059 -18.526,-1.059 -31.229,0 -46.579,20.643 -15.35,20.643 -15.35,52.401 z m 173.084,113.272 q 0,68.281 -34.934,101.098 -34.405,33.346 -106.92,33.346 -25.407,0 -50.814,-4.764 -25.407,-4.234 -47.108,-11.644 l 13.762,-66.164 q 18.525,7.411 38.639,11.645 20.643,4.234 46.579,4.234 33.876,0 47.638,-14.82 14.291,-14.821 14.291,-38.11 v -10.057 q -12.703,5.822 -26.465,8.998 -13.233,2.647 -29.112,2.647 -57.695,0 -88.394,-33.876 -30.7,-34.405 -30.7,-95.805 0,-30.699 9.527,-55.577 9.528,-25.407 27.524,-43.403 18.526,-17.996 44.991,-27.524 26.466,-10.057 59.812,-10.057 14.291,0 29.112,1.588 15.35,1.059 30.17,3.176 14.821,2.117 28.054,5.293 13.762,2.647 24.348,5.822 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1347"></path>
                                                                <path
                                                                    d="m 14304.778,20813.788 q 0,32.817 -9.528,60.341 -9.527,26.995 -27.524,46.579 -17.996,19.055 -43.403,29.642 -24.877,10.586 -56.106,10.586 -30.7,0 -56.107,-10.586 -24.877,-10.587 -42.874,-29.642 -17.996,-19.584 -28.053,-46.579 -10.057,-27.524 -10.057,-60.341 0,-32.817 10.057,-59.811 10.586,-26.995 28.583,-46.05 18.525,-19.055 43.403,-29.641 25.407,-10.586 55.048,-10.586 30.17,0 55.048,10.586 25.406,10.586 43.403,29.641 17.996,19.055 28.053,46.05 10.057,26.994 10.057,59.811 z m -80.455,0 q 0,-36.522 -14.82,-57.165 -14.292,-21.172 -41.286,-21.172 -26.995,0 -41.816,21.172 -14.82,20.643 -14.82,57.165 0,36.523 14.82,58.224 14.821,21.172 41.816,21.172 26.994,0 41.286,-21.172 14.82,-21.701 14.82,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1349"></path>
                                                            </g>
                                                            <g aria-label="Moxico" id="text1056"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 12599.533,15181.241 q 9.527,17.467 21.702,43.403 12.703,25.407 25.936,55.577 13.762,29.642 26.994,60.871 13.233,31.229 24.878,58.753 11.644,-27.524 24.877,-58.753 13.233,-31.229 26.465,-60.871 13.762,-30.17 25.936,-55.577 12.704,-25.936 22.231,-43.403 h 75.162 q 5.293,36.522 9.528,82.043 4.763,44.991 7.939,94.216 3.705,48.697 6.352,97.922 3.176,49.226 5.293,92.629 h -80.455 q -1.588,-53.46 -4.234,-116.448 -2.647,-62.987 -7.94,-127.033 -9.527,22.23 -21.172,49.225 -11.645,26.995 -23.29,53.989 -11.115,26.995 -21.701,51.873 -10.586,24.348 -17.997,41.815 h -57.694 q -7.41,-17.467 -17.997,-41.815 -10.586,-24.878 -22.23,-51.873 -11.116,-26.994 -22.761,-53.989 -11.644,-26.995 -21.172,-49.225 -5.293,64.046 -7.94,127.033 -2.646,62.988 -4.234,116.448 h -80.455 q 2.118,-43.403 4.764,-92.629 3.176,-49.225 6.352,-97.922 3.705,-49.225 7.939,-94.216 4.764,-45.521 10.057,-82.043 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1352"></path>
                                                                <path
                                                                    d="m 13232.054,15408.314 q 0,32.817 -9.527,60.341 -9.528,26.994 -27.524,46.579 -17.996,19.055 -43.403,29.641 -24.878,10.586 -56.107,10.586 -30.7,0 -56.106,-10.586 -24.878,-10.586 -42.874,-29.641 -17.997,-19.585 -28.053,-46.579 -10.057,-27.524 -10.057,-60.341 0,-32.817 10.057,-59.812 10.586,-26.995 28.582,-46.05 18.526,-19.055 43.403,-29.641 25.407,-10.586 55.048,-10.586 30.171,0 55.048,10.586 25.407,10.586 43.403,29.641 17.997,19.055 28.054,46.05 10.056,26.995 10.056,59.812 z m -80.454,0 q 0,-36.522 -14.821,-57.165 -14.291,-21.173 -41.286,-21.173 -26.994,0 -41.815,21.173 -14.821,20.643 -14.821,57.165 0,36.522 14.821,58.224 14.821,21.172 41.815,21.172 26.995,0 41.286,-21.172 14.821,-21.702 14.821,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1354"></path>
                                                                <path
                                                                    d="m 13394.021,15354.324 55.048,-84.689 h 81.513 l -95.275,133.915 q 31.758,39.698 57.694,77.279 25.936,37.581 41.286,67.222 h -84.689 q -4.234,-7.94 -10.586,-19.585 -6.352,-12.174 -14.291,-24.877 -7.94,-13.233 -16.938,-25.936 -8.469,-13.233 -16.938,-23.819 -7.94,10.057 -16.409,22.231 -7.939,12.174 -15.349,24.877 -7.411,12.175 -14.821,24.349 -6.881,12.174 -12.174,22.76 h -80.455 q 6.352,-13.233 17.467,-31.229 11.116,-17.997 23.819,-37.052 13.233,-19.584 27.524,-38.639 14.291,-19.585 28.053,-36.522 -23.818,-33.347 -47.637,-67.222 -23.819,-34.405 -47.109,-67.752 h 85.219 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1356"></path>
                                                                <path
                                                                    d="m 13655.498,15548.051 h -78.867 v -278.416 h 78.867 z m 7.41,-358.87 q 0,21.701 -14.291,34.405 -13.762,12.174 -32.817,12.174 -19.055,0 -33.346,-12.174 -13.762,-12.704 -13.762,-34.405 0,-21.702 13.762,-33.876 14.291,-12.703 33.346,-12.703 19.055,0 32.817,12.703 14.291,12.174 14.291,33.876 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1358"></path>
                                                                <path
                                                                    d="m 13716.368,15408.843 q 0,-30.17 9.528,-56.636 10.056,-26.994 28.582,-46.579 18.526,-20.113 44.991,-31.758 26.466,-11.645 60.341,-11.645 22.231,0 40.757,4.234 18.526,3.706 35.993,11.116 l -16.409,62.987 q -11.115,-4.234 -24.348,-7.41 -13.233,-3.176 -29.641,-3.176 -34.934,0 -52.402,21.702 -16.937,21.701 -16.937,57.165 0,37.581 15.879,58.224 16.408,20.643 56.636,20.643 14.291,0 30.7,-2.647 16.408,-2.646 30.17,-8.469 l 11.115,64.576 q -13.761,5.822 -34.404,10.057 -20.643,4.234 -45.521,4.234 -38.11,0 -65.634,-11.115 -27.524,-11.645 -45.52,-31.229 -17.467,-19.585 -25.936,-46.05 -7.94,-26.995 -7.94,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1360"></path>
                                                                <path
                                                                    d="m 14241.439,15408.314 q 0,32.817 -9.528,60.341 -9.527,26.994 -27.524,46.579 -17.996,19.055 -43.403,29.641 -24.877,10.586 -56.107,10.586 -30.699,0 -56.106,-10.586 -24.878,-10.586 -42.874,-29.641 -17.996,-19.585 -28.053,-46.579 -10.057,-27.524 -10.057,-60.341 0,-32.817 10.057,-59.812 10.586,-26.995 28.582,-46.05 18.526,-19.055 43.404,-29.641 25.406,-10.586 55.047,-10.586 30.171,0 55.048,10.586 25.407,10.586 43.404,29.641 17.996,19.055 28.053,46.05 10.057,26.995 10.057,59.812 z m -80.455,0 q 0,-36.522 -14.821,-57.165 -14.291,-21.173 -41.286,-21.173 -26.994,0 -41.815,21.173 -14.82,20.643 -14.82,57.165 0,36.522 14.82,58.224 14.821,21.172 41.815,21.172 26.995,0 41.286,-21.172 14.821,-21.702 14.821,-58.224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1362"></path>
                                                            </g>
                                                            <g aria-label="Bié" id="text1060"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 8503.1096,14806.202 q -30.1705,0 -60.341,-2.117 -29.6412,-1.588 -61.9289,-8.469 v -355.694 q 25.4067,-4.764 55.5772,-6.881 30.1705,-2.647 56.1066,-2.647 34.9342,0 64.0461,5.293 29.6412,4.764 50.8135,16.938 21.1723,12.174 32.817,32.288 12.1741,19.584 12.1741,48.696 0,43.933 -42.3446,69.339 34.9343,13.233 47.6376,35.993 12.7034,22.76 12.7034,51.343 0,57.694 -42.3446,86.806 -41.8152,29.112 -124.9164,29.112 z m -41.8153,-164.614 v 94.746 q 8.9983,1.058 19.5844,1.588 10.5861,0.529 23.2895,0.529 37.0515,0 59.8117,-10.586 22.7602,-10.586 22.7602,-39.169 0,-25.407 -19.055,-35.993 -19.0551,-11.115 -54.5187,-11.115 z m 0,-62.988 h 40.2274 q 38.1101,0 54.5186,-9.527 16.4085,-10.057 16.4085,-31.759 0,-22.231 -16.9378,-31.229 -16.9378,-8.998 -49.7549,-8.998 -10.5861,0 -22.7602,0.529 -12.174,0 -21.7016,1.059 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1365"></path>
                                                                <path
                                                                    d="m 8810.1071,14801.438 h -78.8667 v -278.415 h 78.8667 z m 7.4103,-358.87 q 0,21.702 -14.2913,34.405 -13.762,12.174 -32.817,12.174 -19.0551,0 -33.3464,-12.174 -13.7619,-12.703 -13.7619,-34.405 0,-21.701 13.7619,-33.875 14.2913,-12.704 33.3464,-12.704 19.055,0 32.817,12.704 14.2913,12.174 14.2913,33.875 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1367"></path>
                                                                <path
                                                                    d="m 8870.9772,14664.348 q 0,-37.052 11.1154,-64.575 11.6448,-28.054 30.1705,-46.58 18.5258,-18.525 42.3446,-28.053 24.3481,-9.527 49.7549,-9.527 59.2824,0 93.6873,36.522 34.405,35.993 34.405,106.391 0,6.881 -0.5293,15.349 -0.5294,7.94 -1.0587,14.292 h -178.9057 q 2.6465,24.348 22.7602,38.639 20.1136,14.291 53.9893,14.291 21.7016,0 42.3446,-3.705 21.1722,-4.234 34.4049,-10.057 l 10.5861,64.047 q -6.3516,3.175 -16.9378,6.351 -10.5861,3.176 -23.8188,5.293 -12.7034,2.647 -27.524,4.235 -14.8206,1.588 -29.6412,1.588 -37.5807,0 -65.634,-11.116 -27.524,-11.115 -46.0497,-30.17 -17.9965,-19.585 -26.9947,-46.05 -8.4689,-26.465 -8.4689,-57.165 z m 185.2575,-30.171 q -0.5294,-10.056 -3.7052,-19.584 -2.6465,-9.527 -8.9982,-16.938 -5.8224,-7.41 -15.3499,-12.174 -8.9982,-4.764 -22.7602,-4.764 -13.2327,0 -22.7602,4.764 -9.5275,4.235 -15.8792,11.645 -6.3517,7.41 -10.0569,17.467 -3.1758,9.528 -4.7637,19.584 z m 12.174,-211.193 -87.3356,73.574 -35.9929,-32.288 75.1616,-85.748 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1369"></path>
                                                            </g>
                                                            <g aria-label="Cuanza
                                               Sul"
                                                                id="text17443"
                                                                style="font-size:661.726px;line-height:1.25;stroke-width:27.5719"
                                                                transform="translate(147.82175,-105.58696)">
                                                                <path
                                                                    d="m 3941.1228,11838.919 q -111.8317,0 -170.7253,-62.202 -58.2319,-62.202 -58.2319,-176.681 0,-56.908 17.8666,-101.244 17.8666,-44.997 48.9677,-75.436 31.1012,-31.102 74.1134,-46.983 43.0122,-15.881 93.3033,-15.881 29.116,0 52.9381,4.632 23.8221,3.97 41.6887,9.926 17.8667,5.293 29.7777,11.249 11.9111,5.955 17.2049,9.264 l -29.7777,83.377 q -21.1752,-11.249 -49.6294,-19.19 -27.7925,-7.94 -63.5257,-7.94 -23.8222,0 -46.9826,7.94 -22.4987,7.941 -40.3653,25.808 -17.2048,17.205 -27.7925,44.997 -10.5876,27.793 -10.5876,67.496 0,31.763 6.6173,59.556 7.279,27.13 22.4987,46.982 15.8814,19.852 41.027,31.763 25.1456,11.249 60.8788,11.249 22.4987,0 40.3653,-2.647 17.8666,-2.647 31.7628,-5.955 13.8963,-3.971 24.4839,-8.603 10.5876,-4.632 19.19,-8.602 l 28.4543,82.716 q -21.837,13.234 -61.5406,23.822 -39.7035,10.587 -91.9799,10.587 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25374"></path>
                                                                <path
                                                                    d="m 4442.7113,11817.744 q -25.1456,7.279 -64.8492,13.235 -39.7035,6.617 -83.3774,6.617 -44.3357,0 -74.1134,-11.911 -29.1159,-11.911 -46.3208,-33.086 -17.2049,-21.837 -24.4838,-51.615 -7.279,-29.778 -7.279,-65.511 v -193.886 h 98.5972 v 181.975 q 0,47.644 12.5727,68.82 12.5728,21.175 46.9826,21.175 10.5876,0 22.4987,-0.662 11.911,-1.323 21.1752,-2.647 v -268.661 h 98.5972 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25376"></path>
                                                                <path
                                                                    d="m 4668.3603,11760.836 q 14.558,0 27.7925,-0.662 13.2345,-0.662 21.1752,-1.985 v -74.775 q -5.9555,-1.324 -17.8666,-2.647 -11.911,-1.324 -21.8369,-1.324 -13.8963,0 -26.4691,1.986 -11.911,1.323 -21.1752,5.955 -9.2642,4.632 -14.558,12.573 -5.2938,7.941 -5.2938,19.852 0,23.16 15.2197,32.424 15.8814,8.603 43.0122,8.603 z m -7.9407,-288.513 q 43.6739,0 72.7899,9.926 29.1159,9.926 46.3208,28.454 17.8666,18.529 25.1456,44.998 7.279,26.469 7.279,58.893 v 205.135 q -21.1753,4.632 -58.8937,10.588 -37.7183,6.617 -91.3181,6.617 -33.7481,0 -61.5406,-5.955 -27.1307,-5.956 -46.9825,-19.19 -19.8518,-13.897 -30.4394,-35.734 -10.5876,-21.836 -10.5876,-53.599 0,-30.44 11.911,-51.615 12.5728,-21.175 33.0863,-33.748 20.5136,-12.573 46.9826,-17.867 26.469,-5.955 54.9233,-5.955 19.19,0 33.748,1.985 15.2197,1.323 24.4838,3.97 v -9.264 q 0,-25.145 -15.2197,-40.365 -15.2197,-15.22 -52.938,-15.22 -25.1456,0 -49.6295,3.971 -24.4839,3.308 -42.3505,9.925 l -12.5727,-79.407 q 8.6024,-2.647 21.1752,-5.293 13.2345,-3.309 28.4542,-5.294 15.2197,-2.647 31.7629,-3.971 17.2048,-1.985 34.4097,-1.985 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25378"></path>
                                                                <path
                                                                    d="m 4901.2876,11493.498 q 25.1456,-7.279 64.8491,-13.234 39.7036,-6.617 83.3775,-6.617 44.3357,0 73.4516,11.911 29.7777,11.249 46.9826,32.424 17.2048,21.176 24.4838,50.291 7.279,29.116 7.279,64.85 v 196.532 h -98.5972 v -184.621 q 0,-47.645 -12.5728,-67.496 -12.5728,-19.852 -46.9825,-19.852 -10.5876,0 -22.4987,1.323 -11.9111,0.662 -21.1752,1.986 v 268.66 h -98.5972 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25380"></path>
                                                                <path
                                                                    d="m 5552.4264,11547.76 q -11.911,13.235 -32.4245,35.733 -19.8518,22.499 -43.0122,49.63 -23.1604,27.13 -46.9826,56.908 -23.1604,29.778 -42.3504,57.57 h 168.0784 v 82.054 h -287.8508 v -58.232 q 13.8962,-23.822 33.0863,-50.953 19.8517,-27.792 41.027,-55.585 21.8369,-27.792 43.0122,-53.599 21.1752,-26.469 39.0418,-47.645 H 5275.825 v -82.054 h 276.6014 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25382"></path>
                                                                <path
                                                                    d="m 5744.9891,11760.836 q 14.558,0 27.7925,-0.662 13.2345,-0.662 21.1752,-1.985 v -74.775 q -5.9555,-1.324 -17.8666,-2.647 -11.911,-1.324 -21.8369,-1.324 -13.8963,0 -26.4691,1.986 -11.911,1.323 -21.1752,5.955 -9.2642,4.632 -14.558,12.573 -5.2938,7.941 -5.2938,19.852 0,23.16 15.2197,32.424 15.8814,8.603 43.0122,8.603 z m -7.9407,-288.513 q 43.6739,0 72.7898,9.926 29.116,9.926 46.3209,28.454 17.8666,18.529 25.1456,44.998 7.2789,26.469 7.2789,58.893 v 205.135 q -21.1752,4.632 -58.8936,10.588 -37.7184,6.617 -91.3182,6.617 -33.748,0 -61.5405,-5.955 -27.1307,-5.956 -46.9825,-19.19 -19.8518,-13.897 -30.4394,-35.734 -10.5876,-21.836 -10.5876,-53.599 0,-30.44 11.911,-51.615 12.5728,-21.175 33.0863,-33.748 20.5135,-12.573 46.9826,-17.867 26.469,-5.955 54.9232,-5.955 19.1901,0 33.7481,1.985 15.2197,1.323 24.4838,3.97 v -9.264 q 0,-25.145 -15.2197,-40.365 -15.2197,-15.22 -52.9381,-15.22 -25.1455,0 -49.6294,3.971 -24.4839,3.308 -42.3505,9.925 l -12.5728,-79.407 q 8.6025,-2.647 21.1753,-5.293 13.2345,-3.309 28.4542,-5.294 15.2197,-2.647 31.7628,-3.971 17.2049,-1.985 34.4098,-1.985 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25384"></path>
                                                                <path
                                                                    d="m 4491.3479,12593.038 q 21.837,0 35.7332,-3.309 14.558,-3.97 23.1605,-9.926 8.6024,-6.617 11.911,-15.22 3.3087,-8.602 3.3087,-19.19 0,-22.498 -21.1753,-37.056 -21.1752,-15.22 -72.7898,-32.425 -22.4987,-7.941 -44.9974,-17.866 -22.4987,-10.588 -40.3653,-25.808 -17.8666,-15.881 -29.1159,-37.718 -11.2494,-22.499 -11.2494,-54.262 0,-31.763 11.9111,-56.908 11.9111,-25.807 33.748,-43.674 21.837,-17.867 52.9381,-27.131 31.1011,-9.926 70.143,-9.926 46.3208,0 80.0688,9.926 33.748,9.926 55.585,21.837 l -29.7777,81.392 q -19.19,-9.925 -43.0122,-17.204 -23.1604,-7.941 -56.2467,-7.941 -37.0566,0 -53.5998,10.587 -15.8814,9.926 -15.8814,31.102 0,12.572 5.9555,21.175 5.9555,8.602 16.5432,15.881 11.2493,6.618 25.1456,12.573 14.5579,5.294 31.7628,11.249 35.7332,13.235 62.2022,26.469 26.4691,12.573 43.674,29.778 17.8666,17.205 26.469,40.365 8.6024,23.161 8.6024,56.247 0,64.188 -44.9973,99.921 -44.9974,35.071 -135.6539,35.071 -30.4394,0 -54.9232,-3.97 -24.4839,-3.309 -43.6739,-8.603 -18.5284,-5.293 -32.4246,-11.249 -13.2345,-5.955 -22.4987,-11.249 l 29.1159,-82.054 q 20.5136,11.249 50.2912,20.513 30.4394,8.603 74.1133,8.603 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25386"></path>
                                                                <path
                                                                    d="m 5041.9045,12659.872 q -25.1456,7.279 -64.8492,13.235 -39.7035,6.617 -83.3775,6.617 -44.3356,0 -74.1133,-11.911 -29.1159,-11.911 -46.3208,-33.087 -17.2049,-21.837 -24.4839,-51.614 -7.2789,-29.778 -7.2789,-65.511 v -193.886 h 98.5971 v 181.975 q 0,47.644 12.5728,68.819 12.5728,21.176 46.9826,21.176 10.5876,0 22.4987,-0.662 11.911,-1.324 21.1752,-2.647 v -268.661 h 98.5972 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25388"></path>
                                                                <path
                                                                    d="m 5273.509,12678.4 q -43.0122,-0.661 -70.143,-9.264 -26.469,-8.602 -42.3504,-23.822 -15.2197,-15.881 -21.1752,-37.718 -5.2939,-22.499 -5.2939,-50.292 v -383.139 l 98.5972,-15.881 v 379.169 q 0,13.234 1.9852,23.822 1.9852,10.587 7.279,17.866 5.9555,7.279 16.5431,11.911 10.5876,4.633 28.4543,5.956 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path25390"></path>
                                                            </g>
                                                            <g aria-label="Lunda Sul" id="text1072"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 13710.227,10758.529 v 70.927 h -245.07 v -366.81 h 82.572 v 295.883 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1391"></path>
                                                                <path
                                                                    d="m 13995.523,10819.929 q -20.114,5.822 -51.872,10.586 -31.759,5.293 -66.693,5.293 -35.463,0 -59.282,-9.528 -23.29,-9.527 -37.052,-26.465 -13.762,-17.467 -19.584,-41.286 -5.823,-23.819 -5.823,-52.401 v -155.087 h 78.867 v 145.559 q 0,38.11 10.057,55.048 10.057,16.938 37.581,16.938 8.469,0 17.996,-0.53 9.528,-1.058 16.938,-2.117 v -214.898 h 78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1393"></path>
                                                                <path
                                                                    d="m 14069.625,10560.568 q 20.114,-5.822 51.872,-10.586 31.759,-5.293 66.693,-5.293 35.464,0 58.753,9.527 23.819,8.999 37.581,25.936 13.762,16.938 19.584,40.228 5.823,23.289 5.823,51.872 v 157.204 h -78.867 v -147.677 q 0,-38.11 -10.057,-53.989 -10.057,-15.879 -37.581,-15.879 -8.469,0 -17.996,1.058 -9.528,0.53 -16.938,1.588 v 214.899 h -78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1395"></path>
                                                                <path
                                                                    d="m 14448.608,10688.131 q 0,36.522 16.409,58.753 16.408,22.231 48.696,22.231 10.586,0 19.585,-0.529 8.998,-1.059 14.82,-2.117 v -143.443 q -7.41,-4.763 -19.584,-7.939 -11.645,-3.176 -23.819,-3.176 -56.107,0 -56.107,76.22 z m 178.377,132.327 q -10.586,3.176 -24.348,6.352 -13.762,2.646 -29.112,4.763 -14.821,2.118 -30.7,3.176 -15.35,1.588 -29.641,1.588 -34.405,0 -61.4,-10.057 -26.994,-10.057 -45.52,-28.582 -18.526,-19.055 -28.583,-45.521 -9.527,-26.994 -9.527,-60.341 0,-33.875 8.469,-60.87 8.469,-27.524 24.348,-46.579 15.879,-19.055 38.639,-29.112 23.29,-10.057 52.931,-10.057 16.408,0 29.112,3.176 13.232,3.176 26.465,8.998 v -125.975 l 78.867,-12.703 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1397"></path>
                                                                <path
                                                                    d="m 14807.478,10774.408 q 11.644,0 22.23,-0.529 10.587,-0.529 16.938,-1.588 v -59.812 q -4.763,-1.058 -14.291,-2.117 -9.528,-1.059 -17.467,-1.059 -11.116,0 -21.172,1.588 -9.528,1.059 -16.938,4.764 -7.411,3.705 -11.645,10.057 -4.234,6.352 -4.234,15.879 0,18.526 12.174,25.936 12.703,6.881 34.405,6.881 z m -6.352,-230.778 q 34.934,0 58.224,7.94 23.289,7.939 37.051,22.76 14.291,14.821 20.114,35.993 5.822,21.172 5.822,47.108 v 164.085 q -16.938,3.706 -47.108,8.469 -30.171,5.293 -73.045,5.293 -26.994,0 -49.225,-4.763 -21.702,-4.764 -37.581,-15.35 -15.879,-11.116 -24.348,-28.583 -8.469,-17.467 -8.469,-42.874 0,-24.348 9.528,-41.286 10.056,-16.937 26.465,-26.994 16.408,-10.057 37.581,-14.292 21.172,-4.763 43.932,-4.763 15.35,0 26.995,1.588 12.174,1.058 19.584,3.175 v -7.41 q 0,-20.114 -12.174,-32.288 -12.174,-12.174 -42.344,-12.174 -20.114,0 -39.698,3.176 -19.585,2.647 -33.876,7.94 l -10.057,-63.517 q 6.881,-2.117 16.938,-4.235 10.586,-2.646 22.76,-4.234 12.174,-2.117 25.407,-3.176 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1399"></path>
                                                                <path
                                                                    d="m 13938.622,11438.774 q 17.467,0 28.582,-2.646 11.645,-3.176 18.526,-7.94 6.881,-5.293 9.528,-12.174 2.646,-6.881 2.646,-15.35 0,-17.996 -16.938,-29.641 -16.937,-12.174 -58.223,-25.936 -17.997,-6.352 -35.993,-14.292 -17.997,-8.468 -32.288,-20.642 -14.291,-12.704 -23.29,-30.171 -8.998,-17.996 -8.998,-43.403 0,-25.407 9.528,-45.521 9.527,-20.643 26.994,-34.934 17.468,-14.291 42.345,-21.701 24.877,-7.94 56.107,-7.94 37.051,0 64.046,7.94 26.994,7.939 44.461,17.467 l -23.818,65.104 q -15.35,-7.939 -34.405,-13.762 -18.526,-6.351 -44.991,-6.351 -29.642,0 -42.874,8.469 -12.704,7.939 -12.704,24.877 0,10.057 4.764,16.938 4.764,6.881 13.233,12.703 8.998,5.293 20.113,10.057 11.645,4.235 25.407,8.998 28.583,10.587 49.755,21.173 21.172,10.057 34.934,23.818 14.292,13.762 21.173,32.288 6.881,18.526 6.881,44.991 0,51.343 -35.993,79.926 -35.993,28.053 -108.508,28.053 -24.348,0 -43.933,-3.176 -19.584,-2.646 -34.934,-6.881 -14.821,-4.234 -25.936,-8.998 -10.586,-4.764 -17.996,-8.998 l 23.289,-65.634 q 16.409,8.998 40.227,16.408 24.349,6.881 59.283,6.881 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1401"></path>
                                                                <path
                                                                    d="m 14379.005,11492.234 q -20.114,5.822 -51.872,10.586 -31.759,5.293 -66.693,5.293 -35.464,0 -59.283,-9.527 -23.289,-9.528 -37.051,-26.466 -13.762,-17.467 -19.584,-41.286 -5.823,-23.818 -5.823,-52.401 v -155.087 h 78.867 v 145.56 q 0,38.11 10.057,55.048 10.057,16.937 37.581,16.937 8.469,0 17.996,-0.529 9.528,-1.059 16.938,-2.117 v -214.899 h 78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1403"></path>
                                                                <path
                                                                    d="m 14564.261,11507.055 q -34.405,-0.53 -56.106,-7.411 -21.172,-6.881 -33.876,-19.055 -12.174,-12.703 -16.938,-30.17 -4.234,-17.997 -4.234,-40.227 v -306.469 l 78.867,-12.704 v 303.293 q 0,10.586 1.588,19.055 1.588,8.469 5.822,14.292 4.764,5.822 13.233,9.527 8.469,3.705 22.76,4.764 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1405"></path>
                                                            </g>
                                                            <g aria-label="Lunda Norte" id="text1082"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 10634.183,8727.7428 v 70.9271 h -245.07 v -366.8097 h 82.572 v 295.8826 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1408"></path>
                                                                <path
                                                                    d="m 10919.479,8789.1424 q -20.114,5.8224 -51.872,10.5861 -31.759,5.2931 -66.693,5.2931 -35.463,0 -59.282,-9.5275 -23.29,-9.5275 -37.052,-26.4654 -13.762,-17.4671 -19.584,-41.2859 -5.822,-23.8188 -5.822,-52.4014 v -155.087 h 78.866 v 145.5595 q 0,38.1101 10.057,55.0479 10.057,16.9378 37.581,16.9378 8.469,0 17.996,-0.5293 9.528,-1.0586 16.938,-2.1172 v -214.8987 h 78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1410"></path>
                                                                <path
                                                                    d="m 10993.581,8529.782 q 20.114,-5.8224 51.872,-10.5862 31.759,-5.293 66.693,-5.293 35.464,0 58.753,9.5275 23.819,8.9982 37.581,25.936 13.762,16.9378 19.584,40.2274 5.823,23.2895 5.823,51.872 v 157.2042 h -78.867 v -147.6766 q 0,-38.1101 -10.057,-53.9893 -10.057,-15.8793 -37.581,-15.8793 -8.469,0 -17.996,1.0587 -9.528,0.5293 -16.938,1.5879 v 214.8986 h -78.867 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1412"></path>
                                                                <path
                                                                    d="m 11372.564,8657.345 q 0,36.5221 16.409,58.753 16.408,22.2309 48.696,22.2309 10.586,0 19.585,-0.5293 8.998,-1.0586 14.82,-2.1172 v -143.4422 q -7.41,-4.7638 -19.584,-7.9396 -11.645,-3.1759 -23.819,-3.1759 -56.107,0 -56.107,76.2203 z m 178.377,132.3267 q -10.586,3.1758 -24.348,6.3517 -13.762,2.6465 -29.112,4.7637 -14.821,2.1173 -30.7,3.1759 -15.35,1.5879 -29.641,1.5879 -34.405,0 -61.4,-10.0568 -26.994,-10.0569 -45.52,-28.5826 -18.526,-19.0551 -28.583,-45.5204 -9.527,-26.9947 -9.527,-60.341 0,-33.8756 8.469,-60.8703 8.469,-27.524 24.348,-46.579 15.879,-19.0551 38.639,-29.1119 23.29,-10.0568 52.931,-10.0568 16.408,0 29.112,3.1758 13.232,3.1758 26.465,8.9982 v -125.975 l 78.867,-12.7034 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1414"></path>
                                                                <path
                                                                    d="m 11731.434,8743.622 q 11.644,0 22.23,-0.5293 10.587,-0.5293 16.938,-1.5879 v -59.8117 q -4.763,-1.0586 -14.291,-2.1173 -9.527,-1.0586 -17.467,-1.0586 -11.116,0 -21.172,1.588 -9.528,1.0586 -16.938,4.7637 -7.411,3.7052 -11.645,10.0568 -4.234,6.3517 -4.234,15.8793 0,18.5257 12.174,25.936 12.703,6.881 34.405,6.881 z m -6.352,-230.7779 q 34.934,0 58.224,7.9396 23.289,7.9396 37.051,22.7602 14.291,14.8206 20.114,35.9929 5.822,21.1723 5.822,47.1083 v 164.0852 q -16.938,3.7052 -47.108,8.4689 -30.171,5.2931 -73.044,5.2931 -26.995,0 -49.226,-4.7638 -21.702,-4.7637 -37.581,-15.3499 -15.879,-11.1154 -24.348,-28.5825 -8.469,-17.4672 -8.469,-42.8739 0,-24.3481 9.528,-41.286 10.057,-16.9378 26.465,-26.9946 16.409,-10.0569 37.581,-14.2913 21.172,-4.7638 43.932,-4.7638 15.35,0 26.995,1.588 12.174,1.0586 19.584,3.1758 v -7.4103 q 0,-20.1137 -12.174,-32.2877 -12.174,-12.1741 -42.344,-12.1741 -20.114,0 -39.698,3.1758 -19.585,2.6466 -33.876,7.9397 l -10.057,-63.5169 q 6.881,-2.1172 16.938,-4.2344 10.586,-2.6466 22.76,-4.2345 12.174,-2.1172 25.407,-3.1758 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1416"></path>
                                                                <path
                                                                    d="m 10663.03,9470.9755 q -35.463,-62.9875 -76.749,-124.3871 -41.286,-61.3997 -87.865,-115.9183 v 240.3054 h -81.514 v -366.8098 h 67.222 q 17.468,17.4672 38.64,42.8739 21.172,25.4068 42.874,54.5186 22.231,28.5826 43.932,59.8117 21.702,30.6998 40.757,59.2824 v -216.4866 h 82.042 v 366.8098 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1418"></path>
                                                                <path
                                                                    d="m 11072.184,9331.2385 q 0,32.817 -9.528,60.341 -9.527,26.9946 -27.524,46.579 -17.996,19.055 -43.403,29.6412 -24.877,10.5861 -56.106,10.5861 -30.7,0 -56.107,-10.5861 -24.877,-10.5862 -42.874,-29.6412 -17.996,-19.5844 -28.053,-46.579 -10.057,-27.524 -10.057,-60.341 0,-32.8171 10.057,-59.8117 10.586,-26.9947 28.582,-46.0497 18.526,-19.0551 43.404,-29.6412 25.406,-10.5862 55.048,-10.5862 30.17,0 55.047,10.5862 25.407,10.5861 43.404,29.6412 17.996,19.055 28.053,46.0497 10.057,26.9946 10.057,59.8117 z m -80.455,0 q 0,-36.5222 -14.82,-57.1652 -14.292,-21.1723 -41.286,-21.1723 -26.995,0 -41.816,21.1723 -14.82,20.643 -14.82,57.1652 0,36.5221 14.82,58.2237 14.821,21.1723 41.816,21.1723 26.994,0 41.286,-21.1723 14.82,-21.7016 14.82,-58.2237 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1420"></path>
                                                                <path
                                                                    d="m 11300.844,9262.4285 q -10.587,-2.6465 -24.878,-5.293 -14.291,-3.1759 -30.7,-3.1759 -7.41,0 -17.996,1.588 -10.057,1.0586 -15.35,2.6465 v 212.7814 h -78.867 v -263.5949 q 21.173,-7.4103 49.755,-13.762 29.112,-6.881 64.576,-6.881 6.351,0 15.349,1.0587 8.999,0.5293 17.997,2.1172 8.998,1.0586 17.996,3.1758 8.999,1.5879 15.35,4.2345 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1422"></path>
                                                                <path
                                                                    d="m 11353.774,9123.2208 78.866,-12.7034 v 82.0426 h 94.746 v 65.6341 h -94.746 v 97.9218 q 0,24.8774 8.469,39.698 8.999,14.8206 35.464,14.8206 12.703,0 25.936,-2.1172 13.762,-2.6466 24.877,-6.881 l 11.116,61.3996 q -14.291,5.8224 -31.759,10.0568 -17.467,4.2345 -42.873,4.2345 -32.288,0 -53.46,-8.4689 -21.173,-8.9982 -33.876,-24.3481 -12.703,-15.8793 -17.996,-38.1102 -4.764,-22.2308 -4.764,-49.2255 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1424"></path>
                                                                <path
                                                                    d="m 11567.613,9333.885 q 0,-37.0515 11.115,-64.5755 11.645,-28.0532 30.171,-46.579 18.525,-18.5257 42.344,-28.0533 24.348,-9.5275 49.755,-9.5275 59.282,0 93.687,36.5222 34.405,35.9929 34.405,106.3907 0,6.881 -0.529,15.3499 -0.529,7.9396 -1.059,14.2913 h -178.905 q 2.646,24.3481 22.76,38.6394 20.113,14.2913 53.989,14.2913 21.702,0 42.345,-3.7051 21.172,-4.2345 34.405,-10.0569 l 10.586,64.0462 q -6.352,3.1758 -16.938,6.3517 -10.586,3.1758 -23.819,5.293 -12.703,2.6466 -27.524,4.2345 -14.82,1.5879 -29.641,1.5879 -37.581,0 -65.634,-11.1154 -27.524,-11.1155 -46.05,-30.1705 -17.996,-19.5844 -26.994,-46.0498 -8.469,-26.4653 -8.469,-57.1651 z m 185.257,-30.1705 q -0.529,-10.0568 -3.705,-19.5844 -2.647,-9.5275 -8.998,-16.9378 -5.823,-7.4103 -15.35,-12.1741 -8.998,-4.7637 -22.76,-4.7637 -13.233,0 -22.761,4.7637 -9.527,4.2345 -15.879,11.6448 -6.351,7.4103 -10.057,17.4671 -3.175,9.5276 -4.763,19.5844 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1426"></path>
                                                            </g>
                                                            <g aria-label="Malanje" id="text1092"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 6665.1066,8103.3504 q 9.5276,17.4671 21.7016,43.4032 12.7034,25.4067 25.9361,55.5772 13.762,29.6412 26.9946,60.8703 13.2327,31.2291 24.8775,58.7531 11.6447,-27.524 24.8774,-58.7531 13.2327,-31.2291 26.4653,-60.8703 13.762,-30.1705 25.9361,-55.5772 12.7034,-25.9361 22.2309,-43.4032 h 75.1616 q 5.293,36.5222 9.5275,82.0426 4.7638,44.9911 7.9396,94.2166 3.7052,48.6963 6.3517,97.9218 3.1758,49.2256 5.2931,92.6288 h -80.4547 q -1.5879,-53.4601 -4.2345,-116.4476 -2.6465,-62.9875 -7.9396,-127.0337 -9.5275,22.2309 -21.1722,49.2256 -11.6448,26.9946 -23.2896,53.9893 -11.1154,26.9947 -21.7015,51.8721 -10.5862,24.3481 -17.9965,41.8152 h -57.6944 q -7.4103,-17.4671 -17.9965,-41.8152 -10.5861,-24.8774 -22.2309,-51.8721 -11.1154,-26.9947 -22.7602,-53.9893 -11.6447,-26.9947 -21.1723,-49.2256 -5.293,64.0462 -7.9396,127.0337 -2.6465,62.9875 -4.2344,116.4476 h -80.4547 q 2.1172,-43.4032 4.7638,-92.6288 3.1758,-49.2255 6.3517,-97.9218 3.7051,-49.2255 7.9396,-94.2166 4.7637,-45.5204 10.0568,-82.0426 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1429"></path>
                                                                <path
                                                                    d="m 7143.5999,8415.1122 q 11.6447,0 22.2308,-0.5293 10.5862,-0.5293 16.9379,-1.5879 v -59.8117 q -4.7638,-1.0586 -14.2913,-2.1172 -9.5275,-1.0586 -17.4671,-1.0586 -11.1155,0 -21.1723,1.5879 -9.5276,1.0586 -16.9379,4.7637 -7.4103,3.7052 -11.6447,10.0569 -4.2345,6.3517 -4.2345,15.8792 0,18.5257 12.1741,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.7778 q 34.9342,0 58.2237,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1137,35.9929 5.8224,21.1722 5.8224,47.1083 v 164.0852 q -16.9378,3.7051 -47.1083,8.4689 -30.1705,5.293 -73.0444,5.293 -26.9947,0 -49.2256,-4.7637 -21.7016,-4.7638 -37.5808,-15.3499 -15.8792,-11.1155 -24.3481,-28.5826 -8.4689,-17.4671 -8.4689,-42.8739 0,-24.3481 9.5275,-41.2859 10.0569,-16.9378 26.4654,-26.9947 16.4085,-10.0568 37.5808,-14.2913 21.1723,-4.7637 43.9325,-4.7637 15.3499,0 26.9946,1.5879 12.1741,1.0586 19.5844,3.1758 v -7.4103 q 0,-20.1136 -12.1741,-32.2877 -12.174,-12.1741 -42.3445,-12.1741 -20.1137,0 -39.6981,3.1759 -19.5843,2.6465 -33.8756,7.9396 l -10.0569,-63.5169 q 6.881,-2.1172 16.9379,-4.2344 10.5861,-2.6465 22.7602,-4.2345 12.174,-2.1172 25.4067,-3.1758 13.762,-1.5879 27.524,-1.5879 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1431"></path>
                                                                <path
                                                                    d="m 7441.0701,8475.4532 q -34.4049,-0.5293 -56.1065,-7.4103 -21.1723,-6.881 -33.8757,-19.055 -12.174,-12.7034 -16.9378,-30.1705 -4.2344,-17.9965 -4.2344,-40.2274 v -306.4687 l 78.8667,-12.7034 v 303.2929 q 0,10.5862 1.5879,19.0551 1.5879,8.4689 5.8224,14.2913 4.7638,5.8224 13.2327,9.5275 8.4689,3.7052 22.7602,4.7638 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1433"></path>
                                                                <path
                                                                    d="m 7611.5066,8415.1122 q 11.6448,0 22.2309,-0.5293 10.5862,-0.5293 16.9378,-1.5879 v -59.8117 q -4.7637,-1.0586 -14.2912,-2.1172 -9.5276,-1.0586 -17.4672,-1.0586 -11.1154,0 -21.1723,1.5879 -9.5275,1.0586 -16.9378,4.7637 -7.4103,3.7052 -11.6447,10.0569 -4.2345,6.3517 -4.2345,15.8792 0,18.5257 12.1741,25.936 12.7033,6.881 34.4049,6.881 z m -6.3517,-230.7778 q 34.9343,0 58.2238,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1137,35.9929 5.8223,21.1722 5.8223,47.1083 v 164.0852 q -16.9378,3.7051 -47.1083,8.4689 -30.1705,5.293 -73.0443,5.293 -26.9947,0 -49.2256,-4.7637 -21.7016,-4.7638 -37.5808,-15.3499 -15.8792,-11.1155 -24.3481,-28.5826 -8.4689,-17.4671 -8.4689,-42.8739 0,-24.3481 9.5275,-41.2859 10.0568,-16.9378 26.4653,-26.9947 16.4086,-10.0568 37.5808,-14.2913 21.1723,-4.7637 43.9325,-4.7637 15.3499,0 26.9947,1.5879 12.174,1.0586 19.5843,3.1758 v -7.4103 q 0,-20.1136 -12.174,-32.2877 -12.1741,-12.1741 -42.3446,-12.1741 -20.1136,0 -39.698,3.1759 -19.5844,2.6465 -33.8757,7.9396 l -10.0568,-63.5169 q 6.881,-2.1172 16.9378,-4.2344 10.5862,-2.6465 22.7602,-4.2345 12.1741,-2.1172 25.4068,-3.1758 13.762,-1.5879 27.5239,-1.5879 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1435"></path>
                                                                <path
                                                                    d="m 7797.8225,8201.2722 q 20.1136,-5.8224 51.872,-10.5861 31.7585,-5.2931 66.6927,-5.2931 35.4636,0 58.7531,9.5275 23.8188,8.9982 37.5808,25.9361 13.762,16.9378 19.5844,40.2273 5.8223,23.2895 5.8223,51.8721 v 157.2042 h -78.8667 v -147.6767 q 0,-38.1101 -10.0568,-53.9893 -10.0569,-15.8792 -37.5808,-15.8792 -8.4689,0 -17.9965,1.0586 -9.5275,0.5293 -16.9378,1.5879 v 214.8987 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1437"></path>
                                                                <path
                                                                    d="m 8083.6476,8568.082 q -7.4103,0 -21.7015,-1.588 -14.8206,-1.5879 -27.524,-5.8223 l 10.5861,-64.0462 q 7.9396,2.6465 14.8206,3.7052 6.3517,1.0586 16.4085,1.0586 18.5258,0 25.9361,-11.1155 7.4103,-11.1154 7.4103,-32.2877 v -266.2414 h 78.8667 v 268.3586 q 0,55.048 -26.9946,81.5133 -26.9947,26.4654 -77.8082,26.4654 z m 112.2131,-456.792 q 0,21.7016 -14.2913,34.405 -13.7619,12.174 -32.817,12.174 -19.055,0 -33.3463,-12.174 -13.762,-12.7034 -13.762,-34.405 0,-21.7016 13.762,-33.8756 14.2913,-12.7034 33.3463,-12.7034 19.0551,0 32.817,12.7034 14.2913,12.174 14.2913,33.8756 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1439"></path>
                                                                <path
                                                                    d="m 8249.3205,8333.0696 q 0,-37.0514 11.1154,-64.5754 11.6448,-28.0533 30.1705,-46.579 18.5258,-18.5258 42.3446,-28.0533 24.3481,-9.5275 49.7549,-9.5275 59.2823,0 93.6873,36.5222 34.405,35.9928 34.405,106.3907 0,6.881 -0.5294,15.3499 -0.5293,7.9396 -1.0586,14.2913 h -178.9057 q 2.6465,24.3481 22.7602,38.6394 20.1136,14.2913 53.9893,14.2913 21.7016,0 42.3445,-3.7052 21.1723,-4.2344 34.405,-10.0568 l 10.5861,64.0461 q -6.3516,3.1759 -16.9378,6.3517 -10.5861,3.1758 -23.8188,5.2931 -12.7034,2.6465 -27.524,4.2344 -14.8206,1.588 -29.6412,1.588 -37.5808,0 -65.634,-11.1155 -27.524,-11.1154 -46.0497,-30.1705 -17.9965,-19.5844 -26.9947,-46.0497 -8.4689,-26.4654 -8.4689,-57.1652 z m 185.2574,-30.1705 q -0.5293,-10.0568 -3.7051,-19.5843 -2.6465,-9.5275 -8.9982,-16.9378 -5.8224,-7.4103 -15.3499,-12.1741 -8.9982,-4.7638 -22.7602,-4.7638 -13.2327,0 -22.7602,4.7638 -9.5276,4.2345 -15.8792,11.6448 -6.3517,7.4102 -10.0569,17.4671 -3.1758,9.5275 -4.7637,19.5843 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1441"></path>
                                                            </g>
                                                            <g aria-label="Cuanza
Norte"
                                                                transform="rotate(-34.216167,114.63933,13.657161)"
                                                                id="text17443-2"
                                                                style="font-size:404.388px;line-height:1.25;stroke-width:27.5719">
                                                                <path
                                                                    d="m -1371.1971,9673.1439 q -68.3416,0 -104.3321,-38.0125 -35.5861,-38.0125 -35.5861,-107.9716 0,-34.7774 10.9184,-61.8714 10.9185,-27.4984 29.9248,-46.1002 19.0062,-19.0062 45.2914,-28.7116 26.2852,-9.7053 57.0187,-9.7053 17.7931,0 32.3511,2.8307 14.5579,2.4264 25.4764,6.0659 10.9185,3.2351 18.1975,6.8746 7.279,3.6395 10.5141,5.6614 l -18.1975,50.9529 q -12.9404,-6.8746 -30.3291,-11.7273 -16.9843,-4.8526 -38.8213,-4.8526 -14.5579,0 -28.7115,4.8526 -13.7492,4.8527 -24.6677,15.7712 -10.5141,10.514 -16.9843,27.4983 -6.4702,16.9843 -6.4702,41.2476 0,19.4106 4.0439,36.3949 4.4483,16.5799 13.7492,28.7116 9.7053,12.1316 25.0721,19.4106 15.3667,6.8746 37.2037,6.8746 13.7491,0 24.6676,-1.6175 10.9185,-1.6176 19.4106,-3.6395 8.4922,-2.4264 14.9624,-5.2571 6.4702,-2.8307 11.7273,-5.257 l 17.3886,50.5485 q -13.3448,8.0877 -37.608,14.5579 -24.2633,6.4703 -56.21,6.4703 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21238"></path>
                                                                <path
                                                                    d="m -1064.6709,9660.2034 q -15.3667,4.4483 -39.63,8.0878 -24.2633,4.0439 -50.9529,4.0439 -27.094,0 -45.2915,-7.279 -17.793,-7.279 -28.3071,-20.2194 -10.5141,-13.3448 -14.9624,-31.5423 -4.4482,-18.1974 -4.4482,-40.0344 v -118.4857 h 60.2538 v 111.2067 q 0,29.116 7.6833,42.0564 7.6834,12.9404 28.7116,12.9404 6.4702,0 13.7492,-0.4044 7.279,-0.8088 12.9404,-1.6175 v -164.1816 h 60.2538 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21240"></path>
                                                                <path
                                                                    d="m -926.7743,9625.4261 q 8.89654,0 16.9843,-0.4044 8.08776,-0.4044 12.94042,-1.2132 v -45.6958 q -3.6395,-0.8088 -10.91848,-1.6176 -7.27898,-0.8088 -13.3448,-0.8088 -8.49215,0 -16.17552,1.2132 -7.27899,0.8088 -12.94042,3.6395 -5.66143,2.8307 -8.89654,7.6834 -3.2351,4.8526 -3.2351,12.1316 0,14.1536 9.30092,19.815 9.70532,5.2571 26.28522,5.2571 z m -4.85265,-176.3132 q 26.68961,0 44.48268,6.0658 17.79307,6.0658 28.30716,17.3887 10.91847,11.3229 15.36674,27.4984 4.44827,16.1755 4.44827,35.9905 v 125.3603 q -12.94042,2.8307 -35.99053,6.4702 -23.05012,4.0439 -55.80555,4.0439 -20.62378,0 -37.60808,-3.6395 -16.57991,-3.6395 -28.71155,-11.7273 -12.13159,-8.4921 -18.60189,-21.8369 -6.4702,-13.3448 -6.4702,-32.7554 0,-18.6019 7.279,-31.5423 7.6834,-12.9404 20.21942,-20.6238 12.53603,-7.6834 28.71155,-10.9185 16.17552,-3.6395 33.5642,-3.6395 11.72725,0 20.62379,1.2132 9.30092,0.8088 14.96236,2.4263 v -5.6614 q 0,-15.3667 -9.30093,-24.6677 -9.30092,-9.3009 -32.35104,-9.3009 -15.36674,0 -30.3291,2.4263 -14.96235,2.022 -25.88083,6.0659 l -7.68342,-48.5266 q 5.25709,-1.6176 12.94046,-3.2351 8.08776,-2.0219 17.38869,-3.2351 9.30092,-1.6176 19.41062,-2.4263 10.51409,-1.2132 21.02818,-1.2132 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21242"></path>
                                                                <path
                                                                    d="m -784.42991,9462.0533 q 15.36674,-4.4483 39.63002,-8.0877 24.26328,-4.0439 50.95289,-4.0439 27.094,0 44.88707,7.279 18.19746,6.8746 28.71155,19.815 10.51408,12.9404 14.96235,30.7335 4.44827,17.793 4.44827,39.63 v 120.1032 h -60.25381 v -112.8242 q 0,-29.116 -7.68337,-41.2476 -7.68338,-12.1316 -28.71155,-12.1316 -6.47021,0 -13.74919,0.8087 -7.27899,0.4044 -12.94042,1.2132 v 164.1815 h -60.25381 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21244"></path>
                                                                <path
                                                                    d="m -386.51184,9495.2131 q -7.27898,8.0878 -19.81501,21.837 -12.13164,13.7492 -26.28522,30.3291 -14.15358,16.5799 -28.71155,34.7774 -14.15358,18.1974 -25.88083,35.1817 h 102.71455 v 50.1441 h -175.90878 v -35.5861 q 8.49215,-14.558 20.2194,-31.1379 12.13164,-16.9843 25.07206,-33.9686 13.3448,-16.9843 26.28522,-32.7554 12.94042,-16.1755 23.85889,-29.116 h -90.58291 v -50.1441 h 169.03418 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21246"></path>
                                                                <path
                                                                    d="m -268.83469,9625.4261 q 8.89654,0 16.9843,-0.4044 8.08776,-0.4044 12.94041,-1.2132 v -45.6958 q -3.63949,-0.8088 -10.91847,-1.6176 -7.27899,-0.8088 -13.34481,-0.8088 -8.49215,0 -16.17552,1.2132 -7.27898,0.8088 -12.94042,3.6395 -5.66143,2.8307 -8.89653,7.6834 -3.23511,4.8526 -3.23511,12.1316 0,14.1536 9.30093,19.815 9.70531,5.2571 26.28522,5.2571 z m -4.85266,-176.3132 q 26.68961,0 44.48268,6.0658 17.79308,6.0658 28.30716,17.3887 10.91848,11.3229 15.36675,27.4984 4.44827,16.1755 4.44827,35.9905 v 125.3603 q -12.94042,2.8307 -35.99054,6.4702 -23.05011,4.0439 -55.80554,4.0439 -20.62379,0 -37.60809,-3.6395 -16.5799,-3.6395 -28.71154,-11.7273 -12.13164,-8.4921 -18.60185,-21.8369 -6.47021,-13.3448 -6.47021,-32.7554 0,-18.6019 7.27898,-31.5423 7.68338,-12.9404 20.2194,-20.6238 12.53603,-7.6834 28.71155,-10.9185 16.17552,-3.6395 33.56421,-3.6395 11.72725,0 20.62379,1.2132 9.30092,0.8088 14.96235,2.4263 v -5.6614 q 0,-15.3667 -9.30092,-24.6677 -9.30093,-9.3009 -32.35104,-9.3009 -15.36675,0 -30.3291,2.4263 -14.96236,2.022 -25.88084,6.0659 l -7.68337,-48.5266 q 5.25705,-1.6176 12.94042,-3.2351 8.08776,-2.0219 17.38868,-3.2351 9.30093,-1.6176 19.41063,-2.4263 10.51408,-1.2132 21.02817,-1.2132 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21248"></path>
                                                                <path
                                                                    d="m -1187.4027,10182.116 q -27.094,-48.122 -58.6363,-95.031 -31.5422,-46.909 -67.1284,-88.5612 v 183.5922 h -62.2757 v -280.241 h 51.3572 q 13.3448,13.3448 29.5204,32.7555 16.1755,19.4106 32.7554,41.6519 16.9843,21.837 33.5642,45.6956 16.5799,23.455 31.1379,45.292 v -165.395 h 62.6801 v 280.241 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21250"></path>
                                                                <path
                                                                    d="m -874.8106,10075.357 q 0,25.073 -7.27898,46.101 -7.27898,20.624 -21.02818,35.586 -13.74919,14.558 -33.15981,22.646 -19.00624,8.087 -42.86513,8.087 -23.4545,0 -42.8651,-8.087 -19.0063,-8.088 -32.7555,-22.646 -13.7491,-14.962 -21.4325,-35.586 -7.6834,-21.028 -7.6834,-46.101 0,-25.072 7.6834,-45.695 8.0877,-20.624 21.8369,-35.1821 14.1536,-14.558 33.1598,-22.6457 19.4107,-8.0878 42.0564,-8.0878 23.05012,0 42.05635,8.0878 19.41063,8.0877 33.15982,22.6457 13.74919,14.5581 21.43256,35.1821 7.68337,20.623 7.68337,45.695 z m -61.46697,0 q 0,-27.902 -11.32287,-43.673 -10.91847,-16.176 -31.54226,-16.176 -20.62379,0 -31.9467,16.176 -11.3228,15.771 -11.3228,43.673 0,27.903 11.3228,44.483 11.32291,16.176 31.9467,16.176 20.62379,0 31.54226,-16.176 11.32287,-16.58 11.32287,-44.483 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21252"></path>
                                                                <path
                                                                    d="m -700.11487,10022.787 q -8.08776,-2.022 -19.00624,-4.044 -10.91847,-2.426 -23.4545,-2.426 -5.66143,0 -13.74919,1.213 -7.68338,0.809 -11.72726,2.022 v 162.564 h -60.25381 v -201.3853 q 16.17552,-5.6614 38.01247,-10.5141 22.24134,-5.257 49.33534,-5.257 4.85266,0 11.72725,0.8087 6.8746,0.4044 13.74919,1.6176 6.8746,0.8088 13.7492,2.4263 6.87459,1.2132 11.72725,3.2351 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21254"></path>
                                                                <path
                                                                    d="m -659.67571,9916.433 60.25381,-9.7053 v 62.6801 h 72.38545 v 50.1442 h -72.38545 v 74.812 q 0,19.006 6.47021,30.329 6.8746,11.323 27.094,11.323 9.70531,0 19.81501,-1.618 10.51409,-2.022 19.00623,-5.257 l 8.49215,46.909 q -10.91847,4.448 -24.26328,7.683 -13.3448,3.236 -32.75543,3.236 -24.66766,0 -40.84318,-6.471 -16.17552,-6.874 -25.88084,-18.601 -9.70531,-12.132 -13.74919,-29.116 -3.63949,-16.985 -3.63949,-37.609 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21256"></path>
                                                                <path
                                                                    d="m -496.30302,10077.379 q 0,-28.307 8.49215,-49.335 8.89653,-21.432 23.05011,-35.5861 14.15358,-14.1535 32.35104,-21.4325 18.60185,-7.279 38.01248,-7.279 45.29145,0 71.57667,27.9028 26.28522,27.4988 26.28522,81.2818 0,5.257 -0.40439,11.727 -0.40438,6.066 -0.80877,10.919 h -136.68315 q 2.02194,18.602 17.38869,29.52 15.36674,10.919 41.24757,10.919 16.57991,0 32.35104,-2.831 16.17552,-3.235 26.28522,-7.683 l 8.08776,48.931 q -4.85265,2.426 -12.94041,4.852 -8.08776,2.427 -18.19746,4.044 -9.70531,2.022 -21.02818,3.235 -11.32286,1.213 -22.64573,1.213 -28.71154,0 -50.14411,-8.492 -21.02817,-8.492 -35.18175,-23.05 -13.7492,-14.962 -20.62379,-35.182 -6.47021,-20.219 -6.47021,-43.674 z m 141.5358,-23.05 q -0.40439,-7.683 -2.83072,-14.962 -2.02194,-7.279 -6.87459,-12.94 -4.44827,-5.662 -11.72725,-9.301 -6.8746,-3.64 -17.38869,-3.64 -10.1097,0 -17.38868,3.64 -7.27899,3.235 -12.13164,8.896 -4.85266,5.662 -7.68337,13.345 -2.42633,7.279 -3.6395,14.962 z"
                                                                    style="font-weight:bold;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff"
                                                                    id="path21258"></path>
                                                            </g>
                                                            <g aria-label="Uíge" id="text1104"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 5109.6376,5849.4943 q -38.6394,0 -66.6926,-10.5862 -28.0533,-11.1154 -46.5791,-30.1705 -17.9964,-19.5843 -26.9946,-46.0497 -8.4689,-26.9946 -8.4689,-59.2824 v -228.1313 h 82.5719 v 221.2504 q 0,22.2309 4.7637,38.1101 5.2931,15.3499 13.762,25.4067 8.9982,9.5275 21.1723,13.762 12.7034,4.2344 27.5239,4.2344 30.1705,0 48.6963,-18.5257 19.055,-18.5258 19.055,-62.9875 v -221.2504 h 82.5719 v 228.1313 q 0,32.2878 -8.9982,59.2824 -8.9982,26.9947 -27.5239,46.579 -18.5258,19.0551 -47.1084,29.6412 -28.5825,10.5862 -67.7513,10.5862 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1467"></path>
                                                                <path
                                                                    d="m 5413.9885,5842.084 h -78.8667 v -278.4155 h 78.8667 z m 29.1119,-378.4545 -87.3356,73.5736 -35.9929,-32.2877 75.1616,-85.7477 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1469"></path>
                                                                <path
                                                                    d="m 5555.3133,5693.878 q 0,66.1634 53.46,66.1634 12.174,0 22.7602,-3.1758 10.5861,-3.1759 17.9964,-7.4103 v -125.9751 q -5.8224,-1.0586 -13.762,-1.5879 -7.9396,-1.0586 -18.5257,-1.0586 -31.2291,0 -46.579,20.6429 -15.3499,20.643 -15.3499,52.4014 z m 173.0834,113.2717 q 0,68.2806 -34.9343,101.0977 -34.405,33.3463 -106.92,33.3463 -25.4068,0 -50.8135,-4.7638 -25.4067,-4.2344 -47.1083,-11.6447 l 13.762,-66.1634 q 18.5257,7.4103 38.6394,11.6448 20.6429,4.2344 46.579,4.2344 33.8756,0 47.6376,-14.8206 14.2913,-14.8206 14.2913,-38.1101 v -10.0568 q -12.7034,5.8224 -26.4653,8.9982 -13.2327,2.6465 -29.1119,2.6465 -57.6945,0 -88.3943,-33.8756 -30.6998,-34.405 -30.6998,-95.8046 0,-30.6998 9.5275,-55.5772 9.5275,-25.4067 27.524,-43.4032 18.5257,-17.9964 44.9911,-27.524 26.4653,-10.0568 59.8117,-10.0568 14.2913,0 29.1119,1.5879 15.3499,1.0586 30.1705,3.1759 14.8206,2.1172 28.0532,5.293 13.762,2.6466 24.3482,5.8224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1471"></path>
                                                                <path
                                                                    d="m 5789.2669,5704.9935 q 0,-37.0515 11.1155,-64.5755 11.6447,-28.0533 30.1705,-46.579 18.5257,-18.5257 42.3445,-28.0533 24.3481,-9.5275 49.7549,-9.5275 59.2824,0 93.6873,36.5222 34.405,35.9929 34.405,106.3907 0,6.881 -0.5293,15.3499 -0.5293,7.9396 -1.0586,14.2913 h -178.9058 q 2.6465,24.3481 22.7602,38.6394 20.1137,14.2913 53.9893,14.2913 21.7016,0 42.3446,-3.7052 21.1722,-4.2344 34.4049,-10.0568 l 10.5862,64.0462 q -6.3517,3.1758 -16.9379,6.3516 -10.5861,3.1759 -23.8188,5.2931 -12.7033,2.6465 -27.5239,4.2345 -14.8206,1.5879 -29.6412,1.5879 -37.5808,0 -65.6341,-11.1155 -27.524,-11.1154 -46.0497,-30.1705 -17.9964,-19.5843 -26.9947,-46.0497 -8.4689,-26.4653 -8.4689,-57.1651 z m 185.2575,-30.1705 q -0.5293,-10.0569 -3.7052,-19.5844 -2.6465,-9.5275 -8.9982,-16.9378 -5.8224,-7.4103 -15.3499,-12.1741 -8.9982,-4.7637 -22.7602,-4.7637 -13.2327,0 -22.7602,4.7637 -9.5275,4.2345 -15.8792,11.6448 -6.3517,7.4103 -10.0568,17.4671 -3.1759,9.5275 -4.7638,19.5844 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1473"></path>
                                                            </g>
                                                            <g aria-label="Zaire" id="text1108"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 2264.2676,4342.4443 q -16.9378,17.4671 -40.2273,45.5204 -23.2895,27.5239 -48.167,60.341 -24.8774,32.817 -49.2255,67.7513 -24.3481,34.9342 -43.4032,66.6926 H 2270.09 v 69.3393 h -288.4723 v -49.2256 q 14.8206,-26.9946 35.9928,-59.8117 21.7016,-33.3463 44.9911,-66.6927 23.2895,-33.8756 47.1084,-65.1047 24.3481,-31.7584 44.9911,-56.6359 h -164.6145 v -69.3392 h 274.181 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1476"></path>
                                                                <path
                                                                    d="m 2435.2329,4597.0409 q 11.6448,0 22.2309,-0.5293 10.5861,-0.5293 16.9378,-1.5879 v -59.8117 q -4.7637,-1.0586 -14.2913,-2.1172 -9.5275,-1.0586 -17.4671,-1.0586 -11.1154,0 -21.1723,1.5879 -9.5275,1.0586 -16.9378,4.7638 -7.4103,3.7051 -11.6447,10.0568 -4.2345,6.3517 -4.2345,15.8792 0,18.5257 12.1741,25.936 12.7033,6.881 34.4049,6.881 z m -6.3517,-230.7778 q 34.9343,0 58.2238,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1137,35.9929 5.8223,21.1722 5.8223,47.1083 v 164.0852 q -16.9378,3.7051 -47.1083,8.4689 -30.1705,5.293 -73.0444,5.293 -26.9946,0 -49.2255,-4.7637 -21.7016,-4.7638 -37.5808,-15.3499 -15.8792,-11.1155 -24.3481,-28.5826 -8.4689,-17.4671 -8.4689,-42.8739 0,-24.3481 9.5275,-41.2859 10.0568,-16.9378 26.4653,-26.9947 16.4086,-10.0568 37.5808,-14.2913 21.1723,-4.7637 43.9325,-4.7637 15.3499,0 26.9947,1.5879 12.174,1.0586 19.5843,3.1758 v -7.4103 q 0,-20.1136 -12.174,-32.2877 -12.1741,-12.174 -42.3446,-12.174 -20.1137,0 -39.698,3.1758 -19.5844,2.6465 -33.8757,7.9396 l -10.0568,-63.5168 q 6.881,-2.1173 16.9378,-4.2345 10.5862,-2.6465 22.7602,-4.2345 12.1741,-2.1172 25.4068,-3.1758 13.7619,-1.5879 27.5239,-1.5879 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1478"></path>
                                                                <path
                                                                    d="m 2700.4154,4652.0889 h -78.8667 v -278.4155 h 78.8667 z m 7.4103,-358.8702 q 0,21.7016 -14.2913,34.405 -13.7619,12.174 -32.817,12.174 -19.055,0 -33.3463,-12.174 -13.762,-12.7034 -13.762,-34.405 0,-21.7016 13.762,-33.8756 14.2913,-12.7034 33.3463,-12.7034 19.0551,0 32.817,12.7034 14.2913,12.174 14.2913,33.8756 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1480"></path>
                                                                <path
                                                                    d="m 2942.3085,4443.5419 q -10.5861,-2.6465 -24.8774,-5.2931 -14.2913,-3.1758 -30.6998,-3.1758 -7.4103,0 -17.9964,1.5879 -10.0569,1.0586 -15.3499,2.6466 v 212.7814 h -78.8668 V 4388.494 q 21.1723,-7.4103 49.7549,-13.762 29.1119,-6.881 64.5754,-6.881 6.3517,0 15.3499,1.0586 8.9983,0.5293 17.9965,2.1172 8.9982,1.0587 17.9964,3.1759 8.9982,1.5879 15.3499,4.2344 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1482"></path>
                                                                <path
                                                                    d="m 2979.3593,4514.9984 q 0,-37.0515 11.1155,-64.5755 11.6447,-28.0533 30.1705,-46.579 18.5257,-18.5258 42.3446,-28.0533 24.3481,-9.5275 49.7548,-9.5275 59.2824,0 93.6874,36.5222 34.4049,35.9928 34.4049,106.3907 0,6.881 -0.5293,15.3499 -0.5293,7.9396 -1.0586,14.2913 h -178.9058 q 2.6466,24.3481 22.7602,38.6394 20.1137,14.2913 53.9893,14.2913 21.7016,0 42.3446,-3.7052 21.1723,-4.2344 34.4049,-10.0568 l 10.5862,64.0461 q -6.3517,3.1759 -16.9378,6.3517 -10.5862,3.1759 -23.8189,5.2931 -12.7033,2.6465 -27.5239,4.2344 -14.8206,1.588 -29.6412,1.588 -37.5808,0 -65.6341,-11.1155 -27.5239,-11.1154 -46.0497,-30.1705 -17.9964,-19.5843 -26.9946,-46.0497 -8.469,-26.4653 -8.469,-57.1651 z m 185.2575,-30.1705 q -0.5293,-10.0569 -3.7052,-19.5844 -2.6465,-9.5275 -8.9982,-16.9378 -5.8223,-7.4103 -15.3499,-12.1741 -8.9982,-4.7638 -22.7602,-4.7638 -13.2327,0 -22.7602,4.7638 -9.5275,4.2345 -15.8792,11.6448 -6.3517,7.4103 -10.0568,17.4671 -3.1759,9.5275 -4.7638,19.5844 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1484"></path>
                                                            </g>
                                                            <g aria-label="Cabinda" id="text1112"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326"
                                                                transform="matrix(0.6685056,-0.55190944,0.55190944,0.6685056,-1812.3036,1183.6527)">
                                                                <path
                                                                    d="m 1476.0563,2449.526 q -89.4529,0 -136.5612,-49.7548 -46.5791,-49.7549 -46.5791,-141.325 0,-45.5204 14.2913,-80.984 14.2913,-35.9929 39.1688,-60.341 24.8774,-24.8774 59.2823,-37.5808 34.405,-12.7033 74.6323,-12.7033 23.2895,0 42.3446,3.7051 19.055,3.1758 33.3463,7.9396 14.2913,4.2345 23.8188,8.9982 9.5276,4.7638 13.762,7.4103 l -23.8188,66.6927 q -16.9378,-8.9982 -39.698,-15.3499 -22.2309,-6.3517 -50.8135,-6.3517 -19.055,0 -37.5808,6.3517 -17.9964,6.3517 -32.2877,20.643 -13.762,13.762 -22.2309,35.9929 -8.4689,22.2308 -8.4689,53.9893 0,25.4067 5.293,47.6376 5.8224,21.7016 17.9965,37.5808 12.7034,15.8792 32.817,25.4067 20.1137,8.9983 48.6963,8.9983 17.9964,0 32.2877,-2.1173 14.2913,-2.1172 25.4067,-4.7637 11.1155,-3.1759 19.5844,-6.881 8.4689,-3.7052 15.3499,-6.881 l 22.7602,66.1634 q -17.4671,10.5861 -49.2256,19.055 -31.7584,8.4689 -73.5736,8.4689 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1487"></path>
                                                                <path
                                                                    d="m 1758.1754,2387.0678 q 11.6447,0 22.2309,-0.5293 10.5861,-0.5293 16.9378,-1.5879 v -59.8117 q -4.7638,-1.0586 -14.2913,-2.1173 -9.5275,-1.0586 -17.4671,-1.0586 -11.1155,0 -21.1723,1.588 -9.5275,1.0586 -16.9378,4.7637 -7.4103,3.7052 -11.6448,10.0568 -4.2344,6.3517 -4.2344,15.8793 0,18.5257 12.174,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.7779 q 34.9343,0 58.2238,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1136,35.9929 5.8224,21.1723 5.8224,47.1083 v 164.0852 q -16.9378,3.7052 -47.1083,8.4689 -30.1705,5.2931 -73.0444,5.2931 -26.9946,0 -49.2255,-4.7638 -21.7016,-4.7637 -37.5808,-15.3499 -15.8792,-11.1154 -24.3481,-28.5825 -8.469,-17.4672 -8.469,-42.8739 0,-24.3481 9.5276,-41.286 10.0568,-16.9378 26.4653,-26.9946 16.4085,-10.0568 37.5808,-14.2913 21.1723,-4.7638 43.9325,-4.7638 15.3499,0 26.9947,1.588 12.174,1.0586 19.5843,3.1758 v -7.4103 q 0,-20.1137 -12.174,-32.2877 -12.1741,-12.1741 -42.3446,-12.1741 -20.1137,0 -39.698,3.1758 -19.5844,2.6466 -33.8757,7.9397 l -10.0568,-63.5169 q 6.881,-2.1172 16.9378,-4.2344 10.5861,-2.6466 22.7602,-4.2345 12.1741,-2.1172 25.4067,-3.1758 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1489"></path>
                                                                <path
                                                                    d="m 2122.8677,2300.7908 q 0,-76.2203 -56.1066,-76.2203 -12.174,0 -24.3481,3.1759 -11.6448,3.1758 -19.0551,7.9396 v 143.4422 q 5.8224,1.0586 14.8206,2.1172 8.9983,0.5293 19.5844,0.5293 32.2877,0 48.6962,-22.2309 16.4086,-22.2309 16.4086,-58.753 z m 80.4546,2.1172 q 0,33.3463 -10.0568,60.341 -9.5275,26.9946 -28.0533,46.0497 -18.5257,19.055 -45.5204,29.6412 -26.9946,10.0568 -61.3996,10.0568 -14.2913,0 -30.1705,-1.5879 -15.3499,-1.0586 -30.6998,-3.1758 -14.8206,-2.1173 -28.5826,-4.7638 -13.762,-3.1759 -24.3481,-6.3517 v -389.0406 l 78.8667,-12.7034 v 138.6784 q 13.2327,-5.8224 27.524,-8.9982 14.2913,-3.1758 30.6998,-3.1758 29.6412,0 52.4014,10.5861 22.7602,10.0568 38.1101,29.1119 15.3499,19.055 23.2895,46.0497 7.9396,26.4653 7.9396,59.2824 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1491"></path>
                                                                <path
                                                                    d="m 2343.0584,2442.1157 h -78.8668 v -278.4155 h 78.8668 z m 7.4103,-358.8701 q 0,21.7016 -14.2913,34.4049 -13.762,12.1741 -32.817,12.1741 -19.0551,0 -33.3464,-12.1741 -13.762,-12.7033 -13.762,-34.4049 0,-21.7016 13.762,-33.8757 14.2913,-12.7033 33.3464,-12.7033 19.055,0 32.817,12.7033 14.2913,12.1741 14.2913,33.8757 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1493"></path>
                                                                <path
                                                                    d="m 2417.1611,2173.2278 q 20.1137,-5.8224 51.8721,-10.5862 31.7584,-5.293 66.6927,-5.293 35.4636,0 58.7531,9.5275 23.8188,8.9982 37.5808,25.936 13.7619,16.9378 19.5843,40.2274 5.8224,23.2895 5.8224,51.872 v 157.2042 h -78.8667 v -147.6766 q 0,-38.1101 -10.0569,-53.9893 -10.0568,-15.8793 -37.5808,-15.8793 -8.4689,0 -17.9964,1.0587 -9.5275,0.5293 -16.9378,1.5879 v 214.8986 h -78.8668 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1495"></path>
                                                                <path
                                                                    d="m 2796.1443,2300.7908 q 0,36.5221 16.4086,58.753 16.4085,22.2309 48.6962,22.2309 10.5861,0 19.5844,-0.5293 8.9982,-1.0586 14.8206,-2.1172 V 2235.686 q -7.4103,-4.7638 -19.5844,-7.9396 -11.6448,-3.1759 -23.8188,-3.1759 -56.1066,0 -56.1066,76.2203 z m 178.3765,132.3267 q -10.5861,3.1758 -24.3481,6.3517 -13.762,2.6465 -29.1119,4.7638 -14.8206,2.1172 -30.6998,3.1758 -15.3499,1.5879 -29.6412,1.5879 -34.405,0 -61.3996,-10.0568 -26.9947,-10.0569 -45.5204,-28.5826 -18.5258,-19.055 -28.5826,-45.5204 -9.5275,-26.9947 -9.5275,-60.341 0,-33.8756 8.4689,-60.8703 8.4689,-27.524 24.3481,-46.579 15.8792,-19.0551 38.6394,-29.1119 23.2895,-10.0568 52.9307,-10.0568 16.4085,0 29.1119,3.1758 13.2327,3.1758 26.4654,8.9982 v -125.975 l 78.8667,-12.7034 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1497"></path>
                                                                <path
                                                                    d="m 3155.0135,2387.0678 q 11.6448,0 22.2309,-0.5293 10.5861,-0.5293 16.9378,-1.5879 v -59.8117 q -4.7637,-1.0586 -14.2913,-2.1173 -9.5275,-1.0586 -17.4671,-1.0586 -11.1155,0 -21.1723,1.588 -9.5275,1.0586 -16.9378,4.7637 -7.4103,3.7052 -11.6448,10.0568 -4.2344,6.3517 -4.2344,15.8793 0,18.5257 12.174,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.7779 q 34.9343,0 58.2238,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1136,35.9929 5.8224,21.1723 5.8224,47.1083 v 164.0852 q -16.9378,3.7052 -47.1083,8.4689 -30.1705,5.2931 -73.0444,5.2931 -26.9946,0 -49.2255,-4.7638 -21.7016,-4.7637 -37.5808,-15.3499 -15.8792,-11.1154 -24.3481,-28.5825 -8.469,-17.4672 -8.469,-42.8739 0,-24.3481 9.5276,-41.286 10.0568,-16.9378 26.4653,-26.9946 16.4085,-10.0568 37.5808,-14.2913 21.1723,-4.7638 43.9325,-4.7638 15.3499,0 26.9947,1.588 12.174,1.0586 19.5843,3.1758 v -7.4103 q 0,-20.1137 -12.174,-32.2877 -12.1741,-12.1741 -42.3446,-12.1741 -20.1137,0 -39.698,3.1758 -19.5844,2.6466 -33.8757,7.9397 l -10.0568,-63.5169 q 6.881,-2.1172 16.9378,-4.2344 10.5862,-2.6466 22.7602,-4.2345 12.1741,-2.1172 25.4067,-3.1758 13.762,-1.588 27.524,-1.588 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1499"></path>
                                                            </g>
                                                            <g aria-label="Bengo" id="text1116"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326">
                                                                <path
                                                                    d="m 2181.4063,7314.7935 q -30.1705,0 -60.341,-2.1172 -29.6412,-1.5879 -61.9289,-8.4689 v -355.6943 q 25.4068,-4.7638 55.5773,-6.881 30.1705,-2.6465 56.1065,-2.6465 34.9343,0 64.0461,5.293 29.6412,4.7638 50.8135,16.9379 21.1723,12.174 32.8171,32.2877 12.174,19.5844 12.174,48.6962 0,43.9325 -42.3445,69.3393 34.9342,13.2326 47.6376,35.9928 12.7033,22.7602 12.7033,51.3428 0,57.6945 -42.3445,86.8064 -41.8153,29.1118 -124.9165,29.1118 z m -41.8152,-164.6144 v 94.7459 q 8.9982,1.0586 19.5843,1.5879 10.5862,0.5294 23.2895,0.5294 37.0515,0 59.8117,-10.5862 22.7602,-10.5861 22.7602,-39.1687 0,-25.4067 -19.055,-35.9929 -19.0551,-11.1154 -54.5186,-11.1154 z m 0,-62.9876 h 40.2273 q 38.1101,0 54.5186,-9.5275 16.4086,-10.0568 16.4086,-31.7584 0,-22.2309 -16.9379,-31.2291 -16.9378,-8.9982 -49.7548,-8.9982 -10.5862,0 -22.7602,0.5293 -12.1741,0 -21.7016,1.0586 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1502"></path>
                                                                <path
                                                                    d="m 2396.3044,7172.9393 q 0,-37.0515 11.1155,-64.5755 11.6447,-28.0533 30.1705,-46.579 18.5257,-18.5257 42.3445,-28.0533 24.3482,-9.5275 49.7549,-9.5275 59.2824,0 93.6873,36.5222 34.405,35.9929 34.405,106.3907 0,6.881 -0.5293,15.3499 -0.5293,7.9396 -1.0586,14.2913 h -178.9058 q 2.6465,24.3481 22.7602,38.6394 20.1137,14.2913 53.9893,14.2913 21.7016,0 42.3446,-3.7052 21.1723,-4.2344 34.4049,-10.0568 l 10.5862,64.0462 q -6.3517,3.1758 -16.9379,6.3516 -10.5861,3.1759 -23.8188,5.2931 -12.7033,2.6465 -27.5239,4.2345 -14.8206,1.5879 -29.6412,1.5879 -37.5808,0 -65.6341,-11.1155 -27.524,-11.1154 -46.0497,-30.1705 -17.9964,-19.5843 -26.9947,-46.0497 -8.4689,-26.4653 -8.4689,-57.1651 z m 185.2575,-30.1705 q -0.5293,-10.0569 -3.7052,-19.5844 -2.6465,-9.5275 -8.9982,-16.9378 -5.8224,-7.4103 -15.3499,-12.1741 -8.9982,-4.7637 -22.7602,-4.7637 -13.2327,0 -22.7602,4.7637 -9.5275,4.2345 -15.8792,11.6448 -6.3517,7.4103 -10.0568,17.4671 -3.1759,9.5275 -4.7638,19.5844 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1504"></path>
                                                                <path
                                                                    d="m 2718.6522,7041.1418 q 20.1137,-5.8224 51.8721,-10.5861 31.7584,-5.2931 66.6927,-5.2931 35.4635,0 58.753,9.5275 23.8188,8.9983 37.5808,25.9361 13.762,16.9378 19.5844,40.2273 5.8224,23.2895 5.8224,51.8721 v 157.2042 h -78.8668 v -147.6767 q 0,-38.1101 -10.0568,-53.9893 -10.0568,-15.8792 -37.5808,-15.8792 -8.4689,0 -17.9964,1.0586 -9.5276,0.5293 -16.9379,1.5879 v 214.8987 h -78.8667 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1506"></path>
                                                                <path
                                                                    d="m 3097.6354,7161.8238 q 0,66.1634 53.46,66.1634 12.1741,0 22.7602,-3.1758 10.5862,-3.1759 17.9965,-7.4103 V 7091.426 q -5.8224,-1.0586 -13.762,-1.5879 -7.9396,-1.0586 -18.5258,-1.0586 -31.2291,0 -46.579,20.6429 -15.3499,20.643 -15.3499,52.4014 z m 173.0834,113.2717 q 0,68.2806 -34.9343,101.0977 -34.4049,33.3463 -106.92,33.3463 -25.4067,0 -50.8135,-4.7638 -25.4067,-4.2344 -47.1083,-11.6447 l 13.762,-66.1634 q 18.5257,7.4103 38.6394,11.6448 20.643,4.2344 46.579,4.2344 33.8757,0 47.6377,-14.8206 14.2913,-14.8206 14.2913,-38.1101 v -10.0568 q -12.7034,5.8224 -26.4654,8.9982 -13.2327,2.6465 -29.1119,2.6465 -57.6944,0 -88.3943,-33.8756 -30.6998,-34.405 -30.6998,-95.8046 0,-30.6998 9.5276,-55.5772 9.5275,-25.4067 27.5239,-43.4032 18.5258,-17.9964 44.9911,-27.524 26.4654,-10.0568 59.8117,-10.0568 14.2913,0 29.1119,1.5879 15.3499,1.0587 30.1705,3.1759 14.8206,2.1172 28.0533,5.293 13.762,2.6466 24.3481,5.8224 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1508"></path>
                                                                <path
                                                                    d="m 3605.2408,7170.2927 q 0,32.8171 -9.5275,60.341 -9.5276,26.9947 -27.524,46.5791 -17.9964,19.055 -43.4032,29.6411 -24.8774,10.5862 -56.1065,10.5862 -30.6998,0 -56.1066,-10.5862 -24.8774,-10.5861 -42.8738,-29.6411 -17.9965,-19.5844 -28.0533,-46.5791 -10.0568,-27.5239 -10.0568,-60.341 0,-32.817 10.0568,-59.8117 10.5861,-26.9946 28.5826,-46.0497 18.5257,-19.055 43.4032,-29.6412 25.4067,-10.5861 55.0479,-10.5861 30.1705,0 55.0479,10.5861 25.4067,10.5862 43.4032,29.6412 17.9964,19.0551 28.0533,46.0497 10.0568,26.9947 10.0568,59.8117 z m -80.4547,0 q 0,-36.5221 -14.8206,-57.1651 -14.2913,-21.1723 -41.2859,-21.1723 -26.9947,0 -41.8153,21.1723 -14.8206,20.643 -14.8206,57.1651 0,36.5222 14.8206,58.2238 14.8206,21.1723 41.8153,21.1723 26.9946,0 41.2859,-21.1723 14.8206,-21.7016 14.8206,-58.2238 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1510"></path>
                                                            </g>
                                                            <g aria-label="Luanda" id="text1120"
                                                                style="font-style:normal;font-weight:normal;font-size:529.307px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:13.2326"
                                                                transform="matrix(0.4754316,0.96777701,-0.96904384,0.47605395,11092.195,4494.0155)">
                                                                <path
                                                                    d="m 315.55753,8941.3795 v 70.9271 H 70.488387 v -366.8097 h 82.571893 v 295.8826 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1513"></path>
                                                                <path
                                                                    d="m 600.85386,9002.7791 q -20.11367,5.8224 -51.87209,10.5862 -31.75842,5.293 -66.69268,5.293 -35.46357,0 -59.28239,-9.5275 -23.2895,-9.5275 -37.05149,-26.4654 -13.76198,-17.4671 -19.58436,-41.2859 -5.82237,-23.8188 -5.82237,-52.4014 v -155.0869 h 78.86674 v 145.5594 q 0,38.1101 10.05683,55.0479 10.05684,16.9378 37.5808,16.9378 8.46891,0 17.99644,-0.5293 9.52753,-1.0586 16.93782,-2.1172 v -214.8986 h 78.86675 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1515"></path>
                                                                <path
                                                                    d="m 781.34689,8957.2587 q 11.64475,0 22.23089,-0.5293 10.58614,-0.5293 16.93783,-1.5879 v -59.8117 q -4.76377,-1.0586 -14.29129,-2.1172 -9.52753,-1.0586 -17.46713,-1.0586 -11.11545,0 -21.17228,1.5879 -9.52753,1.0586 -16.93783,4.7637 -7.41029,3.7052 -11.64475,10.0569 -4.23446,6.3517 -4.23446,15.8792 0,18.5257 12.17406,25.936 12.70337,6.881 34.40496,6.881 z m -6.35168,-230.7778 q 34.93426,0 58.22377,7.9396 23.2895,7.9396 37.05149,22.7602 14.29129,14.8206 20.11366,35.9928 5.82238,21.1723 5.82238,47.1084 v 164.0851 q -16.93782,3.7052 -47.10832,8.4689 -30.1705,5.2931 -73.04437,5.2931 -26.99466,0 -49.22555,-4.7637 -21.70159,-4.7638 -37.5808,-15.3499 -15.87921,-11.1155 -24.34812,-28.5826 -8.46891,-17.4672 -8.46891,-42.8739 0,-24.3481 9.52752,-41.2859 10.05684,-16.9379 26.46535,-26.9947 16.40852,-10.0568 37.5808,-14.2913 21.17228,-4.7638 43.93248,-4.7638 15.3499,0 26.99466,1.588 12.17406,1.0586 19.58436,3.1758 v -7.4103 q 0,-20.1137 -12.17406,-32.2877 -12.17406,-12.1741 -42.34456,-12.1741 -20.11367,0 -39.69803,3.1759 -19.58436,2.6465 -33.87565,7.9396 l -10.05683,-63.5169 q 6.88099,-2.1172 16.93782,-4.2344 10.58614,-2.6466 22.7602,-4.2345 12.17407,-2.1172 25.40674,-3.1758 13.76198,-1.5879 27.52397,-1.5879 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1517"></path>
                                                                <path
                                                                    d="m 967.66272,8743.4187 q 20.11367,-5.8224 51.87208,-10.5862 31.7584,-5.293 66.6927,-5.293 35.4636,0 58.7531,9.5275 23.8188,8.9982 37.5808,25.936 13.762,16.9379 19.5843,40.2274 5.8224,23.2895 5.8224,51.8721 v 157.2041 h -78.8667 V 8864.63 q 0,-38.1101 -10.0569,-53.9893 -10.0568,-15.8792 -37.5808,-15.8792 -8.4689,0 -17.9964,1.0586 -9.5275,0.5293 -16.9378,1.5879 v 214.8986 h -78.86678 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1519"></path>
                                                                <path
                                                                    d="m 1346.6459,8870.9817 q 0,36.5222 16.4086,58.753 16.4085,22.2309 48.6962,22.2309 10.5861,0 19.5844,-0.5293 8.9982,-1.0586 14.8206,-2.1172 v -143.4422 q -7.4103,-4.7638 -19.5844,-7.9396 -11.6448,-3.1758 -23.8188,-3.1758 -56.1066,0 -56.1066,76.2202 z m 178.3765,132.3267 q -10.5861,3.1759 -24.3481,6.3517 -13.762,2.6465 -29.1119,4.7638 -14.8206,2.1172 -30.6998,3.1758 -15.3499,1.5879 -29.6412,1.5879 -34.405,0 -61.3996,-10.0568 -26.9947,-10.0568 -45.5204,-28.5826 -18.5258,-19.055 -28.5826,-45.5204 -9.5275,-26.9946 -9.5275,-60.341 0,-33.8756 8.4689,-60.8703 8.4689,-27.524 24.3481,-46.579 15.8792,-19.0551 38.6394,-29.1119 23.2895,-10.0568 52.9307,-10.0568 16.4085,0 29.1119,3.1758 13.2327,3.1759 26.4654,8.9982 v -125.975 l 78.8667,-12.7034 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1521"></path>
                                                                <path
                                                                    d="m 1705.5151,8957.2587 q 11.6448,0 22.2309,-0.5293 10.5861,-0.5293 16.9378,-1.5879 v -59.8117 q -4.7637,-1.0586 -14.2913,-2.1172 -9.5275,-1.0586 -17.4671,-1.0586 -11.1154,0 -21.1723,1.5879 -9.5275,1.0586 -16.9378,4.7637 -7.4103,3.7052 -11.6448,10.0569 -4.2344,6.3517 -4.2344,15.8792 0,18.5257 12.174,25.936 12.7034,6.881 34.405,6.881 z m -6.3517,-230.7778 q 34.9343,0 58.2238,7.9396 23.2895,7.9396 37.0515,22.7602 14.2913,14.8206 20.1136,35.9928 5.8224,21.1723 5.8224,47.1084 v 164.0851 q -16.9378,3.7052 -47.1083,8.4689 -30.1705,5.2931 -73.0444,5.2931 -26.9946,0 -49.2255,-4.7637 -21.7016,-4.7638 -37.5808,-15.3499 -15.8792,-11.1155 -24.3481,-28.5826 -8.469,-17.4672 -8.469,-42.8739 0,-24.3481 9.5276,-41.2859 10.0568,-16.9379 26.4653,-26.9947 16.4085,-10.0568 37.5808,-14.2913 21.1723,-4.7638 43.9325,-4.7638 15.3499,0 26.9947,1.588 12.174,1.0586 19.5843,3.1758 v -7.4103 q 0,-20.1137 -12.174,-32.2877 -12.1741,-12.1741 -42.3446,-12.1741 -20.1137,0 -39.698,3.1759 -19.5844,2.6465 -33.8757,7.9396 l -10.0568,-63.5169 q 6.881,-2.1172 16.9378,-4.2344 10.5862,-2.6466 22.7602,-4.2345 12.1741,-2.1172 25.4068,-3.1758 13.7619,-1.5879 27.5239,-1.5879 z"
                                                                    style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-family:Ubuntu;-inkscape-font-specification:'Ubuntu Bold';text-align:center;text-anchor:middle;fill:#ffffff;stroke-width:13.2326"
                                                                    id="path1523"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </xml>
                                        </div>
                                    </div>


                                    <h3 class="mt-5 pt-5 mb-3"> A Flora</h3>
                                    <div class="row">


                                        <p style="text-align: justify;">
                                            Angola apresenta cinco tipos de zonas naturais, a floresta húmida e densa
                                            como a de
                                            Maiombe que contém as mais raríssimas madeiras do mundo, as Savanas,
                                            normalmente
                                            associadas às matas como é o caso das Lundas, as Savanas secas com árvores
                                            ou arbustos,
                                            em Luanda, baixa de Kassanje e certas áreas das Lundas.

                                            Existem ainda zonas de Estepe ao longo de uma faixa que tem o início a sul
                                            do Sumbe e,
                                            por fim, a desértica que ocupa uma estreita faixa costeira no extremo sul do
                                            país, onde
                                            podemos encontrar no deserto do Namibe uma espécie única e endêmica no mundo
                                            que tanto
                                            caracteriza este país a "Welwitchia Mirabilis”.
                                        </p>


                                    </div>

                                    <h2 class="mt-5 pt-5 mb-3">A Fauna</h2>
                                    <div class="row">

                                        <p style="text-align: justify;">
                                            Um animal destaca-se na fauna angolana, o <b> Elefante Africano</b>, de que
                                            se
                                            distinguem duas espécies:
                                            <br>
                                        <ul>
                                            <li>- O <b>Elefante-da-Savana (Loxodonta Africana)</b> que se encontra nas
                                                savanas
                                                abertas e arbustivas das Províncias do Bengo, Cuando Cubango, Cunene,
                                                Huíla, Luanda, Moxico e Namibe.</li>
                                            <li>- O <b> Elefante-da-Floresta (Loxodonta Ciclotys)</b> nas florestas
                                                guinéu-congolesas das províncias do Zaire, Uíge e Cuanza Norte.</li>
                                        </ul>

                                        As savanas acolhem ainda a Girafa <b>(Giraffa Camelopardalis)</b> , ma espécie
                                        protegida, que pode ser avistada no Parque da Quiçama, onde também existem os
                                        <b>Jacarés (Crocodylidae)</b> . De assinalar a presença, na savana, de uma
                                        árvore
                                        invulgar: o <b>Imbondeiro (Adansonia Digitata)</b> . <br>

                                        A <b>Impala-de-Face-Negra (Aepycerus Melampus Petersi)</b> , animal endémico de
                                        savanas
                                        e de estepes, é localizada no sudoeste de Angola nas províncias do Namibe, Huíla
                                        e Cunene, nos Parques Nacionais de Iona, do Bicuar e do Mupa. <br>

                                        De destacar também que a particularidade climática engendrou especificidades
                                        biológicas. A nível vegetal, o <b>Tumba ou N'tumbo (Welwitschia Mirabilis)</b> é
                                        uma
                                        especificidade de Angola. Duas subespécies se reconhecem: Welwitschia Mirabilis
                                        Subsp. Mirabilis e Welwitschia Mirabilis Subsp. Namibiana.
                                        <br>
                                        Considerada uma raridade no mundo, a Welwitschia tem longevidade de 1000 a 2000
                                        anos.

                                        <br>
                                        O Parque Nacional do Iona e a Reserva Natural do Namibe albergam o
                                        Guelengue-do-Deserto (Oryx Gazella), podendo-se encontrar igualmente a Sul de
                                        Benguela. É um animal típico do deserto de Kalahari e nos habitat adjacentes.
                                        </p>


                                    </div>
                                    <h3 class="mt-5 pt-5 mb-3">Os Principais Rios </h3>



                                    <p style="text-align: justify;">
                                        O principal rio de Angola é o Kwanza, que dá o nome a moeda nacional com 1000 Km de
                                        longitude,
                                        mas
                                        apenas 240 Km são navegáveis. De seguida, o Kubango com 975 Km, depois o Cunene com
                                        800
                                        Km e por
                                        fim, na lista dos quatro principais do país, o Zaire com 150 Km de longitude, sendo
                                        este
                                        último,
                                        todo ele navegável.

                                        Os rios angolanos oferecem oportunidades para a implementação de negócios de
                                        interesse
                                        turístico
                                        ou
                                        mistos do tipo comércio-turismo ou ainda a prática do eco-turismo.
                                    </p>


                                    <h3 class="mt-5 pt-5 mb-3">Recursos Minerais</h3>

                                    Angola é um país potencialmente rico em recursos minerais. Estima-se que o seu sub-solo
                                    albergue 35
                                    dos
                                    45 mais importantes do comércio mundial entre os quais se destacam o petróleo, gás
                                    natural,
                                    diamantes,
                                    fosfatos, substâncias betuminosas, ferro, cobre, magnésio, ouro e rochas ornamentais,
                                    etc.






                                    <h3 class="mt-5 pt-5 mb-3"> Clima</h3>

                                    <p style="text-align: justify;">
                                        O Clima em Angola tem duas estações: a das chuvas, período mais quente que ocorre
                                        entre os meses
                                        de Setembro a Maio, e a do Cacimbo. A do Cacimbo ou Seca é menos quente e vai de
                                        Maio a
                                        Setembro. <br>

                                        O país possui uma situação geográfica peculiar, por estar na zona inter-tropical e
                                        sub-tropical
                                        do hemisfério Sul, ser próximo ao mar, e pelas especificidades do seu relevo,
                                        divide-se em duas
                                        regiões climáticas distintas: <br>

                                    <ul style="text-align: justify;">
                                        <li class="mt-4">
                                            A Região Litoral - com humidade relativa média anual de 30% e temperatura média
                                            superior
                                            aos
                                            23°C
                                        </li>
                                        <li class="mt-4">
                                            A Região do Interior, sub-dividida em Zona Norte, com elevadas quedas
                                            pluviométricas e
                                            temperaturas altas , zona de Altitude que abrange as regiões planálticas
                                            centrais com uma
                                            estação Seca de temperaturas baixas e a Zona Sudoeste, semi-árida em
                                            conseqüência da
                                            proximidade do
                                            deserto do Namibe, extensão do deserto do Kalahari, sujeita a grandes massas de
                                            ar tropical
                                            continental
                                        </li>
                                    </ul>
                                    <b> As Temperaturas Médias do país são: 27°C máxima e 17°C mínima</b> <br> <br>

                                    A esta diversidade climática corresponde um potencial turístico representado por um
                                    património
                                    natural riquíssimo em flora e fauna diversificada, possibilitando a prática de todo tipo
                                    de
                                    actividades de lazer, hobbies e aventuras.
                                    </p>

                                    <h3 class="mt-5 pt-5 mb-3">Idioma</h3>

                                    <p style="text-align: justify;">
                                        A Língua Oficial é o Português, para além de diversas línguas nacionais (dialectos),
                                        sendo as
                                        mais
                                        faladas: o Kikongo, Kimbundo, Tchokwe, Umbundo, Mbunda, Kwanyama, Nhaneca, Fiote,
                                        Nganguela,
                                        etc.
                                    </p>




                                </div>

                            </div>
                        </div>
                    </section>

                </div>


            </div>
        </div>



    </section>
@endsection
