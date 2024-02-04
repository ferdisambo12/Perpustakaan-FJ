<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_kategori')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_kategori?>">

        <div class="item form-group">
          <label class="control-label col-12" >Nama Kategori<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_kategori" class="form-control col-12 "name="nama_kategori" required="required" placeholder="Nama Kategori" value="<?= $ferdi->nama_kategori?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Deskripsi Kategori<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="deskripsi_kategori" name="deskripsi_kategori" placeholder="Deskripsi Kategori" required="required" class="form-control col-12 " value="<?= $ferdi->deskripsi_kategori?>">
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
            <a href="/home/kategori" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>