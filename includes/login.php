
	<div class="site-main" id="main">
		<header class="page-header">
			<h1 class="page-title">Login</h1>
		</header>
		<?php 	
			
			echo login_user();
		 ?>
		<div class="content-area container" id="primary" role="main">
			<article class="post-2454 page type-page status-publish hentry" id="post-2454">
				<div class="entry-content">
					<div class="woocommerce">
						<div class="woocommerce-customer-login">
							<h2>Login</h2>
							<form class="woocomerce-form woocommerce-form-login login" method="post">
								
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="username">Username or email address <span class="required">*</span></label> 
										<input class="woocommerce-Input woocommerce-Input--text input-text" id="username" name="u_username" type="text" value=""></p>
								
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="password">Password <span class="required">*</span></label> 
										<input class="woocommerce-Input woocommerce-Input--text input-text" id="password" name="u_password" type="password"></p>
								<p class="form-row">

								<input id="woocommerce-login-nonce" name="woocommerce-login-nonce" type="hidden" value="06a2332b36">

								<input name="_wp_http_referer" type="hidden" value="/my-account"> 

								<button name="submit" type="submit">LOGIN</button>
								<br><br>
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" id="rememberme" name="rememberme" type="checkbox" value="forever"> <span>Remember me</span></label></p>
								
								<p class="woocommerce-LostPassword lost_password"><a href="">Lost your password?</a></p>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
