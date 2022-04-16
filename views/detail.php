

 <?php 
 $this->load->view('layout/header');
 
 
 ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="/assets/public/css/style.css">

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
                        <!-- </li>
						<li><a href="#claim" data-toggle="modal" data-target="#claim"><i class="material-icons">store</i>Claim business</a>
                        </li> -->
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
<section>
    <div class="list-det-fix">
        <div class="container">
            <div class="row">
                <div class="list-det-fix-inn">
                    <div class="list-fix-pro">
                    <img src="<?=base_url('assets/public/images/educator_banner.jpeg');?>" alt="">
                    </div>
                    <div class="list-fix-tit">
                        <h3><?php echo $detail['edu_name']; ?></h3>
                        <p><b><?php echo "ADDRESS"; ?>:</b> <?php echo "listing_address"; ?></p>
                    </div>
                    <!-- <div class="list-fix-btn">
                        <span data-toggle="modal" data-target="#quote"
                              class="pulse"><?php echo $BIZBOOK['SEND_AN_ENQIRY']; ?></span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<!-- </section>
    <div class="list-bann">
        <img src="<?=base_url('assets/public/images/educator_banner.jpeg');?>" alt="">
    </div>
</section> -->
<!-- <section>
    <div class="list-bann">
    <img src="<?=base_url('uploads/'.$user_id.'/'.$educator->edu_cover_image);?>" alt="">

    </div>
