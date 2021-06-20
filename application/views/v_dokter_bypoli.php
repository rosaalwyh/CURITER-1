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

    .button-dokter {
        margin-top: 15%;
        margin-bottom: 5%;
    }

    @media screen and (max-width: 1000px) {
        .button-dokter {
            margin: 10px;
        }


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
        }


        @keyframes text {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    }
</style>

<?php if (empty($dokter)) { ?>
    <div class="container" style="margin-top: 100px">
        <h3>Dokter Tidak Ditemukan</h3>
    </div>
<?php } else { ?>
    <div class="container" style="margin-top: 100px">
        <h5><?php echo $dokter[0]['nama_poli']; ?></h5>
        <?php foreach ($dokter as $d) { ?>
            <div class="konten-dokter" style="overflow:auto; height:auto;">
                <div class="card mb-3" style="width:inherit; height: auto; margin-right: 80px;margin-left:20px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <?php if (empty($d['foto_dokter'])) { ?>
                                <img src="<?php echo base_url(); ?>assets/dokter.png" class="card-img" alt="..." style=" object-fit: cover; min-width: 100%; min-height: 100%">
                            <?php } else { ?>
                                <img src="<?php echo base_url(); ?>assets/dokter/<?= $d['foto_dokter'] ?>" class="card-img" alt="..." style=" object-fit: cover; min-width: 100%; min-height: 100%">
                            <?php } ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:left;"><?php echo $d['nama_dokter']; ?></h5>
                                <p class="card-title" style="text-align:left;"><?= $d['email_dokter']; ?></p>
                            </div>
                        </div>
                        <div class="button-dokter">
                            <button type="button" class="ml-auto btn btn-primary text-uppercase jadwal" data-toggle="modal" data-target="#modalJadwal" data-id="<?php echo $d['id_dokter']; ?>" data-url="<?php echo base_url('caridokterrs/jadwal') ?>" style="border-radius:13px;font-size:13px;background-color:#033D68;border-color:#033D68;" name="button_call">
                                Jadwal Dokter
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        <?php } ?>

        <!-- Modal Form Jadwal -->
        <div class="modal fade" id="modalJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title nama-dokter" id="nama-dokter">Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                    <td id="hari_senin">Jadwal Kosong</td>
                                </tr>
                                <tr>
                                    <th scope="row">Selasa</th>
                                    <td id="hari_selasa">Jadwal Kosong</td>
                                </tr>
                                <tr>
                                    <th scope="row">Rabu</th>
                                    <td id="hari_rabu">Jadwal Kosong</td>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Kamis</th>
                                    <td id="hari_kamis">Jadwal Kosong</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jum'at</th>
                                    <td id="hari_jumat">Jadwal Kosong</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sabtu</th>
                                    <td id="hari_sabtu">Jadwal Kosong</td>
                                </tr>
                                <tr>
                                    <th scope="row">Minggu</th>
                                    <td id="hari_minggu">Jadwal Kosong</td>
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
    <?php } ?>
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

        $(document).ready(function() {
            $('#modalJadwal').on('show.bs.modal', function(e) {
                var id_dokter = $(e.relatedTarget).data('id');
                var url_data = $(e.relatedTarget).data('url');
                /* fungsi AJAX untuk melakukan fetch data */
                $.ajax({
                    method: 'get',
                    url: url_data,
                    data: {
                        id_dokter: id_dokter
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.length > 0) {
                            $('.nama-dokter').html(data[0].nama_dokter)
                            $('#hari_senin').html(data[0].senin)
                            $('#hari_selasa').html(data[0].selasa)
                            $('#hari_rabu').html(data[0].rabu)
                            $('#hari_kamis').html(data[0].kamis)
                            $('#hari_jumat').html(data[0].jumat)
                            $('#hari_sabtu').html(data[0].sabtu)
                            $('#hari_minggu').html(data[0].minggu)
                        } else {
                            $('.nama-dokter').html("Jadwal Dokter")
                            $('#hari_senin').html("Tidak Ada Jadwal")
                            $('#hari_selasa').html("Tidak Ada Jadwal")
                            $('#hari_rabu').html("Tidak Ada Jadwal")
                            $('#hari_kamis').html("Tidak Ada Jadwal")
                            $('#hari_jumat').html("Tidak Ada Jadwal")
                            $('#hari_sabtu').html("Tidak Ada Jadwal")
                            $('#hari_minggu').html("Tidak Ada Jadwal")
                        }

                    },
                    error: function() {
                        alert('Could not displaying data');
                    }
                });
            });
        });
    </script>