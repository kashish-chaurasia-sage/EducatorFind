
 <?php $this->load->view('layout/header');?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="multiselect-dropdown.js" ></script>
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="add-list-ste">
                <div class="add-list-ste-inn">
                    <ul>
                        <li>
                            <a href="#" class="act">
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
                <span class="steps">Your Listing Information</span>
                <div class="log">
                    <div class="login">
                        <h4>Become Educator Form</h4>
                        <hr class = "hr3">
                        <form action="<?php echo base_url('become_educator');?>" class="listing_form_1" id="listing_form_1"
                              name="listing_form_1" method="post" enctype="multipart/form-data">
                            
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile image</label>
                                        <input type="file"  accept=".png, .jpg, .jpeg" name="edu_image"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cover image</label>
                                        <input type="file"  accept=".png, .jpg, .jpeg" name="cover_image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- <hr class = "hr3"> -->
                            <!-- <br> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <!-- <div class="form-floating mb-3"> -->
                                        <input id="listing_name" name="edu_name" type="text" required="required"
                                               class="form-control" value="<?= ($this->session->userdata('edu_name'))? $this->session->userdata('edu_name'):'';?>"
                                               placeholder="Display Name*">
                                               <!-- <label for="floatingInput">Email address</label> -->
<!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="edu_mobile" class="form-control" required="required"
                                               value="<?= ($this->session->userdata('edu_mobile'))? $this->session->userdata('edu_mobile'):'';?>"
                                               placeholder="Phone number*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="edu_email" class="form-control"  required="required"
                                               value="<?= ($this->session->userdata('edu_email'))? $this->session->userdata('edu_email'):'';?>"
                                               placeholder="Email Id*">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="edu_whatsapp" class="form-control"
                                               value="<?= ($this->session->userdata('edu_whatsapp'))? $this->session->userdata('edu_whatsapp'):'';?>"
                                               placeholder="Whatsapp Number (e.g. 9876*****0)">
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="listing_description"
                                                  name="description"
                                                  placeholder="Your bio"><?= ($this->session->userdata('description'))? $this->session->userdata('description'):'';?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="edu_experience" class="form-control" required="required"
                                               value="<?= ($this->session->userdata('edu_experience'))? $this->session->userdata('edu_experience'):'';?>"
                                               placeholder="Total Teaching Expirience (in years)*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <select onChange="getMode(this.value);" name="edu_mode" required="required" id="mode_id"
                                                class="chosen-select form-control">
                                            <option value="">Teaching Mode*</option>
                                            <option value="1">Online</option>
                                            <option value="2">Offline</option>
                                            <option value="3">Hybrid</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--FILED START-->
                            <div class="row">
                               
                            </div>
                            <!--FILED END-->
                            <!-- <hr class="hr3"> -->
                            <!-- <br> -->
                                <!--FILED START-->
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" name="edu_pincode" class="form-control" required="required"
                                               value="<?= ($this->session->userdata('edu_pincode'))? $this->session->userdata('edu_pincode'):'';?>"
                                               placeholder="Pincode*">
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select onChange="getCity(this.value);" name="edu_city" required="required"
                                                    id="state_id" class="chosen-select form-control">
                                                <option value="">Select Your City*</option>
                                                <?php
                                                foreach ($city as $key => $value) {
                                                    ?>
                                                    <option 
                                                    
                                                        value="<?php echo $value->city_id; ?>"><?php echo $value->city_title; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <select onChange="getCountry(this.value);" name="edu_country" required="required"
                                                id="country_id" class="chosen-select form-control">
                                            <option value="">Select Your Country*</option>
                                            <?php
                                            foreach ($country as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->country_id; ?>"><?php echo $value->country_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <!--FILED END-->
                        <!--FILED START-->
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select onChange="getCities(this.value);" name="edu_country" required="required" id="country_id"
                                                class="chosen-select form-control">
                                            <option value="">Select your Country</option>
                                            <option value="india">India</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <!--FILED END-->

                            <!--FILED START-->
                            <!-- <div class="row">
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
                            </div> -->
                            <!--FILED END-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="servicecity" value="<?= ($this->session->userdata('servicecity'))? $this->session->userdata('servicecity'):'';?>" class="form-control" placeholder="Teaching location">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="listing_description" required="required"
                                                  name="edu_slot"
                                                  placeholder="Available Days & Time Slots"><?= ($this->session->userdata('edu_slot'))? $this->session->userdata('edu_slot'):'';?></textarea>
                                    </div>
                                </div>
                                </div>

                            <!--FILED START-->
                            <hr class="hr3">
                            
                            <!--FILED END-->
                            <!--FILED START-->
                            
                            <!--FILED END-->
                            <div class="row">
                            <div class="col-sm-10">
                                        </div>
                            <div class="col-sm-1">

                            <input type="submit" name="edu_per_submit" class="btn btn-primary" value="Next">
                                        </div>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('layout/footer');?>