</section> -->
<section>
    <div class="list-bann">
    <img src="<?=base_url('assets/public/images/educator_banner.jpeg');?>" alt="">

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
                    <img src="<?=base_url('uploads/'.$user_id.'/'.$educator->edu_image);?>" alt="">
                                            <!-- <span class="stat"><i class="material-icons">verified_user</i></span> -->
                                        </div>
                <div class="pg-list-1-left">
                    <h3><?php echo $educator->edu_name ? $educator->edu_name :'';?></h3>
                        
                    <!-- <div class="list-rat-all">
                    <b><center><?php echo $average_review; ?></center></b> 
                            <label class="rat">
                            
                                <?php
                                for ($i = 1; $i <= ceil($average_review); $i++) {
                                    ?>
                                    <i class="material-icons">star</i>
                                    <?php
                                }
                                $bal_star_rate = abs(ceil($average_review) - 5);

                                for ($i = 1; $i <= $bal_star_rate; $i++) {
                                    ?>
                                    <i class="material-icons ratstar">star</i>
                                    <?php
                                }
                                ?>
                            </label>
                           
                    </div> -->
                    <div class="list-rat-all">

                    <div class="r">
                            <!-- <h4>Rating Overview</h4> -->
                            <!-- <br> -->
                            <h1 class="rating-number"><?php echo $average_review ?><small>/5</small></h1>
                            <div class="rating-stars d-inline-block position-relative mr-2">
                                <img src="<?=base_url('assets/public/images/grey-star.svg');?>" alt="">
                                <div class="filled-star" style="width:<?php echo $percentage_review ?>"></div>
                            </div>
                            <!-- <div class="text-muted">2,145 ratings</div> -->
                    </div>
                            </div>
                    <p>Address: <?php echo $educator->city ? $educator->city : '';?>, <?php echo $educator->state ? $educator->state : '';?>, <?php echo $educator->country ? $educator->country: '';?></p>
                   
                    <div class="list-number pag-p1-phone">
                        <ul>
                             <li class="ic-php"><?php // echo $detail['edu_mobile'] ? $detail['edu_mobile'] : '';
								
										         echo $educator->edu_experience . " "."years of experience"; 
												 
								?>                       
                             </li>
                            
                              <li class="ic-mai"><?php 
							            $email=$educator->edu_email;
										$maskedEmail=substr($email, 0, 0).'******'.substr($email, strpos($email, "@"));
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
                            <a href="tel:<?php echo $educator->edu_number ? $educator->edu_number : '';?>" class="cta cta-call">Call Now</a>
                        </li>
						<!-- <li>
									
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
								
                        </li> -->
						 <li>
                         <a href="https://wa.me/+91<?php echo $educator->edu_whatsapp ? $educator->edu_whatsapp : '';?>?text=I'm%20looking%20for%20a%20educator%20I'm%20from%20starsboard" class="cta cta-rev">WhatsApp</a>
                         <li><span class="share-new-top" data-toggle="modal" data-target="#sharepop"><i class="material-icons">share</i></span></li>
                         <li>
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-title="Hey, check this starsboard educator's profile : ">
                
                <a href="<?php  echo base_url().ltrim($_SERVER['REQUEST_URI'], '/'); ?>"></a>

                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_linkedin"></a>
                <a class="a2a_button_copy_link"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_facebook_messenger"></a>
                <a class="a2a_button_telegram"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </li>
                        
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
                <div class="row">
                    <div class="col-sm-8">
                        <div class="jb-pro-bio">
                            <h4>Educator Details</h4>
                            <ul>
                                <li>
                                    Enquiries                               <span><center><?php echo $enquiry?><center></span>
                                </li>
                                <li>
                                    Experience                                <span><?php echo $educator->edu_experience?> years</span>
                                </li>
                                <li>
                                    Teaching Mode                                <span><?php if ($educator->edu_mode == 1){echo "Only Online";} elseif($educator->edu_mode == 2){ echo "Only Offline";}else{ echo "Hybrid";}  ?></span>
                                </li>
                                <li>
                                    Base Fare                                <span><?php echo "Rs." .$base_fare ?></span>
                                </li>
                                <li>
                                    Verified Educator                             <span><center>Yes</center></span>
                                </li>
                                <li>
                                    Location                                <span><center><?php echo $educator->pincode .", ". $educator->city ?></center></span>
                                </li>
                                <li>
                                    Join Date                             <span><center><?php echo date("d-m-Y", strtotime($educator->date_added))?></centre></span>
                                </li>
                                <!-- <li>
                                    Available Slots                               <span><?php echo strtoupper($educator->edu_slot)?></span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="jpro-bd-com">
                            <h4>Slots</h4>
                            <span><?php echo strtoupper($educator->edu_slot)?></span>
                                <!-- <span>Competetive Exams</span>
                                <span>Career Counselling</span>
                                <span>Art</span>
                                <span>Language Learning</span>
                                <span>Professional Courses</span> -->
                        </div>
                        <div class="jpro-bd-com">
                            <h4>Categories</h4>
                                <?php if(isset($subjectsArray[0])){?>
                                    <span>Academics</span>
                                <?php }?>
                                <?php if(isset($examsArray[0])){?>
                                <span>Competetive Exams</span>
                                <?php }?>
                                <?php if(isset($careerArray[0])){?>
                                <span>Career Counselling</span>
                                <?php }?>
                                <?php if(isset($artArray[0])){?>
                                <span>Art</span>
                                <?php }?>
                                <?php if(isset($languageArray[0])){?>
                                <span>Language Learning</span>
                                <?php }?>
                                <?php if(isset($profCoursesArray[0])){?>
                                <span>Professional Courses</span>
                                <?php }?>
                        </div>
                    </div>
                </div>
                <div id="ld-abo" class="list-pg-lt list-page-com-p">
                    
                        <!--LISTING DETAILS: LEFT PART 1-->
                        <div class="pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3><span>About</span> <?php echo $educator->edu_name ? $educator->edu_name :'';?></h3></div>
                            <div class="list-pg-inn-sp list-pg-inn-abo">
                                
                                    
                                        <div class="share-btn">


                                        </div>
                            <p><?php echo $educator->edu_description ? $educator->edu_description :'No data found';?></p>
                                                                </div>
                        </div>
