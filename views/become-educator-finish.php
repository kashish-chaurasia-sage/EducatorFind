 <?php $this->load->view('layout/header');?>
<!-- START -->
<!--PRICING DETAILS-->

<!--PRICING DETAILS-->
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="add-list-ste">
                <div class="add-list-ste-inn">
                    <ul>
                        <li>
                            <a href="">
                                <span>Step 1</span>
                                <b>Basic Info</b>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Step 2</span>
                                <b>Services</b>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('become_educator/offer');?>">
                                <span>Step 3</span>
                                <b>Offer</b>
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="act">
                                <i class="material-icons succ">done</i>
                                <b>done</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="login-main add-list">
                <div class="log-bor">&nbsp;</div>
                <span class="steps">Done</span>
                <div class="log">
                    <div class="login add-lis-done">
                        <h4>Success</h4>
                        <p>Your listing has been submitted successfully.</p>
                        <form>
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <i class="material-icons succ">done</i>
                                </div>
                            </div>
                            <!--FILED END-->
                            <!--FILED START-->
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <a href="<?php echo base_url('dashboard');?>"
                                       class="btn btn-primary">Go to user dashboard</a>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('dashboard');?>"
                                        class="btn btn-primary">Go to user dashboard</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a target="_blank"
                                        href="<?php echo base_url('/detail/educator/'.$eid)?>"
                                        class="btn btn-primary">Listing preview</a>
                                    </div>
                                </div>
                               
                            <!-- </div> -->
                            <!--FILED END-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END PRICING DETAILS-->
<!--END PRICING DETAILS-->
 <?php $this->load->view('layout/footer');?>
