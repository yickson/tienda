<template>
    <div>
        <b-card bg-variant="light" header="Carro de compra" class="text-center">
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
            <b-button @click="emptyCart" variant="danger">
                Vaciar carro <i class="fas fa-trash"></i>
            </b-button>
        </b-card>
    </div>
</template>

<script>
export default {
    name: "CartComponent",
    mounted() {
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
                    const {items, totalAmount, totalItems} = result.data
                    this.items = items
                    this.totalAmount = totalAmount
                    this.totalItems = totalItems
                    this.$refs.cart.refresh()
                })
                .catch( err => console.log(err))
        },
        emptyCart() {
            axios.get('emptyCart')
                .then(result => {
                    if (result.data) {
                        this.items = []
                    }
                })
                .catch(err => console.log(err))
        }
    }
}
</script>