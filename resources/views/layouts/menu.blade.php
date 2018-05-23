@section('menu')
    <!-- header start -->
    <nav class="navbar navbar-expand-lg navbar-light btco-hover-menu">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories/leto-2018-0"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Лето 2018
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/categories/turtsija">Турција</a></li>

                        <li><a class="dropdown-item dropdown-toggle" href="/categories/bugarija">Бугарија</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/categories/sonchev-breg">Сончев Брег</a></li>
                                <li><a class="dropdown-item" href="/categories/sveti-konstantin">Свети Константин</a>
                                </li>
                                <li><a class="dropdown-item" href="/categories/sveti-vlas">Свети Влас</a></li>
                                <li><a class="dropdown-item" href="/categories/ravda">Равда</a></li>
                                <li><a class="dropdown-item" href="/categories/nesebar">Несебар</a></li>
                                <li><a class="dropdown-item" href="/categories/zlatni-pesotsi">Златни Песоци</a></li>
                                <li><a class="dropdown-item" href="/categories/albena">Албена</a></li>
                                <li><a class="dropdown-item" href="/categories/chaika-0">Чаика</a></li>

                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="/categories/kipar">Кипар</a></li>

                        <li><a class="dropdown-item dropdown-toggle" href="/categories/grtsija">Грција</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/categories/khoteli-onlajn-buking-0">Хотел онлајн
                                        букинг</a></li>
                                <li><a class="dropdown-item dropdown-toggle"
                                       href="/categories/khalkidiki">Халкидики</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/categories/atos">Атос</a></li>
                                        <li><a class="dropdown-item" href="/categories/kasandra">Касандра</a></li>
                                        <li><a class="dropdown-item" href="/categories/sani">Сани</a></li>
                                        <li><a class="dropdown-item" href="/categories/sitonija">Ситонија</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="/categories/ostrovi-0">Острови</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/categories/krit">Крит</a></li>
                                        <li><a class="dropdown-item" href="/categories/rodos">Родос</a></li>
                                        <li><a class="dropdown-item" href="/categories/santorini">Санторини</a></li>
                                        <li><a class="dropdown-item" href="/categories/evia">Евиа</a></li>
                                        <li><a class="dropdown-item" href="/categories/krf">Крф</a></li>
                                        <li><a class="dropdown-item" href="/categories/tasos">Тасос</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="/categories/glifada">Глифада</a></li>

                                <li><a class="dropdown-item" href="/categories/pieria">Пиериа</a></li>
                                <li><a class="dropdown-item" href="/categories/peloponez">Пелопонез</a></li>
                                <li><a class="dropdown-item" href="/categories/parga">Парга</a></li>
                                <li><a class="dropdown-item" href="/categories/kavala">Кавала</a></li>


                                <li><a class="dropdown-item dropdown-toggle" href="/categories/privatno-smestuvanje-0">Приватно
                                        сместување</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/categories/jonsko-krajbrezhje-0">Јонско
                                                крајбрежје</a></li>
                                        <li><a class="dropdown-item" href="/categories/kasandra">Касандра</a></li>
                                        <li><a class="dropdown-item" href="/categories/ostrovi-0">Острови</a></li>
                                        <li><a class="dropdown-item" href="/categories/pieria">Пиериа</a></li>
                                        <li><a class="dropdown-item" href="/categories/sitonija">Ситонија</a></li>
                                        <li><a class="dropdown-item" href="/categories/spetsijalni-ponudi-0">Специјални
                                                понуди</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories/proletni-patuvanja-0"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Пролетни патувања
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/categories/khit-ponuda-0">Хит понуда</a></li>
                    </ul>
                </li>
              {{--   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories/veligdenski-patuvanja-0"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Велигденски патувања
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/categories/avionski-aranzhmani-0">Авионски аранжмани</a>
                        </li>
                        <li><a class="dropdown-item" href="/categories/avtobuski-aranzhmani-0">Автобуски аранжмани</a>
                        </li>

                        <li><a class="dropdown-item" href="/categories/kipar">Кипар</a></li>

                        <li><a class="dropdown-item" href="/categories/grtsija">Грција</a></li>

                    </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories/dalechni-destinatsii-0"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Далечни дестинации
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/categories/grupni-patuvanja-0">Групни патувања</a></li>
                        <li><a class="dropdown-item" href="/categories/egipet">Египет</a></li>

                        <li><a class="dropdown-item" href="/categories/maldivi">Малдиви</a></li>

                        <li><a class="dropdown-item" href="/categories/dubai">Дубаи</a></li>
                        <li><a class="dropdown-item" href="/categories/tajland">Тајланд</a></li>
                        <li><a class="dropdown-item" href="/categories/kuba">Куба</a></li>

                        <li><a class="dropdown-item" href="/categories/bali">Бали</a></li>

                        <li><a class="dropdown-item" href="/categories/dominikanska-republika">Доминиканска
                                република</a></li>
                        <li><a class="dropdown-item" href="/categories/zanzibar">Занзибар</a></li>
                        <li><a class="dropdown-item" href="/categories/mauritsius">Маурициус</a></li>

                        <li><a class="dropdown-item" href="/categories/sejsheli">Сејшели</a></li>

                        <li><a class="dropdown-item" href="/categories/krstarenja-0">Крстарење</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/categories/spa-wellness-0"
                       id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Spa & Wellness
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/categories/bugarija-1">Бугарија</a></li>
                        <li><a class="dropdown-item" href="/categories/velingrad-0">Велинград</a></li>

                        <li><a class="dropdown-item" href="/categories/dobrinishte-0">Добриниште</a></li>

                        <li><a class="dropdown-item" href="/categories/s-banja-0">С. Бања</a></li>

                        <li><a class="dropdown-item" href="/categories/sandanski-0">Сандански</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/kontserti-0">
                        Концерти
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories//categories/promotsii-0">
                        Промоции
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/blog-0">
                        Блог
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- header-top end -->


@endsection