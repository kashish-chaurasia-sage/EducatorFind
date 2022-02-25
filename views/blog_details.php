 <?php $this->load->view('layout/header');?>
<!-- END --><!-- START -->

<!--END-->
<section class="eve-deta-pg">
    <div class="container">
        <div class="eve-deta-pg-main">
            <div class="lhs">
			<br>
			.
			
               
                <div class="img">
                    <img src="<?= base_url('uploads/blog/'.$blog_detail[0]->blog_user_id.'/'.$blog_detail[0]->blog_image.''); ?>" alt="">
                </div>
				 <div class="head">
                    <span class="dat"><?= $blog_detail[0]->blog_created;?></span>
                    <h1><?= $blog_detail[0]->blog_title;?></h1>
                </div>
						
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-7381950378620686"
     data-ad-slot="9425438698"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
                            <div class="rhs">
                    <div class="list-rhs-form pglist-bg pglist-p-com">
                        <div class="quote-pop">
                            <h3>Send enquiry</h3>
                            <div id="blog_detail_enq_success" class="log" style="display: none;"><p>Your Enquiry Is Submitted Successfully!!!</p>
                            </div>
                            <div id="blog_detail_enq_same" class="log" style="display: none;"><p>You cannot make enquiry on your own blog!!</p>
                            </div>
                            <div id="blog_detail_enq_fail" class="log" style="display: none;"><p>Oops!! Something Went Wrong Try Later!!!</p>
                            </div>
                            <form method="post" name="blog_detail_enquiry_form" id="blog_detail_enquiry_form">

                                                                <fieldset disabled="disabled">
                                    
                                    <input type="hidden" class="form-control" name="blog_id"
                                           value="59"
                                           placeholder=""
                                           required>
                                    <input type="hidden" class="form-control"
                                           name="listing_user_id"
                                           value="325" placeholder=""
                                           required>
                                    <input type="hidden" class="form-control"
                                           name="enquiry_sender_id"
                                           value=""
                                           placeholder=""
                                           required>

                                    <input type="hidden" class="form-control"
                                           name="enquiry_source"
                                           value="Website"
                                           placeholder=""
                                           required>

                                    <div class="form-group">
                                        <input type="text" name="enquiry_name"
                                               value=""
                                               required="required" class="form-control"
                                               placeholder="Enter name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                               placeholder="Enter email*"  required="required"
                                               value=""
                                               name="enquiry_email"
                                               pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                               title="Invalid email address" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value=""
                                               name="enquiry_mobile"
                                               placeholder="Enter mobile number *"
                                               pattern="[7-9]{1}[0-9]{9}"
                                               title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="enquiry_message"
                                                  placeholder="Enter your query or message"></textarea>
                                    </div>
                                    <input type="hidden" id="source">
                                                                    </fieldset>
                                     <a href=""> <button type="button" name="" class="btn btn-primary">Login & Enjoy Our Services</button></a>
                                                            </form>
                        </div>
                    </div>
                </div>
                        </div>
    </div>
</section>
<!--END-->
<!-- START -->
<section class=" eve-deta-body blog-deta-body">
    <div class="container">
        <div class="eve-deta-body-main">
	
            <div class="lhs">
                <p><?= $blog_detail[0]->blog_description;?></p>
            </div>
				
            <div class="rhs">
               
                <div class="sec-4">
                    <h4>Other Post</h4>
                    <input type="text" id="pg-sear" placeholder="Search all posts..">
                    <ul id="pg-resu">
					 <?php foreach($all_blog as $key =>$value){  ?>
         
                                                    <li><a href="<?= base_url('blog/'.$value->blog_id.'/'.$value->blog_title.'');?>"><?= $value->blog_title;?></a></li>
                                                        <?php }?>
														</ul>
                </div>
            </div>
        </div>
     
       
    </div>
</section>
<!--END-->


 <?php $this->load->view('layout/footer');?>