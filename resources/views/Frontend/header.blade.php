<header class="header-style-5">
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Bienvenidos</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Celular: 123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        <li class="onhover-dropdown mobile-account">
                            <i class=" fa fa-file"></i>
                                <a href="">
                                    Mi lista de cotizaciones
                                </a>
                        </li>
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                            Mi cuenta
                            <ul class="onhover-show-div">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar d-block d-xl-none">
                            <a href="javascript:void(0)">
                                <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar"
                                        aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="brand-logo">
                            <a href="index.html"><img src="assets/images/icon/logo/29.png"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <form class="form_search" role="form">
                            <input id="query search-autocomplete" type="search"
                                placeholder="Buscar productos..." class="nav-search nav-search-field"
                                aria-expanded="true">
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="menu-right pull-right">
                        <nav class="text-start">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        </nav>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                        <div><img src="assets/images/icon/search.png" onclick="openSearch()"
                                                class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()"
                                                    title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputPassword1"
                                                                            placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part bottom-light">
        <div class="container">
            <div class="row">
                {{-- sub-menu largo --}}
                <div class="col-xl-3">
                    <div class="category-menu d-none d-xl-block h-100">
                        <div id="toggle-sidebar" class="toggle-sidebar">
                            <i class="fa fa-bars sidebar-bar"></i>
                            <h5 class="mb-0">ver catalogo</h5>
                        </div>
                    </div>
                    <div class="sidenav fixed-sidebar marketplace-sidebar">
                        <nav>
                            <div>
                                <div class="sidebar-back text-start d-xl-none d-block"><i
                                        class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                            </div>
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                <li> <a href="#">TV & Audio</a>
                                    <ul class="mega-menu clothing-menu">
                                        <li>
                                            <div class="row m-0">
                                                <div class="col-xl-4">
                                                    <div class="link-section">
                                                        <h5>women's fashion</h5>
                                                        <ul>
                                                            <li><a href="#">dresses</a></li>
                                                            <li><a href="#">skirts</a></li>
                                                            <li><a href="#">westarn wear</a></li>
                                                            <li><a href="#">ethic wear</a></li>
                                                            <li><a href="#">sport wear</a></li>
                                                        </ul>
                                                        <h5>men's fashion</h5>
                                                        <ul>
                                                            <li><a href="#">sports wear</a></li>
                                                            <li><a href="#">western wear</a></li>
                                                            <li><a href="#">ethic wear</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="link-section">
                                                        <h5>accessories</h5>
                                                        <ul>
                                                            <li><a href="#">fashion jewellery</a></li>
                                                            <li><a href="#">caps and hats</a></li>
                                                            <li><a href="#">precious jewellery</a></li>
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li><a href="#">ties</a></li>
                                                            <li><a href="#">cufflinks</a></li>
                                                            <li><a href="#">pockets squares</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <a href="#" class="mega-menu-banner"><img
                                                            src="assets/images/mega-menu/fashion.jpg" alt=""
                                                            class="img-fluid blur-up lazyload"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">air conditioners</a>
                                    <ul>
                                        <li><a href="#">makeup</a></li>
                                        <li><a href="#">skincare</a></li>
                                        <li><a href="#">premium beaty</a></li>
                                        <li> <a href="#">more</a>
                                            <ul>
                                                <li><a href="#">fragrances</a></li>
                                                <li><a href="#">luxury beauty</a></li>
                                                <li><a href="#">hair care</a></li>
                                                <li><a href="#">tools & brushes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Refrigerators</a>
                                    <ul>
                                        <li><a href="#">shopper bags</a></li>
                                        <li><a href="#">laptop bags</a></li>
                                        <li><a href="#">clutches</a></li>
                                        <li> <a href="#">purses</a>
                                            <ul>
                                                <li><a href="#">purses</a></li>
                                                <li><a href="#">wallets</a></li>
                                                <li><a href="#">leathers</a></li>
                                                <li><a href="#">satchels</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="#">Washing Machines</a>
                                    <ul>
                                        <li><a href="#">sport shoes</a></li>
                                        <li><a href="#">formal shoes</a></li>
                                        <li><a href="#">casual shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kitchen & Home</a></li>
                                <li><a href="#">Gaming Consoles</a></li>
                                <li> <a href="#">cameras</a>
                                    <ul>
                                        <li><a href="#">fashion jewellery</a></li>
                                        <li><a href="#">caps and hats</a></li>
                                        <li><a href="#">precious jewellery</a></li>
                                        <li> <a href="#">more..</a>
                                            <ul>
                                                <li><a href="#">necklaces</a></li>
                                                <li><a href="#">earrings</a></li>
                                                <li><a href="#">wrist wear</a></li>
                                                <li> <a href="#">accessories</a>
                                                    <ul>
                                                        <li><a href="#">ties</a></li>
                                                        <li><a href="#">cufflinks</a></li>
                                                        <li><a href="#">pockets squares</a></li>
                                                        <li><a href="#">helmets</a></li>
                                                        <li><a href="#">scarves</a></li>
                                                        <li> <a href="#">more...</a>
                                                            <ul>
                                                                <li><a href="#">accessory gift sets</a></li>
                                                                <li><a href="#">travel accessories</a></li>
                                                                <li><a href="#">phone cases</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">belts & more</a></li>
                                                <li><a href="#">wearable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Heating & Cooling</a></li>
                                <li><a href="#">All accessories </a></li>
                                <li><a href="#">All Electronics </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- menu --}}
                <div class="col-xl-9">
                    <div class="main-nav-center">
                        <nav class="text-start">
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li class="{{request()->routeIs('inicio') ? 'active' : ''}}">
                                    <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                                {{-- nosotros --}}
                                <li class="mega" id="hover-cls">
                                    <a href="#">nosotros </a>

                                </li>
                                {{-- catalogo de productos --}}
                                <li>
                                    <a href="#">catalogo de productos</a>
                                    <ul>
                                        <li><a href="category-page(vegetables).html">tab style<span
                                                    class="new-tag">new</span></a></li>
                                        <li><a href="category-page(top-filter).html">top filter</a></li>
                                        <li><a href="category-page(modern).html">modern</a></li>
                                        <li><a href="category-page.html">left sidebar</a></li>
                                        <li><a href="category-page(right).html">right sidebar</a></li>
                                        <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                        <li><a href="category-page(sidebar-popup).html">sidebar popup</a>
                                        </li>
                                        <li><a href="category-page(metro).html">metro</a></li>
                                        <li><a href="category-page(full-width).html">full width</a></li>
                                        <li><a href="category-page(infinite-scroll).html">infinite
                                                scroll</a></li>
                                        <li><a href=category-page(3-grid).html>three grid</a></li>
                                        <li><a href="category-page(6-grid).html">six grid</a></li>
                                        <li><a href="category-page(list-view).html">list view</a></li>
                                    </ul>
                                </li>
                                {{-- ofertas --}}
                                <li>
                                    <a href="#">ofertas</a>
                                </li>
                                {{-- distribuidores --}}
                                <li>
                                    <a href="#">distribuidores</a>
                                </li>
                                {{-- contacto --}}
                                <li class="{{request()->routeIs('contacto') ? 'active' : ''}}">
                                    <a href="{{ route('contacto')}}">contacto</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
