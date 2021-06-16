<style>
    .boxsetting {
        width: 300px;
        height: 550px;
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
        width: 10em;
    }

    .button_update:hover {
        background: #ec4638;
        color: #fff;
        cursor: pointer;

    }

    .list-bayar img {
        width: 90px;
    }

    .checkmark {
        width: 200px;
        margin: 0 auto;
        padding-top: 40px;
    }

    .path {
        stroke-dasharray: 1000;
        stroke-dashoffset: 0;
        animation: dash 2s ease-in-out;
        -webkit-animation: dash 2s ease-in-out;
    }

    .spin {
        animation: spin 2s;
        -webkit-animation: spin 2s;
        transform-origin: 50% 50%;
        -webkit-transform-origin: 50% 50%;
    }

    /* p {
  font-family: sans-serif;
  color: pink;
  font-size: 30px;
  font-weight: bold;
  margin: 20px auto;
  text-align: center;
  animation: text .5s linear .4s;
  -webkit-animation: text .4s linear .3s;
} */

    @-webkit-keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes dash {
        0% {
            stroke-dashoffset: 1000;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes text {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }


        @keyframes text {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
</style>

<div class="container" style="margin-top: 100px">
    <?= var_dump($jadwal); ?>
    <h5> <?php echo $dokter[0]['nama_poli']; ?> </h5>
    <?php foreach ($dokter as $d) { ?>
        <div class="konten-dokter" style="overflow:auto; height:auto;">
            <div class="card mb-3" style="width:inherit;height: auto; margin-right: 80px;margin-left:20px;">
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <?php if (empty($d['foto_dokter'])) { ?>
                            <img src="<?php echo base_url(); ?>Assets/dokter.png" class="card-img" alt="...">
                        <?php } else { ?>
                            <img src="<?php echo base_url(); ?>Assets/dokter/<?= $d['foto_dokter'] ?>" class="card-img" alt="...">
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:left;"><?php echo $d['nama_dokter']; ?></h5>
                            <p class="card-title" style="text-align:left;"><?= $d['email_dokter']; ?></p>
                        </div>
                    </div>

                    <div class="col-md-2" style="margin-top: 120px;">
                        <button type="button" class="ml-auto btn btn-primary text-uppercase" data-toggle="modal" data-target="#modalJadwal<?= $d['id_dokter'] ?>" style="border-radius:13px;font-size:13px;background-color:#033D68;border-color:#033D68;" name="button_call">
                            Jadwal Dokter
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Form Jadwal -->
        <div class="modal fade" id="modalJadwal<?= $d['id_dokter'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $d['nama_dokter'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= var_dump($d); ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Senin</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Selasa</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Rabu</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kamis</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Jum'at</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sabtu</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Minggu</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




        <script>
            $("input:radio").change(function() {
                $("#bayar-btn<?= $d['id_dokter'] ?>").prop("disabled", false);
            });
            $("input:radio").change(function() {
                $("#bayar-btn-janji<?= $d['id_dokter'] ?>").prop("disabled", false);
            });
            $(".button_bayar").prop("disabled", true);

            // $(document).ready(function(){
            //     $(".close").click(function(){
            //         location.reload(true);
            //     });
            // });

            $('#acc-bayar<?= $d['id_dokter'] ?>').on('hidden.bs.modal', function() {
                location.reload(true);
            });
            $('#edit<?= $d['id_dokter'] ?>').on('hidden.bs.modal', function() {
                location.reload(true);
            });
        </script>
        <script>

        </script>
    <?php } ?>
</div>