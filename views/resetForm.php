
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
                            <h4>Recover password</h4>
							   
                         <form id="reset_form" method="post" action="<?php echo base_url('forgot/change_password');?>">
                            <div class="form-group">
							 <input type="hidden" name="id" value="<?=$id?$id:'';?>">
                                <input type="password" class="form-control" name="password" id="password"
                                                       value="" placeholder="New password" >
                            </div>
                            <button type="submit" class="btn btn-primary">Change password</button>
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
<script>$("#reset_form").submit(function (e) { 
var password=$('#password').val();

if(password == ''){
		swal("Error!", "Oops!! Please enter your new password!!!", "error");
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
			
         swal("", data, "success");
			}
        }
    });
  });
</script>