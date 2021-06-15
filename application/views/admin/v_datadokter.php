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
      <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambah">Tambah Dokter</button>
      <br></br>
      <table class="table table-bordered table-responsive" id="table">
        <thead>
          <tr>
            <!-- <?= var_dump($d); ?> -->
            <th>No</th>
            <th>Foto</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
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
              <form>
                <td><?= $no++; ?></td>
                <td><img src="<?php echo base_url(); ?>/Assets/doctor.png" class="card-img" alt="..."></td>
                <td><a href="<?= base_url('admin/dokter/jadwal/' . $d['id_dokter']) ?>" style="color:black"><?php echo $d['nama_dokter']; ?></a></td>
                <td><?php echo $d['id_poli']; ?></td>
                <td><?php echo $d['no_dokter']; ?></td>
                <td><?php echo $d['email_dokter'] ?></td>
                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $d['id_dokter'] ?> "><i class="fas fa-edit"></i></button></td>
                <td><a href="<?= base_url(); ?>admin/dokter/hapus/<?= $d['id_dokter'] ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
              </form>
            </tr>
            <!-- Modal Tambah Dokter -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h2>TAMBAH DATA DOKTER</h2>
                    </center>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?= base_url(); ?>admin/dokter/tambah">
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
                      <form action="<?= base_url() ?>admin/dokter/edit/<?= $d['id_dokter'] ?>" method="post">
                        <input type="hidden" name="id" value="<?= $d['id_dokter'] ?>">
                        <div class="form-group">
                          <label for="formGroupExampleInput">No Telp</label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="no" name="no" value="<?php echo $d['no_dokter'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Nama Dokter</label>
                          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama" name="nama" value="<?php echo $d['nama_dokter'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Spesisalis</label>
                          <select multiple class="form-control" name="id_poli" id="id_poli" data-live-search="true" >
                            <?php foreach ($poli as $pol) { ?>
                              <option name="id_poli" value="<?php echo $pol['id_poli']; ?>"><?php echo $pol['nama_poli']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="formGroupExampleInput">Email</label>
                          <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="<?php echo $d['email_dokter'] ?>">
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
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>