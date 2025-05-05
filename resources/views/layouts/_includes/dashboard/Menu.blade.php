<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                    <img rel="icon" src="/images/logotipo/index-bl.png"
                        style="width:120px; margin:auto" />

                </a>
            </div>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                            <i class="fe fe-globe fe-16"></i>
                            <span class="ml-3 item-text">Site</span>
                        </a>
                    </li>
                </ul>






                @if ('Imprensa' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu de Notícias --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Notícias </span>
                    </p>
                    {{-- categoria de Notícias --}}
                    <li class="nav-item dropdown">
                        <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-rss fe-16"></i>
                            <span class="ml-3 item-text">Notícias</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="news">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Notícia</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                                    <span class="ml-1 item-text">Listar Notícias</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-folder fe-16"></i>
                            <span class="ml-3 item-text">Eventos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="events">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.event.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Eventos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.event.index') }}">
                                    <span class="ml-1 item-text">Listar Eventos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu de Multimédia --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Multimédia </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#slideshow" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Slideshows</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Slideshow</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                                    <span class="ml-1 item-text">Listar Slideshows</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Galerias</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="gallery">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Galeria</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.index') }}">
                                    <span class="ml-1 item-text">Listar Galerias</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#video" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-video fe-16"></i>
                            <span class="ml-3 item-text"> Vídeos </span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="video">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Video</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.index') }}">
                                    <span class="ml-1 item-text">Listar Vídeos </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#publicityBanner" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Banners Publicitários</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="publicityBanner">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.publicityBanner.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Banner Publicitário</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.publicityBanner.index') }}">
                                    <span class="ml-1 item-text">Listar Banners Publicitários</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#partners" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-rss fe-16"></i>
                            <span class="ml-3 item-text">Parceiros</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="partners">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.partners.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Parceiros</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.partners.index') }}">
                                    <span class="ml-1 item-text">Listar Parceiros</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                {{-- Menu de Legislaçao --}}
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span> Legislaçao</span>
                </p>

                <li class="nav-item dropdown">
                    <a href="#legislation" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle nav-link">
                        <i class="fe fe-file-text fe-16"></i>
                        <span class="ml-3 item-text">Legislação</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="legislation">

                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.legislation.create') }}">
                                <span class="ml-1 item-text">Cadastrar Legislação</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.legislation.index') }}">
                                <span class="ml-1 item-text">Listar Legislações</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Menu de Feito em Angola --}}
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Feito em Angola</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.madeInAngola.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Feito em Angola</span>
                        </a>
                    </li>
                </ul>

                {{-- Menu de Feito em Angola --}}
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Vistos</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.visa.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Vistos</span>
                        </a>
                    </li>
                </ul>

                {{-- Menu de Feito em Angola --}}
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Cloud do Governo</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.cloudGovern.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Cloud do Governo</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Projecto Kwenda</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.kwenda.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Projecto Kwenda</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Turismo</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.tourism.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Turismo</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Angosat</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.angosat.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Angosat</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Corredor do Lobito</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.corridorLobito.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Corredor do Lobito</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Barragem do Laúca</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.DamLauca.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Barragem do Lauca</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Centrais Fotovoltaicas do Biópio e Baía Farta</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.BiopioAndBaiaFartaPhotovoltaicPlants.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Centrais Fotovoltaicas do Biópio e Baía Farta</span>
                        </a>
                    </li>
                </ul>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Barragem Caculo Cabaça</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.DamCaculoCabaca.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">Barragem Caculo Cabaça</span>
                        </a>
                    </li>
                </ul>


                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>AGT - Imposto Predial (IP)</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.agt.show') }}">

                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">AGT - Imposto Predial (IP)</span>
                        </a>
                    </li>
                </ul>
                @endif
                @if ('Administrador' == Auth::user()->level)
                    {{-- Menu de Utilizadores --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Utilizadores</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#user" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-user-plus fe-16"></i>
                            <span class="ml-3 item-text"> Utilizadores</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="user">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('register') }}">
                                    <span class="ml-1 item-text">Cadastrar Utilizador</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                                    <span class="ml-1 item-text">Listar Utilizadores</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Menu de Configurações --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Configurações</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.configuration.show') }}">

                                <i class="fe fe-settings fe-16"></i>
                                <span class="ml-3 item-text">Configurações</span>
                            </a>
                        </li>
                    </ul>
                @endif

            </ul>

        </nav>
    </aside>

@endif
