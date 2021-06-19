<!DOCTYPE html>
<html lang="" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/all.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/fontawesome-all.js'); ?>">
  </script>

  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>">
  </script>
  <title>Curiter | Admin</title>
  <style>
    .bodiadm {
      margin-top: 90px;
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
</head>

<body class="bodiadm">
  <div class="container">
    <div class="box">
      <h3>Daftar Dokter</h3>
      <br>
      <?php if (empty($poli)) { ?>
        <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambah">Tambah Dokter</button>
      <?php } else { ?>
        <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambah">Tambah Dokter</button>
      <?php } ?>
      <br></br>
      <table class="table table-bordered table-responsive" id="table">
        <thead>
          <tr>
            <!-- <?= var_dump($d); ?> -->
            <th>No</th>
            <th>Foto</th>
            <th>Nama Dokter</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($d as $d) {
          ?>
            <tr>

              <td><?= $no++; ?></td>
              <td>
                <?php if (empty($d['foto_dokter'])) { ?>
                  <img src="<?php echo base_url(); ?>assets/dokter.png" style="width: 120px;" class="card-img" alt="...">
                <?php } else { ?>
                  <img src="<?php echo base_url(); ?>Assets/dokter/<?= $d['foto_dokter'] ?>" style="width: 120px;" class="card-img" alt="...">
                <?php } ?>
              </td>
              <td><a href="<?= base_url('admin/dokter/jadwal/' . $d['id_dokter']) ?>" style="color:black"><?php echo $d['nama_dokter']; ?></a><br>
                <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambahjadwal<?= $d['id_dokter'] ?>">Tambah Jadwal</button>
              </td>
              <td><?php echo $d['no_dokter']; ?></td>
              <td><?php echo $d['email_dokter'] ?></td>
              <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $d['id_dokter'] ?>"><i class="fas fa-edit"></i></button></td>
              <td><a href="<?= base_url(); ?>admin/dokter/hapus/<?= $d['id_dokter'] ?>/<?= $d['foto_dokter'] ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>

            </tr>

            <!-- Modal Tambah Dokter -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" enctype="multipart/form-data">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h2>TAMBAH DATA DOKTER</h2>
                    </center>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?= base_url(); ?>admin/dokter/tambah" enctype="multipart/form-data">
                      <input type="hidden" name="id_rs" value="<?= $rs['id_rs'] ?>">
                      <div class="form-group">
                        <label for="formGroupExampleInput">Nama Dokter</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Dokter" name="nama" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Spesialis Dokter</label>
                        <select multiple class="form-control" name="id_poli" id="exampleFormControlSelect2">
                          <?php foreach ($poli as $pol) { ?>
                            <option name value="<?php echo $pol['id_poli']; ?>"><?php echo $pol['nama_poli']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">No Telp</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Telp" name="no">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Gambar</label>
                        <input type="file" class="form-control" id="foto_dokter" placeholder="foto_dokter" name="foto_dokter">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" id="tambah" value="Submit" placeholder="Simpan">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Tambah Jadwal -->
            <div class="modal fade" id="tambahjadwal<?= $d['id_dokter'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h2>Tambah Jadwal Dokter</h2>
                    </center>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?= base_url(); ?>admin/dokter/tambahJadwal ">
                      <input type="hidden" name="id_dokter" value="<?= $d['id_dokter'] ?>">
                      <div class="form-group">
                        <label for="formGroupExampleInput">Senin</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal senin" name="senin">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Selasa</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal selasa" name="selasa">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Rabu</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal rabu" name="rabu">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Kamis</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal kamis" name="kamis">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Jum'at</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal jum'at" name="jumat">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Sabtu</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal sabtu" name="sabtu">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Minggu</label>
                        <input type="text" class="form-control" placeholder="Masukkan jadwal minggu" name="minggu">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" id="tambah" value="Submit" placeholder="Simpan">
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Ubah Dokter -->
            <div class="modal fade" id="edit<?= $d['id_dokter'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><?= $d['nama_dokter'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="boxsetting">
                      <br>
                      <form action="<?= base_url() ?>admin/dokter/edit/<?= $d['id_dokter'] ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="rs" value="<?= $rs['id_rs'] ?>">
                        <div class="form-group">
                          <label for="formGroupExampleInput">No Telp</label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="no" name="no" value="<?php echo $d['no_dokter'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Nama Dokter</label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama" name="nama" value="<?php echo $d['nama_dokter'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Email</label>
                          <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="<?php echo $d['email_dokter'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Gambar</label>
                          <input type="hidden" name="filelama" value="<?= $d['foto_dokter'] ?>">
                          <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Email" name="foto_dokter" value="<?= $d['foto_dokter'] ?>" required>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                      </form>
                      <br>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <!-- Modal Tambah Dokter -->
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true" enctype="multipart/form-data">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <center>
                    <h2>TAMBAH DATA DOKTER</h2>
                  </center>
                </div>
                <div class="modal-body">
                  <form method="POST" action="<?= base_url(); ?>admin/dokter/tambah" enctype="multipart/form-data">
                    <input type="hidden" name="id_rs" value="<?= $rs['id_rs'] ?>">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama Dokter</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Dokter" name="nama" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Spesialis Dokter</label>
                      <select multiple class="form-control" name="id_poli" id="exampleFormControlSelect2">
                        <?php foreach ($poli as $pol) { ?>
                          <option name value="<?php echo $pol['id_poli']; ?>"><?php echo $pol['nama_poli']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">No Telp</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Telp" name="no">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Email</label>
                      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Gambar</label>
                      <input type="file" class="form-control" id="formGroupExampleInput" placeholder="Email" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <input type="submit" class="btn btn-primary" id="tambah" value="Submit" placeholder="Simpan">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>