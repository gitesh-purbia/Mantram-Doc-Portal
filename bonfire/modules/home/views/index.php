<div class="complete-content">
	<div class="container full-width-container banner_n custom-banner-height">
		<div id="slider1_container" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
				top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
				top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			</div>
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<div>
					<img u="image" src="<?php echo Template::theme_url('images/slider_bck1.jpg')?>" />
				</div>
				<div>
					<img u="image" src="<?php echo Template::theme_url('images/slider2.jpg')?>" />
				</div>
				<div>
					<img u="image" src="<?php echo Template::theme_url('images/slider_bck.jpg')?>" />
				</div>
			</div>
			<div data-wow-offset="200" data-wow-delay="1.7s" class="col-xs-12 col-sm-10 col-md-10 content-tabs-wrap wow fadeInUp animated" style="visibility: visible;-webkit-animation-delay: 1.7s; -moz-animation-delay: 1.7s; animation-delay: 1.7s;">
			<?php $attributes = array('class' => 'searchform cf', 'id' => 'search_box', 'name' => 'search_box'); ?>
			<?php echo form_open('search/speciality', $attributes); ?>
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#speciality" id="search_speciality" data-toggle="tab">SPECIALITY</a>
				</li>
				<li>
					<a href="#doctor" id="search_doctor" data-toggle="tab">DOCTOR</a>
				</li>
				<li>
					<a href="#clinic" id="search_clinic" data-toggle="tab">CLINIC</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="speciality">
					<input type="text" id="specialities"  name="speciality" placeholder="Speciality:- eg: Dentist">
					<input type="hidden" value="" name="speciality_id" id="speciality_id">
				</div>
				<div class="tab-pane fade" id="doctor">
					<input type="text" id="doctors" name="doctor" placeholder="eg: Dr. XYZXYZ">
					<input type="hidden" value="" name="doctor_id" id="doctor_id">
				</div>
				<div class="tab-pane fade" id="clinic">
					<input type="text" id="clinics" name="clinic" placeholder="eg: ABC Dental Clinic">
					<input type="hidden" value="" name="clinic_id" id="clinic_id">
				</div>

			</div>
			<div>
				<button type="submit" >
					Search
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
		</div>
		<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"> </span>
		<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"> </span>
	</div>

	<!--Icon Boxes 1-->
	<div class="container">
		<div class="row">
			<div class="no-pad icon-boxes-1">

				<!--Icon-box-start-->
				<div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
					<div class="icon-box-3 wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="150">
						<div class="icon-boxwrap2">
							<i class="fa fa-medkit icon-box-back2"></i>
						</div>
						<div class="icon-box2-title">
							24 hour Service
						</div>
						<p>
							Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Ut eu nisl quis augue suscipit dignissim.
						</p>
						<!--<section class="color-10">
						<nav class="cl-effect-10">
						<a href="#" data-hover="Read More"><span>Read More</span></a>
						</nav>
						</section>-->
						<div class="iconbox-readmore">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>

				<!--Icon-box-start-->
				<div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
					<div class="icon-box-3 wow fadeInDown" data-wow-delay="0.9s" data-wow-offset="150">
						<div class="icon-boxwrap2">
							<i data-icon="\e609" class="icon-stethoscope icon-box-back2"></i>
						</div>
						<div class="icon-box2-title">
							Health Care Solutions
						</div>
						<p>
							Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Ut eu nisl quis augue suscipit dignissim.
						</p>
						<!--<section class="color-10">
						<nav class="cl-effect-10">
						<a href="#" data-hover="Read More"><span>Read More</span></a>
						</nav>
						</section>-->
						<div class="iconbox-readmore">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>

				<!--Icon-box-start-->
				<div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
					<div class="icon-box-3 wow fadeInUp" data-wow-delay="1.2s" data-wow-offset="150">
						<div class="icon-boxwrap2">
							<i class="icon-ambulance icon-box-back2"></i>
						</div>
						<div class="icon-box2-title">
							Advanced Technology
						</div>
						<p>
							Lorem ipsum dolor sit amet, consecte tur adipiscing elit. Ut eu nisl quis augue suscipit dignissim.
						</p>
						<!--<section class="color-10">
						<nav class="cl-effect-10">
						<a href="#" data-hover="Read More"><span>Read More</span></a>
						</nav>
						</section>-->
						<div class="iconbox-readmore">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>

				<!--Icon-box-start-->
				<div class="col-sm-6 col-xs-12 col-md-3 col-lg-3">
					<div class="icon-box-3 notViewed wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="150">
						<div class="icon-boxwrap2">
							<i class="fa fa-clock-o icon-box-back2"></i>
						</div>
						<div class="icon-box2-title">
							Opening Hours
						</div>
						<ul>
							<li>
								Monday - Friday <span class="ibox-right-span">8.00  - 18.00</span>
							</li>
							<li>
								Saturday <span class="ibox-right-span">8.00  - 16.00</span>
							</li>
							<li>
								Sunday <span class="ibox-right-span">8.00 - 13.00</span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div><!--Icon Boxes 1 end-->

	<div class="parallax-out wpb_row vc_row-fluid ihome-parallax">

		<div id="second" class="upb_row_bg vcpb-hz-jquery" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="ex-full">

			<div class="container">
				<div class="row">

					<div class="bg col-lg-4 col-sm-4 col-md-5 col-xs-12 notViewed wow fadeInUp" data-wow-delay="1.5s" data-wow-offset="200"></div>

					<div class="float-right col-lg-7 col-sm-7 col-md-7 col-xs-12">

						<div class="iconlist-wrap">
							<div class="subtitle notViewed wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="20">
								Why <span class="iconlist-mid-title">Choose</span> Us
							</div>
							<ul>
								<li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="50">
									<i class="icon-hospital2 icon-list-icons"></i>
									<div class="iconlist-content">

										<div class="iconlist-title">
											Great Infrastructure
										</div>
										<p class="iconlist-text">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
											doloremque laudantium, totam rem aperiam.
										</p>
									</div>

								</li>

								<li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="60">
									<i class="fa fa-user-md icon-list-icons"></i>
									<div class="iconlist-content">

										<div class="iconlist-title">
											Qualified Doctors
										</div>
										<p class="iconlist-text">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
											doloremque laudantium, totam rem aperiam.
										</p>
									</div>

								</li>

								<li class="notViewed wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="70">
									<i class="fa fa-ambulance icon-list-icons"></i>
									<div class="iconlist-content">

										<div class="iconlist-title">
											Emergency Departments
										</div>
										<p class="iconlist-text">
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
											doloremque laudantium, totam rem aperiam.
										</p>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<!--.story-->
			</div>
		</div>
		<!--#second-->

	</div>



	<div class="container">
		<div class="row">

			<!--Latest Post Start-->

			<div class="col-xs-12 col-sm-12 col-md-6 pull-left">

				<div class="latest-post-wrap pull-left wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="100">
					<div class="subtitle col-xs-12 no-pad col-sm-11 col-md-12 pull-left news-sub">
						latest news
					</div>

					<!--Post item-->
					<div class="post-item-wrap pull-left col-sm-6 col-md-12 col-xs-12">
						<img src="<?php echo Template::theme_url('images/news-1.jpg')?>" class="img-responsive post-author-img" alt="" />
						<div class="post-content1 pull-left col-md-9 col-sm-9 col-xs-8">
							<div class="post-title pull-left">
								<a href="#">Etiam tristique sagittis pulvinar</a>
							</div>
							<div class="post-meta-top pull-left">
								<ul>
									<li>
										<i class="icon-calendar"></i>25 DEC 2013
									</li>
									<li>
										<a href="#"><i class="icon-comments"></i>3</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="post-content2 pull-left">
							<p>
								Integer iaculis egestas odio, vel dictum turpis placerat id elle se nisl eget odio eleifend, nec blandit libero porta aliquam vel veh dui nam sit amet ultricies sapien.
								<br />
								<span class="post-meta-bottom"><a href="">Continue Reading...</a></span>
							</p>
						</div>
					</div>

					<!--Post item-->
					<div class="post-item-wrap pull-left col-sm-6 col-md-12 col-xs-12">
						<img src="<?php echo Template::theme_url('images/news-2.jpg')?>" class="img-responsive post-author-img" alt="" />
						<div class="post-content1 pull-left col-md-9 col-sm-9 col-xs-8">
							<div class="post-title pull-left">
								<a href="#">Etiam tristique sagittis pulvinar</a>
							</div>
							<div class="post-meta-top pull-left">
								<ul>
									<li>
										<i class="icon-calendar"></i>25 DEC 2013
									</li>
									<li>
										<a href="#"><i class="icon-comments"></i>3</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="post-content2 pull-left">
							<p>
								Integer iaculis egestas odio, vel dictum turpis placerat id elle se nisl eget odio eleifend, nec blandit libero porta aliquam vel veh dui nam sit amet ultricies sapien.
								<br />
								<span class="post-meta-bottom"><a href="">Continue Reading...</a></span>
							</p>
						</div>
					</div>

					<a href="#" class="dept-details-butt posts-showall">Show All</a>

				</div>
			</div>

			<!--Latest Post End-->

			<!--Departments Start-->

			<div class="col-xs-12 col-sm-12 col-md-6 pull-right department-wrap wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">

				<div class="subtitle pull-left">
					Departments
				</div>

				<div id="imedica-dep-accordion">
					<!-- Accordion Item -->
					<h3><i class="icon-ambulance dept-icon"></i><span class="dep-txt">Primary Health Care</span></h3>
					<div>

						<img src="<?php echo Template::theme_url('images/dep-dummy.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>

							<div class="vspacer"></div>
						</div>
					</div>

					<!-- Accordion Item -->
					<h3><i class="icon-stethoscope dept-icon"></i><span class="dep-txt">Outpatient Rehab</span></h3>
					<div>
						<img src="<?php echo Template::theme_url('images/dept-01.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>
							<div class="vspacer"></div>
						</div>
					</div>

					<!-- Accordion Item -->
					<h3><i class="icon-heart dept-icon"></i><span class="dep-txt">Ophthalmology Clinic</span></h3>
					<div>
						<img src="<?php echo Template::theme_url('images/dept-02.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>
							<div class="vspacer"></div>
						</div>
					</div>

					<!-- Accordion Item -->
					<h3><i class="icon-stethoscope dept-icon"></i><span class="dep-txt">Outpatient Surgery</span></h3>
					<div>
						<img src="<?php echo Template::theme_url('images/dept-03.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>
							<div class="vspacer"></div>
						</div>
					</div>

					<!-- Accordion Item -->
					<h3><i class="icon-medkit dept-icon"></i><span class="dep-txt">Cardiac Clinic</span></h3>
					<div>
						<img src="<?php echo Template::theme_url('images/dept-04.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>
							<div class="vspacer"></div>
						</div>
					</div>

					<!-- Accordion Item -->
					<h3 class="last-child-ac ilast-child-acc"><i class="icon-heart dept-icon"></i><span class="dep-txt">Primary Health Care</span></h3>
					<div>
						<img src="<?php echo Template::theme_url('images/dept-05.jpg')?>" class="img-responsive dept-author-img-desk col-md-4" alt="" />
						<div class="dept-content pull-left col-md-7 col-lg-8">
							<div class="dept-title pull-left">
								Donec scelerisque, leo non eleifend
							</div>
							<p>
								Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. amet, consecte tur adipiscing elitut eu ni.
							</p>

							<a href="#" class="dept-details-butt">Details</a>
							<div class="purchase-strip-blue dept-apponit-butt">
								<div class="color-4">
									<p class="ipurchase-paragraph">
										<button class="icon-calendar btn btn-4 btn-4a notViewed">
											Appointment
										</button>
									</p>
								</div>
							</div>
							<div class="vspacer"></div>
						</div>
					</div>

				</div>

			</div>

			<!--Departments End-->
		</div>
	</div>

	<!--Footer Start-->

