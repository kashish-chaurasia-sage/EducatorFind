<?php $this->load->view('layout/header');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <!-- START SECTION 1-->
<section>
    <div class="all-listing all-listing-pg">
        <div class="fil-mob fil-mob-act">
        </div>

        <div class="all-list-bre">
        </div>

        <div class="container">
            <div class="row">

                <!-- SIDEBAR -->
                <div class="col-md-3 fil-mob-view">
                     <!-- SIDEBAR -->
                    <div class="all-filt">
                        <span class="fil-mob-clo"><i class="material-icons"></i></span>
                            <!--START-->
                            <div class="filt-alist-near">
                                
                                <!-- <div class="tit"><h4>Educators List</h4></div>
                                    <div class="near-ser-list top-ser-secti-prov">
                                        <ul>
                                        </ul>
                                    </div> -->
                                </div>

                                <!--START-->
                                <div class="filt-com lhs-cate">
                                    <h4>Categories</h4>
                                    <div class="dropdown">
                                        <select name="cat_check" id="cat" class="chosen-select">
                                            <option value=""><?php echo "Select Category"; ?></option>
                                            <?php
                                                foreach ($categories as $key =>$category) {
                                            ?>
                                            <option value="<?php echo $category->Cid; ?>"><?php echo $category->category_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                               <!--START-->
                                <div class="filt-com lhs-cate">
                                    <h4>Cities</h4>
                                    <div class="dropdown">
                                        <select name="city" id="cat" class="chosen-select">
                                            <option value=""><?php echo "Select City"; ?></option>
                                            <?php
                                            foreach ($cities as $key =>$city) {
                                                ?>
                                                <option value="<?php echo $city->city_id; ?>"><?php echo $city->city_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 

                                <!--START-->
                                <div class="filt-com lhs-cate">
                                    <h4>Teaching Mode</h4>
                                    <div class="dropdown">
                                        <select name="city" id="cat" class="chosen-select">
                                            <option value=""><?php echo "Select Mode"; ?></option>
                                            <option value="1"><?php echo "Online"; ?></option>
                                            <option value="2"><?php echo "Offline"; ?></option>
                                            <option value="3"><?php echo "Hybrid"; ?></option>
                                        </select>
                                    </div>
                                </div> 

                                 <!--START-->
                                <div class="filt-com lhs-cate">
                                    <h4>Experience Range</h4>
                                    <p><i> More than : <span id="demo"></span> years of experience</i></p>

                                        <input type="range" min="0" max="25" value="0" class="slider" id="myRange">
                                </div>

                                 <!--START-->
                                <div class="filt-com lhs-cate">
                                    <h4>Ratings</h4>
                                    <ul>
                                        <li>
                                            <div class="rbbox">
                                                <input type="radio" value="5" name="rating_check"
                                                       class="rating_check"
                                                       id="rb1"/>
                                                <label for="rb1">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rbbox">
                                                <input type="radio" value="4" name="rating_check"
                                                       class="rating_check"
                                                       id="rb2"/>
                                                <label for="rb2">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_border</i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rbbox">
                                                <input type="radio" value="3" name="rating_check"
                                                       class="rating_check"
                                                       id="rb3"/>
                                                <label for="rb3">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rbbox">
                                                <input type="radio" value="2" name="rating_check"
                                                       class="rating_check"
                                                       id="rb4"/>
                                                <label for="rb4">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="rbbox">
                                                <input type="radio" value="1" name="rating_check"
                                                       class="rating_check"
                                                       id="rb5"/>
                                                <label for="rb5">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                               
                                <!--START-->
                                <div class="filt-com lhs-ads">
                                    <ul>
                                        <li>
                                        <div class="ads-box">            
                                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7381950378620686"
                                            crossorigin="anonymous"></script>
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
                                        </li>
                                    
                                    </ul>
                                </div>
                                <!--END-->
                                <!-- START -->
                                <div class="all-list-filt-form">
                                    
                                    <div class="hom-col-req">
                                    <div class="tit">
                                        <h3>What service do you need? <span>Starsboard will help you</span></h3>
                                    </div>
                                        <div id="home_slide_enq_success" class="log"
                                            style="display: none;">
                                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                                        </div>

                                        <div id="home_slide_enq_fail" class="log" style="display: none;">
                                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                                        </div>
                                        
                                        <div id="home_slide_enq_same" class="log" style="display: none;">
                                            <p>You cannot make enquiry on your own listing!!</p>
                                        </div>

                                        <div id="enquiryResponseId">

                                        </div>

                                        <form class="col" name="enquiry_form" id="enquiry_form" method="post" action="<?php echo base_url('detail/generalEnquiry');?>">
    
                                        <div class="form-group">
                                                <input type="text" name="enquiry_name" value="" required="required"
                                                    class="form-control"
                                                    placeholder="Enter name*">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email*"
                                                    required="required" value=""
                                                    name="enquiry_email"
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
                                                <textarea class="form-control" rows="3" name="enquiry_message" id="enquiry_message"
                                                placeholder="Enter your query or message" value=""></textarea>
                                            </div>
                                            <input type="hidden" id="source">
                                            <button type="submit" id="home_slide_enquiry_submit"
                                                    name="home_slide_enquiry_submit"
                                                    class="btn btn-primary">Submit Requirements
                                                </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                    </div>
                    <!-- SIDEBAR ENDS -->
                   
                    <!-- LISTING COLUMN STARTS -->
                    <div class="col-md-9">
                    <div class = "list-ser-cnt">
                                                Showing Educators List
                                        </div>         
                        <!-- START LISTING TOPBAR FILTER -->
                        <!-- <div class="list-filt-v2">
                        <ul>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-all" class="lfv2-all" value="1" id="lfv2-all"
                                          checked="checked" />
                                    <label for="lfv2-all">All</label>
                                </div>
                            </li>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-pop" class="lfv2-pop" id="lfv2-pop"/>
                                    <label for="lfv2-pop">Popular</label>
                                </div>
                            </li>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-op" class="lfv2-op" id="lfv2-op"/>
                                    <label for="lfv2-op">Open</label>
                                </div>
                            </li>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-tru" class="lfv2-tru" id="lfv2-tru"/>
                                    <label for="lfv2-tru">Verified</label>
                                </div>
                            </li>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-near" class="lfv2-near" id="lfv2-near"/>
                                    <label for="lfv2-near">Nearby</label>
                                </div>
                            </li>
                            <li>
                                <div class="chbox">
                                    <input type="checkbox" name="lfv2-off" class="lfv2-off" id="lfv2-off"/>
                                    <label for="lfv2-off">Offers</label>
                                </div>
                            </li>
                        </ul>
                        </div> -->

                        <!-- END LISTING TOPBAR FILTER -->

                        <!--ADS-->
                        <div class="ban-ati-com ads-all-list">

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
                        
                        <!-- Loader Image -->
                        <div id="loadingmessage" style="display:none">
                            <div id="loadingmessage1">&nbsp;</div>
                        </div>
                        <!-- Loader Image -->
                        
                        <div class="all-list-sh all-listing-total">
                        <!-- <span class="ver"><i class="material-icons" title="Verified expert">verified_user</i></span> -->

                            <ul class="all-list-wrapper" id="fiitered_educator">
						        <?php if(!empty($listed)){ 
                                    
                                    foreach($listed as $educatorKey => $educatorVal){
                                    $data=json_decode($educatorVal->LongJsonInfo,true);

                                ?>

                                <li class="all-list-item">

                                    <div class="eve-box">

                                        <!---LISTING IMAGE--->
                                        <div class="al-img">
                                        <!-- <span class="ver"><i class="material-icons" title="Verified expert">verified_user</i></span> -->

                                            <!-- <span class="open-stat">Verified</span> -->
                                            <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($educatorVal->edu_name)).'/'.$educatorVal->Eid);?>">
                                                <img src="<?=base_url('uploads/'.$educatorVal->user_id.'/'.$data[0]['edu_image']);?>">
                                            </a>

                                        </div>
                                        <!---END LISTING IMAGE--->

                                        <!---LISTING NAME--->
                                        <div>
                                            <h4>

                                                <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($educatorVal->edu_name)).'/'.$educatorVal->Eid);?>"><?= $educatorVal->edu_name;?></a>
                                            </h4>

                                            <span class="addr"><?= $educatorVal->edu_city;?></span>
                                            <!-- <div class = "edu"> -->
                                                <span class="eduData"><?php echo $educatorVal->edu_experience; ?> <?php echo "years"; ?><?php echo "Exp."; ?></span>
                                                <span class="eduData">
                                                    <?php
                                                        if ($educatorVal->edu_mode == "1") {
                                                            echo "Online";
                                                        }elseif($educatorVal->edu_mode == "2"){
                                                            echo "Offline";
                                                        }else{
                                                            echo "Hybrid";
                                                        }
                                                    ?>
                                                </span>
                                                    
                                                    

                                                <!-- </div> -->
                                            
                                            <!-- <span class="pho">
                                                <?php    
                                                    $number=$data[0]['edu_mobile'];
                                                    $maskedMobile =  str_pad(substr($number, -4), strlen($number), '*', STR_PAD_LEFT);
                                                    echo $maskedMobile; 
                                                ?>
                                            </span> -->

                                            <!-- <span class="mail">
                                                <?php 
                                                    $email=$data[0]['edu_email'];
                                                    $maskedEmail=substr($email, 0, 3).'****'.substr($email, strpos($email, "@"));
                                                    echo $maskedEmail;
                                                ?> 
                                            </span> -->

                                            <div class="links">
                                                <a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($educatorVal->edu_name)).'/'.$educatorVal->Eid);?>">view more</a>
                                                <a href="Tel: <?= $data[0]['edu_mobile'];?>">Call Now</a>
                                                <!-- <span class="">whatsapp </span> -->
                                                <a href="https://wa.me/<?= $data[0]['edu_whatsapp'];?>" class="what" target="_blank">WhatsApp</a>
                                            </div>

                                            <span class="enq-sav" data-toggle="tooltip"
                                          title="">
                                          <span ><i class="material-icons" title="Verified expert">verified_user</i></span>

                                        <!-- <i class="l-like Animatedheartfunc299 "
                                           data-for="0"
                                           data-section="1"
                                           data-num="206"
                                           data-item=""
                                           data-id='299'><img
                                                src="https://bizbookdirectorytemplate.com/images/icon/svg/like.svg"></i></span> -->

                                        </div>
                                        <!---END LISTING NAME--->

   
                                    </div>
                                </li>
                               
                                <?php }}else{?>
                                <h4>No data found</h4>
                                <?php }?>
                            </ul>
                            
                            <!-- ADS-->
                            <div class="ban-ati-com ads-all-list">
                            <div>
                            <p><?php echo $links; ?></p>
                                </div>
                                <!-- horizontal ads -->
                                <ins class="adsbygoogle"
                                    style="display:block"
                                    data-ad-client="ca-pub-7381950378620686"
                                    data-ad-slot="2707470180"
                                    data-ad-format="auto"
                                    data-full-width-responsive="true">
                                </ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                            <!--ADS -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1-->

