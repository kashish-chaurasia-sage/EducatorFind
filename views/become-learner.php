
 <?php $this->load->view('layout/header');?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                        <h4>My Learning Preference</h4>
						
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
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lrn_primary_language" class="form-control"
                                               value="<?= ($this->session->userdata('lrn_primary_language'))? $this->session->userdata('lrn_primary_language'):'';?>"
                                               placeholder="Primary Language Spoken">
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select  name="lrn_primary_language"
                                                id="language_id" class="chosen-select form-control">
                                            <option value="">Select you primary language*</option>
                                            <?php
                                            foreach ($custom_language as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->language_id; ?>"><?php echo $value->language_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select onChange="getClass(this.value);" name="lrn_class"
                                                id="edu_class_id" class="chosen-select form-control">
                                            <option value="">Select Your Class*</option>
                                            <?php
                                            foreach ($custom_class as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->class_id; ?>"><?php echo $value->class_name; ?></option>
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
                                        <input type="text" class="textbox" name="lrn_pincode" required="required" id="pincode" placeholder="Enter Pincode*" 
                                        value="<?= ($this->session->userdata('lrn_location'))? $this->session->userdata('lrn_location'):'';?>"
 
                                        autocomplete="new-password"  onkeyup="get_details()">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="text" class="textbox" name="lrn_city" id="city" disabled placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="text" class="textbox" id="state" name="lrn_state" disabled placeholder="State">    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="text" class="textbox" id="district" name="lrn_district" disabled placeholder="District">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="text" class="textbox" id="country" name="lrn_country" disabled placeholder="Country">
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
                                            foreach ($custom_board as $key => $value) {
                                                ?>
                                                <option 
                                                
                                                    value="<?php echo $value->board_id; ?>"><?php echo $value->board_name; ?></option>
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
                                        <label>What are the difficult subjects :</label>
                                            <select onChange="getSubjects(this.value);"  multiple name="subjects[]"
                                                    id="subject_id" class="chosen-select  form-control"  >
                                                    <!-- class="chosen-select  form-control" -->
                                                    <?php
                                                foreach ($subjects as $subject) {
                                                    ?>
                                                    <option 
                                                    
                                                        value="<?php echo $subject['sub_category_id']; ?>"><?php echo $subject['sub_category_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Do you want to prepare for any of these Competetive Exams ?</label>
                                            <select onChange="getExam(this.value);" multiple name="exam[]"
                                                    id="exam_id" class="chosen-select  form-control">
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
                                
                            </div>
                            <!--FILED END-->
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Are you interestered in any of these Professional Courses </label>
                                                <select onChange="getCourse(this.value);" multiple name="course[]"
                                                        id="course_id" class="chosen-select  form-control">
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
                                            <label>Do you Like any of these </label>
                                                <select onChange="getArt(this.value);" multiple name="art[]"
                                                        id="art_id" class="chosen-select  form-control">
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
                                    
                                </div>
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Have interest in learning any of these Languages </label>
                                        <select onChange="getLang(this.value);" multiple name="lang[]"
                                                id="lang_id" class="chosen-select  form-control">
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
                                    <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Are you interestered in taking Counselling for any of these</label>
                                                <select onChange="getCarrer(this.value);" multiple name="career[]"
                                                        id="career_id" class="chosen-select  form-control">
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
                        
                            </div>
                            <!--FILED END-->   
                            <div class="row">                      
                            <div class="col-md-8">
                                                </div>
                                                <div class="col-md-1">
                            <input type="submit" name="lrn_per_submit" class="btn btn-primary" value="Submit the Learner's Form">
                                                </div>
                                                </div>
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

    <!-- <script>
function showLocation(str) {
    console.log(str);
    if (str.length == 6) {
        
        $.ajax({
                type: 'POST',
                url: "become_learner",
                cache: false,
                data: {  pincode: str},
                success: function (response) {
                    // var eventArray = JSON.parse(response);
                    console.log(response);

                }
            });
        $("#city").val()'Delhi';
        $("#state").val('DELHI');
        $("#country").val('India');
    
    } else {
        // $("#city").val('');
    return;
  }
}


</script> -->
<script>
function get_details(){
    // console.log("In Details function");
	var pincode=jQuery('#pincode').val();
    console.log(pincode);

	if(pincode==''){
		jQuery('#city').val('');
		jQuery('#state').val('');
	}else{
		jQuery.ajax({
			url:'application/views/get.php',
			type:'post',
			data:'pincode='+pincode,
			success:function(data){
				if(data=='no'){
					// alert('Wrong Pincode');
					jQuery('#city').val('');
					jQuery('#state').val('');
                    jQuery('#country').val('');
                    jQuery('#district').val('')

				}else{
					var getData=$.parseJSON(data);
					jQuery('#city').val(getData.city);
					jQuery('#state').val(getData.state);
                    jQuery('#country').val(getData.country);
                    jQuery('#district').val(getData.district);


				}
			}
		});
	}
}
</script>

<?php $CI =& get_instance(); ?>
<script> 
    var csrf_name = '<?php echo $CI->security->get_csrf_token_name(); ?>';
    var csrf_hash = '<?php echo $CI->security->get_csrf_hash(); ?>';
</script>


<?php $this->load->view('layout/footer');?>
