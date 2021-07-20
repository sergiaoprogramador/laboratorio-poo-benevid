<template>
  <v-pagination
    v-model="page"
    :length="meta.last_page"
    :value="meta.current_page"
    :total-visible="5"
    @input="$emit('paginate')"
  ></v-pagination>
</template>

<script>
  export default {
    props: ['links', 'meta'],
    data () {
      return {
        page: this.meta.current_page,
      }
    },
    methods: {
      onPageChange() {
        this.$emit("onPageChange", false);
      },
    },
  }

</script>
