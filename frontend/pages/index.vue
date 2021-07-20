<template>
  <div id="home">
    <v-row justify="center" align="center">
      <v-col cols="12" sm="6" md="5">
        <FiltersSearchAutocomplete
          :items="productItems"
        />
      </v-col>
      <v-col  cols="12" sm="2" md="1">
        <FiltersSortSelect
          :items="['Newest', 'Lowest', 'Highest']"
          :value="null"
        />
      </v-col>
    </v-row>
    <v-row>
      <v-col
        cols="12"
        sm="4"
        v-for="product in products.data"
        :key="product.id"
      >
        <ProductCard
          :product="product"
        />
      </v-col>
    </v-row>
    <v-row justify="center" align="center" class="mb-10">
      <v-pagination
        v-model="page"
        :length="meta.last_page"
        :value="meta.current_page"
        :total-visible="5"
        @input="onPageChange"
      ></v-pagination>
    </v-row>
  </div>
</template>

<script>
export default {
  data: () => ({
    productItems: null,
    links: null,
    meta: null,
    page: 1
  }),
  async asyncData({ $axios }) {
    const products = await $axios.$get('products');
    return { products }
  },
  created() {
    this.productItems = this.products.data.map(function (value, key) {
      return {name: value.name, id: value.id};
    });
    this.links = this.products.links;
    this.meta = this.products.meta;
  },
  methods: {
    async onPageChange() {
      this.products = await this.$axios.$get('products?page=' + this.page);
    }
  }
}
</script>
