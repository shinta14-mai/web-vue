<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="row">
  <div class="col-2">
    <Layout></Layout>
  </div>
  <div class="col-10">
    <div class="p-4">
      <label for="search">Search</label>
      <input type="text" id="search" v-model="term" @keyup="search" class="ml-2 px-2 py-1 text-sm rounded border">
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
          <tr v-for="ad1 in admin.data" :key="ad1.id">
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
    </div>
  </div> 
</div> 
<div class="p-5 flex justify-end">
  <Link class="px-2" :href="admin.prev_page_url">Previous</Link>
  <Link class="px-2" :href="admin.next_page_url">Next</Link>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Sidebar.vue';
import _ from 'lodash';
export default {
  props: {
    admin: Object,
  },
  components: {
    Layout,
    Link
  },
  data(){
    return{
      term: ''
    }
  },
  methods:{
    search: _.throttle(function(){
      this.$inertia.get('/andal/', {term: this.term})
    })
  },

}
</script>

<style>
.table-responsive{
  padding: 10px;
}
.p-5{
  text-align: right;
}
</style>