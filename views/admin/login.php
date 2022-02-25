 <?php $this->load->view('admin/layout/header');?>
    <!--PRICING DETAILS-->
	<section class=" login-reg ad-login-reg">
		<div class="container">
			<div class="row">
                <div class="login-main">
                     <div class="log-bor">&nbsp;</div>
                    <span class="udb-inst">Super Admin</span>
                    <div class="log log-1">
                        <div class="login">
                            <h4>Admin Login</h4>
                                 <form name="directory_login" method="post" action="<?= base_url('admin_login/check_login');?>">
                                                                  <div class="form-group">
                                  <input type="text" name="admin_email" id="admin_email"  class="form-control" placeholder="Enter email*"  title="Invalid email address" value="admin" required>
                                </div>
                                 <div class="form-group">
                                  <input type="password" name="admin_password" id="admin_password" class="form-control" placeholder="Enter password*" value="password" required>
                                </div>
                                <button type="submit" value="submit" name="admin_submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                <div class="log log-3">
                        <div class="login">
                            <h4>Forgot password</h4>
                             <form>
                                 <div class="form-group">
                                  <input type="email" class="form-control" placeholder="" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" title="" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                   <!-- <div class="log-bot">
                        <ul>
                            <li>
                                <span class="ll-1">Login?</span>
                            </li>
                            <li>
                                <span class="ll-3">Forgot password?</span>
                            </li>
                        </ul>
                    </div> -->
                </div>
			</div>
		</div>
	</section>
	<!--END PRICING DETAILS-->
 <?php $this->load->view('admin/layout/footer');?>