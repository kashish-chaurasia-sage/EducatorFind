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
                            <a href="add-listing-step-1">
                                <span>Step 1</span>
                                <b>Basic Info</b>
                            </a>
                        </li>
                        <li>
                            <a href="add-listing-step-2" class="act">
                                <span>Step 2</span>
                                <b>Services</b>
                            </a>
                        </li>
                        <li>
                            <a href="add-listing-step-2" >
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
                        <h4>Services provide</h4> <div id="log"></div>
                        <form action="<?php echo base_url('become_educator/service');?>" class="listing_form_2" id="listing_form_2"
                              name="listing_form_2" method="post" enctype="multipart/form-data">
                            
  <ul>
                                <li>
                                    <!--FILED START-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="isenquiry">Choose any of following teaching area for student</label>
                                            <div class="chbox">
                                                <input type="checkbox" class="inputt" id="academic" name="academic"  value="academic">
                                                <label for="academic">Academic</label>
                                                <div class="row" id="academicField" style="display:none;">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="class[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Class </option>
                                                               <?php foreach ($edu_class as $key => $value) {?>
                                                                    <option value="<?=$value->edu_class_id;?>"><?=$value->edu_class_title;?> </option>
                                                               <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="subject[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Subject</option>
                                                               <?php foreach ($edu_sub as $key => $value) {?>
                                                                    <option value="<?=$value->edu_sub_id;?>"><?=$value->edu_sub_title;?> </option>
                                                               <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="board[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Board</option>
                                                                   <?php foreach ($edu_board as $key => $value) {?>
                                                                    <option value="<?=$value->edu_board_id;?>"><?=$value->edu_board_title;?> </option>
                                                               <?php }?>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="exam[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Competetive Exams</option>
                                                               <?php foreach ($edu_exams as $key => $value) {?>
                                                                    <option value="<?=$value->edu_exams_id;?>"><?=$value->edu_exams_title;?> </option>
                                                               <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_academic[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                <?php foreach ($edu_lang as $key => $value) {?>
                                                                    <option value="<?=$value->edu_lang_id;?>"><?=$value->edu_lang_title;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="academic_price" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="checkbox" id="counselling" name="counselling"  value="counselling">
                                                <label for="counselling">Career counselling</label>
                                                <div class="row" id="counsellingField" style="display:none;">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="career_path[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Career Path</option>
                                                                 <?php foreach ($edu_career as $key => $value) {?>
                                                                    <option value="<?=$value->edu_career_id;?>"><?=$value->edu_career_title;?> </option>
                                                               <?php }?>
 </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_coun[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                 <?php foreach ($edu_lang as $key => $value) {?>
                                                                    <option value="<?=$value->edu_lang_id;?>"><?=$value->edu_lang_title;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="price_coun" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per lecture">
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="checkbox" id="training" name="training"  value="training">
                                                <label for="training">professional training</label>
                                                <div class="row" id="trainingField" style="display:none;">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="tech_course[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Professional Course</option>

                                                                  <?php foreach ($edu_course as $key => $value) {?>
                                                                    <option value="<?=$value->edu_course_id;?>"><?=$value->edu_course_title;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
													<div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="art[]" id="art_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">ART</option>

                        <?php foreach ($edu_art as $key => $value) {?>
                                                                    <option value="<?=$value->edu_art_id;?>"><?=$value->edu_art_title;?> </option>
                                                               <?php }?>
                                                              
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_prof[]" id="la_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                  <?php foreach ($edu_lang as $key => $value) {?>
                                                                    <option value="<?=$value->edu_lang_id;?>"><?=$value->edu_lang_title;?> </option>
                                                               <?php }?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" name="price_prof" class="form-control"
                                                                   value=""
                                                                   placeholder="Fee per sessions">
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
                                <div class="col-md-6">
                                      <input type="submit" name="edu_ser_submit"
                                            class="btn btn-primary" name="Next" Value="Previous">
                                  
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" name="edu_ser_submit"
                                            class="btn btn-primary" name="Next">
                                </div>
                               
                            </div>
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
    $( "#academic" ).on( "click", function() {
         $( "#academicField" ).show();
       });
    $( "#counselling" ).on( "click", function() {
        $( "#counsellingField" ).show();
    });
    $( "#training" ).on( "click", function() {
        $( "#trainingField" ).show();
    });
</script>

 <?php $this->load->view('layout/footer');?>