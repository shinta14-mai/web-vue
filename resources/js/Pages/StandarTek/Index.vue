<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Registrasi Standar Teknis</title>
<center>
  <div class="container p-3 my-3 border">
  <h2>Terima Kasih</h2>
  <h2>Pengajuan Anda Sedang Kami Proses</h2>
  <h3>Nomor Registrasi Anda : {{ code }}</h3>
  <Link href="/">Back to Home</Link>
  </div>
</center>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        title: Array,
        code: String,
    },
    components: {
        Link,
    }
}
</script>

<style>
</style>