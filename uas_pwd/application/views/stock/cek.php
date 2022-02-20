<?php $this->load->view("load/header.php") ?>

<b>Data Stock LKS </b>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Nilai Persedian</th>
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
     
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php $this->load->view("load/footer.php") ?>