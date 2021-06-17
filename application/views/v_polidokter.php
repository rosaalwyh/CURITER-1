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
    @media screen and (max-width: 770px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }

        .row{
            align-content: space-around;
            justify-content:center;
            flex-direction: column;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: white;
    }
</style>
<div class="container" style="margin-top: 90px">
    <!-- <?= var_dump($jadwal); ?> -->
    <div class="row justify-content-center" style="margin-left: 15px;">
        <?php foreach ($poli as $poli) { ?>
            <div class="card mt-6 mr-md-5" style="width: 18rem">
                <a href="<?= base_url('caridokterrs/dokter/' . $poli['id_poli']); ?>" type="hidden"></a>
                <center>
                    <img class="card-img-top" src="<?php echo base_url(); ?>Assets/poli/<?= $poli['gambar'] ?>" alt="Card image cap">
                </center>
                <div class="card-body">
                    <p> <strong> <?= $poli['nama_poli'] ?></strong> </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>