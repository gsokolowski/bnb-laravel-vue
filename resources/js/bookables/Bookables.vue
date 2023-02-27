<template>
    <div class="container">
        <div v-if="loading">
            <p class="text">data is loading...</p>
        </div>
        <div v-else>
            <bookable-list-item
                :title="bookable.title"
                :content="bookable.content"
                :price="1000"
                v-for="bookable in bookables"
                :key="bookable.id"
            ></bookable-list-item>
        </div>
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
            // data will load from API here
            loading: false, // don't show text loading page
            bookables: null
        };
    },

    created() {
        this.loading = true; // show text loading page when props are inicialised
        // change name automativally after 5seconds
        setTimeout(() => {
            this.bookables = [
                {
                    id: 1,
                    title: "Cheap Villa",
                    content: "Very Cheap Villa"
                },
                (this.bookable2 = {
                    id: 2,
                    title: "Cheap Villa 2",
                    content: "Very Cheap Villa 2"
                })
            ];
            this.loading = false; // don't show text loading page
        }, 2000);
    }
};
</script>

<style scoped></style>
