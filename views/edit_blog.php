

 <?php $this->load->view('layout/header');?>
 <!--PRICING DETAILS-->
<section class=" login-reg">
    <div class="container">
        <div class="row">
            <div class="login-main add-list">
                <div class="log-bor">&nbsp;</div>
                <span class="steps">Add new Blog post</span>
                <div class="log">
                    <div class="login add-list-off">

                        <h4>Create Blog Post</h4>
                        <form action="<?php echo base_url('my-blog/edit-blog-submit');?>" class="blog_form" id="blog_form" name="blog_form"
                              method="post" enctype="multipart/form-data">
                            <ul>
                                <li>
                                    <!--FILED START-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <input type="hidden" name="blog_id" required="required"
                                                       value="<?=$blog_details->blog_id;?>">
                                                       
                                                <input type="text" name="blog_title" required="required"
                                                       class="form-control"
                                                       placeholder="Post Name*" value="<?=$blog_details->blog_title;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--FILED END-->
                                    <!--FILED START-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="blog_description" value="<?=$blog_details->blog_description;?>" id="blog_description"
                                                          required="required" class="form-control"
                                                          placeholder="Post Details"><?=$blog_details->blog_description;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FILED END-->
                                    <!--FILED START-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Choose banner image</label>
                                                
                                                <input type="file" name="blog_image" required="required"
                                                       class="form-control">
                                                    <br>   
                                                       <img src="<?= base_url('uploads/blog/'.$blog_details->blog_user_id.'/'.$blog_details->blog_image.''); ?>" height="100px" width="100px">
                                            </div>
                                        </div>
                                    </div>
                                    <!--FILED END-->
                                 
                                </li>
                            </ul>
                            <!--FILED START-->
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="blog_submit"
                                            class="btn btn-primary">Edit</button>
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
	 <?php $this->load->view('layout/footer');?>