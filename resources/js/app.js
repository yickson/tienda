require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex';
Vue.use(Vuex);
import storeData from "./store/index";

const store = new Vuex.Store(storeData)

import {BootstrapVue} from "bootstrap-vue";

import ProductsComponent from "./components/frontend/ProductsComponent";
import ProductDescription from "./components/frontend/ProductDescription";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products-component', ProductsComponent);
Vue.component('product-description-component', ProductDescription);

Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app',
    store
});
