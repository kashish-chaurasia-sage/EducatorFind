 <?php $this->load->view('layout/header');?>
    <!-- START -->
    <!--PRICING DETAILS-->
    <section class=" ud">
        <div class="ud-inn">
            <!--LEFT SECTION-->
            <?php $this->load->view('layout/sidebar');?>
			<!--CENTER SECTION-->
        <div class="ud-cen">
        <div class="log-bor">&nbsp;</div>
        <span class="udb-inst">Reviews</span>
                <div class="ud-cen-s2">
               
            <h2>All Listings - Received review details</h2>	
                        <ul class="nav nav-tabs">
                        <?php if(!empty($review)){
							?>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#received">All Received Reviews</a>
                </li><?php }?>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#sent">All Sent Reviews</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="received" class="container tab-pane "><br>
                    <table class="responsive-table bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Ratings</th>
                            <th>Message</th>
                           <!-- <th>Delete</th>-->
                        </tr>
                        </thead>
                        <tbody>
						<?php if(!empty($review)){ $i=1;
							foreach($review as $key => $value){ 
							?>
                                                    <tr>
                                <td><?= $i;?></td>
                                <td><?= $value->review_name;?></td>
                                <td><?= $value->review_email;?></td>
                                <td><?= $value->review_mobile;?></td>
                                <td><?= $value->review_city;?></td>
                                <td>
                                    <label class="rat">
								<?php
                                   for ($x = 0; $x <= $value->price_rating -1; $x++) { ?>
                                <i class="material-icons">star</i>
                                  <?php }?>
                                             
									  </label>
                                </td>
                                <td><?= $value->review_message;?></td>

                               <!-- <td>
                                    <a href=""><span
                                            class="db-list-edit">Delete</span> </a></td>-->

                            </tr>
						<?php }}else{echo 'No data found';}?>
                        </tbody>
                    </table>
                </div>
                <div id="sent" class="container tab-pane active"><br>
                    <table class="responsive-table bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Listing Name</th>
                            <!-- <th>Email</th>
                            <th>Phone</th>
                            <th>City</th> -->
                            <th>Ratings</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php if(!empty($receivedreview)){ $i=1;
							foreach($receivedreview as $key => $value){ 
							?>
                                                    <tr>
                                <td><?= $i;?></td>
                                <td><?= $value->edu_name;?></td>
                                <!-- <td><?= $value->review_email;?></td>
                                <td><?= $value->review_mobile;?></td>
                                <td><?= $value->review_city;?></td> -->
                                <td>
                                    <label class="rat">
								<?php
                                   for ($x = 0; $x <= $value->rating -1; $x++) { ?>
                                <i class="material-icons">star</i>
                                  <?php }?>
                                             
									  </label>
                                </td>
                                <td><?= $value->message;?></td>
                               

                            </tr>
                                            	<?php }}else{echo 'No data found';}?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>	
            <div class="ud-rhs">
                <div class="ud-rhs-promo">
                    <h3>Promote my business</h3>
                    <p>Your listing show on the top of the respective category page</p>
                    <a href="promote-business">Start now</a>
                </div>
                <!--    //Total Point Section Starts-->
                <!-- <div class="ud-rhs-poin">
                    <div class="ud-rhs-poin1">
                        <h4>Your points</h4>
                        <span class="count1">11</span>
                    </div>
                    <div class="ud-rhs-poin2">
                        <h3>Earn more credit points</h3>
                        <p>Use this poins to promote your listing. <a href="#">Click here</a> for demo</p>
                        <a href="buy-points" class="cta">Buy Points</a>
                    </div>
                </div> -->
                <!--    //Total Point Section Ends-->

                <!-- <div class="ud-rhs-pay">
                    <div class="ud-rhs-pay-inn">
                        <h3>Payment Information</h3>
                        <ul>
                            <li><b>Plan name : </b> Premium Plus</li>
                            <li><b>Start date : </b> 27, May 2021</li>


                            <li><b>Expiry date : </b> 27, May 2031</li>
                            <li><b>duration : </b> 10 year</li>

                            <li><b>Remaining Days: </b> 3652</li>
                            <li><span
                                    class="ud-stat-pay-btn"><b>Checkout cost:</b> $2000</span></li>
                            <li><span
                                    class="ud-stat-pay-btn"><b>Payment Status:</b> PENDING</span></li>


                        </ul>

                        <a href="db-payment" class="btn btn2">Pay Now</a>
                    </div>
                </div> -->
                <div class="ud-rhs-pay ud-rhs-status">
                    <div class="ud-rhs-pay-inn">
                        <h3>Listing open & close status</h3>
                        <ul>
                           
                            <li>
                                <span>Academic</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
							<li>
                                <span>Career Counselling</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
							<li>
                                <span>Professional Training</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="listing_open_close_switch custom-control-input"
                                           id="129" checked>
                                    <label class="custom-control-label" for="129"
                                           data-toggle="tooltip"
                                           title="Click here to update your listing status, Open or Closed.">&nbsp;</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

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
                                    class="cout">55</span>
                                <span class="name">Listing</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">05</span>
                                <span class="name">Events</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">13</span>
                                <span class="name">Blogs</span>
                            </li>
                            <li>
                                <span class="view">Views</span>
                                <span
                                    class="cout">21</span>
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
                            <a target="_blank" href="http://www.fototech.online/">
                                <h5>New Offer</h5>
                                <p>Free album</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="payme.now">
                                <h5>pay now</h5>
                                <p>pay today</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fbizbookdirectorytemplate.com%252Flisting%252Fasdssd%253Fsrc%253Dfacebook%26quote%3Dasdssd&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=en_GB">
                                <h5>Test</h5>
                                <p>ssd</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="xxxxxxxxxxxxxxxxxx">
                                <h5>test</h5>
                                <p>test</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="demoo">
                                <h5>demo2</h5>
                                <p>demo2222</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="demo">
                                <h5>demo</h5>
                                <p>demo notification</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.location-voitures-maurice.com/">
                                <h5>https://www.location-voitures-maurice.com/</h5>
                                <p>https://www.location-voitures-maurice.com/</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="prueba">
                                <h5>preuba</h5>
                                <p>prieba</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://directoryfinder.net/demo/business-directory-template/listing-details?code=LIST211">
                                <h5>Homey massage offer 50%</h5>
                                <p>Special offer for this month only</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://youtu.be/O8EeSKUgyj8">
                                <h5>How lead tracking works?</h5>
                                <p>Lead and url tracking work process</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.fltdsgn.com/">
                                <h5>Other url redirect</h5>
                                <p>Other url redirect test by directory finder</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://directoryfinder.net/how-to-install-this-on-local-server-tutorial-videos.html">
                                <h5>How to install directoryfinder template?</h5>
                                <p>How to install directoryfinder template in local server</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://directoryfinder.net/demo/business-directory-template/event-details?row=10">
                                <h5>How to add new listing?</h5>
                                <p>Just few clicks to add your new listing</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://youtu.be/93_4_0Dyys8">
                                <h5>Best Business Directory Template</h5>
                                <p>Get the premium business directory templates with the best quality</p>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="www.google.com1">
                                <h5>1test noti title1</h5>
                                <p>Tour Travel | Tour Travel Package Template</p>
                            </a>
                        </li>
                    </ul>
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
                                    <a href="https://bizbookdirectorytemplate.com/profile/rachel"
                                       target="_blank">
                                        <img
                                            src="images/user/63520pexels-photo-1130626.jpeg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/betty-d-friedman"
                                       target="_blank">
                                        <img
                                            src="images/user/8766pexels-photo-774909.jpeg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/claude-d-dial"
                                       target="_blank">
                                        <img
                                            src="images/user/33654pexels-photo-91227.jpeg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/kumar"
                                       target="_blank">
                                        <img
                                            src="images/user/4913411004989_334444876752279_544839968_n.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/deneme"
                                       target="_blank">
                                        <img
                                            src="images/user/49305392-3923372_indian-farmer-png-indian-farmer-images-png.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/clic"
                                       target="_blank">
                                        <img
                                            src="images/user/49305392-3923372_indian-farmer-png-indian-farmer-images-png.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/nawaf-alayli"
                                       target="_blank">
                                        <img
                                            src="images/user/49305392-3923372_indian-farmer-png-indian-farmer-images-png.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://bizbookdirectorytemplate.com/profile/"
                                       target="_blank">
                                        <img
                                            src="images/user/49305392-3923372_indian-farmer-png-indian-farmer-images-png.png" alt="">
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

<?php $this->load->view('layout/footer');?>









