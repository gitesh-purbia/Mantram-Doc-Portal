<?php
$validation_errors = validation_errors();
?>
<section class="complete-content content-footer-space">
	<div class="about-intro-wrap pull-left">

		<div class="bread-crumb-wrap ibc-wrap-3">
			<div class="container">
				<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
					<div class="bread-heading">
						<h1>User Registration</h1>
					</div>
					<div class="bread-crumb pull-right">
						<ul>
							<li>
								<a href="<?php echo site_url();?>">Home</a>
							</li>
							<li>
								<a href="#">User Registration</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side-bar-blog">
					<div class="catagory-list wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="0">
						<div class="side-blog-title">
							Catagories
						</div>
						<ul>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Doctors (3)</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Disease Outbreak (7)</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Types of Treatment (4)</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Medication Side Effects (5)</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Health and Fitness (2)</a>
							</li>
						</ul>

					</div>

					<div class="collapse-widget-side wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="250">

						<div id="accordion-blog">

							<h3><i class="collapse-cheveron"></i><span class="blog-collapse-title">Primary Health Care</span></h3>
							<div>
								<div class="collapse-widget-content pull-left">
									<div class="dept-title pull-left">
										Donec scelerisque
									</div>
									<p>
										Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt.
									</p>
								</div>
							</div>

							<h3><i class="collapse-cheveron"></i><span class="blog-collapse-title">Ophthalmology Clinic</span></h3>
							<div>
								<div class="collapse-widget-content pull-left">
									<div class="dept-title pull-left">
										Donec scelerisque
									</div>
									<p>
										Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt.
									</p>
								</div>
							</div>

							<h3 class="last-tab"><i class="collapse-cheveron"></i><span class="blog-collapse-title">Outpatient Surgery</span></h3>
							<div>
								<div class="collapse-widget-content pull-left">
									<div class="dept-title pull-left">
										Donec scelerisque
									</div>
									<p>
										Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="form-widget wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="200">
						<div class="appointment-form-title">
							<i class="icon-hospital2 appointment-form-icon"></i>Book An Appointment
						</div>
						<?php
							$attributes = array( 'id' => 'patients_registration','name' => 'patients_registration', 'autocomplete'=> 'off', 'class' => 'appt-form');
							echo form_open('patients/registration', $attributes);
						?>
						<?php 
							echo Template::message(); 
						?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="text" name="first_name" class="appt-form-txt" placeholder="First Name"  value="<?php echo set_value('first_name', isset($doctor['first_name']) ? $doctor['first_name'] : ''); ?>" />
								<span class='help-inline'><?php echo form_error('first_name'); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="text" name="middle_name" class="appt-form-txt" placeholder="Middle Name" value="<?php echo set_value('middle_name', isset($doctor['middle_name']) ? $doctor['middle_name'] : ''); ?>" />
								<span class='help-inline'><?php echo form_error('middle_name'); ?></span>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<input type="text" name="last_name" class="appt-form-txt" placeholder="Last Name"  value="<?php echo set_value('last_name', isset($doctor['last_name']) ? $doctor['last_name'] : ''); ?>" />
								<span class='help-inline'><?php echo form_error('last_name'); ?></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<input type="password" name="password"  class="appt-form-txt" placeholder="Password" />
								<span class='help-inline'><?php echo form_error('password'); ?></span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<input type="password" name="pass_confirm"  class="appt-form-txt" placeholder="Confirm Password"  />
								<span class='help-inline'><?php echo form_error('pass_confirm'); ?></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<input type="email" name="email" class="appt-form-txt" placeholder="Email"  value="<?php echo set_value('email', isset($doctor['email']) ? $doctor['email'] : ''); ?>" />
								<span class='help-inline'><?php echo form_error('email'); ?></span>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<input type="text" name="mobile" class="appt-form-txt" placeholder="Mobile"  value="<?php echo set_value('mobile', isset($doctor['mobile']) ? $doctor['mobile'] : ''); ?>"/>
								<span class='help-inline'><?php echo form_error('mobile'); ?></span>
							</div>
						</div>
						<section class="color-7" id="btn-click">
							<button type="submit" class="icon-mail btn2-st2 btn-7 btn-7b iform-button" name="save">Register</button>
						</section>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>