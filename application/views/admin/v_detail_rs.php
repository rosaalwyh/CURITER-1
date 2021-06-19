<style>
  /* CSS UNTUK MODAL BOOSTRAP */
  .boxsetting {
    width: 300px;
    height: 550px;
    padding: 0 30px 30px 30px;
    border: 2px solid red;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    width: 500px;
    align-items: center;
    margin-top: 5px;
  }

  .boxsetting-poli {
    width: 300px;
    height: 200px;
    padding: 0 30px 30px 30px;

    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    width: 500px;
    align-items: center;
    margin-top: 5px;
  }

  .formsetting {
    /* margin-top: 100px; */
    font-weight: 500;
    font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
  }

  .inputsetting {
    width: 60%;
    padding: 6px 20px;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid grey;
    margin-left: 20px;
    margin-top: 1px;
  }

  .inputsetting:active,
  .inputsetting:hover {
    border-color: #ec4638;
  }

  .label {
    padding-top: 5px;
    margin-top: 10px;
    /* margin-left: 20px; */
  }

  .button_update {
    margin: 20px 0;
    align-items: center;
    padding: 10px;
    background-color: transparent;
    border: none;
    border: 2px solid #ec4638;
    color: #ec4638;
    border-radius: 20px;
    font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';
    font-size: 16px;
  }

  .button_update:hover {
    background: #ec4638;
    color: #fff;
    cursor: pointer;
  }

  .button_tambah {
    background-color: #FFFFFF;
    color: #365465;
    border: 2px solid #365465;
    padding: 5px 10px;
    margin: 0px 0px 4px 0px;
    font-size: 15px;
    border-radius: 25px;
  }

  .button_tambah:hover {
    background-color: #365465;
    color: #FFFFFF;
  }
</style>



<div class="container">
  <div class="sticky">
    <h3>Data Poliklinik</h3>
    <br>
    <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambah">Tambah PoliKlinik</button>
    <br></br>
  </div>
  <h3>Poliklinik</h3>
  <div class="konten-poli" style="overflow:auto;">
    <?php foreach ($poli as $p) { ?>
      <div class="card mb-4" style="width:inherit;height: auto; margin-right: 80px;margin-left:20px;">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src="<?php echo base_url('assets/poli/') . $p['gambar']; ?>" class="card-img m-2" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" style="text-align:center;"><?= $p['nama_poli'] ?></h5>
              <!-- <p class="card-text" style="text-align:left;">Diisi deskripsi ringan dari tiap jenis polinya</p> -->
            </div>
          </div>
          <div class="row justify-content-end" style="margin-left: 650px;">
            <div class="col-md">
              <button class="button-poli" type="button" name="lihat_detail" data-toggle="modal" data-target="#poli<?= $p['id_poli'] ?>" style="">Lihat Detail</button>
            </div>
            <div class="col-md">
              <button class="button-poli" type="button" name="lihat_detail" data-toggle="modal" data-target="#edit<?= $p['id_poli'] ?>" style="">Ubah Data</button>
            </div>
            <div class="col-md">
              <a type="button"><a href="<?= base_url(); ?>admin/rs/hapus_poli/<?= $p['id_poli'] ?>/<?= $p['gambar'] ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></a>
            </div>
          </div>


          <div class="modal fade" id="poli<?= $p['id_poli'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><?= $p['nama_poli'] ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="align-items: center;padding:0;border-radius: 25px;">
                  <div class="boxsetting-poli">
                    <h4>Definisi Singkat <?= $p['nama_poli'] ?> </h4>
                    <p><?= $p['tentang_poli'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="edit<?= $p['id_poli'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"> "Update Data PoliKlinik"</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">

              <br>
              <form action="<?= base_url(); ?>admin/rs/edit_poliklinik" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="id" value="<?= $p['id_poli'] ?>">
                <input type="hidden" name="id_rs" value="<?= $rsid['id_rs'] ?>">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Poliklinik</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Poliklinik" name="nama_poli" value="<?php echo $p['nama_poli'] ?>" required>
                </div>
                <div class="form-gorup">
                  <label for="formGroupExampleInput">Deskripsi Poliklinik</label>
                  <br>
                  <small>Minimal 200 Kata</small>
                  <textarea id="konten_artikel" name="tentang_poli" rows="4" cols="50" value="" required><?php echo $p['tentang_poli'] ?>
                        </textarea>
                </div>
                <div class="form-gorup">
                  <label for="formGroupExampleInput">Gambar PoliKlinik</label>
                  <input type="hidden" name="filelama" value="<?php echo $p['gambar'] ?>">
                  <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Gambar Poliklinik" name="gambar" required>
                </div>
                <br>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
              </form>
              <br>

            </div>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <center>
            <h2>TAMBAH DATA POLIKLINIK</h2>
          </center>
        </div>
        <div class="modal-body">
          <!-- isi form ini -->
          <?php echo form_open_multipart('admin/rs/tambah_poliklinik'); ?>
          <input type="hidden" name="id" value="<?= $rsid['id_rs'] ?>">
          <div class="form-group">
            <label for="formGroupExampleInput2">Poliklinik</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Poliklinik" name="nama_poli" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi Poliklinik</label>
            <br>
            <small>Minimal 200 Kata</small>
            <textarea id="konten_artikel" name="deskripsi" rows="4" cols="50">
                </textarea>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar Poliklinik</label>
            <br>
            <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Gambar" name="gambar">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" id="tambah" value="Submit" placeholder="Simpan">
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>