<!-- START SECTION 2-->
<section>
    <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>
    <script> 
        $(document).on("click", ".edu_class,.edu_sub,.edu_board,.edu_exam,.edu_carrer,.edu_course,.edu_art,.edu_lang", function () {
			applyFilters();
			
		});
	
        /****** applyFilters function check all apply casses   ******/
		function applyFilters(){
			var edu_class = [];
			$.each($("input[name='edu_class']:checked"), function(){
				edu_class.push($(this).val());
			});
			
			var edu_sub = [];
			$.each($("input[name='edu_sub']:checked"), function(){
				edu_sub.push($(this).val());
			});
			
			var edu_board = [];
			$.each($("input[name='edu_board']:checked"), function(){
				edu_board.push($(this).val());
			});
			
			var edu_exam = [];
			$.each($("input[name='edu_exam']:checked"), function(){
				edu_exam.push($(this).val());
			});
			
			var edu_carrer = [];
			$.each($("input[name='edu_carrer']:checked"), function(){
				edu_carrer.push($(this).val());
			});
			
			var edu_course = [];
			$.each($("input[name='edu_course']:checked"), function(){
				edu_course.push($(this).val());
			});
			
			var edu_art = [];
			$.each($("input[name='edu_art']:checked"), function(){
				edu_art.push($(this).val());
			});
			
			var edu_lang = [];
			$.each($("input[name='edu_lang']:checked"), function(){
				edu_lang.push($(this).val());
			});
			
			//if(cat_slug!=''){  
				$.ajax({
				method: 'POST',
				url: '<?=base_url('educator/index');?>',
				dataType: 'JSON',
				data:{edu_class: edu_class,edu_sub:edu_sub,edu_board:edu_board,edu_exam:edu_exam,edu_carrer:edu_carrer,edu_course:edu_course,edu_art:edu_art,edu_lang:edu_lang},
				success:function(res){
					
				$("#fiitered_educator").html(res['_html']);
					//successToast(res.success, 4000);
				},
				error:function(res){
				   console.log(res);
				   errorToast("Something went wrong!", 4000);
				}
				});
			//}
			
		}
    </script>

    <script>

        $( ".cat" ).change(function() {
            var cat=$('#cat').val();
        
            if(cat =='Academic'){
            $('#academicFillter').show();
            $('#counselling').hide();
            $('#professional').hide();
            
            }else if(cat =='Career Counselling'){
            $('#counselling').show();
            $('#academicFillter').hide();
            $('#professional').hide();
            }else if(cat =='Professional'){
            $('#professional').show();
            $('#counselling').hide();
            $('#academicFillter').hide();
        }
  
        $.ajax({
            method: 'POST',
            url: '<?=base_url('welcome/fromcat');?>',
            dataType: 'JSON',
            data:{cat:cat},
            success:function(res){
            
            $("#fiitered_educator").html(res['_html']);
                //successToast(res.success, 4000);
            },
            error:function(res){
                console.log(res);
                errorToast("Something went wrong!", 4000);
            }
            });
        });

    </script>

</section>
<!-- END SECTION 2-->

<br><br><br>
  
<?php $this->load->view('layout/footer');?>