<template>
    <div>
        <!-- collection section start -->
        <section class="section-b-space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">Categorías</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox" v-for="(c,idx) in categorias" :key="idx">
                                            <input type="checkbox" class="form-check-input" :id="`zara${idx}`" :value="c.id_categoria" v-model="filtro.estatus_categoria" @change="BuscarFiltros()">
                                            <label class="form-check-label" for="zara">{{ c.categoria }}</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">Marcas</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox" v-for="(m,idx2) in marcas" :key="idx2">
                                            <input type="checkbox" class="form-check-input" :id="`twohundred${idx2}`" :value="m.id_marcas" v-model="filtro.estatus_marca" @change="BuscarFiltros()">
                                            <label class="form-check-label" for="zara">{{ m.marcas }}</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0">
                                <h3 class="collapse-block-title">Modelos</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox" v-for="(mo,idx3) in modelos" :key="idx3">
                                            <input type="checkbox" class="form-check-input" :id="`hundred${idx3}`" :value="mo.id_modelo" v-model="filtro.estatus_modelo" @change="BuscarFiltros()">
                                            <label class="form-check-label" for="hundred">{{ mo.modelo }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                    </div>
                    <div class="col">
                        <div class="collection-wrapper">
                            <div class="collection-content ratio_asos">
                                <div class="page-main-content">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                        class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <!-- <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">
                                                        <div class="search-count">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="assets/images/icon/2.png" alt=""
                                                                        class="product-2-layout-view"></li>
                                                                <li><img src="assets/images/icon/3.png" alt=""
                                                                        class="product-3-layout-view"></li>
                                                                <li><img src="assets/images/icon/4.png" alt=""
                                                                        class="product-4-layout-view"></li>
                                                                <li><img src="assets/images/icon/6.png" alt=""
                                                                        class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page</option>
                                                                <option value="Low to High">50 Products Par Page</option>
                                                                <option value="Low to High">100 Products Par Page</option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="product-wrapper-grid">
                                            <div class="row">
                                                <div class="col-xl-3 col-6 col-grid-box" v-for="(p,i) in productos" :key="i">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <router-link :to="`detalle-producto/`+p.id_producto">
                                                                    <a href="#"><img
                                                                        :src="`http://localhost/Electrica/public/ArchivosSistema/Producto/${p.imagen_principal}`"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""
                                                                        style="width: 239px;height: 215px;">
                                                                    </a>
                                                                </router-link>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                    title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button><a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                </div>
                                                                <router-link :to="`detalle-producto/`+p.id_producto">
                                                                    <h6>{{ p.producto }}</h6>
                                                                </router-link>
                                                                
                                                                <h4>${{ formatPrice(p.precio) }} mxn.</h4>
                                                                <ul class="color-variant">
                                                                    <li class="bg-light0"></li>
                                                                    <li class="bg-light1"></li>
                                                                    <li class="bg-light2"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-pagination mb-0">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item" v-if="pagination.current_page > 1"><a class="page-link" href="#!" @click.prevent="changePage(pagination.current_page -1)"
                                                                        aria-label="Previous"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-left"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active" v-for="(page, index) in pageNumber"
                                                                :key="index" @click.prevent="changePage(page)"
                                                                v-bind:class="[ page == isActived ? 'active' : '']"><a class="page-link"
                                                                        href="#!">{{ page }}</a>
                                                                </li>
                                                                <li class="page-item" v-if="pagination.current_page < pagination.last_page"><a class="page-link" href="#!" @click.prevent="changePage(pagination.current_page + 1)"
                                                                        aria-label="Next"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-right"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- collection section end -->
    </div>
</template>

<script>
    export default {
        mounted(){
        this.getProductos();
        },
        computed:{
            isActived: function () {
                return this.pagination.current_page;
            },
            pageNumber: function () {
                if (!this.pagination.to) {
                    return [];

                }
                var from = this.pagination.current_page - this.offset; // bandera offset
                if (from < 1) {
                    from = 1
                }
                var to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                var pageArray = [];
                while (from <= to) {
                    pageArray.push(from);
                    from++;
                }

                return pageArray;
            },
        },
        data(){
            return {
                marcas: [],
                modelos:[],
                categorias:[],
                productos: [],
                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0
                },
                offset: 2,
                filtro:{
                    estatus_categoria:[],
                    estatus_modelo:[],
                    estatus_marca:[]
                },
            }
        },
        methods:{
            getProductos(page){
                axios.get(`catalogo/productos?page=${page}`).then(res =>{
                    console.log(res);
                    this.productos = res.data.productos.data;
                    this.marcas = res.data.marcas;
                    this.categorias = res.data.categorias;
                    this.modelos = res.data.modelos;
                    this.pagination = res.data.pagination
                });    
            },
            BuscarFiltros(){
                const params = {
                      'estatus': this.filtro
                  }
                axios.post('catalogo/busqueda-filtro', params).then(res =>{
                    this.productos = res.data.productos.data;
                    this.pagination = res.data.pagination;
                })
            },
            changePage(page) {
                this.pagination.current_page = page;
                this.getProductos(page);
            },
            formatPrice(value) {
                let val = (value / 1).toFixed(2).replace(',', '.')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
        }
    }
</script>

<style lang="scss" scoped>

</style>