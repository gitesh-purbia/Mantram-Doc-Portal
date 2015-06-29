<div class="complete-footer">
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
					<a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>

					<address class="foot-address">
						<div class="col-xs-12 no-pad">
							<i class="icon-globe address-icons"></i>ilaaj.com
							<br />
							123 Fifth Avenue
							<br />
							New York, NY 10160
						</div>
						<div class="col-xs-12 no-pad">
							<i class="icon-phone2 address-icons"></i>+123 455 755
						</div>
						<div class="col-xs-12 no-pad">
							<i class="icon-file address-icons"></i>+123 555 755
						</div>
						<div class="col-xs-12 no-pad">
							<i class="icon-mail address-icons"></i>contact@imedica.com
						</div>
					</address>
				</div>

				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
					<div class="foot-widget-title">
						Recent Posts
					</div>
					<ul>
						<li>
							<a href="#">Consecte tur adipiscing elit ut eunt
							<br />
							<span class="event-date">3 days ago</span></a>
						</li>
						<li>
							<a href="#">Fusce vel tempus augue nunc
							<br />
							<span class="event-date">5 days ago</span></a>
						</li>
						<li>
							<a href="#">Lorem nulla, vitae eleifend leo tincidunt
							<br />
							<span class="event-date">7 days ago</span></a>
						</li>
					</ul>
				</div>

				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-3 recent-tweet-foot foot-widget">
					<div class="foot-widget-title">
						Recent News
					</div>
					<ul>
						<li>
							Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b>
							<br />
							<span class="event-date">7 days ago</span>
						</li>
						<li>
							Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b>
							<br />
							<span class="event-date">7 days ago</span>
						</li>
					</ul>
				</div>

				<!--Foot widget-->
				<div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
					<div class="foot-widget-title">
						newsletter
					</div>
					<p>
						Ipsum dolor sit amet, teft consecte tur.
					</p>
					<div class="news-subscribe">
						<input type="text" class="news-tb" placeholder="Email Address" />
						<button class="news-button">
							Subscribe
						</button>
					</div>
					<div class="foot-widget-title">
						social media
					</div>
					<div class="social-wrap">
						<ul>
							<li>
								<a href="#"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-linkedin foot-social-icon" id="link-foot" data-toggle="tooltip" data-placement="bottom" title="Linked in"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-rss foot-social-icon" id="rss-foot" data-toggle="tooltip" data-placement="bottom" title="RSS"></i></a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

	</footer>
	</div>

	<div class="bottom-footer">
		<div class="container">

			<div class="row">
				<!--Foot widget-->
				<div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
					<p class="col-xs-12 col-md-5 no-pad">
						Copyright 2015 ilaaj.com | All Rights Reserved | Designed by <a href="http://www.mantramindia.com" target="_blank">MantramIndia</a> 
					</p>
				<!--	<ul class="foot-menu col-xs-12 col-md-7 no-pad">
						<li>
							<a href="about-us.html">Pages</a>
						</li>
						<li>
							<a href="gallery-3cols.html">Gallery</a>
						</li>
						<li>
							<a href="blog-full.html">Blog</a>
						</li>
						<li>
							<a href="#">Features</a>
						</li>
						<li>
							<a href="contact-2.html">Contact</a>
						</li>
						<li>
							<a href="index.html">home</a>
						</li>

				</ul>-->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade my-modal" id="loginpanel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Login here..</h4>
			</div>
			<div class="modal-body" style=" height: auto;">
				<div class="row">
					<div class="col-lg-12">
						<?php echo form_open('registration/login', array('class' => "register form-horizontal", 'autocomplete' => 'off','id'=>'loginform')); ?>
						<fieldset class="">
							<?php echo Template::message(); ?>
							<div class="form-group form-group-less-margin">
								<label for="login_value" class="col-sm-3 control-label">Username</label>
								<div class="col-sm-9 controls">
									<div class="row">
									<div class="col-xs-11">
										<div class="input-icon right">
											<input type="text" class="form-control" name="login" id="login_value" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
										</div>
									</div> 
									</div>
								</div>
							</div>
							<div class="form-group form-group-less-margin">
								<label for="login_value" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9 controls">
									<div class="row">
										<div class="col-xs-11">
											<div class="input-icon right forgot-password-link">
												<input type="password" class="form-control" name="password" id="password" value="" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>" />
												<a href="<?php echo site_url('forgot_password'); ?>">Forgot Password</a>
											</div>
										</div> 
									</div>
								</div>
							</div>
							<div class="form-submit1">
								<input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login" style="padding: 8px 20px;">
							</div>
						</fieldset>
						<?php echo form_close(); ?>
					</div>
				</div>
				<br/>
				<div class="row" style="padding-top: 0px;">	
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="social-wrap a">
							<a class="btn btn-block btn-social btn-facebook" id="facebookss" href="<?php echo site_url('tsso/login/Facebook');?>" ><i class="fa fa-facebook"></i>Sign in with Facebook</a>
							<a class="btn btn-block btn-social btn-google" href="<?php echo site_url('tsso/login/Google');?>" ><i class="fa fa-google"></i>Sign in with Google</a>
						</div>
					</div>
				</div>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>	
<!--JS Inclution-->
<?php echo Assets::js(); ?>
<script type='text/javascript'>
	$(window).load(function() {
		$('#loader-overlay').fadeOut(900);
		$("html").css("overflow", "visible");
	}); 
</script>
</body>
</html>
