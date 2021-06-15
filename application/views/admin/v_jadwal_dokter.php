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
        <?php foreach($jadwal as $d) { ?>
            <h6><?php echo $d['nama_dokter']; ?></h6>
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

                        <td><?php echo $d['senin']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td><?php echo $d['selasa']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td><?php echo $d['rabu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Kami</td>
                        <td><?php echo $d['kamis']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Jum'at</td>
                        <td><?php echo $d['jumat']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Sabtu</td>
                        <td><?php echo $d['sabtu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                    <tr>
                        <td>Minggu</td>
                        <td><?php echo $d['minggu']; ?></td>
                        <form>
                            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button></td>
                            <td><a href="#" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-trash"></i></a></td>
                        </form>
                    </tr>
                </tbody>
        <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>