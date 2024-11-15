<script setup lang="ts">
const model = defineModel<string>()
</script>

<template>
<v-text-field
  v-model="model"
  variant="outlined"
  label="Text für die Eltern"
></v-text-field>
</template>

