<template>
    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
        <a href="#">
            <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1555982105-d25af4182e4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
            <div class="pt-3 flex items-center justify-between">
                <p class="">Productos</p>
            </div>
            <div class="inline-flex">
                <button @click="addQuantity" class="bg-gray-200 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                    +
                </button>
                <button class="bg-gray-200 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
                    {{ quantity }}
                </button>
                <button @click="delQuantity" class="bg-gray-200 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                    -
                </button>
            </div>
            <div class="inline-flex">
                <button @click="addProduct(product.id)" class="bg-gray-300 hover:bg-gray-400 text-gray-600 font-bold py-2 px-2 rounded">
                    Agregar
                </button>
            </div>
            <p class="pt-1 text-gray-900">{{ product.price}}</p>
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getProducts()
        },
        data() {
            return {
                'quantity': 1,
                'product': ''
            }
        },
        methods: {
            getProducts() {
                axios.get('list_product')
                    .then(result => {
                        console.log(result.data);
                        this.product = result.data;
                    }).catch( err => console.log(err));
            },
            addQuantity() {
                this.quantity++;
            },
            delQuantity() {
                this.quantity >= 1 ? this.quantity-- : this.quantity;
            },
            addProduct(product) {
                axios.post('add_product', {'product': product, 'quantity': this.quantity})
                    .then(result => {
                        console.log(result.data);
                    }).catch(err => console.log(err));
            }
        }
    }
</script>
