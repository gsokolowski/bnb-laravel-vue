<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ content }}</p>
        <p>{{ price }}</p>
    </div>
</template>


<script>
export default {
    // props : ["title", "content", "price"],
    props: {
        title: String,
        content: String,
        price: Number
    }
};
</script>
