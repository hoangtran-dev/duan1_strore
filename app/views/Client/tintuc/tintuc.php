
    <!--blog body area start-->
    <div class="blog_details blog_padding mt-23">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                       
                        <div class="blog_content">
                            <h3 class="post_title">Bài đăng hình ảnh blog</h3>
                           
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">thời trang</a></span>
                                    <span><a href="#">,áo thun </a></span>
                                    <span><a href="#">,quần bò</a></span>
                                </div>
               
                            </div>
                        </div>
                       
                        <?php
                    // $listbv=loadone_baiviet($id_bv);
                  // $listbaiviet=loadall_baiviet();
                //foreach($listbaiviet as $bvsp){
                        extract($bv);
                        $linkbv = "../ClientController/ClientController.php?act=tintuc&id_bv=".$id_bv;
                        $hinhbv = "../../../../public/assets/dist/img/admin/baiviet/".$img_bv;
                           // echo' 
                        ?> 
                           <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="#"><img src="<?= $hinhbv ?>"  alt=""></a>
                            </div>
                            <div class="date_post">
                                    <span>07 Feb 2019</span>
                                </div>
                            <div class="blog_content">
                                <h3 class="product_name"><a href="#"><?= $ten_bai_viet ?></a></h3>
                                <div class="sub_featured">
                                    <ul>
                                        <li><h4><a href="#"><?= $mota ?></a></h4></li>
                                        <li><a href="#"><?= $noi_dung ?></a></li>
                                        <li><a href="#"><?= $trang_thai ?></a></li>
                                    </ul>
                                </div> <br>
                                <div class="social_sharing">
                                <h3>share this post:</h3>
                                <ul>
                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    

                        <div class="related_posts">
                            <h3>Bài viết liên quan</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="../../../../public/assetclient/img/blog/blog3.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="#">Post with Gallery</a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> December 10, 2019 </span>
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">

                        <div class="widget_list widget_post">
                            <h3>Bài viết gần đây</h3>
            
                            <?php
                    $listbaiviet=loadall_baiviet();
                    foreach($listbaiviet as $bvsp){
                        extract($bvsp);
                        $linkbv = "../ClientController/ClientController.php?act=tintuc&id_bv=".$id_bv;
                            $hinhbv = "../../../../public/assets/dist/img/admin/baiviet/".$img_bv;
                            echo'<div class="post_wrappers">
                            <div class="blog_thumb">
                                <a href="#"><img src="'.$hinhbv.'" alt=""></a>
                            </div>
                            <div class="date_post">
                                    <span>07 Feb 2019</span>
                                </div>
                            <div class="blog_content">
                                <h3 class="product_name"><a href="'.$linkbv.'">'.$ten_bai_viet.'</a></h3>
                                
                            </div>
                        </div>';
                    }
                        
              ?>                 
                       
                            </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section area -->
    <?php
 include "../layout/body7.php";
 
   
?>