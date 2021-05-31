<main role="main">
    <div class="container-fluid contenttop">
        <div class="row content">
            <div class="col-md-10 colcontent">
                <?php echo form_open_multipart('result_c', 'id="forminput"'); ?>
                <div class="heading-home">
                    <h1>Eksplor Berita</h1>
                    <p>investigasi aset-asetmu dengan pantau kabar terkini</p>
                </div>
                <div class="row boxsearch">
                    <div class="col-md-8 colcontent-boxsearch">
                        <select class="form-select option-search" aria-label=".form-select-lg example">
                            <option selected>All</option>
                            <option value="1">Suara</option>
                            <option value="2">Bisnis</option>
                        </select>
                        <input type="text" class="form-control" name="inputcari" id="inputcari" placeholder="cari berita">
                        <button class="btn btn-primary" id="btncari"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row boxfooter">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>