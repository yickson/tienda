export default {
    state: {
        quantity: 0,
    },
    mutations: {
        MODIFY_QUANTITY(state, quantity) {
            state.quantity = quantity;
        }
    },
    actions: {
        modifyQuantity(context, quantity) {
            context.commit("MODIFY_QUANTITY", quantity)
        },
        getCart(context) {
            axios.get('/getCart')
                .then(response => {
                    const {totalItems} = response.data
                    context.commit("MODIFY_QUANTITY", totalItems)
                })
                .catch( err => console.log(err))
        }
    }
}