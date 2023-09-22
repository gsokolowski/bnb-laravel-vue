<template>
    <div class="card  w-100">
        <div class="card-body">
            <!--this is how you add link to title passing id of bookable-->
            <router-link :to="{ name: 'bookable', params: { id } }">
                <h5 class="card-title">{{ title }}</h5>
            </router-link>
            <p class="card-text"> {{ description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    // props : ["title", "description", "price"],
    props: {
        title: String,
        description: String,
        id: Number
    },
    mounted() {
        // Newer update props, updates need to happen in data()
        console.log("Component List Item mounted:")
    }
};
</script>
