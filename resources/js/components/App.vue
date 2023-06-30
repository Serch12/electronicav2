<template>
   <div>
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
                            <img src="assets/images/logos/logoelectro.png" alt="" class="img-fluid" style="height: 145px;">
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
                        <ul>

                        </ul>
                    </div>
                    <div class="menu-right pull-right">
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="assets/images/icon/cart.png"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
                                            <span class="cart_qty_cls">{{ products.length }}</span>
                                            <ul class="show-div shopping-cart">
                                                <li v-for="(product, index) in products" :key="index">
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3"
                                                                src="assets/images/fashion/product/1.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>{{product.name}}</h4>
                                                            </a>
                                                            <h4><span>{{ product.price }}</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><router-link exact :to="{ name: 'cotizacion' }"><a href="cart.html" class="view-cart">view
                                                            cart</a></router-link></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
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
                <div class="col-xl-3">
                    <div class="category-menu d-none d-xl-block h-100">
                        <div id="toggle-sidebar" class="toggle-sidebar">
                            <i class="fa fa-bars sidebar-bar"></i>
                            <h5 class="mb-0" @click="categorias();">ver catalogo</h5>
                        </div>
                    </div>
                    <div class="sidenav fixed-sidebar marketplace-sidebar">
                        <nav>
                            <div>
                                <div class="sidebar-back text-start d-xl-none d-block"><i
                                        class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                            </div>
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                <li v-for="(cat, index) in categoriaslista" :key="index">
                                    <a href="#">{{cat.categoria}}</a>
                                    <ul class="mega-menu clothing-menu">
                                        <li>
                                            <div class="row m-0">
                                                <div class="col-xl-4">
                                                    <div class="link-section">
                                                        <a href="">{{ cat.subcategoria }}</a>

                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="main-nav-center">
                        <nav class="text-start">
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                <li :class="{'active': $route.name === 'inicio'}">
                                    <div class="mobile-back text-end">Regresar<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li><router-link exact :to="{ name: 'inicio' }">Inicio</router-link></li>
                                <li class="mega" id="hover-cls">
                                    <router-link exact :to="{ name: 'nosotros' }">Nosotros</router-link>
                                </li>
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
                                <li>
                                    <a href="#">ofertas</a>
                                </li>
                                <!-- <li>
                                    <a href="#">distribuidores</a>
                                </li>  -->
                                <li class="#">
                                    <router-link exact :to="{ name: 'contacto' }">Contacto</router-link>
                                </li>


                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <router-view></router-view>
   </div>
</template>
<script>
    export default {
        mounted(){
            this.categorias();
        },
        data(){
            return{
                categoriaslista:[],
                products: [
                    { name: 'Producto 1', price: 10 },
                    { name: 'Producto 2', price: 15 },
                    { name: 'Producto 3', price: 20 },
                    { name: 'Producto 3', price: 25 },
                ],
                cart: [],
            }
        },
        methods:{
            categorias(){
                axios.get('inicio/categorias').then(res => {
                    this.categoriaslista = res.data;
                    console.log(this.categoriaslista);
                })
            },
            addToCart(product) {
            this.cart.push(product);
            },
            removeFromCart(index) {
            this.cart.splice(index, 1);
            },
        }
    }
</script>

<style lang="stylus" scoped>

</style>
