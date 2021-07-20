<template>
  <v-card
    :loading="loading"
    class="mx-auto my-12"
    max-width="374"
    elevation="4"
  >
  <template slot="progress">
    <v-progress-linear
      color="deep-purple"
      height="10"
      indeterminate
    ></v-progress-linear>
  </template>

  <v-img
    height="250"
    :src="product.image"
  ></v-img>

  <v-card-title>{{ product.name }}</v-card-title>

  <v-card-text>
    <v-row
      align="center"
      class="mx-0"
    >
      <v-rating
        :value="4.5"
        color="amber"
        dense
        half-increments
        readonly
        size="14"
      ></v-rating>

      <div class="grey--text ms-4">
        4.5 (413)
      </div>
    </v-row>

    <div class="my-4 text-subtitle-1">
      $ • {{ product.brand }}
    </div>

    <div>{{ product.description }}</div>
  </v-card-text>

  <v-divider class="mx-4"></v-divider>

  <v-card-text>
      <span class="text-h4 deep-orange--text">$ {{ product.price }}</span>
  </v-card-text>

  <v-card-actions>
    <v-btn
      color="green darken-3 white--text"
      block
      @click="buy"
    >
      Comprar Agora
    </v-btn>
  </v-card-actions>
  </v-card>
</template>

<script>
export default {
  props: ['product'],
  data: () => ({
    loading: false,
    selection: 1,
  }),

  methods: {
    buy () {
      this.loading = true

      setTimeout(() => (this.loading = false), 2000)
    },
  },
}
</script>
