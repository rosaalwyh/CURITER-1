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

  @media screen and (max-width: 900px) {
    .konten-atas {
      display: flex;
      flex-direction: column;

    }

    .Tentang {
      margin: 0px;
    }

    .konten-sisikiri {
      margin: 50% auto;
      margin-bottom: 20px;
    }
    .kolom-fasilitas{
      font-size: 14px;
      padding: 14px;  
    }
 

  }

  @media screen and (max-width: 1250px) {
    .kolom-fasilitas {
			float: left;
			width: 25%;
			padding: 2px;
			margin: 12px;
	  	}
    }
  }
</style>
<div class="container">
  <div class="sticky">
    <h3> <?= "Rumah Sakit " . $rsid['nama_rs'] ?> </h3>
    <a href="#" style="margin-right:78%">Informasi RS</a>
  </div>
  <div class="konten-atas">
    <div id='konten-kiri-atas' class="konten-sisikiri" style="margin-top:10px;">
      <img src="<?php echo base_url(); ?>Assets/rs/<?= $rsid['foto_rumahsakit'] ?>" class="card-img" alt="..." width="100%">
    </div>
    <div class="Tentang">
      <h4> <?= "Tentang Rumah Sakit " . $rsid['nama_rs'] ?></h4>
      <p><?= $rsid['tentang_rs'] ?></p>
      <?php if ($rsid['rating'] > 1) { ?>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      <?php } ?>
      <p><?= $rsid['rating'] . " (Google Review)" ?></p>
      <div style="margin-top: 12px;">
        <a href="<?= $rsid['website'] ?>" class="ml-auto btn btn-primary text-uppercase" type="button" name="button_janji" style="border-radius:13px;font-size:13px;background-color:#033D68;border-color:#033D68;" target="_blank">Kunjungi Website</a>

      </div>
      <table style="width:100%;">
        <tr>
          <td>
            <p class="card-text" style="text-align:left;opacity:0.7"> <img src="<?php echo base_url(); ?>/Assets/location.png" style="width:20px;height:20px;"> <?= "Kota " . $rsid['kota'] ?></p>
          </td>
          <td>
            <p class="card-text" style="text-align:left;opacity:0.7"> <img src="<?php echo base_url(); ?>/Assets/call-icon.png" style="width:20px;height:20px;"> <?= $rsid['telp_rs'] ?></p>
          </td>
        </tr>
      </table>
      <h4> Fasilitas</h4>
      <?php $fasilitas = $rsid['fasilitas_rs'];
      $split = explode(',', $fasilitas);
      for ($i = 0; $i < count($split); $i++) { ?>
        <div class="kolom-fasilitas">
          <p><?= $split[$i]; ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="konten-bawah">
    <div class="konten-bawah-poliklinik">
      <h3>Poliklinik</h3>
      <div class="konten-poli" style="overflow:auto; height:700px;">
        <?php foreach ($poli as $p) { ?>
          <div class="card mb-3" style="width:inherit;height: auto; margin-right: 80px;margin-left:20px;">
            <div class="row no-gutters">
              <div class="col-md-2">
                <img src="<?php echo base_url(); ?>/Assets/rs.jpeg" class="card-img" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title" style="text-align:left;"><?= $p['nama_poli'] ?></h5>
                  <!-- <p class="card-text" style="text-align:left;">Diisi deskripsi ringan dari tiap jenis polinya</p> -->
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 120px;">
                <button class="button-poli" type="button" name="lihat_detail" data-toggle="modal" data-target="#poli<?= $p['id_poli'] ?>" style="">Lihat Detail</button>

              </div>
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

        <?php } ?>
      </div>

    </div>



    <div class="konten-bawah-dokter">
      <h3>Dokter</h3>
      <div class="konten-dokter" style="overflow:auto; height:700px;">
        <?php foreach ($drrs as $dr) { ?>
          <div class="card mb-3" style="width:inherit;height: auto; margin-right: 80px;margin-left:20px;">
            <div class="row no-gutters">
              <div class="col-md-2">
                <img src="<?php echo base_url(); ?>/Assets/doctor.png" class="card-img" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title" style="text-align:left;"><?= $dr['nama_dokter'] ?></h5>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 120px;">
                <button class="button-janji" type="button" name="button_janji"><a href="<?php echo $rsid['website'] ?>"></a>Hubungi</button>

              </div>
            </div>
          </div>

          <div class="modal fade" id="dokter<?= $dr['id_dokter'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><?= "Buat Janji Dengan " . $dr['nama_dokter'] ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="<?= base_url('caridokter/janji/' . $dr['id_dokter']) ?>">
                  <div class="modal-body" style="align-items: center;padding:0;border-radius: 25px;">
                    <div class="boxsetting">
                      <br>
                      <label for="fullname" class="label">Nama Lengkap</label>
                      <input type="text" class="inputsetting" id="fullname" name="fullname">
                      <label for="notelp" class="label">Nomor Telepon</label>
                      <input type="text" class="inputsetting" id="email" name="notelp">
                      <label for="tgljanji" class="label">Tanggal Janji</label>
                      <input type="date" class="inputsetting" id="tgljanji" name="tgljanji">
                      <label for="appt" class="label">Pilih Waktu</label>
                      <input type="time" class="inputsetting" id="appt" name="appt">
                      <br>
                      <button type="submit" value="Buat Janji" class="button_update">Buat Janji</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>
</div>