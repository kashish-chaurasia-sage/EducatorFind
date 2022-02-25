 <?php $this->load->view('layout/header');?>
 <section class=" fedback">
        <img src="https://bizbookdirectorytemplate.com/images/admin-log-bg.jpg" alt="" class="fed">
        <div class="fed-box">
            <div class="lhs">
                <h3>Send your feedbacks</h3>
                <form name="feedback_form" id="feedback_form" method="post" action="feedback_submit.php"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" placeholder="Enter name*" name="feedback_name" id="feedback_name" class="form-control"
                               required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email*" required="required"
                               name="feedback_email"
                               pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                               title="Invalid email address">
                    </div>
                    <div class="form-group">
                        <input type="text" onkeypress="return isNumber(event)" class="form-control" id="feedback_mobile"
                               name="feedback_mobile"
                               placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                               title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required="">
                    </div>
                    <div class="form-group">
                    <textarea name="feedback_message" id="feedback_message" required="required"
                              placeholder="Write your feedback here*"></textarea>
                    </div>
                    <button type="submit" id="feedback_submit" name="feedback_submit"
                            class="btn btn-primary">
                        Submit Feedback                </button>
                </form>
            </div>
            <div class="rhs">
                <h2>Your feedback</h2>
                <p>Let us know how we can improve your experience.</p>
                <ul>
                    <li><a href="https://www.facebook.com/Starsboardeducation/"><img src="https://bizbookdirectorytemplate.com/images/icon/facebook.png" alt=""></a></li>
                    <li><a href="https://www.trustpilot.com/review/www.starsboard.in"><img src="https://ps.w.org/trustpilot-reviews/assets/icon-256x256.png?rev=2029921" alt=""></a></li>
                    <li><a href="https://instagram.com/starsboardeducation"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" alt=""></a></li>
                    <li><a href="https://g.co/kgs/Q5g6YN"><img src="https://image.similarpng.com/very-thumbnail/2020/12/Illustration-of-Google-icon-on-transparent-background-PNG.png" alt=""></a></li>
                 </ul>
                <h4>Why send feedback?</h4>
                <p>Useful for feature update</p>
                <p>Helping for customer feedback</p>
            </div>
        </div>
    </section>
    <!--END-->
  <?php $this->load->view('layout/footer');?>