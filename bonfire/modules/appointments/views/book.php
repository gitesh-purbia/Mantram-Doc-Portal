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
						<div class="appointment-form col-xs-12 col-sm-5 col-md-5 col-lg-5 no-pad wow fadeInRight animated" id="appointments" data-wow-delay="1s" data-wow-offset="200">
							<div class="appointment-form-title">
								<i class="icon-hospital2 appointment-form-icon"></i>Your Appointment view
							</div>
							
							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab-login">
									 <?php
									$attributes = array( 'class' => 'appt-form','id' => 'patients_book','name' => 'patients_book', 'autocomplete'=> 'off', 'class' => 'appt-form');
									echo form_open('appointments/book_confirm', $attributes);
									?>
									<?php 
										echo Template::message(); 
									?>
										<span><div class="doc-name-class"><i class="fa fa-user-md"></i>
										<?php echo $doctor_record[0]->first_name.' '.$doctor_record[0]->middle_name.' '.$doctor_record[0]->last_name; ?></div></span>
										<span class="doc-title"><i class="fa fa-hospital-o">&nbsp;</i><?php echo $clinic[0]->name; ?> </span><br>
										<span><i class="fa fa-calendar">&nbsp;</i><?php echo $appointment_date ?></span><br>
										<span><i class="fa fa-clock-o">&nbsp;</i><?php echo $appointment_time ?></span>
										<input type="hidden" name="doctorid" id="doctorid" value="<?php echo $doctorid; ?>" />
										<input type="hidden" name="clinicid" id="clinicid" value="<?php echo $clinicid; ?>"/>
										<input type="hidden" name="date" id="date" value="<?php echo $appointment_date; ?>" />
										<input type="hidden" name="time" id="time" value="<?php echo $appointment_time; ?>" />
										<section class="color-7" id="btn-click">
										<button class="btn2-st2 btn-7 ">
												<i class="fa fa-check-circle" style="font-size: 15px;">&nbsp;</i>Confirm
										</button>
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
