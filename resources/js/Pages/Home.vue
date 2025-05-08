<script setup>
// Нет необходимости писать, так как в "app.js" определно для всех страниц "page.default.layout"
import Layout from '../Layouts/Layout.vue';
// Делает так чтобы Layout-компонент стал главный для Home-компонента
defineOptions({
    layout: Layout
});
</script>

<template>
    <div>hello test 1</div>
</template>

<style scoped>

</style>
