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
                                                                <option    value="V - X">V - X</option>
                                                                <option   value="XI - XII">XI - XII</option>
                                                                <option  value="Undergraduate">Undergraduate</option>
                                                                <option  value="Undergraduate">Postgraduate</option>
                                                                <option  value="Others">Others</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="subject[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Subject</option>
                                                                <option    value="Biology">Biology</option>
                                                                <option   value="Chemistry">Chemistry</option>
                                                                <option  value="Math">Math</option>
                                                                <option value="Physics">Physics</option>
                                                                <option    value="History">History</option>
                                                                <option   value="Commerce">Commerce</option>
                                                                <option  value="Engineering">Engineering</option>
                                                                <option   value="Science">Science</option>
                                                                <option  value="Engineering">Law</option>
                                                                <option   value="Management">Management</option>
                                                                <option  value="Medical">Medical</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="board[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Board</option>
                                                                <option    value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                                <option   value="CENTRAL BOARD OF SECONDARY EDUCATION">CENTRAL BOARD OF SECONDARY EDUCATION</option>
                                                                <option  value="GUJARAT">GUJARAT</option>
                                                                <option  value="Goa">Goa</option>
                                                                <option  value="ICSE">ICSE</option>
                                                                <option  value="KARNATAKA">KARNATAKA</option>
                                                                <option  value="KERALA">KERALA</option>
                                                                <option  value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                                <option  value="MAHARASHTRA">MAHARASHTRA</option>
                                                                <option  value="NATIONAL INSTITUTE OF OPEN SCHOOLING">NATIONAL INSTITUTE OF OPEN SCHOOLING</option>
                                                                <option  value="PUNJAB">PUNJAB</option>
                                                                <option  value="RAJASTHAN">RAJASTHAN</option>
                                                                <option  value="TAMIL NADU">TAMIL NADU</option>
                                                                <option  value="TELANGANA ">TELANGANA</option>
                                                                <option  value="WEST BENGAL">WEST BENGAL</option>
                                                                <option  value="BIHAR">BIHAR</option>
                                                                <option  value="Jharkhand">Jharkhand</option>
                                                                <option  value="UP">UP</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="exam[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Competetive Exams</option>
                                                                <option    value="Airline Transport Pilot License (ATPL)">Airline Transport Pilot License (ATPL)</option>
                                                                <option   value="Banks">Banks</option>
                                                                <option  value="Civil Services">Civil Services</option>
                                                                <option   value="Commercial Pilot License (CPL)">Commercial Pilot License (CPL)</option>
                                                                <option   value="Common Admission Test (CAT)">Common Admission Test (CAT)</option>
                                                                <option   value="Common Law Admission Test (CLAT)">Common Law Admission Test (CLAT)</option>
                                                                <option   value="Defense">Defense</option>
                                                                <option   value="Graduate Management Admission Test (GMAT)">Graduate Management Admission Test (GMAT)</option>
                                                                <option   value="Institute of Chartered Accountants of India (ICAI) Exam">Institute of Chartered Accountants of India (ICAI) Exam</option>
                                                                <option   value="International English Language Testing System (IELTS)">International English Language Testing System (IELTS)</option>
                                                                <option   value="Joint Entrance Examination (Main)">Joint Entrance Examination (Main)</option>
                                                                <option   value="Judiciary - PCS (J)">Judiciary - PCS (J)</option>
                                                                <option   value="Maharashtra Public Service Commission (MPSC)">Maharashtra Public Service Commission (MPSC)</option>
                                                                <option   value="National Eligibility-cum-Entrance Test (NEET)">National Eligibility-cum-Entrance Test (NEET)</option>
                                                                <option   value="Railways">Railways</option>
                                                                <option   value="State PSC">State PSC</option>
                                                                <option   value="Teacher Eligibility Test (TET)">Teacher Eligibility Test (TET)</option>
                                                                <option   value="UNION PUBLIC SERVICE COMMISSION (UPSC)">UNION PUBLIC SERVICE COMMISSION (UPSC)</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_academic[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                <option    value="Arabic">Arabic</option>
                                                                <option   value="Bengali">Bengali</option>
                                                                <option  value="English">English</option>
                                                                <option    value="French">French</option>
                                                                <option   value="German">German</option>
                                                                <option  value="Gujarati ">Gujarati </option>
                                                                <option    value="Hindi">Hindi</option>
                                                                <option   value="Indonesian">Indonesian</option>
                                                                <option  value="Kannada">Kannada</option>
                                                                <option    value="Konkani">Konkani</option>
                                                                <option   value="Malayalam ">Malayalam </option>
                                                                <option  value="Marathi">Marathi</option>
                                                                <option    value="Panjabi">Panjabi</option>
                                                                <option   value="Portuguese">Portuguese</option>
                                                                <option  value="Punjabi ">Punjabi </option>
                                                                <option  value="Sanskrit ">Sanskrit </option>
                                                                <option  value="Sign Language ">Sign Language </option>
                                                                <option  value="Spanish ">Spanish </option>
                                                                <option  value="Tamil ">Tamil </option>
                                                                <option  value="Telugu  ">Telugu  </option>

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
                                                                <option    value="Career in Aviation">Career in Aviation</option>
                                                                <option   value="Career in Banking">Career in Banking</option>
                                                                <option  value="Career in BPO/KPO">Career in BPO/KPO</option>
                                                                <option value="Career In corporates">Career In corporates</option>
                                                                <option    value="Career In Defence">Career In Defence</option>
                                                                <option   value="Career in Engineering ">Career in Engineering </option>
                                                                <option   value="Career in Fitness">Career in Fitness</option>
                                                                <option  value="Career in Government Jobs">Career in Government Jobs</option>
                                                                <option   value="Career in Healthcare/Pharma">Career in Healthcare/Pharma</option>
                                                                <option  value="Career In Import Export">Career In Import Export</option>
                                                                <option  value="Career in Information Technology">Career in Information Technology</option>
                                                                <option   value="Career in Manufacturing">Career in Manufacturing</option>
                                                                <option  value="Career in Real estate">Career in Real estate</option>
                                                                <option  value="Career in Retail">Career in Retail</option>
                                                                <option   value="Career in Shipping">Career in Shipping</option>
                                                                <option  value="Career in Teaching">Career in Teaching</option>
                                                                <option   value="Career in Telecom">Career in Telecom</option>
                                                                <option  value="How to get Scholarships">How to get Scholarships</option>
                                                                <option  value="Studies in Arts">Studies in Arts</option>
                                                                <option  value="Studies in engineering">Studies in engineering</option>
                                                                <option  value="Studies in Commerce">Studies in Commerce</option>
                                                                  <option  value="Studies in Medical">Studies in Medical</option>
                                                                <option  value="Studies Management">Studies Management</option>
                                                                <option  value="Study abroad">Study abroad</option>
 </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_coun[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                <option    value="Arabic">Arabic</option>
                                                                <option   value="Bengali">Bengali</option>
                                                                <option  value="English">English</option>
                                                                <option    value="French">French</option>
                                                                <option   value="German">German</option>
                                                                <option  value="Gujarati ">Gujarati </option>
                                                                <option    value="Hindi">Hindi</option>
                                                                <option   value="Indonesian">Indonesian</option>
                                                                <option  value="Kannada">Kannada</option>
                                                                <option    value="Konkani">Konkani</option>
                                                                <option   value="Malayalam ">Malayalam </option>
                                                                <option  value="Marathi">Marathi</option>
                                                                <option    value="Panjabi">Panjabi</option>
                                                                <option   value="Portuguese">Portuguese</option>
                                                                <option  value="Punjabi ">Punjabi </option>
                                                                <option  value="Sanskrit ">Sanskrit </option>
                                                                <option  value="Sign Language ">Sign Language </option>
                                                                <option  value="Spanish ">Spanish </option>
                                                                <option  value="Tamil ">Tamil </option>
                                                                <option  value="Telugu  ">Telugu  </option>

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

                                                                <option value="3D + Animation">3D + Animation</option>
                                                                <option value="Accounting">Accounting</option>
                                                                <option value="Kids Coding">Kids Coding</option>
                                                                <option value="Digital Marketing">Digital Marketing</option>
                                                                <option    value="Ethical Hacking">Ethical Hacking</option>
                                                                <option   value="Foreign Languages">Foreign Languages</option>
                                                                <option  value="Game Development">Game Development</option>
                                                                <option value="Graphic Desgning">Graphic Desgning</option>
                                                                <option    value="Indian Language">Indian Language</option>
                                                                <option   value="ITIL ">ITIL </option>
                                                                <option  value="Lean Six Sigma"> Lean Six Sigma</option>
                                                                <option   value="Logo Design">Logo Design</option>
                                                                <option  value="Microsoct Excel">Microsoct Excel</option>
                                                                <option   value="Mobile App Development">Mobile App Development</option>
                                                                <option  value="PMP">PMP</option>
                                                                <option  value="SAP">SAP</option>
                                                                <option   value="Soft Skill and image building">Soft Skill and image building</option>
                                                                <option  value="SQL">SQL</option>
                                                                <option  value="Tableau">Tableau</option>
                                                                <option   value="UX / UI">UX / UI</option>
                                                                <option  value="Website  Development">Website  Development</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select data-placeholder="Select your Cities" name="lang_prof[]" id="city_id" multiple 
                                                                    class="chosen-select form-control">
                                                                <option value="">Language</option>
                                                                <option    value="Arabic">Arabic</option>
                                                                <option   value="Bengali">Bengali</option>
                                                                <option  value="English">English</option>
                                                                <option    value="French">French</option>
                                                                <option   value="German">German</option>
                                                                <option  value="Gujarati ">Gujarati </option>
                                                                <option    value="Hindi">Hindi</option>
                                                                <option   value="Indonesian">Indonesian</option>
                                                                <option  value="Kannada">Kannada</option>
                                                                <option    value="Konkani">Konkani</option>
                                                                <option   value="Malayalam ">Malayalam </option>
                                                                <option  value="Marathi">Marathi</option>
                                                                <option    value="Panjabi">Panjabi</option>
                                                                <option   value="Portuguese">Portuguese</option>
                                                                <option  value="Punjabi ">Punjabi </option>
                                                                <option  value="Sanskrit ">Sanskrit </option>
                                                                <option  value="Sign Language ">Sign Language </option>
                                                                <option  value="Spanish ">Spanish </option>
                                                                <option  value="Tamil ">Tamil </option>
                                                                <option  value="Telugu  ">Telugu  </option>

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
                                    <a href="">
                                        <button type="button"
                                                class="btn btn-primary">Previous</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" name="edu_ser_submit"
                                            class="btn btn-primary" name="Next">
                                </div>
                                <div class="col-md-12">
                                    <a href="add-listing-step-3" class="skip">Skip this                                        >></a>
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