<template>
    <Layout>
        <h1 class="text-4xl font-bold"> Settings </h1>
    </Layout>


    <div class="mt-96">
        <p>the current time is {{ time }}.</p>
    </div>

    <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>
</template>

<script>
import Nav from "../shared/Nav";
import {Link} from "@inertiajs/inertia-vue3";
import Layout from "../shared/Layout";

export default {
    name: "Users",
    props: {
        time: String
    },
    components: {
        Nav,
        Link,
        Layout
    }
}
</script>

<style scoped>

</style>
