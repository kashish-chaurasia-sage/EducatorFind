 <?php $this->load->view('layout/header');?>
 
<!-- END --><!-- START -->
<section class=" blog-head">
    <div class="container">
        <div class="blog-head-inn">
            <h1>Blog posts</h1>
            <p>Here submit your blogs and make your own audiance.</p>
        </div>
        <div class="ban-search">
            <form>
                <ul>
                    <li class="sr-sea">
                        <input type="text" id="blog-search" class="autocomplete" placeholder="Search blog posts...">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</section>
<!--END-->

<!-- START -->
<section class=" blog-body" style="    margin-bottom: 170px;">
    <div class="container">
        <div class="us-ppg-com us-ppg-blog">
            <ul id="intseres" class="blog-wrapper">
                                  
                                    <?php if(!empty($blog)){
							       foreach($blog as $key =>$value){ 
							       ?>
								 <li class="blog-item">
									<div class="pro-eve-box">
										<div>
											<img src="<?= base_url('uploads/blog/'.$value->blog_user_id.'/'.$value->blog_image.''); ?>" alt="">
										</div>
										<div>
											<p><?= $value->blog_created;?></p>
											<h2><?= $value->blog_title;?></h2>
										</div>
										<a href="<?= base_url('blog/'.$value->blog_id.'/'.$value->blog_title.'');?>" class="fclick">
											&nbsp;</a>
									</div>
								</li>
								<?php } }else{?>
									 <div class="alert alert-primary" role="alert">
										 No data found
									 </div>
						 <?php }?>
                                </ul>
        </div>

    </div>
</section>


  <?php $this->load->view('layout/footer');?>