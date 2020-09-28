<template>
    <div>
        <a class="nav-link" href="/cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-pill badge-primary badge-notify">{{ quantity }}</span>
        </a>
    </div>
</template>

<script>
export default {
    name: "CartIconComponent",
    computed: {
        quantity() {
            return this.$store.state.quantity
        }
    }
}
</script>