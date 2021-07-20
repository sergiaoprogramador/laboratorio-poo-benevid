<template>
  <v-row class="justify-center align-center">
    <v-col cols="12" class="mt-10 mb-10">
      <v-pagination
        v-model="pagination.current_page"
        :length="meta.total"
        :value="meta.current_page"
        :total-visible="5"
        @input="onPageChange"
      >
      </v-pagination>
    </v-col>
  </v-row>
</template>

<script>
  export default {
    props: {
      products: {
        type: Array
      },
      links: {
        type: Object
      },
      meta: {
        type: Object
      }
    },
    methods: {
      async onPageChange() {
        const response = await fetch(
          '/products'
        ).then(res => res.json());
        console.log(response)
      }
    }
  }

</script>
