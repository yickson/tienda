require('./bootstrap');
window.Vue = require('vue');

/**
 * Store
 */
import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from "./store/index";
const store = new Vuex.Store(storeData)

/**
 * Bootstrap Vue
 */
import {BootstrapVue} from "bootstrap-vue";

/**
 * Components Frontend
 */
import ProductsComponent from "./components/frontend/ProductsComponent";
import ProductDescription from "./components/frontend/ProductDescription";
import CartComponent from "./components/frontend/CartComponent";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products-component', ProductsComponent);
Vue.component('product-description-component', ProductDescription);
Vue.component('cart-component', CartComponent);

Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
    store
});
