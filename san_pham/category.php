<div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Danh mục</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                          <?php 

                $ket_noi=mysqli_connect("localhost","root","","beautiful_health");
                $sql="SELECT * FROM tbl_loai_sp

                ";
                $sanpham=mysqli_query($ket_noi,$sql);
                while($row=mysqli_fetch_array($sanpham))
                {
                ;?> 
                                                    <li><a href="san_pham_theo_danh_muc.php?lsp_id=<?php echo $row["lsp_id"];?>"><?php echo $row["lsp_ten"] ?></a></li>
                                                    <?php }; ?>

                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>