<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div v-if="!loading">
                        <h2>{{ bookable.title }}</h2>
                        <hr />
                        <article>{{ bookable.description }}</article>
                    </div>
                    <div v-else>Loading...</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">availability & prices</div>
    </div>
</template>


<script>
    export default {

        // define in data if you want your components to be reactive
        data() {
            return {
                bookable: null,
                loading: false // data is not availabe imidiately so depending on that flag display text loading
                                // or not data in template above
            };
        },

        // get one bookable data from server
        created() {
            console.log(this.$route.params.id); //accesing parameter passed through URL
            this.loading = true; // show text loading page when props are inicialised

            const request = axios
            .get(`/api/bookables/${this.$route.params.id}`) //api call
            .then(response => {
                this.bookable = response.data.data; // api response data passed to bookable in data()
                this.loading = false;
            }, 2000);
        }

    }
</script>
