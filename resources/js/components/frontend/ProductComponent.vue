<template>
    <div class="card h-100">
        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="#">{{ product.name }}</a>
            </h4>
            <p class="card-text">
                {{ product.name }}
            </p>
        </div>
        <div class="card-footer">
            <p>Precio: ${{ product.price }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductComponent",
    props: ['product'],
    data() {
        return {
            datos: ''
        }
    }
}
</script>
