<template>
    <div class="card" style="width: 20rem;" >
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">
                {{ content }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    // props : ["title", "content", "price"],
    props: {
        title: String,
        content: String
    },
    mounted() {
        // Newer update props, updates need to happen in data()
        console.log("Component List Item mounted:");
        console.log("Iitem title : ", this.title);
    }
};
</script>
