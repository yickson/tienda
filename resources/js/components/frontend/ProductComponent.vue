<template>
    <div class="col-lg-4 col-md-6 mb-4">
        <b-card
            :title="product.name"
            img-src="http://placehold.jp/700x400.png"
            img-alt="Image"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-2"
        >
            <b-card-text>
                <p>
                    {{ product.description }}
                </p>
                <p>
                    Precio: ${{ product.price }}
                </p>
            </b-card-text>

            <b-button-group>
                <b-button @click="addQuantity" variant="primary">+</b-button>
                <b-button variant="primary">{{ quantity }}</b-button>
                <b-button @click="delQuantity" variant="primary">-</b-button>
            </b-button-group>
            <b-button @click="addProduct(product.id)" v-b-tooltip.hover title="Agregar producto" variant="primary">
                <i class="fas fa-cart-arrow-down"></i>
            </b-button>
            <b-link href=""></b-link>
            <b-button @click="seeProduct(product.id)" v-b-tooltip.hover title="Ver producto" variant="primary">
                <i class="far fa-eye"></i>
            </b-button>
        </b-card>
        <notifications group="products" />
    </div>
</template>

<script>
export default {
    name: "ProductComponent",
    props: ['product'],
    data() {
        return {
            quantity: 1
        }
    },
    methods: {
        addQuantity() {
            this.quantity++;
        },
        delQuantity() {
            this.quantity > 1 ? this.quantity-- : this.quantity;
        },
        addProduct(product) {
            axios.post('updateCart', {'productId': product, 'quantity': this.quantity})
                .then(result => {
                    const {totalItems} = result.data.cart
                    this.$store.dispatch('modifyQuantity', totalItems)
                    this.$notify({
                        group: 'products',
                        title: 'Producto',
                        text: '¡Ha sido agregado exitosamente!'
                    });
                }).catch(err => console.log(err));
        },
        seeProduct(product) {
            window.location.href = window.location + `product/${product}`;
        }
    }
}
</script>
