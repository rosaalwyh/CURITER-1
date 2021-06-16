<style>
.boxsetting{
  width: 300px;
  height: 550px;
  padding: 0 30px 30px 30px ;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  width: 500px;
  align-items: center;
  margin-top: 5px;
}
.formsetting{
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
.inputsetting:active, .inputsetting:hover{
  border-color: #ec4638;
}
.label{
  padding-top: 5px;
  margin-top: 10px;
  /* margin-left: 20px; */
}
.button_update{
  margin: 20px 0 ;
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
.button_update:hover{
  background: #ec4638;
  color: #fff;
  cursor: pointer;

}

.list-bayar img{
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
    opacity: 0; }
  100% {
    opacity: 1;
  }


  @keyframes text {
  0% {
    opacity: 0; }
  100% {
    opacity: 1;
  }
}
</style>

<div class="container" style="margin-top: 90px">
<div class="row">
  <div class="col-md-6">
  <form action=" <?= base_url('caridokter/')?> " method="post">
  <input class="cari-dokter" type="text" name="search" placeholder="Cari Dokter Anda ..." autocomplete="off">
  </form>
  </div>
</div>
  <!-- <?php var_dump($d); ?> -->
      <?php foreach ($d as $d) {?>
      <div class="konten-dokter" style="overflow:auto; height:auto;">
        <div class="card mb-3" style="width:inherit;height: auto; margin-right: 80px;margin-left:20px;">
  <div class="row no-gutters" >
  <div class="col-md-2" >

  <?php if(empty($d['foto_dokter']) ){?>
      <img src="<?php echo base_url(); ?>Assets/dokter.png" class="card-img" alt="..." >
      <?php } else {?>
        <img src="<?php echo base_url(); ?>Assets/dokter/<?= $d['foto_dokter']?>" class="card-img" alt="..." >
      <?php }?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="text-align:left;"><?php echo $d['nama_dokter']; ?> | <?php echo $d['nama_poli'] ?></h5>
        <!-- <h6 class="card-title">Jenis Spesialis</h6> -->
        <p class="card-text" style="text-align:left;"><?php echo "Rumah Sakit : ".$d['nama_rs']?></p>
        <!-- <a href="#" class="btn btn btn-primary btn-sm active" role="button" aria-pressed="true">Primary link</a> -->
      </div>
  </div>
  <div class="col-md-2"style="margin-top: 120px;" >
    <button class="ml-auto btn btn-primary text-uppercase" type="button" name="button_call" style="border-radius:13px;font-size:13px;background-color:#033D68;border-color:#033D68;"> <a href="<?= $d['website'] ?>" target="_blank"></a> Hubungi</button>
  </div>
</div>
      </div>
</div>

<script>
        $("input:radio").change(function(){$("#bayar-btn<?=$d['id_dokter']?>").prop("disabled", false);});
        $("input:radio").change(function(){$("#bayar-btn-janji<?=$d['id_dokter']?>").prop("disabled", false);});
        $(".button_bayar").prop("disabled", true);

        // $(document).ready(function(){
        //     $(".close").click(function(){
        //         location.reload(true);
        //     });
        // });

        $('#acc-bayar<?=$d['id_dokter']?>').on('hidden.bs.modal', function () {
          location.reload(true);
});
  $('#edit<?=$d['id_dokter']?>').on('hidden.bs.modal', function () {
    location.reload(true);
});
</script>
<script>

</script>
<?php } ?>
</div>
