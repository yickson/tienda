<template>
    <div class="row">
        <ProductComponent
            v-for="product in products"
            :key="product.id"
            :product="product"
        >
        </ProductComponent>
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