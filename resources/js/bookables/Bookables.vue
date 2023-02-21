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
    },
    // LifeCircle Hooks are used for example to fetch data from server
    // use created lifecircle for that to get data as soon as possible as it takes time to fatch data from server
    // mounted is also used for fatching data but use created as it appers ealier in lifecircle
    beforeCreate() {
        console.log("beforeCreate");
    },
    created() {
        console.log("created");
    },
    beforeMount() {
        console.log("beforeMount");
    },
    mounted() {
        console.log("mounted");
    },
    beforeDestroy() {
        console.log("beforeDestroy");
    },
    destroyed() {
        console.log("destroyed");
    },

}
</script>

<style scoped>

</style>
