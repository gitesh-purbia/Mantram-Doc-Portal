<?php
$validation_errors = validation_errors();
?>
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
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 content-tabs-wrap wow fadeInUp animated" data-wow-delay="1.7s" data-wow-offset="200">
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
											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										       <img class="doctor_img" src='/Ilaaj/uploads/doctors/<?php echo '/'.$doctor_record[0]->photo?>' class="img-responsive"/>	
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
												<div class="doc-name-class"><?php echo $doctor_record[0]->first_name.' '.$doctor_record[0]->middle_name.' '.$doctor_record[0]->last_name; ?></div>
													<?php  
														$education_array = json_decode($doctor_record[0] -> education);
														if(isset($education_array))
														{ foreach($education_array as $education): ?>
															<span> <?php echo $education->degree; ?> </span>
														<?php endforeach; } ?>
											    <p><?php echo $doctor_record[0] -> speciality; ?> </p>
											    <p><?php echo $doctor_record[0] -> overview; ?> </p>
											    <hr>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<div class="tab-pane fade" id="tab-profile">
										<?php if($clinic): ?>
										<div class="row" style="padding: 20px;">
										 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								            <div id="map_canvas" style="width:100%;height:300px"></div>
									             <script type="text/javascript">
											            var map;
											            var geocoder;
											            var centerChangedLast;
											            function initialize() {
											                var latlng = new google.maps.LatLng(<?php echo $clinic[0]->latitude.','.$clinic[0]->longitude; ?>);
											                var myOptions = {
											                    zoom: 10,
											                    center: latlng,
											                    mapTypeId: google.maps.MapTypeId.ROADMAP
											                };
											                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
											                geocoder = new google.maps.Geocoder();
											                var marker = new google.maps.Marker({
											                    position: latlng,
											                    map: map,
											                    title: "<?php echo $clinic[0]->name; ?>"
											                    
											                });
											                var infowindow = new google.maps.InfoWindow({
															  content:"<div class='map-tool'><b><?php echo $clinic[0]->name.'</b><br>'. $clinic[0]->address; ?></div>"
															  });
															
															infowindow.open(map,marker);
											            }
										        </script>
						            
						            </div>
						            </div>
										<?php endif; ?>
									</div>
									<div class="tab-pane fade" id="tab-messages">
										<div class="row" style="padding: 20px;">
										 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										 	<?php if($clinic): ?>
										 		<div class="doc-name-class"><?php echo $clinic[0]->name; ?></div>
										 		<p><?php echo $clinic[0]->address.'<br>'.$clinic[0]->city.','.$clinic[0]->state.','.$clinic[0]->country;  ?></p>
										 		<?php
										 		$clinic_image=explode(',', $clinic[0]->images);
												if($clinic_image[0]!='')
												  {
													foreach($clinic_image as $image)
													{
													?>
													 <a class="fancybox" rel="group" href="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>"><img src="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>" style="height: 50px;width: 50px;border-radius:5px; "></a>
													<?php
													}
												 }
										 		?>
										 	<?php endif; ?>
										 </div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="appointment-form col-xs-12 col-sm-5 col-md-5 col-lg-5 no-pad wow fadeInRight animated" data-wow-delay="1s" data-wow-offset="200">
							<div class="appointment-form-title">
								<i class="icon-hospital2 appointment-form-icon"></i>Book An Appointment
							</div>
							<div class="content-tabs">
								<ul class="nav nav-tabs">
									<li class="active<?php if(isset($active)){ echo $active;} ?>">
										<a href="#tab-login" data-toggle="tab">Login</a>
									</li>
									<li class="<?php if(isset($active)){ echo $active;} ?>">
										<a href="#tab-registration" data-toggle="tab">Registration</a>
									</li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade in active<?php if(isset($active)){ echo $active;} ?>" id="tab-login">
									<form class="appt-form">
										
										<input type="text" name="username" id="username" class="appt-form-txt" placeholder="User Name" />
										<input type="password" name="password" id="password" class="appt-form-txt" placeholder="Password" />
										<section class="color-7" id="btn-click">
										<button class="icon-mail btn2-st2 btn-7 btn-7b">
												Login
										</button>
										</section>
									</form>
								</div>
								<div class="tab-pane fade in <?php if(isset($active)){ echo $active;} ?>" id="tab-registration">
								  <?php
									$attributes = array( 'class' => 'appt-form','id' => 'patients_registration','name' => 'patients_registration', 'autocomplete'=> 'off', 'class' => 'appt-form');
									echo form_open('appointments/registration', $attributes);
									?>
									<?php 
										echo Template::message(); 
									?>
									<input type="hidden" value="<?php echo $appointment_time; ?>" name="apttime"  />
									<input type="hidden" value="<?php echo $appointment_date; ?>" name="aptdate"  />
									<input type="hidden" value="<?php echo $clinicid; ?>" name="clinicid"  />
									<input type="hidden" value="<?php echo $doctorid; ?>" name="doctorid"  />
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
			</div>
		</div>
	</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>