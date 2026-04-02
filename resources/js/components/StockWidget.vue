
<template>
    <div class="border p-2 mt-2 rounded bg-light">
        <p class="mb-1 text-muted"><small>ID Товару в БД: {{ productId }}</small></p>
        <span class="me-3">Вартість: <strong>{{ priceTovar }}</strong> грн.</span>
        <div class="d-flex align-items-center">
            <span class="me-3">Кількість: <strong>{{ currentStock }}</strong> шт.</span>

            <button @click="decrease" class="btn btn-sm btn-outline-danger me-1">-</button>
            <button @click="increase" class="btn btn-sm btn-outline-success">+</button>
        </div>
    </div>
</template>
<script setup>
    import { ref } from 'vue';

    const props = defineProps({

        productId: Number,
        initialStock: Number,
        priceTovar:Number
    })

    const currentStock = ref(props.initialStock);
    const priceTovar = ref(props.priceTovar);
    const price= ref(props.priceTovar);

    const increase = () => {
        currentStock.value++;
        priceTovar.value=currentStock.value*price.value;
    }

    const decrease = () => {
        currentStock.value--;
        priceTovar.value=currentStock.value*price.value;
    }

</script>
<style scoped>

</style>
