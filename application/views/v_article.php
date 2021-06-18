<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <style>
      .judulartikel{
        margin-top: 90px;
        margin-bottom: 10px;
        margin-left: 50px;
      }
      .konten-artikel{
        margin-top: 50px;
        margin-left: 50px;
        text-align: justify;
        text-justify: inter-word;
        margin-right: 70px;
        text-indent: 50px;
      }
      #button_artikel{
        background-color: #FFFFFF;
        color: #ec4638;
        border: 2px solid #ec4638;
        padding: 5px 10px;
        margin: 0px 0px 4px 0px;
        font-size: 15px;
        border-radius: 50px;
        margin-right: 10px;
      }
      #button_artikel:hover{
        background-color: #ec4638;
        color: white;
      }
      .a_tanya{
        text-decoration: none;
        color: #ec4638;
      }
      .a_tanya:hover{
        color: white;
      }
      
    </style>
  </head>
  <body>
  <div class="container">
    <center>
      <h3 class="judulartikel"> <?= $artikel['judul_artikel']?> </h3>
      <img class="card-img-top w-40" src="<?php echo base_url(); ?>/assets/artikel/<?= $artikel['gambar_artikel']?>" alt="">
      <p class="konten-artikel" id="konten-artikel">
      <?= $this->typography->nl2br_except_pre($artikel['konten_artikel'])?>
      </p>
      <!-- <p class="konten-artikel" id="navigation"></p> -->
    </center>
    <table>
      <tr>
      <a class="konten-artikel" id="button_artikel" style="margin-left: 50px;" href="<?=$artikel['sumber_artikel']?>">Sumber</a>
    </tr>
    <tr>
      <a class="a_tanya" href="<?= base_url('caridokter/')?>"><button type="button" id="button_artikel">Mau tanya dokter?</button></a>
    </tr>
    </table>
  </div>

  </body>
</html>

<script>
replaced = document.getElementById("konten-artikel").innerHTML;
  text = replaced.replace(/(.{300}[^\.]*)(\.)+/g, '</p>$1.<p>');
  document.getElementById("navigation").innerHTML = text;
</script>

