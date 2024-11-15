<script setup lang="ts">
const name = ref<string>('')
function update(event) {
  console.log(event)
  name.value = event
}
</script>

<template>
  <h1>Ich heiße {{name}}.</h1>
<child name="Hans" @update="update"></child>
</template>

