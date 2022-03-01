<template>

    <h1>Hello, {{ name }}</h1>
</template>

<script>
export default {
    name: "Welcome",
    props: {
        name: String,
    }
}
</script>

<style scoped>

</style>
