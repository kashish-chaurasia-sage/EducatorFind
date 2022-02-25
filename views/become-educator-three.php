 <?php $this->load->view('layout/header');?>

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
                                <a href="add-listing-step-2">
                                    <span>Step 2</span>
                                    <b>Services</b>
                                </a>
                            </li>
                            <li>
                                <a href="add-listing-step-3" class="act">
                                    <span>Step 3</span>
                                    <b>offers</b>
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

                            <h4>Special offers</h4>
                            <span class="add-list-add-btn lis-add-off" title="add new offer">+</span>
                            <span class="add-list-rem-btn lis-add-rem" title="remove offer">-</span>
                            <form action="<?php echo base_url('become_educator/offer');?>" class="listing_form_3" id="listing_form_3"
                                  name="listing_form_3" method="post" enctype="multipart/form-data">
                              
                                <ul>
                                    <li>
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="offer_name" class="form-control"
                                                           placeholder="Offer name*" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="offers_price"
                                                           onkeypress="return isNumber(event)"
                                                           class="form-control"
                                                           placeholder="Price" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                            <textarea name="offer_detials" class="form-control"
                                                                      placeholder="Details about this offer" value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                        <!--FILED START-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Choose offer image</label>
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
                                                           placeholder="View More Link" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--FILED END-->
                                    </li>
                                </ul>
                                <!--FILED START-->
                                <div class="row">
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
    <!-- START -->

 <?php $this->load->view('layout/footer');?>