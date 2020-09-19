<template>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4" v-for="product in products">
            <product-component :product = product></product-component>
        </div>
    </div>
</template>

<script>
import ProductComponent from "./ProductComponent";
export default {
    name: "ProductsComponent",
    mounted() {
        this.getProducts()
    },
    components: {
      ProductComponent
    },
    data() {
        return {
            products: []
        }
    },
    methods: {
        getProducts() {
            axios.get('list_product')
                .then(result => {
                    console.log(result.data);
                    this.products = result.data;
                }).catch( err => console.log(err));
        },
    }
}
</script>