 <!--LEFT SECTION-->
            <div class="ud-lhs">
                <div class="ud-lhs-s1">
                    <img src="<?php echo base_url('uploads/users/'.$user_data[0]->id.'/'.$user_data[0]->user_image);?>" alt="" onerror="this.onerror=null;this.src='<?php echo base_url('assets/public/images/no-image.jpg');?>';">
                    <h4><?php echo $this->session->userdata('username');?></h4>
                    <b>Join on <?php echo $this->session->userdata('usercreated');?></b>
                    <a class="ud-lhs-view-pro"  href="<?php echo base_url('profile');?>">My Profile</a>
					
                </div>
                <div class="ud-lhs-s2">
                    <ul>
                    <li>
                            <a href="<?php echo base_url('dashboard');?>" class="db-lact"><img src="<?php echo base_url('assets/public/images/sidebar/dbl1.png');?>" alt="" /> My Dashboard</a>
                        </li>
						<?php  
					
						if($user_data[0]->educator == '1'){?>
						 <li>
                            <a href="<?php echo base_url('update_become_educator');?>"><img src="<?php echo base_url('assets/public/images/sidebar/dbl3.png');?>" alt=""/>Edit Educator Profile</a>
                        </li>
						<?php }else {?>
                       <li>
                            <a href="<?php echo base_url('become_educator');?>"><img src="<?php echo base_url('assets/public/images/sidebar/dbl3.png');?>" alt=""/>Become Educator</a>
                        </li>
						<?php  }?>
						<li>
                            <a href="<?php echo base_url('lead');?>"><img src="<?php echo base_url('assets/public/images/sidebar/tick.png');?>" alt=""/>Lead</a>
                        </li>
                       <li>
                            <a href="<?php echo base_url('my-blog');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/blog1.png');?>" alt=""/>Blog posts</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('review');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl13.png');?>" alt="" />Reviews</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('profile');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl6.png');?>" alt="" />My Profile</a>
                        </li>
                        <!--<li>-->
                        <!--    <a href="<?php echo base_url('liked');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl15.png');?>" alt="" />Liked Listings</a>-->
                        <!--</li>-->
                        <li>
                            <a href="" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl18.png');?>" alt="" />Followings</a>
                        </li>
                       
                        <li>
                            <a href="<?php echo base_url('plan');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl9.png');?>" alt="">Payment & plan</a>
                        </li>
                        <li>
                            <a href="" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl16.png');?>" alt=""/>Payment invoice</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('notification');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl19.png');?>" alt="" />Notifications</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('setting');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl210.png');?>" alt="" />Setting</a>
                        </li>
                  <li>
                            <a href="<?php echo base_url('login/logout');?>" class=""><img src="<?php echo base_url('assets/public/images/sidebar/dbl12.png');?>" alt="" />Logout</a>
                        </li>
                    </ul>
                </div>
            </div> 