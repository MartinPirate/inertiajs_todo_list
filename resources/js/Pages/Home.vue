<template>

    <h1>Hello, {{ name }}</h1>

    <p>In this project we are using the following frameworks</p>
    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
export default {
    name: "Home",
    props: {
        name: String,
        frameworks: Array,

    },
}
</script>

<style scoped>

</style>
