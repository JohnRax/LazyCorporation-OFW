
	<div class="site-main" id="main">
		<header class="page-header">
			<h1 class="page-title">Register</h1>
		</header>
		
		<?php
	
		 echo register_user(); 
		 ?>

		<div class="content-area container" id="primary" role="main">
			<article class="post-99991258 page type-page status-publish hentry" id="post-99991258">
				<div class="entry-content">
					<div class="registration-form woocommerce">
						<h2>Register</h2>
						<form class="register" method="post">
							<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first"><label for="reg_sr_firstname">First Name</label> 

							<input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_sr_firstname" name="u_fname" type="text" value=""></p>
							<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last"><label for="reg_sr_lastname">Last Name</label> 

							<input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_sr_lastname" name="u_lname" type="text" value=""></p>
							

							<p class="form-row form-row-wide"><label for="u_gender">Gender</label> 
							<select class="jobify-registration-role" name="u_gender">
								<option selected disabled >
									Select your gender
								</option>
								<option value="male">
									Male
								</option>
								<option value="female">
									Female
								</option>
							</select></p>

							<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_username">Username<span class="required">*</span></label> 
							<input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_username" name="u_username" type="text" value=""></p>
							<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_email">Email address <span class="required">*</span></label> 

							<input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_email" name="u_email" type="email" value=""></p>
							<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_password">Password <span class="required">*</span></label> 

							<input class="woocommerce-Input woocommerce-Input--text input-text" id="reg_password" name="u_password" type="password"></p>
							<div style="left: -999em; position: absolute;">
								<label for="trap">Anti-spam</label>
								<input id="trap" name="email_2" tabindex="-1" type="text">
							</div>


							<p class="form-row form-row-wide"><label for="u_role">Register As</label> 
							<select class="jobify-registration-role" name="u_role">
								<option selected disabled >
									Select category
								</option>
								<option value="candidate">
									Candidate
								</option>
								<option  value="employer">
									Employer
								</option>
								
							</select></p>
							<div class="g-recaptcha" data-sitekey="6LchDSUTAAAAALv1tUkJXAZ4qKPrPQVgu--50gHW" data-theme="light" id="g-recaptcha-0"></div><noscript>Please enable JavaScript to submit this form.<br></noscript>
							<p class="woocomerce-FormRow form-row">

							<input id="woocommerce-register-nonce" name="woocommerce-register-nonce" type="hidden" value="9edf2f6ea0">

							<input name="_wp_http_referer" type="hidden" value="/register"> 
							<button name="submit" type="submit">Register</button>
						</form>
					</div>
				</div>
			</article>
		</div>
	</div>