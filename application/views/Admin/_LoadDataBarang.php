<?php
                                        if($banyak_data > 0){
                                    ?>
                                            <?php
                                                foreach ($barang as $key_barang => $value_barang) {

                                                $exp = explode(PHP_EOL, $value_barang->deskripsi);
                                                $cuci = explode(PHP_EOL, $value_barang->Petunjukcuci);
                                                $ukuran = explode(PHP_EOL, $value_barang->detailsize);
                                                ?>
                                                    <div class="col-lg-3 col-md-6 mt-5">
                                                        <div class="cart card-bordered">
                                                            <?php
                                                                if(empty($gambar[$key_barang]->gambar_product)){

                                                                    echo '<img src="'.base_url('assets/gambar/Blank-profile.png').'" style="height:300px; width:auto;">';

                                                                }else{

                                                                    echo '<img src="'.base_url('uploads/'.$gambar[$key_barang]->gambar_product).'" style="height:300px; width:auto;">';

                                                                }
                                                            ?>
                                                            
                                                            <div class="card-body">
                                                                <h5 class="title"><?php echo $value_barang->barangnama;
                                                                echo "&nbsp;&nbsp;<a href='#' data-target='#modalEditbarang' data-toggle='modal'data-id='$value_barang->id' title='Ubah'><i class='fa fa-edit'></i></a>&nbsp;";
                                                                #echo "<a href='".site_url('Barang/delete_barang/'.$value_barang->id)."' onclick='javascript: return confirm('Anda yakin hapus ?')'><i class='fa fa-trash'></i></a>";
                                                                echo "<a href='javascript:void(0);' data-id='$value_barang->id' id='hapus_barang$key_barang'><i class='fa fa-trash'></i></a>";
                                                                ?>
                                                                    
                                                                </h5>
                                                                <div class="card-text">
                                                                    SKU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->SKU;?> <br>
                                                                    kategori&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $value_barang->kategorinama;?> <br>
                                                                    Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <?php echo number_format($value_barang->harga,2);?> <br>
                                                                    Size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php
                                                                        foreach ($size[$key_barang] as $key_size => $value_size) {
                                                                            echo $value_size->ukuran."(".$value_size->stok."), " ;
                                                                        }
                                                                    ?>
                                                               
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acordesc<?php echo $value_barang->id;?>">Deskripsi</a>
                                                                            </div>
                                                                            <div id="acordesc<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($exp as $key_exp => $value_exp) {
                                                                                            echo $value_exp.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acorukuran<?php echo $value_barang->id;?>">Detail Ukuran</a>
                                                                            </div>
                                                                            <div id="acorukuran<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($ukuran as $key_ukuran => $value_ukuran) {
                                                                                            echo $value_ukuran.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="accordion3" class="according accordion-s3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <a class="card-link" data-toggle="collapse" href="#acorcuci<?php echo $value_barang->id;?>">Petunjuk Cuci</a>
                                                                            </div>
                                                                            <div id="acorcuci<?php echo $value_barang->id;?>" class="collapse show" data-parent="#accordion3">
                                                                                <div class="card-body">
                                                                                    <?php
                                                                                        foreach ($cuci as $key_cuci => $value_cuci) {
                                                                                            echo $value_cuci.'<br>';
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                        }else{
                                            echo "TIdak ada data";
                                        }
                                    ?>
<div class="col-lg-6 col-md-6 col-xs-6 col-lg-offset-3 col-xs-offset-3 col-md-offset-3">
    <?php echo $this->pagination->create_links(); ?>
</div>