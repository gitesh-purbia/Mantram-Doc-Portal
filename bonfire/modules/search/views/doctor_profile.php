 <section class="complete-content content-footer-space">
       <div class="about-intro-wrap pull-left">
       <div class="bread-crumb-wrap ibc-wrap-5">
      	<div class="container">
           	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
              	<div class="bread-heading"><h1>Doctor Profile</h1></div>
                  <div class="bread-crumb pull-right">
                  <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Doctor Profile</a></li>
                  </ul>
                  </div>
              </div>
           </div>
       </div>
       
           <div class="container">
           	<div class="row">
           		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
           		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left subtitle ibg-transparent">Doctor Profile</div>
           		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
           	</div>
          <div class="row">
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          	</div>
                   <div class="content-tabs tabs col-lg-8 col-md-8 col-sm-8 col-xs-12" style="border: solid 1px #eee;">
                      <div class="tab-content">
                        <div class="tab-pane fade fade-slow in active"  >
						 <?php foreach($doctor_record as $d_record): ?>
		                       <div class="row" style="padding: 20px;">
								   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								     <img src="/Ilaaj/uploads/doctors/<?php echo '/' . $d_record -> photo; ?>" style="height: 100px;width: 100px;border-radius: 10px;" />  	
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10  col-xs-12">
									   <div class="doc-name-class"> <?php echo $d_record->first_name ?>&nbsp;<?php echo $d_record->middle_name ?>&nbsp;<?php echo $d_record -> last_name; ?></div>		
										<?php 
											$education_arry = json_decode($d_record->education);
											foreach($education_arry as $education)
											{?>
			                          	    <span><?php echo $education->degree.'<br>';?></span>
											<?php }
											  ?>
									    <p><?php echo 'Speciality:'.$d_record -> speciality; ?> </p>
									    <p><?php echo $d_record -> overview; ?> </p>
									</div>
								 </div>
						 <hr>
						<?php endforeach; ?>
						<?php 
							if($clinic_record): 
							foreach($clinic_record as $clinic): ?>	
							<div class="row" style="padding: 20px;">
							    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: -30px;" >
							     <p><b><?php echo $clinic -> country . ',' . $clinic -> state . ',' . $clinic -> city; ?> </b></p>
							     <div class="doc-name-class"><li class="fa fa-map-marker"></li> <?php echo $clinic -> clinic_name; ?> </div>
							     <p>
							     	<?php echo $clinic -> address . ','; ?>
							     	<span><?php echo $clinic -> country . ',' . $clinic -> state . ',' . $clinic -> city; ?> </span>
							     	</p>
							     	<div class="gal">
							     	<?php 
							     	foreach($clinic_images_result as $clinic_images)
									{
										if($clinic->clinicid==$clinic_images->clinicid)
										{
										$clinic_image= explode(',',$clinic_images->clinic_images);
										if($clinic_image[0]!='')
										{
											foreach($clinic_image as $image)
											{
											?>
											 <a class="fancybox" rel="group" href="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>"><img src="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>" style="height: 50px;width: 50px;border-radius:5px; "></a>
											<?php
											}
										 }
										}
									}
							     	?>
							     	</div>
							     </div>
						     
						     <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
						     	<ul>
						     		<?php if($time_slots): ?>
						     		<?php
										foreach($time_slots as $time):
										foreach ($time as $slot) 
									  	{
										  	if($clinic->clinicid==$slot->clinic_id)
											{
						       					$day=(date('l'));
												if(ucfirst($slot->day)==$day)
												{
													?>
													<li class="fa fa-clock-o" style="font-size: 20px;">&nbsp;</li>
													<?php
												   if($slot->time_from && $slot->time_to){ echo '<span><b>Today: </b>'.$slot->time_from.' To '.$slot->time_to.'</span><br/>'; } else { echo '<span><b> Today:</b> Not Given</span><br>'; }
											    }
											}
								      	}
									    endforeach; ?>
									       <div class="collapse" style="margin-left: 30px;" id="all_timings_<?php echo $clinic->clinicid; ?>">
												<?php
												foreach($time_slots as $time):
												foreach($time as $slot)
												{
													if($clinic->clinicid==$slot->clinic_id)
													{ ?>
														<div><?php echo ucfirst($slot->day).': '.$slot->time_from.'-'.$slot->time_to;?></div>
													<?php 
													}
												}
												endforeach; ?>
											</div>
										  <a data-toggle="collapse" style="margin-left: 30px;color:black;" href="#all_timings_<?php echo $clinic->clinicid;?>" area-expanded="false" area-controls="all_timings_<?php echo $clinic->clinicid;?>">Show all</a><br>
												
						     		<?php endif; ?>
						     	</ul>
						     </div>
						     
						      <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12">
						      	<li class="fa fa-money" style="font-size: 20px;">&nbsp;</li>
							      	<?php echo $clinic->fees; ?>
								<a data-toggle="collapse"  style="margin-left: 30px;color:black;" href="#timeslot_<?php echo $clinic->clinicid; ?>" area-expanded="false" area-controls="timeslot_<?php echo $clinic->clinicid; ?>">
								<li><img src="<?php echo Template::theme_url('images/book_appointment_button.png');?>" style="height: 40px;width: 100%;cursor: pointer;" > </li>
								</a>
						     </div>
						 	</div>	
						 	<div class="row">
						     	<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
						     	  <div class="collapse"  id="map_<?php echo $clinic->clinicid ?>">
						     		<div id="map" style="width:100%; height:300px;">
							            <div id="map_canvas_<?php echo $clinic->clinicid; ?>" style="width:100%; height:300px"></div>
							             <script type="text/javascript">
									            var map;
									            var geocoder;
									            var centerChangedLast;
									            function initialize_<?php echo $clinic->clinicid; ?>() {
									                var latlng = new google.maps.LatLng(<?php echo $clinic->latitude.','.$clinic->longitude; ?>);
									                var myOptions = {
									                    zoom: 10,
									                    center: latlng,
									                    mapTypeId: google.maps.MapTypeId.ROADMAP
									                };
									                map = new google.maps.Map(document.getElementById("map_canvas_<?php echo $clinic->clinicid; ?>"), myOptions);
									                geocoder = new google.maps.Geocoder();
									                var marker = new google.maps.Marker({
									                    position: latlng,
									                    map: map,
									                    title: "<?php echo $clinic->clinic_name; ?>"
									                    
									                });
									                var infowindow = new google.maps.InfoWindow({
													  content:"<div class='map-tool'><b><?php echo $clinic->clinic_name.'</b><br>'. $clinic->address; ?></div>"
													  });
													
													infowindow.open(map,marker);
									            }
								        </script>
						            </div>
						           </div>
								</div>
						     </div>
						 	<a data-toggle="collapse" onclick="initialize_<?php echo $clinic->clinicid; ?>();" style="margin-left: 30px;color:black;" href="#map_<?php echo $clinic->clinicid; ?>" area-expanded="false" area-controls="map_<?php echo $clinic->clinicid; ?>">View Map</a><br>
						 	
						 	<div class="row">
						     	<div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
						     	  <div class="collapse"  id="timeslot_<?php echo $clinic->clinicid ?>">
						     	     <table class="timingtable timingtable-width">
						     	     	<tr>
						     	     		<th>Day</th>
						     	     		<th>Timing</th>
						     	     	</tr>
						     	     <?php if($time_slots): ?>
						     		<?php
										foreach($time_slots[$clinic->clinicid]  as $key => $slot):
											if($slot->time_from && $slot->time_to)
											{ 
											?>
											<tr>
												<td  class="day_title">
													<?php 
													$slot_date = date('d-m-Y', mktime(0, 0, 0, date('m'), date('d') + $key, date('Y')));
													if($slot_date == date('d-m-Y'))
													{
														echo '<div class="timingtable_today">Today</div>';
													}
													echo ucfirst($slot->day).'<br>';
													echo $slot_date;
													 
													?>
												</td>
												<td class="all_apointment_time">	
												<?php
											   		$timeslots = array();
													$from = $slot->time_from;
											   	    $t1_n = date('H:i',strtotime($from));
												    $t2_n = date('H:i',strtotime($slot->time_to));
													$t1 = strtotime($t1_n);
											   		$t2 = strtotime($t2_n);
													$counter = 1;
												 	while($t1 < $t2)
												 	{
												 		if($counter == 1)
														{
															$t1 = $t1;
															$timeslots[] = date('H:i',$t1);
														}
														else 
														{
												 			$t1 = strtotime('+15 minute',$t1);
															$timeslots[] = date('H:i',$t1);
															if($t2 == strtotime('+15 minute', $t1))
															{
																break;
															}
														}
														$counter = $counter +1;
												 	}
													foreach($timeslots as $timing) { ?>
														<a href="<?php echo site_url('appointments/book/').'?timeslots='.$timing.'&clinicid='.$clinic->clinicid.'&doctor_id='.$doctor_record[0]->doctorid.'&date='.$slot_date;?>"><?php echo $timing ?></a>
													<?php } ?>
											   </td>
										   </tr>
										   <?php
										   }
									      endforeach;endif;	
									      ?>
						     	     </table>
						     	  	</div>
						     	  </div>
						     </div>
						     <hr>
                       <?php endforeach;endif; ?>
                        </div>
                     </div>
             	 </div> 
             	 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
               </div>
             </div>
           </div>
      </div>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
  	function fancy()
  	{
  		$(".fancybox").fancybox();
  	}
  </script>    
  <?php Assets::add_js('fancy()', "inline");  ?>