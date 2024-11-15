<script setup lang="ts">
const name = ref<string>('')
</script>

<template>
  <h1>Hello {{ name }}</h1>
<child-model
  v-model="name"
></child-model>
</template>
