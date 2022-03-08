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
   <div class="str" style="margin-bottom: 5rem;">
      <div class="container">
         <div class="row">
            <div class="home-tit">
               <h2><span>Join us Now</span></h2>
               <p>We connect with targeted customers for greater business conversion</p>
            </div>
            <div class="hom2-hom-ban-main">
               <div class="hom2-hom-ban hom2-hom-ban1">
                  <ul class="circles">
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                  </ul>
                  <h2>Are you an Educator?</h2>
                  <p>Update your details including services, about, contact details payment options and more. </p>
                  <a href="<?php echo base_url('login');?>">Register as Educator</a>
               </div>
               <div class="hom2-hom-ban hom2-hom-ban1">
                  <ul class="circles">
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li></li>
                  </ul>
                  <h2>Are you a learner?</h2>
                  <p>What services do you need, Starsboard will help you to find educator on your mobile.</p>
                  <a href="<?php echo base_url('registration');?>">Register as Learner</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END -->
<section style="background-image: url(https://starsboard.in/assets/public/images/bg.jpg);background-color:#f1eeeec7;background-blend-mode: overlay;background-position: inherit;">
   <div class="str">
      <div class="container">
         <div class="row">
            <div class="home-tit">
               <h2><span>Popular </span> near you</h2>
            </div>
            <div class="land-pack">
               <ul>
                  <li>
                     <div class="land-pack-grid">
                        <div class="land-pack-grid-img">
                           <img src="<?php echo base_url('assets/public/images/extra/math_sub.jpg');?>" alt="">
                        </div>
                        <div class="land-pack-grid-text">
                           <h4>Calculus                                                                                           <span
                              class="dir-ho-cat">Show All (<?php echo ($math ? $math :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo urlencode(base_url('educator/math'));?>"
                           class="land-pack-grid-btn">View all listings</a>
                     </div>
                  </li>
                  <li>
                     <div class="land-pack-grid">
                        <div class="land-pack-grid-img">
                           <img src="<?php echo base_url('assets/public/images/extra/kids_coding_sub.jpg');?>" alt="">
                        </div>
                        <div class="land-pack-grid-text">
                           <h4>Code Zone                                                                                            <span
                              class="dir-ho-cat">Show All (<?php echo ($kids_coding ? $kids_coding :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo base_url('educator/kids');?>"
                           class="land-pack-grid-btn">View all listings</a>
                     </div>
                  </li>
                  <li>
                     <div class="land-pack-grid">
                        <div class="land-pack-grid-img">
                           <img src="<?php echo base_url('assets/public/images/extra/upsc_sub.jpg');?>" alt="">
                        </div>
                        <div class="land-pack-grid-text">
                           <h4>Defense                                                                                             <span
                              class="dir-ho-cat">Show All (<?php echo ($upsc ? $upsc :'0');?>)</span>
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
                           <h4>Aviation                                                                                            <span
                              class="dir-ho-cat">Show All (<?php echo ($cpl ? $cpl :'0');?>)</span>
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
                           <h4>App  Labs                                                                                            <span
                              class="dir-ho-cat">Show All (<?php echo ($app ? $app :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo base_url('educator/mobile');?>"
                           class="land-pack-grid-btn">View all listings</a>
                     </div>
                  </li>
                  <li>
                     <div class="land-pack-grid">
                        <div class="land-pack-grid-img">
                           <img src="<?php echo base_url('assets/public/images/extra/fori_lang_sub.jpg');?>" alt="">
                        </div>
                        <div class="land-pack-grid-text">
                           <h4>Linguistics                                                                                            <span
                              class="dir-ho-cat">Show All (<?php echo ($foriegn_lang ? $foriegn_lang :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo base_url('educator/foreign');?>"
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
                              class="dir-ho-cat">Show All (<?php echo ($digital ? $digital :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo base_url('educator/digital');?>"
                           class="land-pack-grid-btn">View all listings</a>
                     </div>
                  </li>
                  <li>
                     <div class="land-pack-grid">
                        <div class="land-pack-grid-img">
                           <img src="<?php echo base_url('assets/public/images/extra/painting_sub.jpg');?>" alt="">
                        </div>
                        <div class="land-pack-grid-text">
                           <h4>Art Zone                                                                                             <span
                              class="dir-ho-cat">Show All (<?php echo ($arts ? $arts :'0');?>)</span>
                           </h4>
                        </div>
                        <a href="<?php echo base_url('educator/art');?>"
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
                        <a href="<?php echo base_url('educator/academic');?>"
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
                        <a href="<?php echo base_url('educator/exam');?>"
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
                        <a href="<?php echo base_url('educator/training');?>"
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
                        <a href="<?php echo base_url('educator/counselling');?>"
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
                        <a href="<?php echo base_url('educator/art');?>"
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
   <div class="hom-mpop-ser" style="background-image: url();background-color: #f1eeeecc;background-blend-mode: overlay;background-position: unset;">
      <div class="container">
         <div class="hom-mpop-main">
            <div class="home-tit">
               <h2>
                  <span>Featured Services</span> in your city                        
               </h2>
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
                        
                        <p><?= $isFeaturedAVal->edu_city;?></p>
                        <span class="rat-sh">5.0</span>
                     </div>
                     <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($isFeaturedAVal->edu_name)).'/'.$isFeaturedAVal->Eid);?>">&nbsp;</a>
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
                        <h3><?= $isFeaturedBVal->edu_name;?></h3>
                        <p><?= $isFeaturedBVal->edu_city;?></p>
                        <span class="rat-sh">5.0</span>
                     </div>
                     <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($isFeaturedBVal->edu_name)).'/'.$isFeaturedBVal->Eid);?>">
                     &nbsp;</a>
                  </div>
                  <?php }}else{ echo 'No data found';}?>   
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="hlead-coll" style="padding-top: 58px;padding-bottom: 40px;">
         <div class="col-md-6">
            <div class="hom-cre-acc-left">
               <h3 style="font-size: 29px;">What service do you need? <span style="font-size: 29px;">Starsboard</span>
               </h3>
               <ul>
                  <li>
                     <img src="https://bizbookdirectorytemplate.com/images/icon/blog.png" alt="" class="animation-jump">
                     <div>
                        <h5>Tell us more about your requirements</h5>
                        <p>HI Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                     </div>
                  </li>
                  <li>
                     <img src="https://bizbookdirectorytemplate.com/images/icon/shield.png" alt=""class="animation-jump">
                     <div>
                        <h5>We connect with right service provider</h5>
                        <p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
                     </div>
                  </li>
                  <li>
                     <img src="https://bizbookdirectorytemplate.com/images/icon/general.png" alt=""class="animation-jump">
                     <div>
                        <h5>Happy with our service</h5>
                        <p>Your local business too needs brand management and image making. As you know the local market..</p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-6 bg_tb">
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
               <form class="col" name="enquiry_form" id="enquiry_form" method="post" action="<?php echo base_url('detail/generalEnquiry');?>">
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
                     <input type="text" class="form-control" value="" name="category" placeholder="Category" title="Category required="">
                  </div>
                  <div class="form-group">
                     <textarea class="form-control" rows="3"  name="enquiry_message" id="enquiry_message"
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
</section>
<!-- END -->
<!-- START -->
<section>
   <div class="str str-full" style="background-image: url(https://starsboard.in/assets/public/images/1.jpg);background-position: bottom;">
      <div class="container">
         <div class="row" style="padding-bottom: 60px;">
            <div class="home-tit">
               <h2>
                  <span>Top Service Provider</span> in city                        
               </h2>
               <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
            </div>
            <div class="ho-popu-bod">
               <!--Top Branding Hotels-->
               <div class="col-md-4">
                  <div class="hot-page2-hom-pre-head">
                     <h4>Top  <span>Academic</span></h4>
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
                           <div class="hot-page2-hom-pre-3">
                              <span>3.0</span>
                           </div>
                           <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($academicVal->edu_name)).'/'.$academicVal->Eid);?>" class="fclick"></a>
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
                        <?php if(!empty($counselling)){ foreach($counselling as $counsellingKey =>$counsellingVal){ ?> 
                        <!--LISTINGS-->
                        <li>
                           <div class="hot-page2-hom-pre-1"><img src="<?=base_url('uploads/'.$counsellingVal->user_id.'/'.$counsellingVal->edu_image);?>" alt="">
                           </div>
                           <div class="hot-page2-hom-pre-2">
                              <h5><?= $counsellingVal->edu_name;?></h5>
                              <span><?= $counsellingVal->edu_city;?></span>
                           </div>
                           <div class="hot-page2-hom-pre-3">
                              <span>3.0</span>
                           </div>
                           <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($counsellingVal->edu_name)).'/'.$counsellingVal->Eid);?>" class="fclick"></a>
                        </li>
                        <!--LISTINGS-->
                        <?php }}else{ echo 'No data found';}?>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="hot-page2-hom-pre-head">
                     <h4>Top  <span> Professional</span></h4>
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
                           <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($trainingVal->edu_name)).'/'.$trainingVal->Eid);?>" class="fclick"></a>
                        </li>
                        <?php }}else{ echo 'No data found';}?>
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
<section>
   <div class="str count">
      <div class="container">
         <div class="row" style="padding-bottom: 6rem;">
            <div class="home-tit">
               <h2><span>How it</span> works  </h2>
               <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
            </div>
            <div class="how-wrks">
               <div class="how-wrks-inn">
                  <ul>
                     <li>
                        <div class="menu_social">
                           <span>1</span>
                           <img src="<?=base_url('assets/public/images/about-us/how1.png');?>" alt="" >
                           <h4>Create an account</h4>
                        </div>
                     </li>
                     <li>
                        <div class="menu_social">
                           <span>2</span>
                           <img src="<?=base_url('assets/public/images/about-us/how2.png');?>" alt="">
                           <h4>Add your Listing</h4>
                        </div>
                     </li>
                     <li>
                        <div class="menu_social">
                           <span>3</span>
                           <img src="<?=base_url('assets/public/images/about-us/how3.png');?>" alt="">
                           <h4>Get more leads</h4>
                        </div>
                     </li>
                     <li>
                        <div class="menu_social">
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
						
<!--<div class="star_board_wpop welcome_pop">-->
<!--   <div class="modal-dialog">-->
<!--      <div class="modal-content">-->
<!--         <button type="button" class="closed-btn"><span></span></button>-->
<!--         <div class="modal-body">-->
<!--            <div class="welcome-cta">-->
<!--               <a href="https://starsboard.in/become-educator">-->
<!--               <img src="<?=base_url('assets/public/images/star-add-welcome.jpeg');?>" alt="" srcset="">-->
<!--               </a>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</div>-->

<?php $this->load->view('layout/footer');?>
<script type="text/javascript">
   $(document).ready(function() {
       $('#achievement-slider').owlCarousel({
         loop:true,
         margin:10,
         items:1,
         nav:true,
         dots:false,
         navText : ["<i class='fas fa-angle-left custom-dots'></i>","<i class='fas fa-angle-right custom-dots2'></i>"], 
         responsive:{
           0:{
             items:1
           },
           600:{
             items:1
           },
           1000:{
             items:1
           }
         }
       });
   
   });
</script>
