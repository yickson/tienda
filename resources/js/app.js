require('./bootstrap');
window.Vue = require('vue');

/**
 * Store
 */
import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from "./store/index";
const store = new Vuex.Store(storeData)

store.dispatch('getCart');

/**
 * Dependencies Project
 */
import {BootstrapVue} from "bootstrap-vue";
import Notifications from "vue-notification";

/**
 * Components Frontend
 */
import NavComponent from "./components/frontend/NavComponent";
import CartIconComponent from "./components/frontend/CartIconComponent";
import ProductsComponent from "./components/frontend/ProductsComponent";
import ProductDescription from "./components/frontend/ProductDescription";
import CartComponent from "./components/frontend/CartComponent";

Vue.component('nav-component', NavComponent);
Vue.component('cart-icon-component', CartIconComponent);
Vue.component('products-component', ProductsComponent);
Vue.component('product-description-component', ProductDescription);
Vue.component('cart-component', CartComponent);

Vue.use(BootstrapVue);
Vue.use(Notifications);

const app = new Vue({
    el: '#app',
    store
});
