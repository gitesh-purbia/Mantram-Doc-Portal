<section class="complete-content content-footer-space">
	<div class="about-intro-wrap pull-left">

		<div class="bread-crumb-wrap ibc-wrap-3">
			<div class="container">
				<!--Title / Beadcrumb-->
				<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
					<div class="bread-heading">
						<h1>Lab's Registration</h1>
					</div>
					<div class="bread-crumb pull-right">
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about-us.html">Lab's Registration</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">

				<!-- Blog box -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side-bar-blog">

					<!--Sidebar-item-->
					<div class="catagory-list wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="0">

						<div class="side-blog-title">
							Catagories
						</div>
						<ul>
							<li>
								<a href="#"><i class="fa fa-angle-right about-list-arrows"></i>Labs (3)</a>
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

					<!--Sidebar-item-->
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

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-left no-pad">
					<div class="form-widget wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="200" style="padding-top: 0;">

						<div class="appointment-form-title">
							<i class="icon-hospital2 appointment-form-icon"></i>Register
						</div>
						<?php
						$attributes = array('id' => 'labs_registration_form', 'name' => 'labs_registration_form', 'autocomplete' => 'off', 'class' => 'appt-form');
						echo form_open('labs/registration', $attributes);
						?>
						<?php
						echo Template::message();
						?>
						<input required="required" type="text" name="lln" class="appt-form-txt" placeholder="Lab License Number(required)" value="<?php echo set_value('lln', isset($lab['lln']) ? $lab['lln'] : ''); ?>" />
						<input required="required" type="text" name="lab_name" class="appt-form-txt" placeholder="Lab Name(required)" value="<?php echo set_value('lab_name', isset($lab['lab_name']) ? $lab['lab_name'] : ''); ?>" />
						<input required="required" type="text" name="mobile" class="appt-form-txt" placeholder="Mobile Number(required)" value="<?php echo set_value('mobile', isset($lab['mobile']) ? $lab['mobile'] : ''); ?>" />
						<input required="required" type="email" name="email" class="appt-form-txt" placeholder="Email(required)" value="<?php echo set_value('email', isset($lab['email']) ? $lab['email'] : ''); ?>" />
						<input required="required" type="password" name="password" class="appt-form-txt" placeholder="Password" />
						<input required="required" type="password" name="pass_confirm" class="appt-form-txt" placeholder="Confirm Password" />

						<section class="color-7" id="btn-click">
							<button type="submit" class="icon-mail btn2-st2 btn-7 btn-7b iform-button">
								Submit
							</button>
						</section>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>

			<!-- Blog box -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side-bar-blog-bottom">

				<!--Sidebar-item-->
				<div class="catagory-list">

					<div class="side-blog-title">
						Catagories
					</div>
					<ul>
						<li>
							<a href=""><i class="fa fa-angle-right about-list-arrows"></i>labs (3)</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-right about-list-arrows"></i>Disease Outbreak (7)</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-right about-list-arrows"></i>Types of Treatment (4)</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-right about-list-arrows"></i>Medication Side Effects (5)</a>
						</li>
						<li>
							<a href=""><i class="fa fa-angle-right about-list-arrows"></i>Health and Fitness (2)</a>
						</li>
					</ul>

				</div>

				<!--Sidebar-item-->
				<div class="post-tabs">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#popular1" data-toggle="tab">Popular</a>
						</li>
						<li>
							<a href="#recent1" data-toggle="tab">Recent</a>
						</li>
						<li>
							<a href="#comment1" data-toggle="tab"><i class="icon-comments post-icon"></i>&nbsp;</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content">

						<!--popular posts-->
						<div class="tab-pane fade in active" id="popular1">

							<div class="popular-post-box">
								<img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

							<div class="popular-post-box">

								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

							<div class="popular-post-box">
								<img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

						</div><!--popular posts end-->

						<!--Recent posts-->
						<div class="tab-pane fade" id="recent1">

							<div class="popular-post-box">
								<img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

							<div class="popular-post-box">

								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

							<div class="popular-post-box">
								<img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

						</div><!--Recent posts End-->

						<!--Comments-->
						<div class="tab-pane fade" id="comment1">

							<div class="popular-post-box">

								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>
							<div class="popular-post-box">

								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>
							<div class="popular-post-box">

								<div class="post-title-side">
									Etiam tristique niba
								</div>
								<div class="post-date-side">
									April, 7th, 2014
								</div>
							</div>

						</div><!--Comments end-->

					</div><!-- Tab panes end-->

				</div><!-- side item-end -->

				<!--Sidebar-item-->
				<div class="twitter-widget">

					<div class="side-blog-title">
						Recent Tweets
					</div>

					<div class="tweets-box">
						<i class="icon-social-twitter tweets-box-icon"></i>
						<p>
							<span class="ipost-author">@jim_oliver</span> Curabitur rhoncus lorem a tortor luctus mollis non bibendum nisl. Pellentesque eros massa.
							<br />
							<span class="date-post-widget"><a href="">2 days ago</a></span>
						</p>
					</div>

					<div class="tweets-box">
						<i class="icon-social-twitter tweets-box-icon"></i>
						<p>
							<span class="ipost-author">@jim_oliver</span> Curabitur rhoncus lorem a tortor luctus mollis non bibendum nisl. Pellentesque eros massa.
							<br />
							<span class="date-post-widget"><a href="">2 days ago</a></span>
						</p>
					</div>

					<div class="tweets-box">
						<i class="icon-social-twitter tweets-box-icon"></i>
						<p>
							<span class="ipost-author">@jim_oliver</span> Curabitur rhoncus lorem a tortor luctus mollis non bibendum nisl. Pellentesque eros massa.
							<br />
							<span class="date-post-widget"><a href="">2 days ago</a></span>
						</p>
					</div>

				</div>
				<!--Sidebar-item end-->

				<!--Sidebar-item-->
				<div class="tags-widget">

					<div class="side-blog-title">
						Tags
					</div>

					<ul>
						<li>
							<a href="">labs</a>
						</li>
						<li>
							<a href="">nunc</a>
						</li>
						<li>
							<a href="">Disease</a>
						</li>
						<li>
							<a href="">fermentum</a>
						</li>
						<li>
							<a href="">loremin</a>
						</li>
						<li>
							<a href="">haaoti</a>
						</li>
						<li>
							<a href="">vestibulumes</a>
						</li>
						<li>
							<a href="">tortor</a>
						</li>
						<li>
							<a href="">fila</a>
						</li>
					</ul>

				</div><!--Sidebar-item end-->

				<!--Sidebar-item-->
				<div class="form-widget">

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
						<section class="color-7" id="btn-click1">
							<button class="icon-mail btn2-st2 btn-7 btn-7b iform-button-60">
								Submit
							</button>
						</section>
					</form>

				</div><!--Sidebar-item end-->

				<!--Sidebar-item-->
				<div class="collapse-widget-side">

					<div id="accordion-blog2">

						<h3><i class="collapse-cheveron"></i><span class="blog-collapse-title">Outpatient Rehab</span></h3>
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
									Lorem ipsum dolor sit amet, consecte tur adipiscing elitut eu nisl quis augue suscipit dignissim. Duis vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt. vulputate nisl sit amet feugiat tincidunt.
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

			<!--Sidebar-end-->

		</div>
	</div>
</section>