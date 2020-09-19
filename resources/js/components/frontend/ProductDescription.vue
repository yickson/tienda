<template>
    <div class="row">
        <div class="mt-4">
            <h4>{{ product.name }}</h4>
            <b-card img-src="https://placekitten.com/300/300" img-alt="Card image" img-left class="mb-3">
                <b-card-text>
                    <p>Id del producto:</p>
                    <p>{{ product.description }}</p>
                </b-card-text>
            </b-card>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductDescription",
    props: ['product_id'],
    mounted() {
        this.getProduct(this.product_id)
    },
    data() {
        return {
            product: {}
        }
    },
    methods: {
        getProduct() {
            axios.get(`../get_product/${this.product_id}`)
                .then(result => {
                    console.log(result.data)
                    this.product = result.data;
                })
                .catch(err => console.log(err))
        }
    }
}
</script>