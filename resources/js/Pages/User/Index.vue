<template>
<Layout>
    <div>
    <h1> {{ title }} List</h1>
    <Link href="/users/create">Register</Link>
    <div v-if="$page.props.flash.message" class="alert">
        {{ $page.props.flash.message }}
    </div>
    <ul>
        <li v-for="users in users">
            <p>{{ users.name }}</p>
            <Link :href="`/users/${users.id}`">Details</Link>
        </li>
    </ul>
</div>
</Layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout.vue';
export default {
    props: {
        title: String,
        users: Array
    },
    components: {
        Link,
        Layout,
    }
}
</script>