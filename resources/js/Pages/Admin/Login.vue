<template>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
<Layout>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="content">
                            <h2 class="text-center">Login Now</h2>
                            <form @submit.prevent="submit">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input v-model="admin.email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input v-model="admin.password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<br>
</Layout>
</template>

<style>
.login{
    background-image: url('https://i.pinimg.com/236x/e5/4e/36/e54e36f829420cb721c6a56d71a400ef.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.container{
    padding: 5rem;
    
}

.content{
    margin: 2rem;
}

.card{
    background: transparent;
    /* padding-top: 2rem; */
    padding-bottom: 2rem;
}

</style>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
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
    },
    setup () {
    const admin = useForm({
        email: null,
        password: null,
    })
    function submit() {
      admin.get('/admin', this.admin)
    }
    return { admin, submit }
  },
}
</script>