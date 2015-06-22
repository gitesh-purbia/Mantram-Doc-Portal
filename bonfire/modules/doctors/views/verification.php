<style>
	a.icon-mail{
		margin-left: 10px;
	}
	a.icon-mail:before{
		left: 10px;
	}
</style>
<section class="complete-content content-footer-space">
	<div class="about-intro-wrap pull-left">
		<div class="container">
			<?php if(isset($login) && $login){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
					<?php echo Template::message(); ?>
					<div class="iconbox-readmore">
						<a href="http://localhost/Ilaaj">Login</a>
					</div>
				</div>
			<?php }else if(isset($verification_err) && !$verification_err){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
					<?php echo Template::message(); ?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="form-widget wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="200">
							<div class="appointment-form-title">
								<i class="fa fa-mobile appointment-form-icon"></i>Verify Your Mobile Number
							</div>
							<?php
								$attributes = array( 'id' => 'mobile_verification','name' => 'mobile_verification', 'autocomplete'=> 'off', 'class' => 'appt-form');
								echo form_open('doctors/mobile_verification', $attributes);
							?>
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad" style="text-align: center;">
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
									<input type="text" name="mobile_code" class="appt-form-txt" placeholder="Enter Code"  value="<?php echo set_value('mobile_code', isset($doctor['mobile_code']) ? $doctor['mobile_code'] : ''); ?>" />
									<span class='help-inline'><?php echo form_error('mobile_code'); ?></span>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
										<a class="icon-mail btn2-st2 btn-7 btn-7b iform-button" href="<?php echo $resend_url;?>">Resend</a>or
										<button style="float: left;" type="submit" class="icon-mail btn2-st2 btn-7 btn-7b iform-button" name="save">Verify</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			<?php }else if(isset($verification_err)){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
					<?php echo Template::message(); ?>
					<div class="iconbox-readmore">
						<a href="#">Contact us</a>
					</div>
				</div>
				
			<?php } ?>
			<?php if(isset($retry_pss) && $retry_pss){ ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
					<?php echo Template::message(); ?>
					<div class="iconbox-readmore">
						<a href="<?php echo $retry_url;?>">Retry</a>
					</div>
				</div>
			<?php } ?>
		</div>		
	</div>
</section>		