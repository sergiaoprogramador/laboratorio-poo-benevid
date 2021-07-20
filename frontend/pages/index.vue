<template>
  <v-row justify="center" align="center">
    <v-col cols="12" sm="6" md="5">
      <FiltersSearchAutocomplete
        :items="products"
        :value="null"
      />
    </v-col>
    <v-col  cols="12" sm="2" md="1">
      <FiltersSortSelect
        :items="['Newest', 'Lowest', 'Highest']"
        :value="null"
      />
    </v-col>
  </v-row>
</template>

<script>
export default {
  data: () => ({
    productItems: {}
  }),
  async asyncData({ $axios }) {
    const products = await $axios.$get('products');
    const productsItems = products.data.map(function(value, key) {
      return {name: value.name, id: value.id};
    })
    return { products: productsItems }
  }
}
</script>
