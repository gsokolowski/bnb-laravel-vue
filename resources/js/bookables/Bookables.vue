<template>
    <div class="container">
        rows {{ rows }}
        <div v-if="loading">
            <p class="text">data is loading...</p>
        </div>
        <div v-else>
            <div class="row mb-4" v-for="row in rows" :key="'unique' + row">
                <div
                    class="col d-flex align-items-stretch"
                    v-for="(bookable, columns) in bookablesInOneRow(row)"
                    :key="'row' + row + columns"
                >
                    <bookable-list-item v-bind="bookable"></bookable-list-item>
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

        const request = axios
            .get("/api/bookables")
            .then(response => {
                this.bookables = response.data; // here api response is passed to bookables in data()
                this.loading = false;
        }, 2000);
    }
};
</script>

<style scoped></style>
