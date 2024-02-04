<div align="center">

<!-- <img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" >
 --><div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="100%" class="table table-striped table-bordered">
  <thead>
    <tr>
    <th>NO</th>
    <th>Nama</th>
    <th>Nama Barang</th>
    <th>Harga Akhir</th>
    <th>Penawaran Harga</th>
    <th>Tanggal</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    foreach ($ferdi as $gas){
      ?>
      <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->nama_lengkap?></td>
                        <td><?php echo $gas->nama_barang?></td>
                        <td><?php echo $gas->harga_akhir?></td>
                        <td><?php echo $gas->penawaran_harga?></td>
                        <td><?php echo $gas->tgl?></td>
                        <td>
    <?php }?>
  </tbody>
</table>
</div>
<script>
  window.print();
</script>