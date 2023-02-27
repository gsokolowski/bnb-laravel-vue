<template>
    <div class="container">
        rows {{ rows }}
        <div v-if="loading">
            <p class="text">data is loading...</p>
        </div>
        <div v-else>
            <div class="row mb-4" v-for="row in rows" :key="'unique' + row">
                <div
                    class="col"
                    v-for="(bookable, columns) in bookablesInOneRow(row)"
                    :key="'row' + row + columns"
                >
                    <bookable-list-item
                        :title="bookable.title"
                        :content="bookable.content"
                        :price="1000"
                    ></bookable-list-item>
                </div>
                <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholder' + row + p"></div>
            </div>
        </div>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem.vue";

export default {
    components: {
        BookableListItem
    },
    // define in data if you want your components to be reactive
    data() {
        return {
            // data will load from API here
            bookables: null,
            loading: false, // don't show text loading page
            columns: 3
        };
    },
    // you can define your own local methodes here
    // computed are recalculated automatically when one of the propery in the function changes
    // you cant pass parameters into computed methodes under computed lifecircle hook
    computed: {
        rows() {
            return this.bookables == null
                ? 0
                : Math.ceil(this.bookables.length / this.columns);
        }
    },
    // you can define your own local methodes here
    // they are not comuted automatically
    // you can pass parrameters into methods defined under methodes lifecircle hook
    methods: {
        bookablesInOneRow(row) {
            return this.bookables.slice(
                (row - 1) * this.columns,
                row * this.columns
            );
        },
        placeholdersInRow(row) {
            return this.columns - this.bookablesInOneRow(row).length;
        }
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
                {
                    id: 2,
                    title: "Cheap Villa 2",
                    content: "Very Cheap Villa 2"
                },
                {
                    id: 3,
                    title: "Cheap Villa 3",
                    content: "Very Cheap Villa 3"
                },
                {
                    id: 4,
                    title: "Cheap Villa 4",
                    content: "Very Cheap Villa 4"
                },
                {
                    id: 5,
                    title: "Cheap Villa 5",
                    content: "Very Cheap Villa 5"
                },
                {
                    id: 6,
                    title: "Cheap Villa 6",
                    content: "Very Cheap Villa 6"
                },
                {
                    id: 7,
                    title: "Cheap Villa 7",
                    content: "Very Cheap Villa 7"
                }
            ];
            this.loading = false; // don't show text loading page
        }, 2000);
    }
};
</script>

<style scoped></style>
