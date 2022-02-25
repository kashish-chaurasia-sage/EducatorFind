<?php $this->load->view('admin/layout/header');?>


 <?php $this->load->view('admin/layout/left_sidebar');?>


<!-- START -->
<section>
    <div class="ad-com">
        <div class="ad-dash leftpadd">
            <section class="login-reg">
                <div class="container">
                    <div class="row">
                        <div class="login-main add-list add-ncate">
                            <div class="log-bor">&nbsp;</div>
                            <span class="udb-inst">New course</span>
                            <div class="log log-1">
                                <div class="login">
                                    <h4>Add course</h4>
                                      <span class="add-list-add-btn class-add-btn" data-toggle="tooltip" title="Click to make additional category">+</span>
                                    <span class="add-list-rem-btn cate-rem-btn" data-toggle="tooltip" title="Click to remove last category">-</span>
                                    <form name="edu_class" id="edu_course_form" method="post" action="" class="cre-dup-form cre-dup-form-show" enctype="multipart/form-data">
                                        <ul>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" id="edu_course_title" name="edu_course_title[]" class="form-control" placeholder="Course *" required>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </li>
                                        </ul>
                                      <div class="loader" style="display: none; margin-left: 50%;" > <img   src="<?= base_url('assets/public/images/extra/loader.gif');?>" height="40" width="40">
									   </div><button type="submit" name="category_submit" class="btn btn-primary edu_course_submit">Submit</button>
                                       
                                    </form>
                                    <div class="col-md-12">
                                        <a href="<?= base_url('admin-course');?>" class="skip">Go to All course>></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>
<!-- END -->
 <?php $this->load->view('admin/layout/footer');?>
<script>$(document).ready(function() {
    //LISTING CATEGORY ADD - APPEND
    $(".class-add-btn").click(function () {
        $(".add-ncate ul li:last-child").after('<li> <div class="row"> <div class="col-md-12"> <div class="form-group"> <input type="text" id="edu_course_title" name="edu_course_title[]" class="form-control" placeholder="course *" required> </div> </div></div></li>');
    });
} );
</script>
<script> 
         $("#edu_course_form").submit(function (event) {

         
             event.preventDefault();
             var allow_url = '<?=base_url('admin_course/addsubmit');?>';
             var form = $('#edu_course_form')[0];
             var myFormData = new FormData(form);
           $('.loader').show();
           $('.edu_course_form').hide();
             $.ajax({
                 type: 'POST',
                 url: allow_url,
                 data: myFormData,
                 contentType: false,
                 cache: false,
                 processData: false,
                 contentType: false,
                 async: true,
         
             }).done(function (response) {

                $('.loader').hide();
                 $('.edu_course_submit').show();
                  if (response == '1') {
                   	swal({title: "Sub category", text: "You saved course!", type: 
"success"}).then(function(){ 
   location.reload();
   }
);
 } else {
                     swal('', response, 'error');
                 }
             });
         });
         
</script>



</body>

</html>