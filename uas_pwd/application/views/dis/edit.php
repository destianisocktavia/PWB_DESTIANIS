<?php $this->load->view("load/header.php") ?>
<b>Form Edit Distribusi LKS (Kelas <?php echo $query['nama_sekolah'] ?>)</b>
    <?php echo $this->session->flashdata('result'); ?>
            <form action="<?php echo base_url('Distribusi/update/'.$query['id'])?>" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Nama Sekolah</label>
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $query['nama_sekolah'] ?>">
                  </div>
                <div class="form-group col-md-6">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas">
                      <option>Pilih Kelas</option>
                      <option value="1" <?php if($query['kelas'] == '1'){ echo 'selected';}else{ } ?>>1</option>
                      <option value="2" <?php if($query['kelas'] == '2'){ echo 'selected';}else{ } ?>>2</option>
                      <option value="3" <?php if($query['kelas'] == '3'){ echo 'selected';}else{ } ?>>3</option>
                      <option value="4" <?php if($query['kelas'] == '4'){ echo 'selected';}else{ } ?>>4</option>
                      <option value="5" <?php if($query['kelas'] == '5'){ echo 'selected';}else{ } ?>>5</option>
                      <option value="6" <?php if($query['kelas'] == '6'){ echo 'selected';}else{ } ?>>6</option>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="<?php echo $query['jumlah'] ?>">
                  </div>
                 
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                 
                </form>
<?php $this->load->view("load/footer.php") ?>