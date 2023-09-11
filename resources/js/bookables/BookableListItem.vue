<template>
    <div class="card  w-100">
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">
                {{ description }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    // props : ["title", "description", "price"],
    props: {
        title: String,
        description: String
    },
    mounted() {
        // Newer update props, updates need to happen in data()
        console.log("Component List Item mounted:");
        // console.log("Iitem title : ", this.title);
        // console.log("Iitem description : ", this.description);
    }
};
</script>
