<div class="container-fluid">
    <div class="content-body-result">
        <div class="row cardshow">
            <div class="col-md-15">
                <?php
                if (count($terms) >= 2) {
                    foreach ($konten as $kon) {
                        foreach ($kon->find('h4') as $h4) {
                            foreach ($terms as $term) {
                                if (stripos($h4->plaintext, $term) !== false) {
                                    foreach ($kon->find('p') as $p) {
                                        foreach ($h4->find('a') as $link) {
                                            if ($h4->plaintext !== null) { ?>
                                                <div class="row flex-row flex-nowrap cardcontent">
                                                    <div class="col-6 itemcard">
                                                        <div class="itemberita">
                                                            <ul>
                                                                <li>
                                                                    <b><?php echo $h4->plaintext; ?></b>
                                                                </li>
                                                                <p><?php echo $p->plaintext; ?></p>
                                                            </ul>
                                                        </div>
                                                        <a href="<?php echo $link->href ?>" class="btn btn-primary" id="btnlanjut"><i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            <?php   } else { ?>
                                                <p>Kosong </p>
                                                <?php; ?>
                    <?php  }
                                        }
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    ?>

                <?php  } else { ?>
                    <?php foreach ($konten as $e) { ?>
                        <?php foreach ($keyword as $kw) {
                            if (strpos($e->plaintext, $kw['key']) !== false) {
                                foreach ($e->find('h4') as $h4) {
                                    foreach ($e->find('p') as $p) {
                                        foreach ($h4->find('a') as $link) {
                                            if ($h4->plaintext !== null) { ?>
                                                <div class="row flex-row flex-nowrap cardcontent">
                                                    <div class="col-6 itemcard">
                                                        <div class="itemberita">
                                                            <ul>
                                                                <li>
                                                                    <b><?php echo $h4->plaintext; ?></b>
                                                                </li>
                                                                <p><?php echo $p->plaintext; ?></p>
                                                            </ul>
                                                        </div>
                                                        <a href="<?php echo $link->href ?>" class="btn btn-primary" id="btnlanjut"><i class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                            <?php   } else { ?>
                                                <p>Kosong </p>
                                                <?php; ?>
                        <?php  }
                                        }
                                    }
                                }
                            }
                        } ?>
                    <?php } ?>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>