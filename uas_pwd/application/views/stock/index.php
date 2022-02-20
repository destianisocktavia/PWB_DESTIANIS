<?php $this->load->view("load/header.php") ?>
<b>Form Input Stock LKS</b>
    <?php echo $this->session->flashdata('result'); ?>
            <form action="<?php echo base_url('Stock/tambah')?>" method="post">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas">
                      <option>Pilih Kelas</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>

                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" >
                  </div>
                  <div class="form-group col-md-4">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" >
                  </div>
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                 
                </form>
<b>Data Stock LKS</b>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Nilai Persedian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no =1; foreach ($data_stock as $stk){?>
    <tr>
      <th scope="row"><?=$no++;?></th>
      <td><?php echo $stk['kelas']; ?></td>
      <td><?php echo number_format($stk['jumlah']); ?></td>
      <td><?php echo number_format($stk['harga']); ?></td>
      <td><?php echo number_format($stk['nilai_persedian']); ?></td>
      <td>
        <a href="<?php echo base_url() ?>Stock/ubah/<?php echo $stk['id']; ?>" class="btn btn-success " >ubah</a>
        <a href="<?php echo base_url() ?>Stock/hapus/<?php echo $stk['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a>
        
      </td>

    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="row">
  <div class="col-md-4">
    <label>Jumlah LKS Seluruhnya</label>
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" value="<?php echo number_format($total) ?>" >
  </div>
  <div class="col-md-4">
    <label>Total Nilai Persedian</label>
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" value="<?php echo number_format($nilai) ?>" >
  </div>
</div>
                    
                   
<?php $this->load->view("load/footer.php") ?>