 <!--blog area start-->
 <section class="blog_section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Bài</strong>Viết</span></h2>
                    </div>
                    <div class="blog_carousel blog_column4 owl-carousel">
                      
                           
                    <?php
                    $listbaiviet=loadall_baiviet();
                    foreach($listbaiviet as $bvsp){
                        
                        extract($bvsp);
                            $linkbv = "../ClientController/ClientController.php?act=tintuc&id_bv=".$id_bv;
                            $hinhbv = "../../../../public/assets/dist/img/admin/baiviet/".$img_bv;
                            echo'<div class="single_blog">
                            <div class="blog_thumb">
                                <a href="#"><img src="'.$hinhbv.'" alt=""></a>
                            </div>
                            <div class="date_post">
                                    <span>07 Feb 2019</span>
                                </div>
                            <div class="blog_content">
                                <h3 class="product_name"><a href="#">'.$ten_bai_viet.'</a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><a href="#">'.$mota.'</a></li>
                                        <li><a href="#">'.$trang_thai.'</a></li>
                                    </ul>
                                </div> <br>
                                <button type="submit"><a class="view_more" href="'.$linkbv.'">Xem Bài Viết</a></button>
                                
                            </div>
                        </div>';
                    }
                        
              ?>         
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->