<template>
    <div class="p-3 bg-light border rounded text-center my-3">
        <p>Кількість кліків: <strong class="text-primary">{{ count }}</strong></p>
        <button @click="increment" class="btn btn-success">+ Додати</button>
        <button @click="decrement" class="btn btn-danger">- Відняти</button>
    </div>
</template>

<script setup>
    import { ref } from 'vue';

    const count = ref(0);

    const increment= () => {
        count.value++;
    };

    const decrement= () => {
        count.value--;
    };


</script>
<style scoped>
h3 {
    color:red;
}
</style>
