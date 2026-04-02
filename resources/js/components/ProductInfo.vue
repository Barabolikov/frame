<template>
    <div class="p-3 bg-light border rounded text-center my-3">
        <p>Товар додано: <strong class="text-primary">{{ item.created_at }}</strong></p>
        <p>ШУтка така собі - {{ item.price }}</p>
        <p class="shov1">ШУтка 2 - {{ item.description }}</p>
    </div>
</template>

<script setup>
    import { ref } from 'vue';

    const props = defineProps({
        item: Object
    })




</script>
<style scoped>
h3 {
    color:red;
}
</style>
