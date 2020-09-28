<template>
    <div>
        <b-card v-if="items.length > 0" bg-variant="light" header="Carro de compra" class="text-center">
            <b-table
                striped
                bordered
                hover
                :fields="fields"
                :items="items"
                ref="cart"
            >
                <template v-slot:cell(actions)="item">
                    <b-button-group>
                        <b-button @click="updateCart(item.item.productId, 1)" variant="primary">+</b-button>
                        <b-button variant="primary">{{ item.item.quantity }}</b-button>
                        <b-button @click="updateCart(item.item.productId, -1)" variant="primary">-</b-button>
                    </b-button-group>
                </template>
            </b-table>
            <div class="row mt-3">
                <div class="col-6">
                    <b-button @click="emptyCart" variant="danger">
                        Vaciar <i class="fas fa-trash"></i>
                    </b-button>
                </div>
                <div class="col-6">
                    <b-link class="btn btn-primary" href="/payment">
                        Pagar <i class="fas fa-money-bill-wave"></i>
                    </b-link>
                </div>
            </div>
        </b-card>
        <b-card v-else bg-variant="light" header="Carro de compra" class="text-center">
            <b-card-text>
                No tienes ningún producto agregado al carro
            </b-card-text>
        </b-card>
    </div>
</template>

<script>
export default {
    name: "CartComponent",
    created() {
        this.getCart()
    },
    data() {
        return {
            fields: [
                { key: 'productId', label: 'Id Producto' },
                { key: 'name', label: 'Nombre' },
                { key: 'price', label: 'Precio' },
                { key: 'amount', label: 'Monto'},
                { key: 'actions', label: 'Acciones'}
            ],
            items: [],
            totalAmount: 0,
            totalItems: 0,
            quantity: 0
        }
    },
    methods: {
        getCart() {
            axios.get('getCart')
                .then( result => {
                    const {items, totalAmount, totalItems} = result.data
                    this.items = items
                    this.totalAmount = totalAmount
                    this.totalItems = totalItems
                })
                .catch( err => console.log(err))
        },
        updateCart(productId, quantity) {
            axios.post('updateCart', {'productId': productId, 'quantity': quantity})
                .then(result => {
                    if (result.data.response) {
                        const {items, totalAmount, totalItems} = result.data.cart
                        this.$store.dispatch('modifyQuantity', totalItems)
                        this.items = items
                        this.totalAmount = totalAmount
                        this.totalItems = totalItems

                        this.$refs.cart.refresh()
                    }
                })
                .catch( err => console.log(err))
        },
        emptyCart() {
            axios.get('emptyCart')
                .then(result => {
                    if (result.data) {
                        this.$store.dispatch('modifyQuantity', 0)
                        this.items = []
                    }
                })
                .catch(err => console.log(err))
        }
    }
}
</script>