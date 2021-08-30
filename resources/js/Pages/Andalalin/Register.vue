<template>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
<title>Andalalin</title>
<div class="container-fluid">
  <div class="row">
    <div class="col-4">
      <div>
        <h1 class="text">DINAS PERHUBUNGAN KABUPATEN BANYUWANGI</h1>
      </div>
        <a href="/img/FORMAT ANDALALIN.docx" target="_blank" rel="noopener noreferrer">Download Surat Permohonan Di Sini</a>
    </div>
    <div class="col-8">
      <form @submit.prevent="submit" enctype="multipart/form-data">
      <center>
        <h4>FORMULIR PERMOHONAN PENYUSUNAN KAJIAN TEKNIS</h4>
        <h4>PENGENDALIAN LALU LINTAS</h4>
      </center>
      <div class="form1">
        <div class="form-group">
          <label for="nama_pemohon">Nama Pemohon</label>
          <input v-model="andalalin.nama_pemohon" class="form-control">
          <p v-if="errors.nama_pemohon" class="errors">{{ errors.nama_pemohon }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Alamat Pemohon</label>
          <input v-model="andalalin.alamat_pemohon" class="form-control">
          <p v-if="errors.alamat_pemohon" class="errors">{{ errors.alamat_pemohon }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Nomor Telepon</label>
          <input v-model="andalalin.no_tlp" class="form-control">
          <p v-if="errors.no_tlp" class="errors">{{ errors.no_tlp }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Jenis/Nama Usaha</label>
          <input v-model="andalalin.jenis_usaha" class="form-control">
          <p v-if="errors.jenis_usaha" class="errors">{{ errors.jenis_usaha }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Alamat Tempat Usaha</label>
          <input v-model="andalalin.alamat_usaha" class="form-control">
          <p v-if="errors.alamat_usaha" class="errors">{{ errors.alamat_usaha }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Luas Lahan</label>
          <input v-model="andalalin.luas_lahan" class="form-control">
          <p v-if="errors.luas_lahan" class="errors">{{ errors.luas_lahan }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Luas Bangunan</label>
          <input v-model="andalalin.luas_bangunan" class="form-control">
          <p v-if="errors.luas_bangunan" class="errors">{{ errors.luas_bangunan }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Status Lahan</label>
          <input v-model="andalalin.status_lahan" class="form-control">
          <p v-if="errors.status_lahan" class="errors">{{ errors.status_lahan }}</p>
        </div>
        <div class="form-group">
          <label for="nama_pemohon">Email</label>
          <input v-model="andalalin.email" class="form-control">
          <p v-if="errors.email" class="errors">{{ errors.email }}</p>
        </div>
        <hr>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Surat Permohonan</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="surat_pemohon" @input="andalalin.surat_pemohon = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Scan KTP</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="ktp" @input="andalalin.ktp = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Scan Sertifikat Tanah</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="sertifikat_tanah" @input="andalalin.sertifikat_tanah = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Kesesuaian Tata Ruang</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="ktr" @input="andalalin.ktr = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Rencana Tapak/Site Plan</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="rencana_tapak" @input="andalalin.rencana_tapak = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Desain Bangunan</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="desain_bangunan" @input="andalalin.desain_bangunan = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Company Profile Penyusun</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="company_profile" @input="andalalin.company_profile = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Sertifikat Penyususn</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="sertifikat_penyusun" @input="andalalin.sertifikat_penyusun = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row offset-2">
            <div class="col-5">
              <label>Dokumen Andalalin</label>
            </div>
            <div class="col-7">
              <input type="file" name="file" id="dokumen_andalalin" @input="andalalin.dokumen_andalalin = $event.target.files[0]">  
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-outline-primary btn-block">Ajukan</button>
      </div>
      </form>
    </div>
  </div>
</div>
</template>

<style>
.col-8{
  padding: 30px;
}
.col-4{
    background-color: #002347;;
}
.form1{
  padding-left: 70px;
  padding-right: 70px;
}
.text{
  color: white;
  font-family: 'Staatliches', cursive;
  padding: 25px;
}
.errors{
    color: red;
}
.up{
  text-align: right;
}
</style>


<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
      props: {
        title: String,
        errors: Object
    },
  setup () {
    const andalalin = useForm({
          nama_pemohon: null,
          alamat_pemohon: null,
          no_tlp: null,
          jenis_usaha: null,
          alamat_usaha: null,
          luas_lahan: null,
          luas_bangunan: null,
          status_lahan: null,
          email: null,
          surat_pemohon: null,
          ktp:null,
          sertifikat_tanah:null,
          ktr: null,
          rencana_tapak: null,
          desain_bangunan: null,
          company_profile: null,
          sertifikat_penyusun: null,
          dokumen_andalalin: null
    })
    function submit() {
      andalalin.post('/andalalin', this.andalalin)
    }
    return { andalalin, submit }
  },
}
</script>