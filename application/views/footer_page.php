<style>
.row{
  margin:0px;
}
.img{
  margin-left:5rem;
}
@media screen and (max-width: 586px) {
  .col{
    display:flex;
    flex-wrap:wrap;
    justify-content: center;

  }
  .img{
    margin:0;
  }

}

</style>

<div class="footer" style="background-color: #dff0fe; width:100%">
  <div class="row">
    <div class="col">
      <img class="img" src="<?= base_url('assets/curiterlogooo.png') ?>" style="width:150px" alt="">
    </div>
    <div class="col-sm text-center m-auto" style="margin-bottom:0px; color:#477A98">Copyright &copy; Curiter 2020
    </div>
    <div class="col-sm">
      <i class="fas fa-map-marker-alt"></i>
    </div>
  </div>

</div>
</body>

</html>