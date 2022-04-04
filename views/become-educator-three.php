 <?php $this->load->view('layout/header');?>
 <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <section class=" login-reg">
        <div class="container">
            <div class="row">
                <div class="add-list-ste">
                    <div class="add-list-ste-inn">
                        <ul>
                           <li>
                            <a href="#" >
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
                            <a href="#!"class="act" >
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
                    <span class="steps">Step 3</span>
                    <div class="log">
                        <div class="login add-list-off">

                            <h4>Any Special offers for Learners</h4>
                            <!-- <label class = "skip">Optional step</label> -->
                            <!-- <span class="add-list-add-btn lis-add-off" title="add new offer">+</span>
                            <span class="add-list-rem-btn lis-add-rem" title="remove offer">-</span> -->
                            <form action="<?php echo base_url('become_educator/offer');?>" class="listing_form_3" id="listing_form_3"
                                  name="listing_form_3" method="post" enctype="multipart/form-data">
                              
                                <ul>
                                    <li>
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="offer_name" class="form-control"
                                                           placeholder="Offer name" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="offers_price"
                                                           onkeypress="return isNumber(event)"
                                                           class="form-control"
                                                           placeholder="Price offered" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                            <textarea name="offer_detials" class="form-control"
                                                                      placeholder="Incase you want to give any discount to student, you can add your offer detais here." value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Choose offer banner/image</label>
                                                    <input type="file" name="offers_image"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="offer_link"
                                                           class="form-control"
                                                           placeholder="Demo Lecture - Youtube link" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                    </li>
                                </ul>
                                <!--FILED START-->
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <a href="add-listing-step-2">
                                            <button type="button"
                                                    class="btn btn-primary">Previous</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" name="edu_offer_submit"  class="btn btn-primary" value="Next">
                                    </div>
                                    <div class="col-md-12">
                                        <a href="add-listing-step-4" class="skip">Skip this                                        >></a>
                                    </div>
                                </div> -->
                                <div class="row">
                                <div class="col-sm-9">
                                      <input type="submit" name="edu_per_submit"
                                            class="btn btn-primary" name="Previous" Value="Back">
                                  
                                </div>
                                <div class="col-sm-1">
                                    <input type="submit" name="edu_offer_submit"
                                            class="btn btn-primary" name="Next" Value="Submit the form">
                                </div>
                                <!-- <div class="col-md-12">
                                        <a href="add-listing-step-4" class="skip">Skip this                                        >></a>
                                    </div>
                               
                            </div> -->
                                <!--FILED END-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END PRICING DETAILS-->
    <!-- START -->

 <?php $this->load->view('layout/footer');?>