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

</div>