<template>
  <v-row justify="center" align="center">
    <v-col cols="12" sm="6" md="5">
      <v-autocomplete
        v-model="value"
        :items="items"
        color="light-blue darken-4"
        item-text="Description"
        item-value="API"
        label="Search Products"
        placeholder="Start typing to Search"
        prepend-icon="mdi-home-search"
        return-object
      ></v-autocomplete>
    </v-col>
    <v-col  cols="12" sm="2" md="1">
      <v-select
        :items="items"
        label="Sort By"
        color="light-blue darken-4"
      ></v-select>
    </v-col>
  </v-row>
</template>

<script>
export default {
  data: () => ({
    items: ['Newest', 'Lowest', 'Highest'],
    value: null,
  }),
}
</script>
