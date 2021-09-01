<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Registrasi Andalalin</title>
<center>
  <div class="container p-3 my-3 border"  v-for="ad1 in andal.data" :key="ad1.id">
  <h2>Haloo {{ andal.code }} </h2>
  <h2>Status Anda : {{ andal.verifikasi }} </h2>
  <Link href="/">Back to Home</Link>
  </div>
</center>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        andal: Object,
    },
    components: {
        Link,
    }
}
</script>

<style>
</style>