<template>
  <div>
    <h1>Header :{{ title }}</h1>
    <slot></slot>
  </div>
</template>

<script setup>
const props = defineProps({
  title: String,
})
</script>

<style></style>
