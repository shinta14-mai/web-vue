<template>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <main>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <menu class="container">
        <a class="navbar-brand" href="/">
        <img src="http://dishub.banyuwangikab.go.id/img/logo.png" alt="">
        </a>
        <div class="menu">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/info"><h6>INFO</h6></a>
              <!-- <a href="/home">INFO</a> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about"><h6>ABOUT</h6></a>
              <!-- <a href="/about">ABOUT</a> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login"><h6>LOGIN</h6></a>
              <!-- <a href="/users">LOGIN</a> -->
            </li>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search" id="search" v-model="term" @keyup="search">
            </div>
          </ul>
        </div>
      </menu>
    </nav>

    <article>
      <slot />
    </article>

    <!-- footer -->
    <div class="footer">
      <div class="container container-footer">
        <div class="row">
          <div class="col-7">
            <div class="row">
              <div class="col">
                <div class="container">
                  <div class="card-footer">
                    <div class="title"><b>JAM OPERASIONAL</b></div>
                  </div>
                  <div class="text-footer">
                    <p>
                      Senin - Kamis <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        07.00 - 15.30 WIB
                    </p>
                    <p>
                      Jumat <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        07.00 - 15.00 WIB
                    </p>
                    <p>
                      Sabtu & Minggu <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        Libur
                    </p>
                  </div>
                  <!-- <div class="card card-footer">
                    <p>
                      Jumat <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        07.00 - 15.00 WIB
                    </p>
                  </div>
                  <div class="card card-footer">
                    <p>
                      Sabtu & Minggu <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                        Libur
                    </p>
                  </div> -->
                </div>
              </div>
              <div class="col">
                <div class="container">
                  <div class="row">
                    <a href="#">e-blue</a><br>
                    <a href="#">e-parkir</a><br>
                    <a href="#">Pengaduan</a><br>
                    <a href="#">Kebijakan Kami</a><br>
                    <a href="#">Kritik, Saran & Pesan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="container">
              <div class="text-center"><h3>KONTAK</h3></div>
              <div class="title">dinas perhubungan Kabupaten Banyuwangi</div>
              <p>Jl. K.H. Agus Salim No.83, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416</p>
            </div>
          </div>
        </div>
        <div class="card">footer</div>
      </div>
    </div>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import _ from 'lodash';
export default {
  components: {
    Link,
  },
        props: {
    admin: Object,
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
/* style navbar */
.navbar{
  background-color: rgb(3, 3, 70);
  height: 70px;
}

h6{
  color: white;
  text-align: justify;
}

/* style footer */
.footer{
  margin-top: 2rem;
  background-color: rgb(3, 3, 70);
  color: white;
}
.container-footer{
  padding: 2rem;
}

/* .card-footer{
  box-sizing: inherit;
  background-color: none;
} */


</style>