</div>
<div>
	<div id="settings">
		<div class="colors">
			<div class="panel-title">
				Style Switcher
			</div>
			<div class="panel-color-title">
				Color Schemes
			</div>
			<ul>
				<li>
					<a title="maroon" class="color1 color-switch"><i class="fa fa-check"></i></a>
				</li>
				<li>
					<a title="grey" class="color2 color-switch"><i class="fa fa-check"></i></a>
				</li>
				<li>
					<a title="green" class="color3 color-switch"><i class="fa fa-check"></i></a>
				</li>
				<li>
					<a title="orange" class="color4 color-switch"><i class="fa fa-check"></i></a>
				</li>
				<li>
					<a title="red" class="color5 color-switch"><i class="fa fa-check"></i></a>
				</li>
				<li>
					<a title="blue" class="color6 color-switch selected"><i class="fa fa-check"></i></a>
				</li>

			</ul>
		</div>
		<a href="javascript:void(0);" class="settings_link showup"><i class="fa fa-cog"></i></a>
	</div>
</div>
<script type="text/javascript">
		function init()
	{

	/* ==================================doctors======================================= */

	$('#search_doctor').click(function()
	{
	var url = 'http://localhost/ilaaj_front/search/doctor/';
	$("#search_box").attr("action", url);
	});

	$('#doctors').keypress(function()
	{
	var doctors = this.value;
	var url = 'http://localhost/ilaaj_front/search/doctor/'+doctors;
	$("#search_box").attr("action", url);
	});

	$("#doctors").autocomplete({
	source: function( request, response )
	{
	$.ajax({
	url: "<?php echo site_url('doctors/get_doctors')?>",
		dataType: "json",
		data: {
		doctor: request.term
		},
		success: function( data )
		{
		response(
		$.map(data, function(item) {
		return {
		label: item.display_name

		}
		})
		);
		}
		});
		},
		minLength: 1,
		select: function(event, ui )
		{
		if(ui.item) {
		$(event.target).val(ui.item.label);
		$('#doctor_id').val(ui.item.label);

		var id=document.getElementById('doctor_id').value;
		var url = 'http://localhost/ilaaj_front/search/doctor/'+id;
		$("#search_box").attr("action", url);

		}
		return false;
		},
		open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
		},
		close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
		}
		});

		/*================= specialities===================================== */
		$('#search_speciality').click(function()
		{
		var url = 'http://localhost/ilaaj_front/search/speciality/';
		$("#search_box").attr("action", url);
		});

		$('#specialities').keypress(function() {
		var specialities = this.value;
		var url = 'http://localhost/ilaaj_front/search/speciality/'+specialities;
		$("#search_box").attr("action", url);
		});

		$("#specialities").autocomplete({
		source: function( request, response )
		{
		$.ajax({
		url: "<?php echo site_url('specialities/get_specialities')?>",
		dataType: "json",
		data: {
		speciality: request.term
		},
		success: function( data )
		{
		response(
		$.map(data, function(item) {
		return {
		label: item.name

		}
		})
		);
		}
		});
		},
		minLength: 1,
		select: function( event, ui )
		{
		if(ui.item)
		{
		$(event.target).val(ui.item.label);
		$('#speciality_id').val(ui.item.label);

		var spl_id=document.getElementById('speciality_id').value;
		var url = 'http://localhost/ilaaj_front/search/speciality/'+spl_id;
		$("#search_box").attr("action", url);

		}
		return false;
		},
		open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
		},
		close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
		}
		});

	<?php #======================================for clinic======================================================================= ?>

			$('#search_clinic').click(function()
	{
	var url = 'http://localhost/ilaaj_front/search/clinic/';
	$("#search_box").attr("action", url);
	});

	$('#clinics').keypress(function() {
	var clinic = this.value;
	var url = 'http://localhost/ilaaj_front/search/clinic/'+clinic;
	$("#search_box").attr("action", url);

	});

	$("#clinics").autocomplete({
	source: function( request, response )
	{
	$.ajax({
	url: "<?php echo site_url('clinics/get_clinics')?>
		",
		dataType: "json",
		data: {
		clinics: request.term
		},
		success: function( data )
		{
		response(
		$.map(data, function(item) {
		return {
		label: item.name

		}
		})
		);
		}
		});
		},
		minLength: 1,
		select: function( event, ui )
		{
		if(ui.item)
		{
		$(event.target).val(ui.item.label);
		$('#clinic_id').val(ui.item.label);

		var clinic_id=document.getElementById('clinic_id').value;
		var url = 'http://localhost/ilaaj_front/search/clinic/'+clinic_id;
		$("#search_box").attr("action", url);

		}
		return false;
		},
		open: function() {
		$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
		},
		close: function() {
		$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
		}
		});

		//========================================slider=============================================================

		var _CaptionTransitions = [];
		_CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
		_CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
		_CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
		_CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
		_CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
		_CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
		_CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
		_CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
		_CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
		_CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
		_CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

		var options = {
		$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
		$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
		$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
		$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

		$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
		$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
		$SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
		$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
		//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
		//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
		$SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
		$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
		$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
		$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
		$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
		$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

		$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
		$Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
		$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
		$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
		$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
		},

		$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
		$Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
		$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
		$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
		$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
		$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
		$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
		$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
		$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
		},

		$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
		$Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
		$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
		$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
		$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
		}
		};

		var jssor_slider1 = new $JssorSlider$("slider1_container", options);

		//responsive code begin
		//you can remove responsive code if you don't want the slider scales while window resizes
		function ScaleSlider() {
		var bodyWidth = document.body.clientWidth;
		if (bodyWidth)
		jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
		else
		window.setTimeout(ScaleSlider, 30);
		}
		ScaleSlider();

		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code end

		}
</script>
<?php Assets::add_js('init()', "inline"); ?>