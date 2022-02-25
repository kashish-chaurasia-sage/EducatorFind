

 <?php $this->load->view('layout/header');
 
 
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section>
    <div class="v3-list-ql">
        <div class="container">
            <div class="row">
                <div class="v3-list-ql-inn">
                    <ul>
                        <li class="active"><a href="#ld-abo"><i class="material-icons">person</i> About</a>
                        </li>
                        <li><a href="#ld-ser"><i class="material-icons">business_center</i> Services</a>
                        </li>
                      
                        <li><a href="#ld-off"><i class="material-icons">style</i> Offers</a>
                        </li>
                       
                        <li><a href="#ld-rev"><i class="material-icons">star_half</i> Write Review</a>
                        </li>
						<li><a href="#claim" data-toggle="modal" data-target="#claim"><i class="material-icons">store</i>Claim business</a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="list-det-fix">
        <div class="container">
            <div class="row">
                <div class="list-det-fix-inn">
                    <div class="list-fix-pro">
                        <img src="https://bizbookdirectorytemplate.com/images/listings/21604photo-of-a-boy-with-curly-hair-2929036.jpg" alt="">
                    </div>
                    <div class="list-fix-tit">
                        <h3>William Chil care Hospital</h3>
                        <p><b>Address:</b> No:2, 4th Avenue,  Newyork, USA, Near to Airport</p>
                    </div>
                    <div class="list-fix-btn">
                        <span data-toggle="modal" data-target="#quote" class="pulse">Send an enquiry</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="list-bann">
        <img src="<?=base_url('uploads/'.$user_id.'/'.$detail['cover_image']);?>" alt="">
    </div>
</section>
<!-- END -->

