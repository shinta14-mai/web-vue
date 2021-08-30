<template>
    <Layout>
        <Head title="Register" />
    <div>
        <h1>Register</h1>
        <form @submit.prevent="register">
            <div class="form-group">
                <label>Name</label>
                <input type="text" v-model="user.name">
                <p v-if="errors.name" class="errors">{{ errors.name }}</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" v-model="user.email">
                <p v-if="errors.email" class="errors">{{ errors.email }}</p>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" v-model="user.password">
                <p v-if="errors.password" class="errors">{{ errors.password }}</p>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
    </Layout>
</template>

<style>
.form-group{
    margin-bottom: 5px;
}
.errors{
    color: red;
}
</style>

<script>
import Layout from '../../Shared/Layout.vue';
export default {
    components: {
        Layout,
    },
    props: {
        title: String,
        errors: Object
    },
    data(){
        return{
            user: {
                name: '',
                email: '',
                password: '',
            }
        }
    },
    methods: {
        register(){
            this.$inertia.post('/users', this.user)
        }
    }
}
</script>