/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import DetalleProducto from './components/Frontend/DetalleProductoComponent.vue'
import Home from './components/Frontend/HomeComponent.vue'
import Nosotros from './components/Frontend/NosotrosComponent.vue'
import Contacto from './components/Frontend/ContactoComponent.vue'
import App from './components/App.vue'

const routes = [
    { path: '/detalle-producto/:id',name: 'detalle-producto', component: DetalleProducto},
    { path: '/inicio',name: 'inicio', component: Home},
    { path: '/',name: 'home', component: Home},
    { path: '/nosotros',name: 'nosotros', component: Nosotros},
    { path: '/contacto',name: 'contacto', component: Contacto},
  ];  
  // export default routes;
  const router = new VueRouter({
    mode: 'history',
    base: '/ElectronicaFront/electronicav2/public', 
    routes,
  });
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('contacto-component', require('./components/Frontend/ContactoComponent.vue').default);
// Vue.component('login-component', require('./components/Auth/LoginComponent.vue').default);
// Vue.component('home-component', require('./components/Frontend/HomeComponent.vue').default);
// Vue.component('nosotros-component', require('./components/Frontend/NosotrosComponent.vue').default);
// Vue.component('detalle-producto-component', require('./components/Frontend/DetalleProductoComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    // components: {App},
    router,
    render: h => h(App)
});
