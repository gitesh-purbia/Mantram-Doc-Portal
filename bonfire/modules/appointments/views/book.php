<section class="complete-content content-footer-space">
	<div class="about-intro-wrap pull-left">
		<div class="bread-crumb-wrap ibc-wrap-5">
			<div class="container">
				<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
					<div class="bread-heading">
						<h1>Appointment</h1>
					</div>
					<div class="bread-crumb pull-right">
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="#">appointments</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="services-content-wrap pull-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 content-tabs-wrap wow fadeInUp animated" data-wow-delay="1.7s" data-wow-offset="200">
							<div class="content-tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab-home" data-toggle="tab">Doctor</a>
									</li>
									<li>
										<a href="#tab-profile" data-toggle="tab">Location</a>
									</li>
									<li>
										<a href="#tab-messages" data-toggle="tab">Clinic</a>
									</li>
									<div class="appointment_datetime">
									<li class="fa fa-calendar">&nbsp;</li><span><?php echo 'On'.' '.$appointment_date; ?></span>
									<li class="fa fa-clock-o">&nbsp;</li><span><?php echo 'At'.' '.$appointment_time; ?></span>
								    </div>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-home">
										<?php if($doctor_record): ?>
										<div class="row" style="padding: 20px;">
											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
										       <img class="doctor_img" src='<?php echo site_url('bonfire/images/doctor_images').'/'.$doctor_record[0]->photo?>' class="img-responsive"/>	
											</div>
											<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
												<div class="doc-name-class"><?php echo $doctor_record[0]->first_name.' '.$doctor_record[0]->middle_name.' '.$doctor_record[0]->last_name; ?></div>
												<span class="doc-title"><b> <?php echo $doctor_record[0] -> education; ?></b></span>
											    <p><?php echo $doctor_record[0] -> speciality; ?> </p>
											    <p><?php echo $doctor_record[0] -> overview; ?> </p>
											    <hr>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<div class="tab-pane fade" id="tab-profile">
										<img alt="" src="images/about-tab-02.jpg" class="img-responsive tab-img" />
										<p>
											Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt.
										</p>

									</div>
									<div class="tab-pane fade" id="tab-messages">
										<img alt="" src="images/about-tab-03.jpg" class="img-responsive tab-img" />
										<p>
											Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt.
										</p>

									</div>
								</div>
							</div>

						</div>

						<div class="appointment-form col-xs-12 col-md-3 no-pad wow fadeInRight animated" data-wow-delay="1s" data-wow-offset="200">
							<div class="appointment-form-title">
								<i class="icon-hospital2 appointment-form-icon"></i>Book An Appointment
							</div>
							<form class="appt-form">
								<select class="appt-form-select">
									<option>Select Department</option>
									<option>Select Department</option>
									<option>Select Department</option>
									<option>Select Department</option>
								</select>
								<input type="text" class="appt-form-txt" placeholder="First Name(required)" />
								<input type="text" class="appt-form-txt" placeholder="Last Name" />
								<input type="text" class="appt-form-txt" placeholder="Phone(required)" />
								<input type="email" class="appt-form-txt" placeholder="Email(required)" />
								<input type="date" class="appt-form-txt" />
								<section class="color-7" id="btn-click">
									<button class="icon-mail btn2-st2 btn-7 btn-7b">
										Submit
									</button>
								</section>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
