<!-- START -->
<section>
    <div class="ad-head">
        <div class="head-s1">
            <div class="menu">
                <i class="material-icons mopen">menu</i>
                <i class="material-icons mclose">close</i>
            </div>
            <div class="logo">
                <img src="<?php echo base_url('assets/public/images/logo.png');?>" alt="starboard">
            </div>
        </div>
        <div class="head-s2">
            <div class="head-sear">
                <input type="text" id="top_search" placeholder="Search the listing and users..." class="search-field">
                <ul id="tser-res" class="tser-res">
                   
                </ul>
            </div>
        </div>
        <div class="head-s3">
            <div class="head-pro">
                <b>Profile by</b><br>
                <h4>Starsboard</h4>
                                 </div>
        </div>
    </div>
</section>
<!-- END -->


<!-- START -->
<section>
    <div class="ad-menu-lhs mshow">
        <div class="ad-menu">
            <ul>
                <li class="ic-db">
                    <a href="<?= base_url('admin-dashboard');?>" class="mact">Dashboard</a>
                </li>
				<li class="ic-blo">
                        <a href="#" class="">Academic</a>
                        <div>
                            <ol>
                                <li>
                                    <a href="<?= base_url('admin-class');?>">Class</a>
                                </li>
								<li>
                                    <a href="<?= base_url('admin-subject');?>">Subject</a>
                                </li>
								 <li>
                                    <a href="<?= base_url('admin-board');?>">Board</a>
                                </li>
								<li>
                                    <a href="<?= base_url('admin-exams');?>">Exams</a>
                                </li>
                               
                            </ol>
                        </div>
                    </li>
					<li class="ic-blo">
                        <a href="#" class="">Career Counselling</a>
                        <div>
                            <ol>
                                <li>
                                    <a href="<?= base_url('admin-career');?>">Career Path</a>
                                </li>
								<li>
                                    <a href="<?= base_url('admin-course');?>">Professional Course</a>
                                </li>
                               
                            </ol>
                        </div>
                    </li>
					<li class="ic-blo">
                        <a href="#" class="">Professional Training</a>
                        <div>
                            <ol>
                                <li>
                                    <a href="<?= base_url('admin-art');?>">Art</a>
                                </li>
								<li>
                                    <a href="<?= base_url('admin-lang');?>">Language</a>
                                </li>
                               
                            </ol>
                        </div>
                    </li>
				 <li class="ic-user">
                    <a href="<?= base_url('admin-users');?>" >Users</a>
                </li>
				  <li class="ic-li">
                    <a href="#" >Educator</a>
					<div>
                            <ol>
                                <li>
                                    <a href="<?= base_url('admin-educator');?>">View</a>
                                </li>
                               
                            </ol>
                        </div>
                </li>
				<li class="ic-li">
                    <a href="<?= base_url('admin-lead');?>" >Lead</a>
                </li>
				<li class="ic-user">
                    <a href="<?= base_url('admin-community');?>" >Community</a>
                </li>
				
				  <li class="ic-blo">
                        <a href="#" class="">Blogs</a>
                        <div>
                            <ol>
                                <li>
                                    <a href="<?= base_url('admin-blog');?>">All Blogs</a>
                                </li>
                                <!--<li>
                                    <a href="admin-add-new-blogs.php">Add new Blogs</a>
                                </li>-->
                            </ol>
                        </div>
                    </li>
				<li class="ic-rev">
                    <a href="<?= base_url('admin-review');?>" >Review</a>
                </li>
				  <li class="ic-slid">
                    <a href="">Liked</a>
                </li>
				<li class="ic-li">
                    <a href="<?= base_url('admin-enquiry');?>" >Enquiry</a>
                </li>
				<li class="ic-li">
                    <a href="" >Plan</a>
                </li>
				<!--<li class="ic-li">
                    <a href="" >Payment</a>
                </li>
				
				<li class="ic-li">
                    <a href="" >General Setting</a>
                </li>
				<li class="ic-li">
                    <a href="" >SEO</a>
                </li>-->
				
				
                <li class="ic-lgo">
                    <a href="<?php echo base_url('admin-login/logout');?>">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END -->  