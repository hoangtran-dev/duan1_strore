
    <!--blog body area start-->
    <div class="blog_details blog_padding mt-23">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                       
                        <div class="blog_content">
                           
                           
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">thời trang</a></span>
                                    <span><a href="#">,áo thun </a></span>
                                    <span><a href="#">,quần bò</a></span>
                                </div>
               
                            </div>
                        </div>
                       
                      
                    

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                        <div class="blog_thumb">
                            <a href="#"><img src="../../../../public/assets/dist/img/admin/baiviet/anhqa.webp" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3 class="post_title">Bài đăng hình ảnh blog</h3>
                            <div class="post_meta">
                                <span><i class="ion-person"></i> Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span>|</span>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i>  Posted on  March 10, 2019	</span>

                            </div>
                            <div class="post_content">
                                <p>Săn hàng hiệu, săn quần áo thời trang đang là mode của nhiều bạn trẻ. Diện lên mình bộ đồ thời trang đắt tiền giúp nâng lên giá trị của bản thân, khiến mình sang chảnh, lịch lãm, quyễn rũ hơn. Hiều được nhu cầu đó, ngày nay có rất, rất nhiều hãng quần áo thời trang đã tạo được chỗ đúng vững vàng trong lòng người tiêu dùng. Và để bán được những quần áo thời trang đó, không thể thiếu những dòng cap hay sau đây.</p>
                                <blockquote>
                                    <p>Jingle bell, jingle bell!!!  Giáng sinh và những ngày lễ cuối năm sắp đến rồi! Đổi gió bằng những chiếc áo len xanh, đỏ dày dặn mà ấm áp thôi nào các bạn ơi! Ở đây chúng mình có nhiều mẫu lắm, cực hợp với không khí lễ hội luôn đó!</p>
                             </blockquote>
                                <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                            </div>
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">, fashion</a></span>
                                    <span><a href="#">, t-shirt</a></span>
                                    <span><a href="#">, white</a></span>
                                </div>

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
                    $listbaiviet=loadAll_baiviet_home();
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