<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="table-responsive">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Alamat Pemohon</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Jenis/Nama Usaha</th>
      <th scope="col">Alamat Usaha</th>
      <th scope="col">Luas Lahan</th>
      <th scope="col">Luas Bangunan</th>
      <th scope="col">Status Lahan</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="ad1 in admin" :key="ad1.id">
      <td>{{ad1.alamat_pemohon}}</td>
      <td>{{ad1.no_tlp}}</td>
      <td>{{ad1.jenis_usaha}}</td>
      <td>{{ad1.alamat_usaha}}</td>
      <td>{{ad1.luas_lahan}}</td>
      <td>{{ad1.luas_bangunan}}</td>
      <td>{{ad1.status_lahan}}</td>
      <td>{{ad1.email}}</td>
    </tr>
  </tbody>
  </table>
</div>
<br><br><br>
<div class="table-responsive">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Surat Pemohon</th>
      <th scope="col">KTP</th>
      <th scope="col">Sertifikat Tanah</th>
      <th scope="col">KTR</th>
      <th scope="col">Rencana Tapak</th>
      <th scope="col">Desain Bangunan</th>
      <th scope="col">Company Profile</th>
      <th scope="col">Sertifikat Penyusun</th>
      <th scope="col">Dokumen Andalalin</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="ad1 in admin" :key="ad1.id">
      <td>
        <a :href="`/img/${ad1.surat_pemohon}`" target="_blank" rel="noopener noreferrer">{{ad1.surat_pemohon}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.ktp}`" target="_blank" rel="noopener noreferrer">{{ad1.ktp}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.sertifikat_tanah}`" target="_blank" rel="noopener noreferrer">{{ad1.sertifikat_tanah}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.ktr}`" target="_blank" rel="noopener noreferrer">{{ad1.ktr}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.rencana_tapak}`" target="_blank" rel="noopener noreferrer">{{ad1.rencana_tapak}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.desain_bangunan}`" target="_blank" rel="noopener noreferrer">{{ad1.desain_bangunan}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.company_profile}`" target="_blank" rel="noopener noreferrer">{{ad1.company_profile}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.sertifikat_penyusun}`" target="_blank" rel="noopener noreferrer">{{ad1.sertifikat_penyusun}}</a>
      </td>
      <td>
        <a :href="`/img/${ad1.dokumen_andalalin}`" target="_blank" rel="noopener noreferrer">{{ad1.dokumen_andalalin}}</a>
      </td>

    </tr>
  </tbody>
  </table>
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
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        admin: Array
    },
    components: {
        Link,
    },
    // data(){
    //     return{
    //         form: {
    //             verifikasi: this.admin.verifikasi,
    //         }
    //     }
    // },
    // methods: {
    //     update(){
    //         this.$inertia.put('/admin/' + this.admin.id, this.form)
    //     },
    // }
}
</script>