  <?php $this->load->view('layout/header');?>
  
  <style>
       
        @import "https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap";
       .hom-head:before{background:#ffffff14}
       .home-tit{margin-bottom:20px;padding-top:60px}
        .hom2-hom-ban{float:left;width:46%;background-size:cover;margin:0 2%;background:#e6f6fb;padding:30px 100px 30px 30px;border-radius:5px;position:relative;font-family:'Poppins',sans-serif}
        .hom2-hom-ban:hover a{background:#d6c607}
        .hom2-hom-ban h2{font-family:'Poppins',sans-serif;font-weight:600;font-size:25px;padding-bottom:5px}
        .hom2-hom-ban p{font-size:14px}
        .hom2-hom-ban a{background:#21d78d;color:#fff;padding:10px 20px;border-radius:5px;display:inline-block;cursor:pointer;font-size:13px;font-weight:400}
        .hom2-hom-ban p,.hom2-hom-ban h2,.hom2-hom-ban a{position:relative;color:#fff}
        .hom2-hom-ban:before{content:'';position:absolute;width:100%;height:100%;left:0;top:0;right:0;bottom:0;z-index:0;opacity:.8;background:#24C6DC;border-radius:5px}
        .hom2-hom-ban1:before{background-image:linear-gradient(140deg,#0c7ada 0%,#0761af 50%,#0f243e94 75%)}
        .hom2-hom-ban2:before{background-image:linear-gradient(140deg,#768404 0%,#768404 50%,#0f243e94 75%)}
        .hom2-hom-ban1{background-image:url(images/home2-hand.jpg)}
        .hom2-hom-ban2{background-image:url(images/home2-work.jpg)}
        .hom2-hom-ban-main{float:left;width:100%;padding-bottom:70px}
        .hom2-cus-sli{float:left;width:100%}
        .hom2-cus-sli ul li{float:left;width:25%;padding:12px 20px}
        .testmo{width:100%;background:#fff;box-shadow:0 1px 7px -3px #161d2926;border-radius:5px;padding:30px;position:relative}
        .testmo img{width:64px;height:64px;border-radius:50px;object-fit:cover;margin:-80px 0 0}
        .testmo h4{font-size:14px;font-weight:600;margin-bottom:2px;font-family:'Poppins',sans-serif}
        .testmo span{font-size:11px;font-weight:400;color:#727688}
        .testmo span a{font-weight:500;color:#4caf50;display:block;font-size:12px}
        .testmo p{color:#727688;font-size:12px;line-height:20px;margin:0;font-weight:400;height:58px;overflow:hidden;border-top:1px solid #f1eeee;padding-top:15px;margin-top:15px}
        .testmo p:before{content:'format_quote';font-size:21px;margin:-25px 0 0;background:#fff}
        .hom2-cus{background:#f7f8f9;padding-bottom:70px}
        .testmo .rat{padding:2px 2px 2px 10px;display:inline-block;position:absolute;right:30px;top:52px}
        .testmo .rat i{color:#FF9800;font-size:17px;width:12px}
        .hom2-cus-sli ul{position:relative;overflow:hidden;padding:20px 20px 0}
        .slick-arrow{width:50px;height:50px;border-radius:50px;background:#fff;border:1px solid #ededed;color:#ffffff03;position:absolute;z-index:9;top:38%}
        .slick-arrow:before{content:'chevron_left';font-size:27px;top:4px;left:9px}
        .slick-prev{left:14px}
        .slick-next{right:14px}
        .slick-next:before{content:'chevron_right';font-size:27px}
        .hom4-prop-box{padding:0;background:#fff;box-shadow:0 1px 14px -4px #161d2926;border:1px solid #efefef}
        .hom4-prop-box img{width:100%;border-radius:2px;margin:0;height:120px}
        .hom4-prop-box div{padding:25px}
        .hom4-prop-box .rat{position:relative;top:initial;right:initial;padding:2px 2px 2px 0;display:block;margin:0;height:17px;left:-2px}
        .hom4-fea{background:#fff;padding-bottom:40px}
        .hom4-fea .hom2-cus-sli ul li{padding:12px 20px}
        .hom4-fea .home-tit{margin-bottom: 0px;padding-top: 70px;}
        @media screen and (max-width:992px) {
            .hom2-hom-ban{width:100%;margin:20px 0}
        }
        @media screen and (max-width:767px) {
            .ban-tit h1 b{font-size:32px;line-height:38px}
        }
        @media screen and (max-width:550px) {
            .hom-head .ban-search ul li{width:100%;margin:0 0 15px}
        }
    </style>
  <!-- START -->
    <section>
        <div class="str">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Join us Now</span></h2>
                        <p>We connect with targeted customers for greater business conversion</p>
                    </div>
                    <div class="hom2-hom-ban-main">
                        <div class="hom2-hom-ban hom2-hom-ban1">
                            <h2>Are you an Educator?</h2>
                            <p>Update your details including services, about, contact details payment options and more. </p>
                            <a href="<?php echo base_url('login');?>">Register as Educator</a>
                        </div>
                        <div class="hom2-hom-ban hom2-hom-ban2">
                            <h2>Are you a learner?</h2>
                            <p>What services do you need, Starsboard will help you to find educator on your mobile.</p>
                            <a href="<?php echo base_url('registration');?>">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section>
        <div class="str">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Popular </span> near you</h2>
                        <!--                    <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>-->
                    </div>
                    <div class="land-pack">
                        <ul>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/math_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Math                                                                                           <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/math');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/kids_coding_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Kids Coding                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/kids-coding');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/upsc_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>UPSC                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/upsc');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/cpl_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>CPL                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/cpl');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/mob_dev_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Mobile App Development                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/mobile-app-development');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/fori_lang_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Foreign Language                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/foreign-language');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/digital_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Digital Marketing                                                                                             <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/digital-marketing');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="<?php echo base_url('assets/public/images/extra/painting_sub.jpg');?>" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Painting                                                                                            <span
                                                class="dir-ho-cat">Show All (00                                                    )</span>
                                        </h4>
                                    </div>
                                    <a href="<?php echo base_url('educator/painting');?>"
                                       class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                        </ul>
                        <a href="all-category" class="more">View all services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->



    <!-- START -->
    <section>
        <div class="str">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Explore City</span> Category                        </h2>
                        <!--                    <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>-->
                    </div>
                    <div class="home-city">
                        <ul>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="<?= base_url('assets/public/images/extra/academic_bg.jpg');?>"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src="#"
                                             alt="">
                                        <h4>Academic</h4>
                                        <div class="list-rat-all">

                                        </div>
                                        
                                    </div>
                                    <a href="<?echo base_url('educator/academic');?>"
                                       class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="<?= base_url('assets/public/images/extra/competitive_exam_bg.jpg');?>"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src=""
                                             alt="">
                                        <h4>Competetive Exam</h4>
                                        <div class="list-rat-all">

                                           
                                        </div>
                                       
                                    </div>
                                    <a href="<?echo base_url('educator/exam');?>"
                                       class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="<?= base_url('assets/public/images/extra/professional_bg.jpg');?>"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src=""
                                             alt="">
                                        <h4>Professional</h4>
                                        <div class="list-rat-all">

                                            
                                        </div>
                                       
                                    </div>
                                    <a href="<?echo base_url('educator/professinoal');?>"
                                       class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="<?= base_url('assets/public/images/extra/career_counselling.jpg');?>"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src=""
                                             alt="">
                                        <h4>Career Counselling</h4>
                                        <div class="list-rat-all">

                                          
                                        </div>
                                       
                                    </div>
                                    <a href="<?echo base_url('educator/career-counselling');?>"
                                       class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="<?= base_url('assets/public/images/extra/art_bg.jpg');?>"
                                             alt="">
                                    </div>
                                    <div>
                                        <img src=""
                                             alt="">
                                        <h4>Art</h4>
                                        <div class="list-rat-all">

                                            
                                        </div>
                                      
                                    </div>
                                    <a href="<?echo base_url('educator/art');?>"
                                       class="fclick">&nbsp;</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section>
        <div class="hom-mpop-ser">
            <div class="container">
                <div class="hom-mpop-main">
                    <div class="home-tit">
                        <h2>
                            <span>Featured Services</span> in your city                        </h2>
                       
                    </div>
                    <div class="col-md-6">
                        <div>
						<?php if(!empty($isFeaturedA)){
											foreach($isFeaturedA as $isFeaturedAKey =>$isFeaturedAVal){ ?>  
                            <div class="hom-mpop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"><img src="<?=base_url('uploads/'.$isFeaturedAVal->user_id.'/'.$isFeaturedAVal->edu_image);?>" alt="">
                            </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9">
                                <h3><?= $isFeaturedAVal->edu_name;?></h3>
                                <h4><?= $isFeaturedAVal->edu_pincode;?></h4>
                                <p><?= $isFeaturedAVal->edu_city;?></p>
                             <span class="rat-sh">5.0</span>
                                     </div>
                            <a href="">&nbsp;</a>
                        </div>
						 <?php }}else{ echo 'No data found';}?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
						<?php if(!empty($isFeaturedB)){
							foreach($isFeaturedB as $isFeaturedBKey =>$isFeaturedBVal){ ?> 
                            <div class="hom-mpop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"><img src="<?=base_url('uploads/'.$isFeaturedBVal->user_id.'/'.$isFeaturedBVal->edu_image);?>" alt="">
                            </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9">
                                <h3><?= $isFeaturedAVal->edu_name;?></h3>
                                <h4><?= $isFeaturedBVal->edu_pincode;?></h4>
                                <p><?= $isFeaturedBVal->edu_city;?></p>
                                                                    <span class="rat-sh">5.0</span>
                                                            </div>
                            <a href="<?= base_url('detail/'.url_title($isFeaturedBVal->edu_name).'/'.$isFeaturedBVal->user_id);?>">
								&nbsp;</a>
                        </div>
	             <?php }}else{ echo 'No data found';}?>   
                        </div>
                    </div>
                </div>
                <div class="hlead-coll">
                    <div class="col-md-6">
                        <div class="hom-cre-acc-left">
                            <h3>What service do you need?<span>Starsboard</span>
                            </h3>
                            <p>Tell us more about your requirements so that we can connect you to the right Educator.</p>
                            <ul>
                                <li><img src="https://bizbookdirectorytemplate.com/images/icon/blog.png" alt="">
                                    <div>
                                        <h5>Tell us more about your requirements</h5>
                                        <p>HI Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                                    </div>
                                </li>
                                <li><img src="https://bizbookdirectorytemplate.com/images/icon/shield.png" alt="">
                                    <div>
                                        <h5>We connect with right service provider</h5>
                                        <p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
                                    </div>
                                </li>
                                <li><img src="https://bizbookdirectorytemplate.com/images/icon/general.png" alt="">
                                    <div>
                                        <h5>Happy with our service</h5>
                                        <p>Your local business too needs brand management and image making. As you know the local market..</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hom-col-req">
                            <div class="log-bor">&nbsp;</div>
                            <span class="udb-inst">Fill the form</span>
                            <h4>What you looking for?</h4>
                            <div id="home_enq_success" class="log"
                                 style="display: none;">
                                <p>Your Enquiry Is Submitted Successfully!!!</p>
                            </div>
                            <div id="home_enq_fail" class="log" style="display: none;">
                                <p>Oops!! Something Went Wrong Try Later!!!</p>
                            </div>
                            <div id="home_enq_same" class="log" style="display: none;">
                                <p>You cannot make enquiry on your own listing!!</p>
                            </div>
                            <form name="home_enquiry_form" id="home_enquiry_form" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="listing_id" value="0" placeholder=""
                                       required>
                                <input type="hidden" class="form-control" name="listing_user_id" value="0"
                                       placeholder=""
                                       required>
                                <input type="hidden" class="form-control" name="enquiry_sender_id" value=""
                                       placeholder=""
                                       required>
                                <input type="hidden" class="form-control"
                                       name="enquiry_source"
                                       value="Website" placeholder="" required>
                                <div class="form-group">
                                    <input type="text" name="enquiry_name" value="" required="required"
                                           class="form-control"
                                           placeholder="Enter name*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email*"
                                           required="required"
                                           value="" name="enquiry_email"
                                           pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                           title="Invalid email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" name="enquiry_mobile"
                                           placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                                           title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                           required="">
                                </div>
                                <div class="form-group">
                                    <select name="enquiry_category" id="enquiry_category" class="form-control">
                                        <option value="">Select Category</option>
                                        <option
                                            value="23">Arquitectos</option>
                                        <option
                                            value="22">Street Food</option>
                                        <option
                                            value="21">Abogados</option>
                                        <option
                                            value="18">Hotel & Food</option>
                                        <option
                                            value="17">Pet shop</option>
                                        <option
                                            value="16">Digital Products</option>
                                        <option
                                            value="15">Spa and Facial</option>
                                        <option
                                            value="10">Real Estate</option>
                                        <option
                                            value="8">Sports</option>
                                        <option
                                            value="7">Education</option>
                                        <option
                                            value="6">Electricals</option>
                                        <option
                                            value="5">Automobiles</option>
                                        <option
                                            value="3">Transportation</option>
                                        <option
                                            value="2">Hospitals</option>
                                        <option
                                            value="1">Hotels And Resorts</option>
                                    </select>
                                </div>
                                <div class="form-group">
                        <textarea class="form-control" rows="3" name="enquiry_message"
                                  placeholder="Enter your query or message"></textarea>
                                </div>
                                <input type="hidden" id="source">
                                <button type="submit" id="home_enquiry_submit" name="home_enquiry_submit"
                                        class="btn btn-primary">
                                    Submit Requirements                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- START -->
    <section>
        <div class="str str-full">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2>
                            <span>Top Service Provider</span> in city                        </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <div class="ho-popu-bod">
                        <!--Top Branding Hotels-->
                                                    <div class="col-md-4">
                                <div class="hot-page2-hom-pre-head">
                                    <h4>Top                                        <span>Academic</span></h4>
                                </div>
                                <div class="hot-page2-hom-pre">
                                    <ul>
                                       
                                          
                                            <?php 
											if(!empty($academic)){
											foreach($academic as $academicKey =>$academicVal){ ?>                                           <!--LISTINGS-->
                                            <li>
                                                <div class="hot-page2-hom-pre-1"><img src="<?=base_url('uploads/'.$academicVal->user_id.'/'.$academicVal->edu_image);?>" alt="">
                                                </div>
                                                <div class="hot-page2-hom-pre-2">
                                                    <h5><?= $academicVal->edu_name;?></h5>
                                                    <span><?= $academicVal->edu_city;?></span>
                                                </div>
                                                                                                <a href="<?= base_url('detail/'.url_title($academicVal->edu_name).'/'.$academicVal->Eid);?>" class="fclick"></a>
                                            </li>
                                            <!--LISTINGS-->
                                            <?php }}else{ echo 'No data found';}?>
                                    </ul>
                                </div>
                            </div>
                                                        <div class="col-md-4">
                                <div class="hot-page2-hom-pre-head">
                                    <h4>Top  <span>Professional</span></h4>
                                </div>
                                <div class="hot-page2-hom-pre">
                                    <ul>
                                         <?php if(!empty($counselling)){ foreach($counselling as $counsellingKey =>$counsellingVal){ ?> 
                                                                                        <!--LISTINGS-->
                                            <li>
                                                <div class="hot-page2-hom-pre-1"><img src="<?=base_url('uploads/'.$counsellingVal->user_id.'/'.$counsellingVal->edu_image);?>" alt="">
                                                </div>
                                                <div class="hot-page2-hom-pre-2">
                                                    <h5><?= $counsellingVal->edu_name;?></h5>
                                                    <span><?= $counsellingVal->edu_city;?></span>
                                                </div>
                                                                                                <a href="<?= base_url('detail/'.url_title($counsellingVal->edu_name).'/'.$counsellingVal->Eid);?>" class="fclick"></a>
                                            </li>
                                            <!--LISTINGS-->
											<?php }}else{ echo 'No data found';}?>
                                            
                                    </ul>
                                </div>
                            </div>
                                                        <div class="col-md-4">
                                <div class="hot-page2-hom-pre-head">
                                    <h4>Top  <span>Counsellor</span></h4>
                                </div>
                                <div class="hot-page2-hom-pre">
                                    <ul>
                                             <?php if(!empty($training)){ foreach($training as $trainingKey =>$trainingVal){ ?> 
                                      <li>
                                                <div class="hot-page2-hom-pre-1"><img src="<?=base_url('uploads/'.$trainingVal->user_id.'/'.$trainingVal->edu_image);?>" alt="">
                                                </div>
                                                <div class="hot-page2-hom-pre-2">
                                                    <h5><?= $trainingVal->edu_name;?></h5>
                                                    <span><?= $trainingVal->edu_name;?></span>
                                                </div>
                                                                                                    <div class="hot-page2-hom-pre-3">
                                                        <span>3.0</span>
                                                    </div>
                                                                                                <a href="<?= base_url('detail/'.url_title($trainingVal->edu_name).'/'.$trainingVal->Eid);?>" class="fclick"></a>
											 </li><?php }}else{ echo 'No data found';}?>
                                            <!--LISTINGS-->
                                            
                                    </ul>
                                </div>
                            </div>
                                                    <!--End Top Branding Hotels-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section>
        <div id="demo" class="carousel slide cate-sli caro-home" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/public/images/ad_banner1.jpeg');?>" alt=""
                         width="1100" height="500">
                    <a href="" target="_blank"></a>
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo base_url('assets/public/images/ad_banner3.jpg');?>" alt=""
                         width="1100" height="500">
                    <a href="" target="_blank"></a>
                </div>
				<div class="carousel-item ">
                    <img src="<?php echo base_url('assets/public/images/ad_banner3.jpg');?>" alt=""
                          width="1100" height="500">
                    <a href="" target="_blank"></a>
                </div>
				<div class="carousel-item ">
                    <img src="<?php echo base_url('assets/public/images/ad_banner4.jpg');?>" alt=""
                         width="1100" height="500">
                    <a href="" target="_blank"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!-- START -->
    <section>
        <div class="str count">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>How it</span> works  </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>


                    <div class="how-wrks">

                        <div class="how-wrks-inn">
                            <ul>
                                <li>
                                    <div>
                                        <span>1</span>
                                        <img src="<?=base_url('assets/public/images/about-us/how1.png');?>" alt="">
                                        <h4>Create an account</h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>2</span>
                                        <img src="<?=base_url('assets/public/images/about-us/how2.png');?>" alt="">
                                        <h4>Add your Listing</h4>
                                   </div>
                                </li>
                                <li>
                                    <div>
                                        <span>3</span>
                                        <img src="<?=base_url('assets/public/images/about-us/how3.png');?>" alt="">
                                        <h4>Get more leads</h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>4</span>
                                        <img src="<?=base_url('assets/public/images/about-us/how4.png');?>" alt="">
                                        <h4>Archive goles</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- END -->

 
  <!-- START -->
    <section>
        <div class="str hom2-cus">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Our user reviews</span></h2>
                        <p>We connect with targeted customers for greater business conversion</p>
                    </div>

                    <div class="hom2-cus-sli">
                        <ul class="multiple-items">
                                                            <li>
                                    <div class="testmo">
                                        <img src="<?=base_url('assets/public/images/no-image.jpg');?>" alt="">
                                        <h4>Sample</h4>
                                    <span>Written a review to <a
                                            href="https://bizbookdirectorytemplate.com/listing/rental-app">Rental App</a></span>

                                                                                    <label class="rat">
                                                                                                    <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star_border</i>
                                                                                                        <i class="material-icons">star_border</i>
                                                                                                </label>
                                                                                    <p>perfect</p>
                                    </div>
                                </li>
                                                                <li>
                                    <div class="testmo">
                                        <img src="<?=base_url('assets/public/images/no-image.jpg');?>" alt="">
                                        <h4></h4>
                                    <span>Written a review to <a
                                            href="https://bizbookdirectorytemplate.com/listing/"></a></span>

                                                                                <p></p>
                                    </div>
                                </li>
                                                                <li>
                                    <div class="testmo">
                                        <img src="<?=base_url('assets/public/images/no-image.jpg');?>" alt="">
                                        <h4></h4>
                                    <span>Written a review to <a
                                            href="https://bizbookdirectorytemplate.com/listing/"></a></span>

                                                                                <p></p>
                                    </div>
                                </li>
                                                                <li>
                                    <div class="testmo">
                                        <img src="<?=base_url('assets/public/images/no-image.jpg');?>" alt="">
                                        <h4>Loki</h4>
                                    <span>Written a review to <a
                                            href="https://bizbookdirectorytemplate.com/listing/asian-real-estate">Asian Real Estate</a></span>

                                                                                    <label class="rat">
                                                                                                    <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                        <i class="material-icons">star</i>
                                                                                                </label>
                                                                                    <p>SxdA</p>
                                    </div>
                                </li>
                                            
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
   
	 <?php $this->load->view('layout/footer');?>