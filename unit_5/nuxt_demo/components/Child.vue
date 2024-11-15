<script setup lang="ts">
const props = defineProps<{
  name: string
}>()

defineEmits<{
  (e:'update', value: string )
}>()

const model = ref<string>(props.name)
</script>

<template>
  <v-text-field
    v-model="model"
    variant="outlined"
    label="Gib einen Text ein"
  ></v-text-field>
  <v-btn
    @click="$emit('update', model)"
  >send to parent</v-btn>
</template>


