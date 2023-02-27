<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ content }}</p>
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
