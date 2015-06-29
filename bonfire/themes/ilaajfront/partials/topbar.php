<div class="topbar-info no-pad">
	<div class="container">
		<div class="social-wrap-head col-md-2 no-pad">
			<ul>
				<li>
					<a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a>
				</li>
			</ul>
		</div>
		<div class="top-info-contact pull-right col-md-6">
			<?php if(!$this->auth->is_logged_in()):?><a href="javascript:void(0)" id="login">Login |</a><a href="<?php echo FRONT_URL;?>registration">Register with us</a><?php else:?><span>Welcome, <?php echo $current_user->display_name;?></span><a href="<?php echo 'http://localhost/ilaaj_front/logout'; ?>">|Log-Out</a>|<a href="<?php echo 'http://localhost/Ilaaj/'; ?>">DashBoard</a> <?php endif; ?>   |    Call Us Today! +123 455 755  |    contact@ilaaj.com
		</div>
	</div>
</div>