<template>
    <div class="container">
        <bookable-list-item v-if=bookable1
            :title="bookable1.title"
            :content="bookable1.content"
            :price="1000"
        ></bookable-list-item>
        <bookable-list-item v-if=bookable2
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
        // define in data if you want your components to be reactive
        return {
            bookable1: null,
            bookable2: null,
            bookable3: null,
        };
    },

    created() {
        // change name automativally after 5seconds
        setTimeout(() => {
            this.bookable1 = {
                title: "Cheap Villa",
                content: "Very Cheap Villa"
            },
            this.bookable2 = {
                title: "Cheap Villa 2",
                content: "Very Cheap Villa 2"
            }
        }, 2000);
    }

};
</script>

<style scoped></style>
