<script setup lang="ts">
// Werte an Komponente zu übergeben
defineProps<{
  greet: string
}>()
// Reaktive Variable als model für unser Eingabefeld
const model = ref<string>('World')
const name = ref<string>('')

// Wir holen die Daten von der Hello API und übergeben
// die reaktive Variable "name". Wird diese Variable
// geändert, so wird der fetch neu ausgeführt.
useFetch('/api/hello', {
  params: {
    name: model
  },
  onResponse({ request, response, options }) {
    console.log(JSON.stringify(response, null, 2))
    name.value = response._data.name
  }
})
const foo = ref<string>('Meine neue Variable')
</script>

<template>
<h1>{{ greet }} {{ name }}</h1>
  <v-text-field
   v-model="model"
   variant="outlined"
   label="name"
  ></v-text-field>

  {{ foo }}
</template>

