<?php $this->load->view("load/header.php") ?>
<b>Form Distribusi LKS</b>
    <?php echo $this->session->flashdata('result'); ?>
            <form action="<?php echo base_url('Distribusi/tambah')?>" method="post">
                <div class="row">
                   <div class="form-group col-md-6">
                    <label>Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Kelas</label><br>
                    <?php for ($i = 1; $i <= 6; $i++){ ?>
                    <label for="kelas-<?= $i ?>"><?= $i ?></label><input  type="radio" name="kelas" value="<?= $i ?>" required>
                 
                     <?php } ?>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" >
                  </div>
             
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                 
                </form>
                <b>Data Distribusi LKS</b>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Sekolah</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total Bayar</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no =1; foreach ($data_stock as $stk){?>
                    <tr>
                      <th scope="row"><?=$no++;?></th>
                      <td><?php echo $stk['nama_sekolah']; ?></td>
                      <td><?php echo number_format($stk['kelas']); ?></td>
                      <td><?php echo number_format($stk['jumlah']); ?></td>
                      <td><?php echo number_format($stk['total_bayar']); ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>Distribusi/ubah/<?php echo $stk['id']; ?>" class="btn btn-success " >ubah</a>
                        <a href="<?php echo base_url() ?>Distribusi/hapus/<?php echo $stk['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a>
                        
                      </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

<?php $this->load->view("load/footer.php") ?>