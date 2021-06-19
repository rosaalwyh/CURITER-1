<style>
  .footer {
    bottom: 0;
    padding-top: 10px;
  }

  .row {
    margin: 0px;
  }

  .img {
    margin-left: 5rem;
  }

  @media screen and (max-width: 586px) {
    .col {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;

    }

    .img {
      margin-left: 5rem;
    }

    @media screen and (max-width: 586px) {

      .col,
      .col p,
      i {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

      }

      .img {
        margin: 0;
      }

    }
</style>

<div class="footer" id="footer" style="background-color: #dff0fe; width:100%">
  <div class="row">
    <div class="col">
      <img class="img mb-2" src="<?= base_url('assets/curiterlogooo.png') ?>" style="width:150px" alt="">
    </div>
    <div class="col-sm text-center m-auto" style="margin-bottom:0px; color:#477A98">Copyright &copy; Curiter 2021
    </div>
    <div class="col-sm m-auto" style="color:#477A98;">
      <p><i class="fas fa-map-marker-alt"></i>&ensp;Palembang, Sumatera Selatan</p>
    </div>
  </div>

</div>
</body>

</html>