<!-- 
                        <div id="ld-ser" class="pglist-bg pglist-p-com">
                                <div class="pglist-p-com-ti">
                                    <h3>
                                        <span>Categories</span> Offered                                    </h3></div>
                                <div class="list-pg-inn-sp">
                                    <div class="row pg-list-ser">
                                        
                                        <ul>
                                                                                            <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/academics.jpg');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Academics </h4></div>
                                                </li>
                                                                                                <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/exam.png');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Exams</h4></div>
                                                </li>
                                                                                                <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/career.png');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Career</h4></div>
                                                </li>
                                                                                                <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/art.png');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Arts</h4></div>
                                                </li>
                                                <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/ll.jpg');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Language</h4></div>
                                                </li>
                                                <li class="col-md-3">
                                                    <div class="pg-list-ser-p1"><img src="<?=base_url('assets/public/images/cc.jpg');?>" alt="">
                                                    </div>
                                                    <div class="pg-list-ser-p2">
                                                        <h4>Professional Courses</h4></div>
                                                </li>
                                </ul>   
                                        
                                    </div>
                                </div>
                            </div>            -->
					     
					<div id="ld-ser" class="pglist-bg pglist-p-com">
                        <div class="pglist-p-com-ti">
                            <br>
                        <h6><center>Courses Offered By Educator<center></h6>
                        <!-- ACADEMICS -->
                            <?php if(isset($subjectsArray[0] )) {?>
                            <h3><span> Academic</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
							<?php if($classArray != ''){?>
							  <h5>Classes</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($classArray as $class){?>
                                       <li><span><?php echo $class;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
	                        <?php if($subjectsArray[1] != ''){?>
							  <h5>Subjects</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($subjectsArray[1] as $subject){?>
                                       <li><span><?php echo $subject;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							    <?php if($boardsArray != ''){?>
								<h5>Boards</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($boardsArray as $board){?>
                                       <li><span><?php echo $board;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if($subjectsArray[2] != ''){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($subjectsArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if($subjectsArray[0] != ''){?>
								<h5>Cost for Academics per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                      
                                       <li><span><?php echo "Rs.".$subjectsArray[0];?></span></li>
									
                                    </ul>
                                </div>
                                <?php }?>
								<?php }?>
                                
                                
                                <!-- ------ -->
                            <?php if(isset($examsArray[0])){?>
                            <div class="pglist-p-com-ti">                           
                            <h3><span>Competetive Exams</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
							
	                        <?php if(isset($examsArray[2])){?>
							  <h5>Exams</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($examsArray[1] as $exam){?>
                                       <li><span><?php echo $exam;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							<?php }?>
							    
                                <?php if(isset($examsArray[2])){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($examsArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if(isset($examsArray[2])){?>
								<h5>Cost per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                      
                                       <li><span><?php echo "Rs.".$examsArray[0];?></span></li>
									
                                    </ul>
                                </div>
								<?php }?>

                        </div>
                        <?php }?>
                        

                        <!-- Career Counselling -->
                        <?php if(isset($careerArray[0])){?>
                            <div class="pglist-p-com-ti">
                            <h3><span>Career Counselling</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
	                        <?php if(isset($careerArray[2])){?>
							  <h5>Career Paths</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($careerArray[1] as $career){?>
                                       <li><span><?php echo $career;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							    <?php }?>
                                <?php if(isset($careerArray[2])){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($careerArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if(isset($careerArray[2])){?>
								<h5>Cost per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                       <li><span><?php echo "Rs.".$careerArray[0];?></span></li>
                                    </ul>
                                </div>
								<?php }?>
                            </div>
                            <?php }?>
                            
                            <!-- Art -->
                        <?php if(isset($artArray[0])){?>
                            <div class="pglist-p-com-ti">
                            <h3><span>Arts</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
	                        <?php if(isset($artArray[2])){?>
							  <h5>Arts</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($artArray[1] as $art){?>
                                       <li><span><?php echo $art;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							    <?php }?>
                                <?php if(isset($artArray[2])){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($artArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if(isset($artArray[2])){?>
								<h5>Cost per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                       <li><span><?php echo "Rs.".$artArray[0];?></span></li>
                                    </ul>
                                </div>
								<?php }?>
                            </div>
                            <?php }?>

                            

                            <!-- Language Learning -->
                        <?php if(isset($languageArray[0])){?>
                            <div class="pglist-p-com-ti">
                            <h3><span>Language Learning</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
	                        <?php if(isset($languageArray[2])){?>
							  <h5>Language Learning</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($languageArray[1] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							    <?php }?>
                                <?php if(isset($languageArray[2])){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($languageArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if(isset($languageArray[2])){?>
								<h5>Cost per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                       <li><span><?php echo "Rs.".$languageArray[0];?></span></li>
                                    </ul>
                                </div>
								<?php }?>
                            </div>
                            <?php }?>

                            

                             <!-- Professional Courses -->
                        <?php if(isset($profCoursesArray[0])){?>
                            <div class="pglist-p-com-ti">
                            <h3><span>Professional Courses</span> Details</h3></div>
                            <div class="list-pg-inn-sp">
	                        <?php if(isset($profCoursesArray[2])){?>
							  <h5>Professional Courses</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
									<?php foreach($profCoursesArray[1] as $prof){?>
                                       <li><span><?php echo $prof;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
							    <?php }?>
                                <?php if(isset($profCoursesArray[2])){?>
								<h5>Course offered in following languages</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                        <?php foreach($profCoursesArray[2] as $language){?>
                                       <li><span><?php echo $language;?></span></li>
									<?php }?>
                                    </ul>
                                </div>
								<?php }?>
                                <?php if(isset($profCoursesArray[2])){?>
								<h5>Cost per Lecture</h5>
                                <div class="row pg-list-ser-area">
                                    <ul>
                                       <li><span><?php echo "Rs.".$profCoursesArray[0];?></span></li>
                                    </ul>
                                </div>
								<?php }?>
                            </div>
                            <?php }?>
                        
                        

                    </div>
                    
					 </div>
                     <?php
                     //store the URL into a variable
$youtube_url =  "https://www.youtube.com/watch?v=7VLDGjny9P0";

if(!empty($offerInfo->offer_link)){
    $youtube_url = $offerInfo->offer_link;
}

$shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
$longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

if (preg_match($longUrlRegex, $youtube_url, $matches)) {
   $youtube_id = $matches[count($matches) - 1];
}

if (preg_match($shortUrlRegex, $youtube_url, $matches)) {
   $youtube_id = $matches[count($matches) - 1];
}
// echo  $youtube_url;

// //extract the ID
// preg_match(
//         '/[\?\&]v=([^\?\&]+)/',
//         $youtube_url,
//         $matches
//     );
// //the ID of the YouTube URL: eLl7Y29eC7o
// if(!empty($matches[1])){
//     echo "----".$matches[0];
//     echo "----".$matches[1];
//     $youtube_id = $matches[1];
    
// }else{
//     $str = "https://youtu.be/";
// $pattern = $youtube_url;
// preg_match($pattern, $str, $matches);
// print_r($matches);
   
//     $youtube_id = $matches;

// }

//set a custom width and height
$width = '640';
$height = '360';
  
//echo the embed code. You can even wrap it in a class
$demoLink = '<iframe width="' .$width. '" height="'.$height.'" src="//www.youtube.com/embed/'.$youtube_id.'" frameborder="0" allowfullscreen></iframe>';
   ?>                  
<section>
   <div class="edu-mpop-ser" style="background-image: url();background-color: #f1eeeecc;background-blend-mode: overlay;background-position: unset;">
   <div id="ld-gal" class="pglist-bg pglist-p-com">
                                <div class="pglist-p-com-ti">
                                    <h3>
                                        <center><span>Educator   </span> Demo Lecture</center></h3></div>
                                <div class="home-pg-gallery">
                                    <div id="demo" class="carousel slide" data-ride="carousel">
                                        <ul class="carousel-indicators">
                                                                                                
                                                                                                                <li data-target="#demo" data-slide-to="4" class="active"></li>
                                                                                                </ul>

                                        <div class="carousel-inner">
                                                                                 
                                                                                      
                                                                                                        
                                                      <div class="carousel-item viki active">
                                                      <?php echo  $demoLink ?>
                                                               <!-- <iframe width="560" height="315" src="<?php echo $offerInfo->offer_link?$offerInfo->offer_link:"https://www.youtube.com/embed/7VLDGjny9P0";?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                                      </div> 
                                                      
                                           
                                                                                </div>
                                </div>
                            </div>
                            
  
</section>
                     
                    <div id="ld-off" class="pglist-bg pglist-off-last pglist-p-com">
                        <div class="pglist-p-com-ti">
                             <h3>
                                <span>Special</span> Offers                                    </h3></div>
                            <div class="list-pg-inn-sp">
                                <div class="home-list-pop">
                                    <!--LISTINGS IMAGE-->
                                    <div class="col-md-3">
                                        <img src="<?=base_url('uploads/'.$user_id.'/'.$offerInfo->offer_image);?>" alt=""></div>
                                        <!--LISTINGS: CONTENT-->
                                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc list-room-deta"><a href="#!"><h3><?php echo $offerInfo->offer_name?></h3></a>
                                            <p><?php echo $offerInfo->offer_description?></p>
                                            <span class="home-list-pop-rat list-rom-pric"><?php echo "Rs. ".$offerInfo->offer_price ?></span>
                                            <div class="list-enqu-btn">
                                                   
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                    
                            </div>
                            

                    
                
            
            
                                                                <!--END LISTING DETAILS: LEFT PART 2-->
                    
                   
                                                <!--END LISTING DETAILS: LEFT PART 3-->
                                                <!--LISTING DETAILS: LEFT PART 4-->
                          
                           
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
                                                    <div class="lr-user-wr-img"><img src="<?php echo base_url('uploads/');?><?=$val->user_id;?>/<?=$val->user_image;?>" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';" alt="">
                                                    </div>
                                                    <div class="lr-user-wr-con">
                                                        <h6><?= $val->name;?></h6>
                                                        <label class="rat">
														<?php for ($x = 1; $x <= $val->rating; $x++) {?>
                                                    <i class="material-icons">star</i>
														<?php } ?>
                                                                
                                                              </label>
                                                        <span class="lr-revi-date"><?= $val->date_added;?></span>
                                                        <p><?= $val->message;?></p>
                                                    </div>
                                                </li>
										<?php }?>
                                                         
                                                                                        </ul>
                                    </div>
                                </div>
                            </div>
						<?php }?>
                        <br>
                        <br><br>
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
                            <h3><span>Send</span> Enquiry</h3>
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
                                <?php if(! $this->session->userdata('isUserLoggedIn')){ ?> <button  id="ckDemo" class="btn btn-primary" disabled> Log In To Submit                                 </button>
								<?php }else{?>
								<button  type="submit" id="detail_enquiry_submit"
                                                                      name="enquiry_submit"
                                                                      class="btn btn-primary">Submit                                 </button>
								<?php }?>
                            </form>
                        </div>

                    </div>
                    <div class="ud-rhs-promo">

                        <h3>Educator?</h3>
                        <p>Register now and Reach Thousands of Learners.</p>

                        <a href="<?=base_url('/registration');?>">Register for free</a>
                        
                    </div>
                    <!-- <div class="hot-page2-hom-pre">
                            <h4>Related profiles</h4>
                            <ul>
                                                                    <li>
                                        <div class="hot-page2-hom-pre-1">
                                            <img src="https://bizbookdirectorytemplate.com/images/user/970813.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>meeki</h5>
                                            <span>Member since <b>21, Feb 2022</b></span>
                                        </div>
                                        <a href="https://bizbookdirectorytemplate.com/profile/meeki1" class="fclick"></a>
                                    </li>
                                                                        <li>
                                        <div class="hot-page2-hom-pre-1">
                                            <img src="https://bizbookdirectorytemplate.com/images/user/970813.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>test</h5>
                                            <span>Member since <b>20, Feb 2022</b></span>
                                        </div>
                                        <a href="https://bizbookdirectorytemplate.com/profile/test1" class="fclick"></a>
                                    </li>
                                                                        <li>
                                        <div class="hot-page2-hom-pre-1">
                                            <img src="https://bizbookdirectorytemplate.com/images/user/970813.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Reyansh</h5>
                                            <span>Member since <b>13, Jan 2022</b></span>
                                        </div>
                                        <a href="https://bizbookdirectorytemplate.com/profile/reyansh" class="fclick"></a>
                                    </li>
                                                                        <li>
                                        <div class="hot-page2-hom-pre-1">
                                            <img src="https://bizbookdirectorytemplate.com/images/user/970813.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Luis Clarke</h5>
                                            <span>Member since <b>15, Dec 2021</b></span>
                                        </div>
                                        <a href="https://bizbookdirectorytemplate.com/profile/luis-clarke" class="fclick"></a>
                                    </li>
                                                                        <li>
                                        <div class="hot-page2-hom-pre-1">
                                            <img src="https://bizbookdirectorytemplate.com/images/user/970813.jpg" alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>harshal</h5>
                                            <span>Member since <b>02, Dec 2021</b></span>
                                        </div>
                                        <a href="https://bizbookdirectorytemplate.com/profile/harshal1" class="fclick"></a>
                                    </li>
                                                                </ul>
                </div> -->
                    <!--END LISTING DETAILS: LEFT PART 9-->
                                            <!--LISTING DETAILS: COMPANY BADGE-->
                        <!-- <div class="ld-rhs-pro pglist-bg pglist-p-com"> -->
                            <!-- <div class="lis-comp-badg">
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
                            </div> -->
                        <!-- </div> -->
                        <!--END LISTING DETAILS: COMPANY BADGE-->
                        <!-- <div class="lide-guar pglist-bg pglist-p-com">
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
                        </div> -->
                    
                                  
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
<div class="modal fade sharepop" id="sharepop">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Share now</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="text" value="" id="shareurl">
                <div class="shareurltip">
                    <button onclick="shareurl()" onmouseout="shareurlout()">
                        <span class="shareurltxt" id="myTooltip">Copy to clipboard</span>
                        Copy text                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    var _cururl = window.location.href;
    $("#shareurl").val(_cururl);
function shareurl() {
  var copyText = document.getElementById("shareurl");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied";
}

function shareurlout() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
    </script>
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
			if(data==1){
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
<script>
// function myFunction() {
//   alert("Please Sign In, Before Sending Enquiry!");
// }
function showAlert() {
    if (document.getElementById("ckDemo").disabled) {
        alert("CheckBox is Disabled");
    }
}
</script>
	 <?php $this->load->view('layout/footer');?>