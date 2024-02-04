<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_buku')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_buku?>">

        <div class="item form-group">
          <label class="control-label col-12" >Judul Buku<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="judul_buku" class="form-control col-12 "name="judul_buku" required="required" placeholder="nama_barang" value="<?= $ferdi->judul_buku?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Cover Buku <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="cover_buku" name="cover_buku" placeholder="Cover Buku " required="required" class="form-control col-12 " value="<?= $ferdi->cover_buku?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Kategori Buku<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="kategori_buku" class="form-control col-12 "name="kategori_buku" required="required" placeholder="Kategori Buku" value="<?= $ferdi->kategori_buku?>">
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
            <a href="/home/buku" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>