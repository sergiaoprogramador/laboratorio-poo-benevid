<template>
  <v-autocomplete
    v-model="value"
    :items="items"
    item-text="name"
    item-value="id"
    color="light-blue darken-4"
    label="Search Products"
    placeholder="Start typing to Search"
    prepend-icon="mdi-home-search"
    return-object
  ></v-autocomplete>
</template>

<script>
export default {
  props: ['items'],
  data: () => ({
    value: null
  }),
}
</script>
