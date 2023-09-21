<template>
    <div>
        Bookable
    </div>
</template>


<script>
    export default {

        // define in data if you want your components to be reactive
        data() {
            return {
                bookable:null
            };
        },

        // get one bookable data from server
        created() {
            console.log(this.$route.params.id); //accesing parameter passed through URL
            this.loading = true; // show text loading page when props are inicialised
            // change name automativally after 5seconds

            const request = axios
            .get(`/api/bookables/${this.$route.params.id}`) //api call
            .then(response => {
                this.bookable = response.data, // api response data passed to bookable
                this.loading = false;
            }, 2000);
        }

    }
</script>
