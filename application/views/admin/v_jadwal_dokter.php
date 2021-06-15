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
            <h3>Daftar Jadwal</h3>
            <h6><?php echo $dokter[0]['nama_dokter']; ?></h6>
            <button type="button" class="button_tambah" data-toggle="modal" data-target="#tambah">Tambah Jadwal</button>
            <br></br>
            <table class="table table-bordered table-responsive" id="table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <!-- <td><?php echo var_dump($jadwal); ?></td> -->
                        <td><?php echo $jadwal[0]['senin']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td><?php echo $jadwal[0]['selasa']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td><?php echo $jadwal[0]['rabu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td><?php echo $jadwal[0]['kamis']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Jum'at</td>
                        <td><?php echo $jadwal[0]['jumat']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Sabtu</td>
                        <td><?php echo $jadwal[0]['sabtu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Minggu</td>
                        <td><?php echo $jadwal[0]['minggu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>


                    <!-- Modal Tambah Jadwal -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <center>
                                        <h2>Tambah Jadwal Dokter</h2>
                                    </center>
                                </div>
                                <div class="modal-body">
                                    <!-- <?php echo var_dump($dokter); ?> -->
                                    <form method="POST" action="<?= base_url(); ?>admin/dokter/tambahJadwal">
                                        <input type="hidden" name="id_dokter" value="<?= $dokter[0]['id_dokter'] ?>">
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
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>