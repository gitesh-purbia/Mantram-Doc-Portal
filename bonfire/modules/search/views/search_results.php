 <style>
	.doc-name-class:hover {
		text-decoration: underline;
	}
 </style>
 <section class="complete-content content-footer-space">
       <div class="about-intro-wrap pull-left">
       <div class="bread-crumb-wrap ibc-wrap-5">
      	<div class="container">
           	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
              	<div class="bread-heading"><h1>Search Result</h1></div>
                  <div class="bread-crumb pull-right">
	                  <ul>
		                  <li><a href="index.html">Home</a></li>
		                  <li><a href="#">Search</a></li>
	                  </ul>
                  </div>
              </div>
           </div>
       </div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<div class="search_resultbar  fadeInUp animated">
		          	<?php 
		          	if(isset($records))
					{
		              echo 'Showing '.count($records).' Doctor in your search creteria.';
					}
					else if(isset($records_all))
					{
							echo '<span>Opps.....There is not availeble doctor with your search Creteria.</span>';
							$records=$records_all;
					}
					else
						{
							echo '<span>Opps.....There is not availeble doctor with your search Creteria.</span>';
						}
		          	?> 
	          	</div>
				</div>
			</div>
			<div class="row">
	          	<div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 accordion-element">
	          	<!--	<div id="accordion">
		          	 <h5><i class="fa fa-map-marker dept-icon"></i><span class="dep-txt">Location</span></h5>
		          	 <div>
                       <?php 
		          	   	if($records)
						{
							foreach($records as $record):
								?>
								<input type="checkbox" onchange="test(this.value)" value="<?php echo $record->city ?>" class="location"  id="location_<?php echo $record->doctorid; ?>" name="location" />
								<?php echo ucfirst($record->city).'<br>'; ?>
								<?php
							endforeach;
						}
		          	 ?>
                 </div>
		          	 <h3><i class="fa fa-money dept-icon"></i><span class="dep-txt">Fees</span></h3>
		          	 <div>
		          	 	
                    </div>
		             </div>-->
	          	</div>
	          	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
					<div class="content-tabs tabs col-lg-10 col-md-10 col-sm-10 col-xs-12" style="border: solid 1px #eee;">
						<div class="tab-content" >
                        	<div class="tab-pane fade fade-slow in active">
		                        <?php foreach($records as $record): ?>
								<div class="row" style="padding: 20px;">
								   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								   	<?php 
								   	 if($record->photo) 
								   	 { ?>
											<img class="doctor_img" src='/Ilaaj/uploads/doctors/<?php echo '/'.$record->photo?>' class="img-responsive"/> 
									   	   	<?php 
								   	 }
									 else
									 { ?>
								 		<img class="doctor_img" src="<?php echo Template::theme_url('images/default_user.png'); ?>" />
								 		<?php } ?>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			                          	<a id="doctors" href="<?php echo site_url('search/doctor_profile/') . '/' . $record -> doctorid; ?>">
				                          	<div class="doc-name-class">
				                          		<?php echo 'Dr.'.$record->first_name.' '.$record->middle_name.' '.$record->last_name;?> 
				                          	</div>
			                          	</a>
				                          	<?php 
											$education_arry = json_decode($record->education);
											if(isset($education_arry)){
											foreach($education_arry as $education)
											{?>
			                          	    <span><?php echo $education->degree.'<br>';?></span>
											<?php }}
											  ?>
		                          	    <span>
		                          	    	<?php echo  'Speciality:'.$record -> speciality ?>
		                          	    </span>
		                          	    <?php
		                          	    foreach($clinic_records as $key => $clinic):
											if($record->doctorid == $clinic->doctorid)
											{
											 	for($i=0;$i<1;$i++)
												{ ?>
											 	<p class="doc-title">
											 		<?php echo $clinic -> clinic_name; ?>
											 	</p>
											 	<?php
											 	$clinic_image=explode(',',$clinic->clinic_images);
												
											  	if($clinic_image[0]!=''){
													foreach($clinic_image as $image)
													{ ?>
														<a class="fancybox"  rel="group" href="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>"><img src="/Ilaaj/uploads/clinics/<?php echo  '/' . $image; ?>" style="height: 50px;width: 50px;border-radius:5px; "></a>
													<?php 
													} }
												}
												break;
											}
										endforeach; ?> 
									</div>
								    
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<ul>
											<?php if($record->city && $record->state && $record->country){ ?>
											   <li class="fa fa-map-marker" style="font-size: 25px;">&nbsp;</li><span> <?php echo ucfirst($record->city).','.$record->state.','.$record->country; ?></span><br>
											<?php } ?>
											
											    
											<?php
												if(array_key_exists($record->doctorid, $time_slots)) 
													{
														$cl_id = $time_slots[$record->doctorid][0]->clinic_id;
														foreach($time_slots[$record->doctorid] as $slot):
														if($slot->clinic_id == $cl_id)
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
												        endforeach;	
														?>
														<div class="collapse" style="margin-left: 30px;" id="all_timings_<?php echo $record->doctorid?>">
																<?php
																foreach($time_slots[$record->doctorid] as $slot):
																if($slot->clinic_id == $cl_id)
																{ ?>
																	<div><?php echo ucfirst($slot->day).': '.$slot->time_from.'-'.$slot->time_to;?></div>
																<?php }
																endforeach; ?>
														</div>
														<a data-toggle="collapse" style="margin-left: 30px;color:black;" href="#all_timings_<?php echo $record->doctorid?>" area-expanded="false" area-controls="all_timings_<?php echo $record->doctorid?>">Show all</a><br>
													  
												 <?php } ?>
												  <?php if($record->phoneno){ ?>
													     <i class="fa fa-mobile" style="font-size: 25px;">&nbsp;</i><span style="margin-left: 5px;"><?php echo $record->phoneno; ?></span>
												   <?php }?>
										</ul>
									</div>
								</div>
								 <hr>
		                        <?php endforeach; ?>
                        	</div>
                      	</div>
					</div>
				</div>
			</div>
		</div>
</div>
 <script>
	function test(val)
	{
		location_val = $('input[type="checkbox"][name="location"]:checked').map(function(){
			return this.value; }).get();
			$.ajax({
				url:'<?php echo site_url('search/get_location'); ?>',
				type:'post',
				dataType:'json',
				data:
				{
					location:location_val,
					'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
				},
				success: function(data)
				{
					
				}
			});
	}
  	function fancy()
  	{
  		$(".fancybox").fancybox();
  	}
  </script>    
  <?php Assets::add_js('fancy()', "inline");  ?>