<template>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4" v-for="product in products">
            <ProductComponent :product="product"></ProductComponent>
        </div>
    </div>
</template>

<script>
import ProductComponent from "./ProductComponent";
export default {
    mounted() {
        this.getProducts()
    },
    components: {
      'ProductComponent': ProductComponent
    },
    data() {
        return {
            products: [],
            product: ''
        }
    },
    methods: {
        getProducts() {
            axios.get('list_product')
                .then(result => {
                    this.products = result.data;
                }).catch( err => console.log(err));
        },
    }
}
</script>