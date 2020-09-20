export default {
    state: {
        products: [
            {
                productId: 5,
                name: "Durable Marble Pants",
                price: 384,
                quantity: 2,
                amount: 768
            }
        ],
        StoreCart: [],
    },
    getters: {
        products: (state) => state.products,
        StoreCart: (state) => state.StoreCart,
    },

    mutations: {
        ADD_Item(state, id) {
            state.StoreCart.push(id);
        },

        REMOVE_Item(state, index) {
            state.StoreCart.splice(index, 1);
        },
    },
    actions: {

        addItem(context, id) {
            context.commit("ADD_Item", id);
        },

        removeItem(context, index) {
            context.commit("REMOVE_Item", index);
        },
    }
}