<template>
    <Layout>
    <div>
        <h1>Edit Profile</h1>
        <form @submit.prevent="update">
            <div class="form-group">
                <label>Name</label>
                <input type="text" v-model="form.name">
                <p v-if="errors.name" class="errors">{{ errors.name }}</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" v-model="form.email">
                <p v-if="errors.email" class="errors">{{ errors.email }}</p>
            </div>

            <button type="submit">Update</button>
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
        errors: Object,
        user: Object
    },
    data(){
        return{
            form: {
                name: this.user.name,
                email: this.user.email,
            }
        }
    },
    methods: {
        update(){
            this.$inertia.put('/users/' + this.user.id, this.form)
        },
    }
}
</script>