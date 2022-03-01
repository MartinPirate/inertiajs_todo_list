<template>


    <nav class="mt-6">
        <ul class="list-disc">

            <li>
                <Link href="/" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline' : $page.url === '/'}"
                >Home
                </Link>
            </li>
            <li>
                <Link href="/users" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline' : $page.component === 'Users'}">Users</Link>
            </li>
            <li>
                <Link href="/todos" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline' : $page.url === '/todos'}">Todos</Link>
            </li>
            <li>
                <Link href="/settings" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline' : $page.url === '/settings'}">Settings</Link>
            </li>
            <li>
                <Link href="/logout" method="post" :data="{foo : 'bar'}" as="button"
                      class="text-blue-500 hover:underline">Logout
                </Link>
            </li>


        </ul>
    </nav>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Nav",
    components: {
        Link
    }
}
</script>

<style scoped>

</style>
