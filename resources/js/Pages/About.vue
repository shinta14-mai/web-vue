<template>
<Layout>
    <Head title="About" />
    <h1 v-text="name"></h1>
</Layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout.vue';
export default {
    props: ['name'],
    components: {
    Link,
    Layout,
    }

}
</script>