<header class="dropdown" id="header">
    <div class="navbar-fixed-top navbar fixed-top d-lg-none">
        <button class="toggle-menu" data-toggle="dropdown" data-target="#header">
            <i class="material-icons">menu</i>
            <span class="sr-only">Menu</span>
        </button>
        
    </div>

    <nav>
        <a href="" class="brand-image">
            <img src="" class="mx-auto d-block img-fluid"
                 alt="">
        </a>

        @if ( isset( $nav_categories ) )
            <ul class="panel-group list-unstyled" id="navbar">
                <li class="panel divisor"></li>

                <li class="panel">
                    <a href="" class="link-nav link-default collapsed" target="_blank">
                        <i class="material-icons">inbox</i>
                        <span>Contatos</span>
                    </a>
                </li>

                <li class="panel">
                    <a href=""
                       class="link-nav link-default collapsed{{ Request::segment(2) == '' ? ' active' : '' }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>



                @foreach ($nav_categories as $item)
                    @if ($item->pages && count($item->pages))
                        <li class="panel">
                            <a href="" data-toggle="collapse" data-parent="#navbar"
                               class="link-nav link-default collapsed">
                                <i class="material-icons">{{ $item->icon }}</i>
                                <span>{{ $item->name }}</span>
                            </a>
                            <ul class="list-unstyled collapse" id="{{ 'nav-'.$item->id }}">
                                @foreach ( $item->pages as $page )
                                    <li><a href=""
                                           class="sublink-default{{ Request::segment(2) == $page->url ? ' sublink-active' : '' }}">{{ $page->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

                <li class="panel divisor"></li>

                <li class="panel">
                    <a href="" class="link-nav link-default collapsed" target="_blank">
                        <i class="material-icons">launch</i>
                        <span>Acessar o site</span>
                    </a>
                </li>

                <li class="panel divisor"></li>

                <li class="panel">
                    <a href="" class="link-nav link-default collapsed">
                        <i class="material-icons">person</i>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                </li>

                <li class="panel">
                    <a href=""
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="link-nav link-default collapsed">
                        <i class="material-icons">exit_to_app</i>
                        <span>Sair</span>
                    </a>
                </li>
            </ul>
        @endif

        <form id="logout-form" action="" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </nav>

    <button type="button" class="navbar-dismiss visible-xs visible-sm">
        <span class="sr-only">Fechar</span>
    </button>
</header>