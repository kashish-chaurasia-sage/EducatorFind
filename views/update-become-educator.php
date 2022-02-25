
 <?php $this->load->view('layout/header');?>
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="add-list-ste">
                <div class="add-list-ste-inn">
                    <ul>
                        <li>
                            <a href="add-listing-step-1" class="act">
                                <span>Step 1</span>
                                <b>Basic Info</b>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <span>Step 2</span>
                                <b>Services</b>
                            </a>
                        </li>
                        <li>
                            <a href="#!" >
                                <span>Step 3</span>
                                <b>Offers</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="login-main add-list">
                <div class="log-bor">&nbsp;</div>
                <span class="steps">Step 1</span>
                <div class="log">
                    <div class="login">
                        <h4>Update Educator Profile</h4>
						<?php // print_r($educator);?>
                        <form action="<?php echo base_url('become_educator');?>" class="listing_form_1" id="listing_form_1"
                              name="listing_form_1" method="post" enctype="multipart/form-data">
                          
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="listing_name" name="edu_name" type="text" required="required"
                                               class="form-control" value="<?= ($this->session->userdata('edu_name'))? $this->session->userdata('edu_name'):$educator['edu_name'];?>"
                                               placeholder=" Name*">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="edu_mobile" class="form-control"
                                               value="<?= ($this->session->userdata('edu_mobile'))? $this->session->userdata('edu_mobile'):$educator['edu_mobile'];?>"
                                               placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="edu_email" class="form-control"
                                               value="<?= ($this->session->userdata('edu_email'))? $this->session->userdata('edu_email'):$educator['edu_email'];?>"
                                               placeholder="Email Id">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="edu_whatsapp" class="form-control"
                                               value="<?= ($this->session->userdata('edu_whatsapp'))? $this->session->userdata('edu_whatsapp'):$educator['edu_whatsapp'];?>"
                                               placeholder="Whatsapp Number (e.g. 9876*****0)">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->

                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="edu_address" class="form-control"
                                               value="<?= ($this->session->userdata('edu_address'))? $this->session->userdata('edu_address'):'';?>"
                                               placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->

                                <!--FILED START-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                   

   <input type="text" name="edu_city" value="<?= ($this->session->userdata('edu_city'))? $this->session->userdata('edu_city'):$educator['edu_city'];?>" class="form-control" placeholder="City">
                                       
                                        </div>
                                    </div>
                                </div>
                                <!--FILED END-->
                        <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select onChange="getCities(this.value);" name="edu_country" required="required" id="country_id"
                                                class="chosen-select form-control">
                                            <option value="">Select your Country</option>
                                            <option value="india" >India</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->

                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select onChange="getSubCategory(this.value);" multiple name="category[]"
                                                id="category_id" class="chosen-select  form-control">
                                            <option value="">Select Category</option>
                                            <option  value="1">Academic</option>
                                            <option  value="2">Career Counselling</option>
                                            <option  value="3">Professional Training</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="servicecity" value="<?= ($this->session->userdata('servicecity'))? $this->session->userdata('servicecity'):$educator['servicecity'];?>" class="form-control" placeholder="Teaching location">
                                        </div>
                                    </div>
                                </div>
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="listing_description"
                                                  name="description"
                                                  placeholder="Details about your listing"><?= ($this->session->userdata('description'))? $this->session->userdata('description'):$educator['description'];?></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Choose profile image</label>
                                        <input type="file" required="required" accept=".png, .jpg, .jpeg" name="edu_image"
                                               class="form-control">
											   <br>
											   <img src="<?= base_url('uploads/'.$user_id.'/'.$educator['edu_image'].''); ?>" width="70" height="70">
                                    </div>
									
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Choose cover image</label>
                                        <input type="file" required="required" accept=".png, .jpg, .jpeg" name="cover_image" class="form-control">
                                    <br>
											   <img src="<?= base_url('uploads/'.$user_id.'/'.$educator['cover_image'].''); ?>" width="70" height="70">
									</div>
                                </div>
                            </div>
                            <!--FILED END-->

                            <input type="submit" name="edu_per_submit" class="btn btn-primary" value="Next">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('layout/footer');?>
