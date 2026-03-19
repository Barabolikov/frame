
<template>
    <div class="border p-2 mt-2 rounded bg-light">
        <p class="mb-1 text-muted"><small>ID Товару в БД: {{ productId }}</small></p>

        <div class="d-flex align-items-center">
            <span class="me-3">В наявності: <strong>{{ currentStock }}</strong> шт.</span>

            <button @click="decrease" class="btn btn-sm btn-outline-danger me-1">-</button>
            <button @click="increase" class="btn btn-sm btn-outline-success">+</button>
        </div>
    </div>
</template>
<script setup>
    import { ref } from 'vue';

    const props = defineProps({
        productId: Number,
        initialStock: Number
    })

    const currentStock = ref(props.initialStock);

    const increase = () => {
        currentStock.value++;
    }

    const decrease = () => {
        currentStock.value--;
    }

</script>
<style scoped>

</style>
