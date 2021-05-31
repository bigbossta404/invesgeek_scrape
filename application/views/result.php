<div class="container-fluid">
    <div class="content-body-result">
        <div class="row cardshow">
            <div class="col-md-15">
                <?php
                // shuffle($res);

                foreach ($res as $r) :
                ?>
                    <div class="row flex-row flex-nowrap cardcontent">
                        <div class="col-6 itemcard">
                            <div class="itemberita">
                                <ul>
                                    <li>
                                        <b><?php echo $r['judul']; ?></b>
                                        <!-- <p id="deskripsi"><?php echo $r['desc']; ?></p> -->
                                        <div class="litinfo">
                                            <p><small><?php
                                                        echo parse_url($r['url'], PHP_URL_HOST);
                                                        ?></small></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1 bukalink">
                                <a href="<?php echo $r['url']; ?>" class="btn btn-primary" id="btnlanjut"><i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>