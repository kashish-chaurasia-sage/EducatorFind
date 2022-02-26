
 <?php $this->load->view('layout/header');?>
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="add-list-ste">
                <div class="add-list-ste-inn">
                    <ul>
                        <li>
                            <a  class="act">
                                <!-- <span></span> -->
                                <b> Learner's Information</b>
                            </a>
                        </li>
                        <!-- <li>
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
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="login-main add-list">
                <div class="log-bor">&nbsp;</div>
                <span class="steps">Learner</span>
                <div class="log">
                    <div class="login">
                        <h4>Become Learner Form</h4>
						
                        <form action="<?php echo base_url('become_learner');?>" class="listing_form_1" id="listing_form_1"
                              name="listing_form_1" method="post" enctype="multipart/form-data">
                            
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <select onChange="getGender(this.value);" name="lrn_gender" required="required" id="gender_id"
                                                class="chosen-select form-control">
                                            <option value="">Select your Gender*</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-6 serex-date">
                                <input type="date" class="form-control datepicker" name="lrn_dob"  value="<?= ($this->session->userdata('lrn_dob'))? $this->session->userdata('lrn_dob'):'';?>"
                                       placeholder="Date Of Birth">
                                </div>
                            </div>

                            
                            
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lrn_primary_language" class="form-control"
                                               value="<?= ($this->session->userdata('lrn_primary_language'))? $this->session->userdata('lrn_primary_language'):'';?>"
                                               placeholder="Primary Language Spoken">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select onChange="getClass(this.value);" name="lrn_class"
                                                id="edu_class_id" class="chosen-select form-control">
                                            <option value="">Select Your Class*</option>
                                            <?php
                                            foreach ($edu_class as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->edu_class_id; ?>"><?php echo $value->edu_class_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->

                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lrn_school" class="form-control"
                                               value="<?= ($this->session->userdata('lrn_school'))? $this->session->userdata('lrn_school'):'';?>"
                                               placeholder="School/College Name">
                                    </div>
                                </div>
                            
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <select onChange="getClass(this.value);" name="lrn_board"
                                                id="edu_class_id" class="chosen-select form-control">
                                            <option value="">Select Your Educational Board*</option>
                                            <?php
                                            foreach ($edu_board as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->edu_board_id; ?>"><?php echo $value->edu_board_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--FILED END-->



                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Select Your Difficult Subjects :</label>
                                            <select onChange="getSubjects(this.value);" multiple name="subjects[]"
                                                    id="subject_id" class="chosen-select  form-control">
                                                    <?php
                                                foreach ($edu_sub as $key => $value) {
                                                    ?>
                                                    <option 
                                                    
                                                        value="<?php echo $value->edu_sub_id; ?>"><?php echo $value->edu_sub_title; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Select Your Intrested Competetive Exams :</label>
                                            <select onChange="getExam(this.value);" multiple name="exam[]"
                                                    id="exam_id" class="chosen-select  form-control">
                                                    <?php
                                                foreach ($edu_exams as $key => $value) {
                                                    ?>
                                                    <option 
                                                    
                                                        value="<?php echo $value->edu_exams_id; ?>"><?php echo $value->edu_exams_title; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                </div>
                                
                            </div>
                            <!--FILED END-->
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Select Your Professional Courses :</label>
                                                <select onChange="getCourse(this.value);" multiple name="course[]"
                                                        id="course_id" class="chosen-select  form-control">
                                                        <?php
                                                    foreach ($edu_course as $key => $value) {
                                                        ?>
                                                        <option 
                                                        
                                                            value="<?php echo $value->edu_course_id; ?>"><?php echo $value->edu_course_title; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Select Your Intrested Hobbies :</label>
                                                <select onChange="getArt(this.value);" multiple name="art[]"
                                                        id="art_id" class="chosen-select  form-control">
                                                        <?php
                                                    foreach ($edu_art as $key => $value) {
                                                        ?>
                                                        <option 
                                                        
                                                            value="<?php echo $value->edu_art_id; ?>"><?php echo $value->edu_art_title; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                    </div>
                                    
                                </div>
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Select Your Intrested Language Learning :</label>
                                        <select onChange="getLang(this.value);" multiple name="lang[]"
                                                id="lang_id" class="chosen-select  form-control">
                                                <?php
                                            foreach ($edu_lang as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->edu_lang_id; ?>"><?php echo $value->edu_lang_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                        </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Select Your Career Counselling :</label>
                                                <select onChange="getCarrer(this.value);" multiple name="career[]"
                                                        id="career_id" class="chosen-select  form-control">
                                                        <?php
                                                    foreach ($edu_career as $key => $value) {
                                                        ?>
                                                        <option 
                                                        
                                                            value="<?php echo $value->edu_career_id; ?>"><?php echo $value->edu_career_title; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                    </div>
                        
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <select onChange="getCity(this.value);" name="lrn_city"
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
                                        <select onChange="getState(this.value);" name="lrn_state"
                                                id="state_id" class="chosen-select form-control">
                                            <option value="">Select Your State*</option>
                                            <?php
                                            foreach ($state as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->state_id; ?>"><?php echo $value->state_title; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select onChange="getCountry(this.value);" name="lrn_country"
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

                            <input type="submit" name="lrn_per_submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $("#dobfield").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            maxDate: "-16Y",
            minDate: "-100Y",
            yearRange: "-100:-16"

        });
    });

    CKEDITOR.replace('job_description');
</script>
<?php $this->load->view('layout/footer');?>
