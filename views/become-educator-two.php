 <?php $this->load->view('layout/header');?>
<!-- START --> <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!--PRICING DETAILS-->
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="add-list-ste">
                <div class="add-list-ste-inn">
                    <ul>
                    <li>
                            <a href="#!" >
                                <span>Step 1</span>
                                <b>Basic Info</b>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="act">
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
            <div class="login-main add-list add-list-ser">
                <div class="log-bor">&nbsp;</div>
                <span class="steps">Step 2</span>
                <div class="log">
                    <div class="login">
                        <h4>Courses Offered By You</h4> <div id="log"></div>
                        <form action="<?php echo base_url('become_educator/service');?>" class="listing_form_2" id="listing_form_2"
                              name="listing_form_2" method="post" enctype="multipart/form-data">
                            
  <ul>
                                <li>
                                    <!--FILED START-->
                                    <div class="row">
                                        <div class="col-md-12">

                                            <label for="isenquiry">From below categories, you can select multiple courses in which you will love to train our learners !!  </label>
                                            <hr class = "hr3">
                                            <div class="chbox">

                                                <!-- ACADEMICS SECTION -->
                                                <input type="checkbox" class="input" id="academic" name="academic"  value="academic">
                                                <label for="academic">Academic</label>
                                                <fieldset>
                                                <div class="row" id="academicField" style="display:none;">
                                            
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Select the following classes : </p>
                                                            <select data-placeholder="Select your Cities" name="class[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Class </option> -->
                                                               <?php foreach ($custom_class as $key => $value) {?>
                                                                    <option value="<?=$value->class_id;?>"><?=$value->class_name;?> </option>
                                                               <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Select the following Subjects : </p>
                                                            <select data-placeholder="Select your Cities" name="subject[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Subject</option> -->
                                                               <?php foreach ($subjects as $subject ){?>
                                                                    <option value="<?php echo $subject['sub_category_id']; ?>"><?php echo $subject['sub_category_name']; ?></option>
                                                               <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Select the following Board: </p>
                                                            <select data-placeholder="Select your Cities" name="board[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Board</option> -->
                                                                   <?php foreach ($custom_board as $key => $value) {?>
                                                                    <option value="<?=$value->board_id;?>"><?=$value->board_name;?> </option>
                                                               <?php }?>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    
                                                    <br>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p> Languages for - academics courses: </p>

                                                            <select data-placeholder="Select your Cities" name="lang_academic[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Language</option> -->
                                                                <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Academics ): </p>

                                                            <input type="text" name="academic_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->

                                                </div>

                                                <!-- EXAM SECTION -->
                                                <input type="checkbox" class="input" id="exams" name="exams"  value="exam">
                                                <label for="exams">Competetive Exams</label>
                                                <fieldset>
                                                <div class="row" id="examField" style="display:none;">
                                            
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Select the following Competetive Exams: </p>

                                                            <select data-placeholder="Select your Exam" name="exam[]" id="exam_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Competetive Exams</option> -->
                                                                <?php
                                                                    foreach ($exams as $exam) {
                                                                        ?>
                                                                        <option 
                                                                        
                                                                            value="<?php echo $exam['sub_category_id']; ?>"><?php echo  $exam['sub_category_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p> Languages - Competetive Exam courses: </p>

                                                            <select data-placeholder="Select your Cities" name="lang_exam[]" id="lang_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Language</option> -->
                                                                <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Competetive Exams ): </p>

                                                            <input type="text" name="exam_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->

                                                </div>
                                                
                                                <fieldset>

                                                <!-- CAREER COUNSELLING SECTION -->
                                                <input type="checkbox" id="counselling" name="counselling"  value="counselling">
                                                <label for="counselling">Career counselling</label>
                                                <div class="row" id="counsellingField" style="display:none;">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Career Paths to help our learners : </p>
                                                            <select data-placeholder="Select your Cities" name="career_path[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                    <?php
                                                                        foreach ($career as $path) {
                                                                            ?>
                                                                            <option 
                                                                            
                                                                                value="<?php echo $path['sub_category_id'];?>"><?php echo $path['sub_category_name']; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                             </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Languages in which you offer courses: </p>
                                                            <select data-placeholder="Select your Cities" name="lang_coun[]" id="language_id" multiple 
                                                                    class="chosen-select form-control">
                                                                
                                                                 <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Career Counselling ): </p>
                                                            <input type="text" name="career_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>

                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->
                                                                 </div>
                                                <fieldset>
                                                <!-- ART SECTION -->
                                                <input type="checkbox" class="input" id="arts" name="arts"  value="art">
                                                <label for="arts">Art</label>
                                                <fieldset>
                                                <div class="row" id="artField" style="display:none;">
                                            
                                                    
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Art : </p>

                                                            <select data-placeholder="Select your Art" name="art[]" id="art_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">ART</option> -->

                                                                <?php
                                                                    foreach ($art as $hobby) {
                                                                        ?>
                                                                        <option 
                                                                        
                                                                            value="<?php echo $hobby['sub_category_id']; ?>"><?php echo $hobby['sub_category_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                              
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p> Languages - Art courses: </p>

                                                            <select data-placeholder="Select your Cities" name="lang_art[]" id="language_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Language</option> -->
                                                                <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Art ): </p>

                                                            <input type="text" name="art_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->
                                                    <!-- </div> -->

                                                </div>
                                                    <fieldset>
                                                    <!-- LANGUAGE SECTION -->
                                                <input type="checkbox" class="input" id="languages" name="languages"  value="languages">
                                                <label for="languages">Language Learning</label>
                                                
                                                <div class="row" id="languageField" style="display:none;">
                                            
                                                    
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Language : </p>

                                                            <select data-placeholder="Select the Language, you wish to learn" name="language[]" id="language_id" multiple 
                                                                    class="chosen-select form-control">
                                                                    <?php
                                                                        foreach ($lang as $language) {
                                                                            ?>
                                                                            <option 
                                                                            
                                                                                value="<?php echo $language['sub_category_id']; ?>"><?php echo $language['sub_category_name']; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p>In which Language you offer for this course: </p>

                                                            <select data-placeholder="Select your Langauge" name="lang_language[]" id="language_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Language</option> -->
                                                                <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Language Learning ): </p>

                                                            <input type="text" name="language_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->
                                                    </div>
                                                    <fieldset>
                                                <input type="checkbox" id="training" name="training"  value="training">
                                                <label for="training">professional training</label>
                                                <div class="row" id="trainingField" style="display:none;">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Professional Courses: </p>

                                                            <select data-placeholder="Select your Cities" name="tech_course[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <!-- <option value="">Professional Course</option> -->

                                                                <?php
                                                                    foreach ($courses as $course) {
                                                                        ?>
                                                                        <option 
                                                                        
                                                                            value="<?php echo $course['sub_category_id']; ?>"><?php echo $course['sub_category_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                    ?>

                                                            </select>
                                                        </div>
                                                    </div>
													

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Languages in which you offer courses: </p>

                                                            <select data-placeholder="Select your Cities" name="lang_prof[]" id="la_id" multiple 
                                                                    class="chosen-select form-control">
                                                                  <?php foreach ($custom_language as $key => $value) {?>
                                                                    <option value="<?=$value->language_id;?>"><?=$value->language_name;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                        <p>Cost for per class ( Professional Trainings ): </p>
                                                            <input type="text" name="prof_cost" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per sessions">
                                                        </div>
                                                    </div>
                                                    <!-- <h6>_________________________________________________________________________________________</h6> -->
                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FILED END-->
                                </li>

                            </ul>
                            <!--FILED START-->
                            <div class="row">
                            <div class="col-sm-1">
                                                                  </div>
                                <div class="col-sm-7">
                                      <input type="submit" name="edu_per_submit"
                                            class="btn btn-primary" name="Previous" Value="Previous">
                                  
                                </div>
                                <div class="col-sm-1">
                                    <input type="submit" name="edu_ser_submit"
                                            class="btn btn-primary" name="Next" Value="Next, Just the last step !">
                                </div>
                               
                            </div>
                                                                  </br>
                            <!--FILED END-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END PRICING DETAILS-->
<script>
    // $( ".academicField" ).hide();
    $( "#academic" ).click(function() {
        if($(this).is(":checked")) {
            $( "#academicField" ).show();
        } else {
            $( "#academicField" ).hide();
        }
        
       });

    $( "#exams" ).click(function() {
        if($(this).is(":checked")) {
            $( "#examField" ).show();
        } else {
            $( "#examField" ).hide();
        }
        
       });

    $( "#counselling" ).click(function() {
        if($(this).is(":checked")) {
            $( "#counsellingField" ).show();
        } else {
            $( "#counsellingField" ).hide();
        }
        
       });

    $( "#arts" ).click(function() {
        if($(this).is(":checked")) {
            $( "#artField" ).show();
        } else {
            $( "#artField" ).hide();
        }
        
       });

    $( "#languages" ).click(function() {
        if($(this).is(":checked")) {
            $( "#languageField" ).show();
        } else {
            $( "#languageField" ).hide();
        }
        
       });

    $( "#training" ).click(function() {
        if($(this).is(":checked")) {
            $( "#trainingField" ).show();
        } else {
            $( "#trainingField" ).hide();
        }
        
       });
   
    
</script>

 <?php $this->load->view('layout/footer');?>