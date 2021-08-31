<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="row">
  <div class="col-2">
    <Layout></Layout>
  </div>
  <div class="col-10">
         <div class="row">
      <div class="col-md-6">
      <input type="text"> 
      </div>
      <div class="col-md-2">
       <button type="button" name="search" id="search" class="btn btn-success">Search</button>
      </div>
     </div>
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
    <tr v-for="ad1 in admin" :key="ad1.id">
      <td>{{ad1.code}}</td>
      <td>{{ad1.nama_pemohon}}</td>
      <td>
        {{ad1.verifikasi}}
        <Link :href="`/andal/${ad1.id}/edit`">Edit</Link>
      </td>
      <td>
        <Link :href="`/andal/${ad1.id}`">Lihat Berkas</Link>
      </td>
    </tr>
  </tbody>
  </table>
</div> -->
</div> 
</div>  
<div class="p-5 flex justify-end">
  <Link class="px-2" :href="halaman.prev_page_url">Previous</Link>
  <Link class="px-2" :href="halaman.next_page_url">Next</Link>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Sidebar.vue';
export default {
    props: {
    admin: Array,
    halaman: Object
  },
    components: {
    Layout,
    Link
    },

    //   data() {
    //     return {
    //         keyword: null,
    //         TbAndalalin: []
    //     };
    // },
    // watch: {
    //     keyword(after, before) {
    //         this.getResults();
    //     }
    // },
    // methods: {
    //     getResults() {
    //         axios.get('/andal/action', { params: { keyword: this.keyword } })
    //             .then(res => this.Books = res.data)
    //             .catch(error => {});
    //     }
    // }

}
</script>

<style>
.table-responsive{
  padding: 10px;
}

</style>