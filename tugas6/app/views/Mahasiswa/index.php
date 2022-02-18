<div class="container mt-5">
    <div class="row">
         <div class="col-lg-6">
         <?php Flasher::flash(); ?>
         </div>
    </div>
<div class="row mb-2">
 <div class="col-lg-6">
 <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
 <div class="input-group">
 <input type="text" class="formcontrol" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocompl
ete="off">
 <div class="input-group-append">
    <button class="btn btnprimary" type="submit" id="tombolCari">Cari</button>
 </div>
 </div>
 </form>
 </div>
 </div>

 <div class="row">
 <div class="col-6">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  Tambah Data Mahasiswa
</button>

 <br><br>

 <h3>Daftar Mahasiswa</h3>
 <ul class="list-group">
 <?php foreach ($data['mhs'] as $mhs) : ?>
 <li class="list-group-item list-group-item d-flex justify-contentbetween align-items-center">
 <?= $mhs['nama']; ?>
 <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="
badge badge-primary" >detail</a>
<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a>
<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-id="<?= $mhs['id']; ?>" data-target="#formModal">ubah</a>
 </li>
 <?php endforeach; ?>
 </ul>
 </div>
 </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
     <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
     <button type="button" class="btn-close" data-dismiss="modal" arialabel="Close"></button>
     </div>
     
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
         <div class="form-group">
             <label for="nama">Nama</label>
             <input type="text" class="form-control "   id="nama" name="nama">
             <input type="hidden" class="form-control "   id="id" name="id">
         </div>
         <div class="form-group">
             <label for="nim">NIM</label>
             <input type="number" class="form-control"   id="nim" name="nim">
         </div>
         <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control"   id="email" name="email">
         </div>
         <div class="form-group">
             <label for="jurusan">Jurusan</label>
             <select class="form-control" name="jurusan"   id="jurusan">
             <option value="Teknik Informatika">Teknik Informatika</option>
             <option value="Sistem Informasi">Sistem Informasi</option>
             <option value="Teknik Industri">Teknik Industri</option>
             <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
             </select>
         </div>
     </div>

    <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
 </div>
    </div>
  </div>
</div>