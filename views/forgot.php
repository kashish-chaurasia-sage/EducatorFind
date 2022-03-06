
 <?php $this->load->view('layout/header');?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--PRICING DETAILS-->
    <section class="login-reg">
        <div class="container">
            <div class="row">
                <div class="login-main">
                    <div class="log-bor">&nbsp;</div>
                    <div class="log log-1">
                        <div class="login">
                            <h4>Forgot password</h4>
							   
                         <form id="forgot_form" method="post" action="<?php echo base_url('forgot/password');?>">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                                       value="" placeholder="" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="" 	>
                            </div>
                            <button type="submit" class="btn btn-primary">Recover my password</button>
                        </form>


                        </div>
                    </div>
                    
                   
                    <div class="log-bot">
                        <ul>
                            
                            <li>
                                <a href="<?php echo base_url('registration');?>"><span >Create an account?</span></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('login');?>">  <span >Login?</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END PRICING DETAILS-->


   
  <?php $this->load->view('layout/footer');?>
<script>$("#forgot_form").submit(function (e) { 
var email=$('#email').val();

if(email == ''){
		swal("Error!", "Oops!! Please enter email id!!!", "error");
		return false;
			
}
	  e.preventDefault();
    var senddata = $(this).serializeArray();
    var sendto = $(this).attr("action");

    $.ajax({
        url: sendto,
        type: 'POST',
        data: senddata,
        success: function (data) {
			if(data =='1'){
				swal("Success!", "Reset link has been sent on your registered email address.", "success");
				
			}else{
         	swal("Oops!", "Please try after sometime", "error");
			}
        }
    });
  });
</script>