 <?php $this->load->view('layout/header');?>
 
 
    <!-- START -->
    <!--PRICING DETAILS-->
    <section class=" ud">
        <div class="ud-inn">
		<?php $this->load->view('layout/sidebar');?>

              <!--CENTER SECTION-->
            <div class="ud-cen">
                <div class="log-bor">&nbsp;</div>
                <span class="udb-inst">User Dashboard</span>
                <div class="cd-cen-intr">
                    <div class="cd-cen-intr-inn">
                        <h2>Welcom back, <b><?php echo $this->session->userdata('username');?></b></h2>
                        <p>Stay up to date reports in your listing, products, events and blog reports here</p>
                    </div>
                </div>
                <div class="ud-cen-s1">
                    <ul>
                        <li>
                            <div>
                                <b>0</b>
                                <h4>All Listings</h4>
                                <p>Total no of listings</p>
                                <a href="db-all-listing">&nbsp;</a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <b>0</b>
                                <h4>Enquiries</h4>
                                <p>Total no of enquiry</p>
                                <a href="db-enquiry">&nbsp;</a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <b>0</b>
                                <h4>Followings</h4>
                                <p>Total no of followings</p>
                                <a href="db-followings">&nbsp;</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- START -->
                <div class="ud-cen-s3 ud-cen-s4">
                    <h2>Profile page</h2>
                    <a href="<?php echo base_url('/profile/edit');?>" class="db-tit-btn">Edit profile page</a>
                    <div class="ud-payment ud-pro-link">
                        <div class="pay-lhs">
                            <div class="lis-pro-badg">
                                <div>
                               <img src="<?php echo base_url('uploads/'.$user_data[0]->id.'/'.$user_data[0]->user_image);?>" alt="" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';">
								                                      
								   <h4><?php echo $this->session->userdata('username');?></h4>
                                    <p>Member since <?php echo $this->session->userdata('usercreated');?></p>
                                </div>
                                <a href="<?php echo base_url();?>profile/" class="fclick" target="_blank">&nbsp;</a>
                            </div>
                        </div>
                        <div class="pay-rhs">
                            <ul>
                                <li><b>Name : </b> <?php echo $this->session->userdata('username');?></li>
                                <li><b>Followers : </b> <span>08</span></li>
                                <?php if($this->session->userdata('usercity')){?><li><b>City : </b> <?php echo ($this->session->userdata('usercity'))?$this->session->userdata('usercity'):'';?></li><?php }?>
                                <li><b>Email : </b> <?php echo $this->session->userdata('useremail');?></li>
                                <li class="pro"><input type="text"
                                                       value="<?php echo base_url();?>profile/"
                                                       readonly></li>
                                <li class="pre"><a  href="<?php echo base_url('/profile/');?>">View my profile page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END -->
                <!-- START -->
                <div class="ud-cen-s3 ud-cen-s4">
                    <h2>Business page</h2>
                    <a href="company-profile-edit" class="db-tit-btn">Edit business page</a>
                    <div class="ud-payment ud-pro-link bus-pg">
                        <div class="pay-lhs">
                            <div class="lis-pro-badg">
                                <div>
                                    <img
                                        src="<?php echo base_url('uploads/'.$user_data[0]->id.'/'.$user_data[0]->user_image);?>" alt="">
                                    <h4><?php echo $this->session->userdata('username');?></h4>
                                    <p>Member since <?php echo $this->session->userdata('usercreated');?></p>
                                </div>
                                <a href="<?php echo base_url('/profile/');?>" class="fclick" target="_blank">&nbsp;</a>
                            </div>
                        </div>
                        <div class="pay-rhs">
                            <ul>
                                <li><b>Name : </b> <?php echo $this->session->userdata('username');?>                           </li>
                                <li><b>Page views : </b> <span>79</span></li>
                                <li class="pro"><input type="text"
                                                       value="<?php echo base_url();?>"
                                                       readonly></li>
                                <li class="pre"><a target="_blank"
                                                   href="<?php echo base_url('/profile/');?>">View business page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END -->

                <div class="ud-cen-s2">
                    <h2>Listing Details</h2>
					<?php if(empty($educator)){?>
                    <a href="<?php echo base_url('/become_educator');?>" class="db-tit-btn">Add New Listing</a>
					<?php }else{?>
					  <a href="#" class="db-tit-btn">Update Listing</a>
				    <?php }?>
					<?php if(!empty($educator)){?>
                    <table class="responsive-table bordered">
                        <thead>
                        <tr>
                            <th>No</th>
								<th>Listing Name</th>
                            
                            <th>Views</th>
                            <th>Status</th>
                            <th>Preview</th>
                        </tr>
                        </thead>
                        <tbody>

 
						<?php    foreach($educator as $key =>$val){  ?>
						<?php if($val->academic ==1){?>
						  <tr>
                            <td>1</td>
                            <td><img src="<?php echo base_url('assets/public/images/no-image.jpg');?>">Academic<span><?= $val->created;?></span></td>
                            <td><span class="db-list-rat">68</span></td>
							<td><span class="db-list-ststus">Active</span></td>
                           
                            <td><a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($val->edu_name)).'/'.$val->user_id);?>" class="db-list-edit" target="_blank">Preview</a></td>
                        </tr>
						   <?php }?>
						   <?php if($val->counselling ==1){?>
						  <tr>
                            <td>2</td>
                            <td><img src="<?php echo base_url('assets/public/images/no-image.jpg');?>">Career counselling<span><?= $val->created;?></span></td>
                            <td><span class="db-list-rat">68</span></td>
							<td><span class="db-list-ststus">Active</span></td>
                           
                            <td><a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($val->edu_name)).'/'.$val->user_id);?>" class="db-list-edit" target="_blank">Preview</a></td>
                        </tr>
						   <?php }?>
						   <?php if($val->	training ==1){?>
						  <tr>
                            <td>3</td>
                            <td><img src="<?php echo base_url('assets/public/images/no-image.jpg');?>">Training<span><?= $val->created;?></span></td>
                            <td><span class="db-list-rat">68</span></td>
							<td><span class="db-list-ststus">Active</span></td>
                           
                            <td><a href="<?= base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($val->edu_name)).'/'.$val->user_id);?>" class="db-list-edit" target="_blank">Preview</a></td>
                        </tr>
						   <?php }?>
						   <?php }?>
                        </tbody>
                    </table>
					<?php }?>
                </div>
                
                <div class="ud-cen-s3 ud-cen-s4">
                    <h2>Blog posts</h2>
                    <a href="<?php echo base_url('my-blog/create_blog');?>" class="db-tit-btn">Add new post</a>
                    <ul>
                       
                       <?php if(!empty($blog)){
						   foreach($blog as $key =>$val){
						   ?>
					   
                        <li>
                            <div class="db-eve">
                                <a href="<?= base_url('/blog/'.$val->blog_id.'/'.$val->blog_title.''); ?>">
                                    <img src="<?= base_url('uploads/blog/'.$val->blog_id.'/'.$val->blog_image.''); ?>" alt="<?=$val->blog_title;?>">
                                    <h5><?=$val->blog_title;?></h5>
                                    <span>Created: <?=$val->blog_created;?></span>
                                </a>
                            </div>
                        </li>
					   <?php } }?>
                    </ul>
                </div>

            </div>
            <!--RIGHT SECTION-->
            <div class="ud-rhs">
                <div class="ud-rhs-promo">
                    <h3>Promote my business</h3>
                    <p>Your listing show on the top of the respective category page</p>
                    <a href="">Start now</a>
                </div>
                <!--    //Total Point Section Starts-->
                <div class="ud-rhs-poin">
                    <div class="ud-rhs-poin1">
                        <h4>Your points</h4>
                        <span class="count1">0</span>
                    </div>
                    <div class="ud-rhs-poin2">
                        <h3>Earn more credit points</h3>
                        <p>Use this poins to promote your listing. <a href="#">Click here</a> for demo</p>
                        <a href="" class="cta">Buy Points</a>
                    </div>
                </div>
                <!--    //Total Point Section Ends-->

                <!-- <div class="ud-rhs-pay">
                    <div class="ud-rhs-pay-inn">
                        <h3>Payment Information</h3>
                        <ul>
                            <li><b>Plan name : </b> Premium Plus</li>
                           

                        </ul>

                        <a href="" class="btn btn2">Pay Now</a>
                    </div>
                </div> -->
				<?php if(!empty($educator)){?>
                <div class="ud-rhs-pay ud-rhs-status">
                    <div class="ud-rhs-pay-inn">
                        <h3>Listing open & close status</h3>
						<?php    foreach($educator as $key =>$val){  ?>
                        <ul>
                           <?php if($val->academic ==1){?>
                            <li>
                                <span>Academic</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" disabled class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
							 <?php }?>
						   <?php if($val->counselling ==1){?>
							<li>
                                <span>Career Counselling</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox"disabled class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
							<?php }?>
						   <?php if($val->	training ==1){?>
							<li>
                                <span>Professional Training</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" disabled class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
							<?php }?>
							<?php }?>
                        </ul>
                    </div>
                </div>
				<?php }?>

                <div class="ud-rhs-pay ud-rhs-repo">
                    <div class="ud-rhs-pay-inn">
                        <h3>Last week report</h3>
                        <ul>
                            <li>
                                <span class="view">Enquiry</span>
                                <span
                                    class="cout">00</span>
                                <span class="name">Leads</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">00</span>
                                <span class="name">Listing</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">00</span>
                                <span class="name">Events</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">00</span>
                                <span class="name">Blogs</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">00</span>
                                <span class="name">Products</span>
                            </li>
                            <li>
                    <span
                        class="cout">00</span>
                                <span class="name">Messages</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ud-rhs-sec-1">
                    <h4>Admin Notification</h4>
                    <ul>
                        <li>
                            <a target="_blank" href="">
                                <h5>New Offer</h5>
                                <p>Free Registratio</p>
                            </a>
                        </li>
                       
                    </ul>
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
                <div class="ud-rhs-promo ud-rhs-promo-1">
                    <h3>Community members</h3>
                    <p>Follow your favorite business users and grow your online business now.</p>
                    <a href="community">Community</a>
                </div>
                <div class="ud-rhs-sec-3">
                    <div class="list-mig-like">
                        <div class="list-ri-peo-like">
                            <h3>Who all are follow you</h3>
                            <ul>
                                <li>
                                    <a href=""
                                       target="_blank">
                                        <img
                                            src="images/user/63520pexels-photo-1130626.jpeg" alt="">
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--END PRICING DETAILS-->
    <!-- START -->
    <?php  	if($user_data[0]->educator != '1'){?>

<!-- <div class="star_board_wpop welcome_pop">
   <div class="modal-dialog">
      <div class="modal-content">
         <button type="button" class="closed-btn"><span></span></button>
         <div class="modal-body">
            <!-- <div class="welcome-cta">
               <a href="https://starsboard.in/become-educator">
               <img src="<?=base_url('assets/public/images/star-add-welcome.jpeg');?>" alt="" srcset="">
               </a>
            </div> -->
         </div>
      </div>
   </div>
</div> -->
<?php }?>
<?php $this->load->view('layout/footer');?>