<!-- START -->
<!--LISTING DETAILS-->
<section class=" pg-list-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pg-list-1-pro">
                    <img src="<?=base_url('uploads/'.$user_id.'/'.$detail['edu_image']);?>" alt="">
                                            <span class="stat"><i class="material-icons">verified_user</i></span>
                                        </div>
                <div class="pg-list-1-left">
                    <h3><?php echo $detail['edu_name'] ? $detail['edu_name'] :'';?></h3>
                   
												<div class="list-rat-all">
												<?php if($total_review !='0'){?>
                                                    <b><?=$average_review ? $average_review :'';?></b>
                                                             <label class="rat">
																									<?php for ($x = 1; $x <= $average_review; $x++) {?>
                                                                                                                    <i class="material-icons">star</i>
																													<?php } ?>
                                                                                                                       
																					</label>
                                                        <span><?php echo $total_review ? $total_review :'';?> Reviews</span>
												<?php }else{?>
														 <span>No Reviews Yet</span>
												<?php }?>
														 
                                                    
                                                </div>

                    <p><b>Address:</b> <?php echo $detail['edu_city'] ? $detail['edu_city'] : '';?>,<?php echo $detail['edu_country'] ? $detail['edu_country'] : '';?></p>
                    <div class="list-number pag-p1-phone">
                        <ul>
                             <li class="ic-php"><?php // echo $detail['edu_mobile'] ? $detail['edu_mobile'] : '';
								$number=$detail['edu_mobile'];
									            $maskedMobile =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
										         echo $maskedMobile; 
												 
								?>                                </li>
                            
                               <li class="ic-mai"><?php 
							            $email=$detail['edu_email'];
										$maskedEmail=substr($email, 0, 3).'****'.substr($email, strpos($email, "@"));
										echo $maskedEmail;
							   ?>               
								</li>
                           
                                                          <!--  <a target="_blank" href="http://www.royalspa.com">
                                    <li class="ic-web">www.royalspa.com</li>
                                </a> -->
                                                    </ul>
                    </div>
                </div>
                <div class="list-ban-btn">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $detail['edu_mobile'] ? $detail['edu_mobile'] : '';?>" class="cta cta-call">Call Now</a>
                        </li>
						
                        <li>
									
						 <form class="col" name="liked_form" id="liked_form" method="post" action="<?php echo base_url('detail/liked');?>">
                                                
                                                <input type="hidden" class="form-control" name="listing_educator_id"
                                                       value="<?php echo $Eid;?>">
						 <input type="hidden" class="form-control" name="listing_user_id"
                                                       value="<?php echo $user_id;?>">
                                               
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <b class="like-content149"></b><input type="submit" class="cta cta-like ldelik Animatedheartfunc149 " id="review_submit" name="review_submit"
                                                               value="<?php echo $total_liked ? $total_liked :'0';?> LIKES">
															   
                                                    </div>
                                                </div>
                                            </form>
								
                        </li>
						 <li>
                                <a href="https://wa.me/+91<?php echo $detail['edu_mobile'] ? $detail['edu_mobile'] : '';?>?text=I'm%20looking%20for%20a%20educator%20I'm%20from%20starsboard" class="cta cta-rev">WhatsApp</a>
                           
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<section class=" list-pg-bg">
    <div class="container">
        <div class="row">
            <div class="com-padd">
                <div id="ld-abo" class="list-pg-lt list-page-com-p">
                    
                        <!--LISTING DETAILS: LEFT PART 1-->
                        <div class="pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3><span>About</span> <?php echo $detail['edu_name'] ? $detail['edu_name'] :'';?></h3></div>
                            <div class="list-pg-inn-sp list-pg-inn-abo">
                                
                                    
                                        <div class="share-btn">


                                        </div>
                            <p><?php echo $detail['description'] ? $detail['description'] :'No data found';?></p>
                                                                </div>
                        </div>

                        <!--END LISTING DETAILS: LEFT PART 1-->
                        <!--LISTING DETAILS: LEFT PART 2-->
                                                    <div id="ld-ser" class="pglist-bg pglist-p-com">
                                <div class="pglist-p-com-ti">
                                    <h3><span>Services</span> Offered</h3></div>
                                <div class="list-pg-inn-sp">
                                    <div class="row pg-list-ser">
                                        <ul>
                                           <?php if($detail['academic'] =='academic') {?>     
												<li class="col-md-3">
                                                      <div class="pg-list-ser-p1"><img
                                                            src="<?=base_url('assets/public/images/no-image.jpg');?>"
                                                             alt=""/>
                                                       </div>
                                                       <div class="pg-list-ser-p2">
                                                        <h4>Academic</h4></div>
                                                      </li>
										   <?php }?>
										   <?php if($detail['counselling'] =='counselling') {?> 
                                                   <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img
                                                            src="<?=base_url('assets/public/images/no-image.jpg');?>"
                                                            alt=""/>
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Career Counselling</h4></div>
                                                </li>
												  <?php }?>
												<?php if($detail['training'] =='training') {?> 
                                                    <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img
                                                            src="<?=base_url('assets/public/images/no-image.jpg');?>"
                                                            alt=""/>
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Professional Training</h4></div>
                                                </li>
                                                                         <?php }?>                     
                                        </ul>
                                    </div>
                                </div>
                            </div>
							  <?php if($detail['academic'] ='academic' ) {?>     
							<div id="ld-ser" class="pglist-bg pglist-p-com">

                            <div class="pglist-p-com-ti">
                                <h3><span>Academic</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
							<?php if($detail['class'] != ''){?>
							  <h5>Class</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['class'] as $class){?>
                                       <li><span><?php echo $class;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
	<?php if($detail['subject'] != ''){?>
							  <h5>Subject</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['subject'] as $subject){?>
                                       <li><span><?php echo $subject;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							<?php if($detail['board'] != ''){?>
								<h5>Board</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($detail['board'] as $board){?>
                                       <li><span><?php echo $board;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
									<?php if($detail['exam']  != ''){?>
								<h5>Exam</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($detail['exam'] as $exam){?>
                                       <li><span><?php echo $exam;?></span></li>
									<?php }?>
                                     </ul>
                                </div>
									<?php }?>
									<?php if($detail['lang_academic'] != ''){?>
								<h5>Language</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                       <?php foreach($detail['lang_academic'] as $lang_academic){?>
                                       <li><span><?php echo $lang_academic;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
									<?php }?>
                            </div>
                            </div>
							  <?php }?>
						    <?php if($detail['counselling'] =='counselling') {?> 
							<div id="ld-ser" class="pglist-bg pglist-p-com">

                            <div class="pglist-p-com-ti">
                                <h3><span>Career Counselling</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
                              <?php if($detail['career_path'] != ''){?>
							  <h5>Career Path</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['career_path'] as $career_path){?>
                                       <li><span><?php echo $career_path;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							  <?php if($detail['lang_coun'] != ''){?>
							  <h5>Language </h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['lang_coun'] as $lang_coun){?>
                                       <li><span><?php echo $lang_coun;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							
							 <?php if($detail['price_coun'] != ''){?>
							  <h5>Fee </h5>
                               <b><?php echo $detail['price_coun'] ? $detail['price_coun'] : '' ;?></b>
							<?php }?>
                            </div>
                        </div>
							  <?php }?>
						<?php if($detail['training'] =='training') {?> 
							<div id="ld-ser" class="pglist-bg pglist-p-com">

                                <div class="pglist-p-com-ti">
                                <h3><span>Professional Training</span> Details</h3></div>
                                <div class="list-pg-inn-sp">
                                <?php if($detail['tech_course'] != ''){?>
							    <h5>Professional Course</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['tech_course'] as $tech_course){?>
                                       <li><span><?php echo $tech_course;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							
							 <?php if($detail['lang_prof'] != ''){?>
							    <h5>Language</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($detail['lang_prof'] as $lang_prof){?>
                                       <li><span><?php echo $lang_prof;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							
							
							<?php if($detail['price_prof'] != ''){?>
							    <h5>Fee per sessions</h5>
                                <b> <?php echo $detail['price_prof'] ?  $detail['price_prof'] :'';?></b>
							<?php }?>
                            </div>
                        </div>
						<?php }?>
                                                                <!--END LISTING DETAILS: LEFT PART 2-->
                    
                   
                                                <!--END LISTING DETAILS: LEFT PART 3-->
                                                <!--LISTING DETAILS: LEFT PART 4-->
                          
                          <?php if($detail['offers_price'] != ''){?>
                            <div id="ld-off" class="pglist-bg pglist-off-last pglist-p-com">
                                <div class="pglist-p-com-ti">
                                    <h3><span>Special</span> Offers</h3></div>
                                                                    <div class="list-pg-inn-sp">
                                        <div class="home-list-pop">
                                            <!--LISTINGS IMAGE-->
                                            <div class="col-md-3"><img
                                                    src="<?=base_url('uploads/'.$user_id.'/'.$detail['offers_image']);?>" alt=""></div>
                                            <!--LISTINGS: CONTENT-->
                                            <div class="col-md-9 home-list-pop-desc inn-list-pop-desc list-room-deta"><a
                                                    href="<?php echo $detail['offer_link']? $detail['offer_link']:'';?>"><h3><?php echo $detail['offer_name'];?></h3></a>
                                                <p><?php echo $detail['offer_detials'];?> </p>
                                                         <span class="home-list-pop-rat list-rom-pric">₹ <?php echo $detail['offers_price'];?> </span>
                                                      <div class="list-enqu-btn">
                                                    <ul>
                                                        <li>
                                                            <a  href="<?php echo $detail['offer_link']? $detail['offer_link']:'';?>">view more</a></li>
                                                       </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                              
                                    
                            </div>
                            <?php }?>
                            <!--LISTING DETAILS: LEFT PART 6-->
                                                                                                <span id="Review_Disable">Login And Write Your Review</span>
                                    
                                <!--LISTING DETAILS: LEFT PART 6-->
                                <div class="pglist-bg pglist-p-com"
                                  <?php if(! $this->session->userdata('isUserLoggedIn')){ ?>   style="pointer-events:none; opacity: .5
								  "  <?php }?>id="ld-rew">
                                    <div class="pglist-p-com-ti">
                                        <h3><span>Write Your</span> Reviews</h3></div>
                                    <div class="list-pg-inn-sp">
                                        <div class="list-pg-write-rev"> 
										<div id="reviewResponseId"></div>

                                            <form class="col" name="review_form" id="review_form" method="post" action="<?php echo base_url('detail/review');?>">
                                                
                                                <input type="hidden" class="form-control" name="listing_educator_id"
                                                       value="<?php echo $Eid;?>">
													    <input type="hidden" class="form-control" name="listing_user_id"
                                                       value="<?php echo $user_id;?>">
                                                <p>Writing great reviews may help others discover the places that are just apt for them. Here are a few tips to write a good review:</p>
                                               
                                                <div class="row">
                                                    <div>
                                                        <fieldset class="rating">
                                                            <input type="radio" id="star5" name="price_rating"
                                                                   class="price_rating" value="5"/>
                                                            <label class="full" for="star5" title="Awesome"></label>
                                                            <input type="radio" id="star4" name="price_rating"
                                                                   class="price_rating" value="4"/>
                                                            <label class="full" for="star4" title="Excellent"></label>
                                                            <input type="radio" checked="checked" id="star3"
                                                                   class="price_rating" name="price_rating" value="3"/>
                                                            <label class="full" for="star3" title="Good"></label>
                                                            <input type="radio" id="star2" name="price_rating"
                                                                   class="price_rating" value="2"/>
                                                            <label class="full" for="star2" title="Average"></label>
                                                            <input type="radio" id="star1" name="price_rating"
                                                                   class="price_rating" value="1"/>
                                                            <label class="full" for="star1" title="Poor"></label>
                                                            <input type="radio" id="star0" name="price_rating"
                                                                   class="price_rating" value="0"/>
                                                            <label class="" for="star0" title="Very Poor"></label>
                                                        </fieldset>
                                                        <div id="star-value">3 Star</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input
                                                            id="review_name"  name="review_name" type="text" 
                                                            placeholder="Name"
                                                            value="<?php echo $this->session->userdata('username');?>">
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input
                                                            id="review_mobile"  name="review_mobile" type="text"
                                                            onkeypress="return isNumber(event)"
                                                            placeholder="Mobile number"
                                                            value="<?php echo $this->session->userdata('phone');?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input
                                                            id="review_email"  name="review_email" type="email" placeholder="Email Id"
                                                            value="<?php echo $this->session->userdata('useremail');?>">
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input id="review_city" name="review_city" placeholder="City"
                                                               type="text" value="<?php echo $this->session->userdata('user_city');?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                    <textarea id="review_msg" placeholder="Write review"
                                                              name="review_message" value=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="submit" id="review_submit" name="review_submit" value="Submit Review">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                                            <!--END LISTING DETAILS: LEFT PART 6-->
                                                <!--END LISTING DETAILS: LEFT PART 6-->

                    
                        <!--LISTING DETAILS: LEFT PART 5-->
						<?php if(empty($review)){?>
                                                    <div class="spa-first-review">Be the First One To Review This Listing!!!</div>
						<?php }else{?>
                                            <!--END LISTING DETAILS: LEFT PART 5-->
<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rev">
                                <div class="pglist-p-com-ti">
                                    <h3><span>User</span> Reviews</h3></div>
                                <div class="list-pg-inn-sp">
                                    <div class="lp-ur-all">
                                        <div class="lp-ur-all-left">
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Excellent</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Good</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-Good"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Satisfactory</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-satis"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Below Average</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-below"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Below Average</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-poor"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lp-ur-all-right">
                                            <h5>Overall Ratings</h5>
                                            <p>
                                                                                                    <label class="rat">
																									<?php for ($x = 1; $x <= $average_review; $x++) {?>
                                                                                                                    <i class="material-icons">star</i>
																													<?php } ?>
                                                                                                                       
                                                      </label>
                                                    <span>based on <?php echo $total_review ? $total_review :'';?> Reviews</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="lp-ur-all-rat">
                                        <h5>Reviews</h5>
                                        <ul>
										<?php foreach($review as $key =>$val){?>
                                                     <li>
                                                    <div class="lr-user-wr-img"><img src="<?php echo base_url('uploads/users/');?><?=$val->review_by_id;?>/<?=$val->user_image;?>" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';" alt="">
                                                    </div>
                                                    <div class="lr-user-wr-con">
                                                        <h6><?= $val->review_name;?></h6>
                                                        <label class="rat">
														<?php for ($x = 1; $x <= $val->price_rating; $x++) {?>
                                                    <i class="material-icons">star</i>
														<?php } ?>
                                                                
                                                              </label>
                                                        <span class="lr-revi-date"><?= $val->created_on;?></span>
                                                        <p><?= $val->review_message;?></p>
                                                    </div>
                                                </li>
										<?php }?>
                                                         
                                                                                        </ul>
                                    </div>
                                </div>
                            </div>
						<?php }?>
                    <!--ADS-->
                    <div class="ban-ati-com ads-det-page">
                                        
<!-- horizontal ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381950378620686"
     data-ad-slot="2707470180"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    </div>
                    <!--ADS-->
<?php if(!empty($isFeaturedA)){?>
                    <!--RELATED PREMIUM LISTINGS-->
                    <div class="list-det-rel-pre">
                        <h2>Featured listings:</h2>
                        <ul>
                                     <?php foreach($isFeaturedA as $isFeaturedAKey =>$isFeaturedAVal){ ?>                  
                                                
                                 <li>
                                    <div class="land-pack-grid">
                                        <div class="land-pack-grid-img">
                                            <img
                                                src="<?=base_url('uploads/'.$isFeaturedAVal->user_id.'/'.$isFeaturedAVal->edu_image);?>" alt="<?= $isFeaturedAVal->edu_name;?>">
                                        </div>
                                        <div class="land-pack-grid-text">
                                            <h4><?= $isFeaturedAVal->edu_name;?></h4>
                                            <div class="list-rat-all">
                                                <b>4.0</b>
                                                                                            </div>
                                        </div>
                                        <a target="_blank"
                                           href="<?= base_url('detail/'.url_title($isFeaturedAVal->edu_name).'/'.$isFeaturedAVal->Eid);?>"
                                           class="land-pack-grid-btn"></a>
                                    </div>
                                    </li>
									<?php }?>
                                                        </ul>
                    </div>
                    <!--RELATED PREMIUM LISTINGS-->
<?php }?>
                </div>
                <div class="list-pg-rt">

                    <!--LISTING DETAILS: LEFT PART 9-->
                    <div class="list-rhs-form pglist-bg pglist-p-com">

                        <div class="quote-pop">
                            <h3><span>Get</span> Quote</h3>
                           <div id="quoteResponseId"></div>
                            <form method="post" name="detail_enquiry_form" id="enquiryForm" action="<?php echo base_url('detail/enquiry');?>">
                                
                                <input type="hidden" class="form-control"
                                       name="listing_educator_id"
                                       value="<?php echo $Eid;?>" placeholder=""
                                       >
									   <input type="hidden" class="form-control"
                                       name="listing_user_id"
                                       value="<?php echo $user_id;?>" placeholder=""
                                       >
                                
                                <div class="form-group ic-user">
                                    <input type="text" name="enquiry_name"
                                           value=""
                                           required="required" class="form-control"
                                           placeholder="Enter name*">
                                </div>
                                <div class="form-group ic-eml">
                                    <input type="email" class="form-control"
                                           placeholder="Enter email*" required="required"
                                           value=""
                                           name="enquiry_email"
                                           pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                           title="Invalid email address">
                                </div>
                                <div class="form-group ic-pho">
                                    <input type="text" class="form-control"
                                           value=""
                                           name="enquiry_mobile"
                                           placeholder="Enter mobile number *"
                                           pattern="[7-9]{1}[0-9]{9}"
                                           title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                           required>
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" rows="3" name="enquiry_message"
                                          placeholder="Enter your query or message"  ></textarea>
                                </div>
                                <input type="hidden" id="source">
                                <?php if(! $this->session->userdata('isUserLoggedIn')){ ?> <button  disabled="disabled"  type="submit" id="detail_enquiry_submit"
                                                                      name="enquiry_submit"
                                                                      class="btn btn-primary"> Log In To Submit                                 </button>
								<?php }else{?>
								<button  type="submit" id="detail_enquiry_submit"
                                                                      name="enquiry_submit"
                                                                      class="btn btn-primary">Submit                                 </button>
								<?php }?>
                            </form>
                        </div>

                    </div>
                    <!--END LISTING DETAILS: LEFT PART 9-->
                                            <!--LISTING DETAILS: COMPANY BADGE-->
                        <div class="ld-rhs-pro pglist-bg pglist-p-com">
                            <div class="lis-comp-badg">
                                <div class="s1">
                                    <div>
                                        <span class="by">Created profile</span>
                                        <img class="proi"
                                             src="<?=base_url('uploads/'.$user_id.'/'.$detail['edu_image']);?>"
                                             alt="">
                                        <h4><?php echo $detail['edu_name'] ? $detail['edu_name'] :'';?></h4>
                                        <p><?php echo $detail['edu_city'] ? $detail['edu_city'] :'';?></p>
                                        <ul>
                                                                                            <li><a href="fb"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/3.png"></a></li>
                                                                                                <li><a href="tw"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/2.png"></a></li>
                                                                                                <li><a href="linkedin"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/1.png"></a></li>
                                                                                                <li><a href="insta"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/7.png"></a></li>
                                                                                                <li><a href="uyube"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/5.png"></a></li>
                                                                                                <li><a href="whatsapp"
                                                       target="_blank"><img
                                                            src="https://bizbookdirectorytemplate.com/images/social/6.png"></a></li>
                                                                                        </ul>
                                    </div>
                                </div>
                                <div class="s2">
                                    <a target="_blank" href="" class="use-fol">View profile</a>
                                    <a target="_blank" href="">Get in touch with us</a>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: COMPANY BADGE-->
                        <div class="lide-guar pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                <h3><span>Claim</span> Listing</h3></div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-guar">
                                    <ul>
                                        <li>
                                            <div class="list-pg-guar-img"><img src="https://bizbookdirectorytemplate.com/images/icon/g2.png" alt=""></div>
                                            <h4>Claim this business</h4>
                                            <span data-toggle="modal" data-target="#claim" class="clim-edit">Suggest an edit</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                                  
                                                                    <!--END LISTING DETAILS: LEFT PART 8-->
                                            <!--LISTING DETAILS: LEFT PART 9
                        <div class="pglist-p3 pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                <h3><span>Company</span> Info</h3></div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-oth-info">
                                    <ul>
                                                                                        <li>Experience <span>40 years</span></li>
                                                                                                <li>Open time <span>6:00 AM</span></li>
                                                                                      </ul>
                                </div>
                            </div>
                        </div>
                       END LISTING DETAILS: LEFT PART 9-->
                        
                        
                                            <!--LISTING DETAILS: LEFT PART 10-->
                        <div class="list-mig-like">
                            <div class="list-ri-peo-like">
                                <h3>Who all are like this</h3>
                                <ul>
                                                                            <li>
                                            <a href="https://bizbookdirectorytemplate.com/profile/leland-k-cotter"
                                               target="_blank">
                                                <img
                                                    src="https://bizbookdirectorytemplate.com/images/user/9546049785pexels-photo-1130625.jpeg" alt="">
                                            </a>
                                        </li>
                                                                                <li>
                                            <a href="https://bizbookdirectorytemplate.com/profile/"
                                               target="_blank">
                                                <img
                                                    src="https://bizbookdirectorytemplate.com/images/user/60039rn53-themes.png" alt="">
                                            </a>
                                        </li>
                                                                        </ul>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 10-->
                                            <!--ADS-->
                    <div class="ban-ati-com ads-det-page">
                                               

<!-- starboard_details_ads -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7381950378620686"
     data-ad-slot="2286171500"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    </div>
                    <!--ADS-->
                </div>
            </div>
        </div>
		<div class="modal fade" id="claim">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="log-bor">&nbsp;</div>
                    <span class="udb-inst">Claim now</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- Modal Header -->
                    <div class="quote-pop">
                        <h4>Claim this business</h4>
                        <div id="pop_claim_success" class="log" style="display: none;"><p>Your Claim Request Submitted Successfully</p>
                        </div>
                        <div id="pop_claim_same" class="log" style="display: none;"><p>You cannot make enquiry on your own listing!!</p>
                        </div>
                        <div id="pop_claim_fail" class="log" style="display: none;"><p>Oops!! Something Went Wrong Try Later!!!</p>
                        </div>
                        <form method="post" name="popup_claim_form" id="popup_claim_form">
                            <fieldset  disabled="disabled" >
                            <input type="hidden" class="form-control" name="listing_id"
                                   value="149"
                                   placeholder=""
                                   required>
                            <input type="hidden" class="form-control"
                                   name="listing_user_id"
                                   value="35" placeholder=""
                                   required>
                            <input type="hidden" class="form-control"
                                   name="enquiry_sender_id"
                                   value=""
                                   placeholder=""
                                   required>
                            <input type="hidden" class="form-control"
                                   name="enquiry_source"
                                   value="Website"
                                   placeholder=""
                                   required>
                            <div class="form-group">
                                <input type="text" name="enquiry_name"
                                       value=""
                                       required="required" class="form-control"
                                       placeholder="Enter name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"
                                       placeholder="Enter Email Id*" required="required"
                                       value=""
                                       name="enquiry_email"
                                       pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                       title="Invalid email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                       value=""
                                       name="enquiry_mobile"
                                       placeholder="Enter mobile number *"
                                       pattern="[7-9]{1}[0-9]{9}"
                                       title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                       required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="enquiry_message"
                                          placeholder="Enter your query and why claim this business"></textarea>
                            </div>
                            <input type="hidden" id="source">
                            <button type="submit" id="popup_claim_submit" name="popup_claim_submit"
                                    class="btn btn-primary">Log In To Submit       </button>
                                </fieldset>
                        </form>
                        <div class="form-notes"><p>We send you the verification email to you provider the email id. Once you done the verification process then you can manage this business.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function () { 

  $("#liked_form").submit(function (e) {
	  e.preventDefault();
    var senddata = $(this).serializeArray();
    var sendto = $(this).attr("action");

    $.ajax({
        url: sendto,
        type: 'POST',
        data: senddata,
        success: function (data) {
			if(data=='1'){
				swal("Error!", "Oops!!You cannot liked youself", "error");
			}else if(data=='0'){
                            swal("Warning!", "Please login to like educator!!!", "error");
                        }
                        else if(data=='2'){
                            swal("Warning!", "You cannot like more than once", "error");
                        }
                        else{
			 swal({title: "Success", text: data, type: "success"}).then(function(){ 
                                location.reload();
                                }
                            );
			}
		 },
        error: function (error) {
           alert('error');
        }
    });
  });

  $("#enquiryForm").submit(function (e) { 
	  e.preventDefault();
    var senddata = $(this).serializeArray();
    var sendto = $(this).attr("action");

    $.ajax({
        url: sendto,
        type: 'POST',
        data: senddata,
        success: function (data) {
        $('#quoteResponseId').html(data);
		 $("#enquiryForm").trigger("reset");
        },
        error: function (error) {
           alert('error');
        }
    });
  });
  
  
  $("#review_form").submit(function (e) { 
var review_msg=$('#review_msg').val();

if(review_msg == ''){
	 swal("Warning!", "Please write review!", "error");
                           
	return false;
}
	e.preventDefault();
    var senddata = $(this).serializeArray();
    var sendto = $(this).attr("action");

    $.ajax({
        url: sendto,
        type: 'POST',
        data: senddata,
        success: function (data) {
			if(data=='1'){
				swal("Error!", "Oops!! Oops!!You cannot write your own listing!!!", "error");
			}else{
           swal("Success!", data, "success");
			}
		 $("#review_form").trigger("reset");
		 
        },
        error: function (error) {
           alert('error');
        }
    });
  });
});
</script>
	 <?php $this->load->view('layout/footer');?>