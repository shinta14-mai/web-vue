<template>
    <div>
        <h1>Edit Status</h1>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label>Status</label>
                <input type="text" v-model="form.verifikasi">
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
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
export default {
    data(){
        return{
            form: {
                verifikasi: this.st.verifikasi,
            }
        }
    },
    props: {
        st: Object
    },
    methods: {
        submit(){
            this.$inertia.put('/st/' + this.st.id, this.form)
        },
    }
}
</script>