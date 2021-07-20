<template>
  <v-select
    :items="items"
    :value="value"
    label="Sort By"
    color="light-blue darken-4"
  ></v-select>
</template>

<script>
export default {
  props: ['items', 'value']
}
</script>
