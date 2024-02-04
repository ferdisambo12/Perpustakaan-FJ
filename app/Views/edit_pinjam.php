<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pinjam')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pinjam?>">

        <div class="item form-group">
          <label class="control-label col-12">Nama Buku<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_buku" class="form-control" id="id_buku" required>
              <option value="<?= $ferdi->id_buku?>"><?= $ferdi->judul_buku?></option>

              <?php 
              foreach ($judul_buku as $buku_nama) {
              ?>

              <option value="<?php echo $buku_nama->id_buku ?>"><?php echo $buku_nama->judul_buku ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Stok<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="stok_buku" name="stok_buku" placeholder="Jumlah Stok" required="required" class="form-control col-12 " value="<?= $ferdi->stok_buku?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Pinjam<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_pinjam" class="form-control col-12 "name="tgl_pinjam" required="required" placeholder="Tanggal Pinjam" value="<?= $ferdi->tgl_pinjam?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Kembali<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_kembali" class="form-control col-12 "name="tgl_kembali" required="required" placeholder="Tanggal Kembali" value="<?= $ferdi->tgl_kembali?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal" class="form-control col-12 "name="tanggal" required="required" placeholder="Tanggal" value="<?= $ferdi->tanggal?>">
          </div>
        </div>        
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pinjam" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>