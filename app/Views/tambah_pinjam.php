<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pinjam')?>" method="post">
                <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12">Buku <span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_buku" class="form-control text-capitalize" id="id_buku" required>
              <option>Pilih Buku</option>

              <?php 
              foreach ($judul_buku as $buku_nama) {
              ?>
              
              <option value="<?php echo $buku_nama->id_buku ?>"><?php echo $buku_nama->judul_buku ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Stok<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="stok_buku" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="stok_buku" required="required" placeholder="Jumlah Stok">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Pinjam<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_pinjam" name="tgl_pinjam" placeholder="Tanggal Pinjam " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal Kembali <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tgl_kembali" name="tgl_kembali" placeholder="Tanggal Kembali " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal" name="tanggal" placeholder="Tanggal " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/kategori" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>