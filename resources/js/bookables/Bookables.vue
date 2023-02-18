<template>
  <div class="container">
      <bookable-list-item title="Cheap villa" content="A very cheap villa" :price="1000"></bookable-list-item>
      <bookable-list-item title="Cheap villa 2" content="A very cheap villa2" :price="1500"></bookable-list-item>
</div>
</template>

<script>
import BookableListItem from './BookableListItem.vue'

export default {
    components: {
        BookableListItem
    }
}
</script>

<style scoped>

</style>
