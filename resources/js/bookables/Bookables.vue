<template>
    <div class="container">
        <bookable-list-item
            :title="bookable1.title"
            :content="bookable1.content"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item
            :title="bookable2.title"
            :content="bookable2.content"
            :price="1500"
        ></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem.vue";

export default {
    components: {
        BookableListItem
    },
    data() {
        return {
            bookable1: {
                title: "Cheap Villa",
                content: "Very Cheap Villa"
            },
            bookable2: {
                title: "Cheap Villa 2",
                content: "Very Cheap Villa 2"
            }
        };
    },
    // LifeCircle Hooks are used for example to fetch data from server
    // use created lifecircle for that to get data as soon as possible as it takes time to fatch data from server
    // mounted is also used for fatching data but use created as it appers ealier in lifecircle
    // beforeCreate() {
    //     console.log("beforeCreate");
    // },
    created() {
        console.log(" hook created called");
        console.log(this.bookable1); // this is observer function
        console.log(this.bookable2); // this is observer function

        // change name automativally after 5seconds
        setTimeout(() => {
            this.bookable1.title = "Change name into Vill Expensive"
            this.bookable1.content = "Very Expesive Villa "
        }, 5000);

    }
    // beforeMount() {
    //     console.log("beforeMount");
    // },
    // mounted() {
    //     console.log("mounted");
    // },
    // beforeDestroy() {
    //     console.log("beforeDestroy");
    // },
    // destroyed() {
    //     console.log("destroyed");
    // }
};
</script>

<style scoped></style>
