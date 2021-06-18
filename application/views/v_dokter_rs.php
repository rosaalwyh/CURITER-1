<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  /* Float four columns side by side */
  .column {
    float: left;
    width: 50%;
    padding: 0 10px;
  }


  /* Remove extra left and right margins, due to padding */
  .row {
    margin: 0 -5px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }



  }

  .container1 {

    flex-direction: row;
    width: 80%;
    margin: 0px auto;
  }

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
  }

  @media screen and (max-width: 1130px) {
    .row {
      align-content: space-around;

    }

    .col {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-content: space-around;
      flex-wrap: wrap;

    }

  }
  }
</style>
<div class="container" style="margin-top: 90px; margin-bottom:50px">
  <div class="row">
    <?php foreach ($rs as $rs) { ?>
      <div class="col">
        <div class="card mt-6 mr-md-5" style="width: 20rem;">
          <div class="card-body">
            <img src="<?php echo base_url(); ?>Assets/rs/<?= $rs['foto_rumahsakit'] ?>" class="card-img" alt="..." width="200px">
            <h4 class="card-title" style="text-align:center;"><?= "Rumah Sakit " . $rs['nama_rs'] ?></h4>
            <p class="card-text" style="text-align:center;opacity:0.7"> <img src="<?php echo base_url(); ?>/Assets/location.png" style="width:20px;height:20px;"> <?= "Kota " . $rs['kota'] ?></p>
            <p class="card-text" style="text-align:center;"><?= "Alamat : " . $rs['alamat_rs'] ?> </p>
            <p class="card-text" style="text-align:center;"><?= "Telpon : " . $rs['telp_rs'] ?> </p>
            <a href=" <?php echo base_url('caridokterrs/poli/' . $rs['id_rs']) ?> " type="hidden"></a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>