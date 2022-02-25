
 <?php $this->load->view('admin/layout/header');?>
 <?php $this->load->view('admin/layout/left_sidebar');?>
<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash adda-oly leftpadd">

<!--            User Welcome Div starts -->

            <div class="ad-dash-s1">
                <div class="cd-cen-intr-inn">
                <h2>Hi Welcome <b>Starsboard</b></h2>
                <p>Stay up to date reports in your listing, products, events and blog reports here</p>
                </div>
            </div>

<!--            User Welcome Div ends -->


            <div class="ad-dash-s2">
                <ul>
                    <li>
                        <div>
                            <img src="../images/icon/ic-1.png" alt="">
                            <h2><?php echo $user;?></h2>
                            <h4>Al Users</h4>
                            <a href="admin-all-users.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="../images/icon/shop.png" alt="">
                            <h2><?php echo $educator;?></h2>
                            <h4>All Educator</h4>
                            <a href="admin-all-listings.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="../images/icon/calendar.png" alt="">
                            <h2><?php echo $review;?></h2>
                            <h4>All Review</h4>
                            <a href="admin-event.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="../images/icon/cart.png" alt="">
                            <h2><?php echo $lead;?></h2>
                            <h4>All Lead</h4>
                            <a href="admin-all-products.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="../images/icon/blog1.png" alt="">
                            <h2><?php echo $blog;?></h2>
                            <h4>All Blog Posts</h4>
                            <a href="admin-all-blogs.php" class="fclick"></a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="ad-dash-s4">
                <ul>
                    <li>
                        <div class="cor-1">
                            <h4>New Users</h4>
                            <h2>User requests</h2>
                            <span>02</span>
                            <p>This count for today how many get quote and enquiry you got it.</p>
                            <a href="admin-new-user-requests.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="cor-2">
                            <h4>Leads & Enquiry</h4>
                            <h2>Get Quote</h2>
                            <span>174</span>
                            <p>This count for last month get quote and enquiry you got it.</p>
                            <a href="admin-all-enquiry.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="cor-3">
                            <h4>Enquiry</h4>
                            <h2>Ad Request</h2>
                            <span>49</span>
                            <p>This count for total get quote and enquiry leads you got it till to end.</p>
                            <a href="admin-ads-request.php" class="fclick"></a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="ad-dash-s3">
                <ul>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <span>Premium Plus Users</span>
                                <h4>27</h4>
                            </div>
                            <div>
                                <img src="../images/icon/ic-9.png" alt="">
                            </div>
                            <a href="admin-premium-plus-users.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <span>Premium Users</span>
                                <h4>04</h4>
                            </div>
                            <div>
                                <img src="../images/icon/ic-8.png" alt="">
                            </div>
                            <a href="admin-premium-users.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <span>Standard Users</span>
                                <h4>24</h4>
                            </div>
                            <div>
                                <img src="../images/icon/ic-10.png" alt="">
                            </div>
                            <a href="admin-standard-users.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <span>Free Users</span>
                                <h4>79</h4>
                            </div>
                            <div>
                                <img src="../images/icon/ic-11.png" alt="">
                            </div>
                            <a href="admin-free-users.php" class="fclick"></a>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="ad-dash-s3 ad-dash-s5">
                <ul>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <img src="../images/icon/ic-14.png" alt="">
                            </div>
                            <div>
                                <span>Category</span>
                                <h4>10</h4>
                            </div>
                            <a href="admin-all-category.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <img src="../images/icon/ic-12.png" alt="">
                            </div>
                            <div>
                                <span>Sub Category</span>
                                <h4>47</h4>
                            </div>
                            <a href="admin-all-category.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <img src="../images/icon/ic-13.png" alt="">
                            </div>
                            <div>
                                <span>Cities</span>
                                <h4>48357</h4>
                            </div>
                            <a href="admin-all-city.php" class="fclick"></a>
                        </div>
                    </li>
                    <li>
                        <div class="ad-cou">
                            <div>
                                <img src="../images/icon/ic-15.png" alt="">
                            </div>
                            <div>
                                <span>Notifications Send</span>
                                <h4>17</h4>
                            </div>
                            <a href="admin-notification-all.php" class="fclick"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
 <?php $this->load->view('admin/layout/footer');?>
