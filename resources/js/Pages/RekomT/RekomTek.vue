<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="row">
  <div class="col-2">
    <Layout></Layout>
  </div>
  <div class="col-10">
      <div class="table-responsive">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Kode Reg</th>
      <th scope="col">Nama Pemohon</th>
      <th scope="col">Status</th>
      <th scope="col">Persyaratan</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="ad1 in rt" :key="ad1.id">
      <td>{{ad1.code}}</td>
      <td>{{ad1.nama_pemohon}}</td>
      <td>
        {{ad1.verifikasi}}
        <Link :href="`/rt/${ad1.id}/edit`">Edit</Link>
      </td>
      <td>
        <Link :href="`/rt/${ad1.id}`">Lihat Berkas</Link>
      </td>
    </tr>
  </tbody>
  </table>
</div>
  </div> 
</div>  
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Sidebar.vue';
export default {
    props: {
    rt: Array
  },
    components: {
    Layout,
    Link
    }

}
</script>

<style>
.table-responsive{
  padding: 10px;
}

</style>