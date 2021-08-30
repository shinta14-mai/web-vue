<template>
<Layout>
    <div>
    <h1>{{ title }}</h1>
    <ul>
        <li>
            <h3>{{ user.name }}</h3>
            <p>Email: <strong> {{ user.email }} </strong></p>
            <Link href="/users">Back</Link>
            <a href="" @click.prevent="deleteAdmin">Delete</a>
            <Link :href="`/users/${user.id}/edit`">Edit</Link>
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
        user: Object
    },
    components: {
        Link,
        Layout,
    },
    methods: {
        deleteAdmin(){
            this.$inertia.delete('/users/' + this.user.id)
        }
    }
}
</script>