
 <section class="complete-content content-footer-space">
    
      <!--Mid Content Start-->
      
      
       <div class="about-intro-wrap pull-left">
       
       <div class="bread-crumb-wrap ibc-wrap-5">
      	<div class="container">
      <!--Title / Beadcrumb-->
           	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
              	<div class="bread-heading"><h1>Doctors Search</h1></div>
                  <div class="bread-crumb pull-right">
                  <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Doctors Search</a></li>
                  </ul>
                  </div>
              </div>
           </div>
       </div>
       
           <div class="container">
           	
              <div class="row">
              <!--About-us top-content-->

    
       
          	<div class="col-md-10 col-xs-10 col-sm-12 pull-left subtitle ibg-transparent">Doctors Search</div>
              
              
              
               <div class="col-xs-10 col-sm-12 col-md-12 pull-left doctors-3col-tabs no-pad">
           
           		
                  <div class="content-tabs tabs col-xs-10 col-sm-10">
              
              
                      <div class="tab-content">
                      
                        <div class="tab-pane fade fade-slow in active" style="border: solid 1px #eee;" >
                        <?php foreach($records as $record): ?>
                       <div class="row" >
						   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        	<img alt="" class="img-responsive" style="background-color: gray;height: 100px;width: 100px;border-radius: 10px;" /> 
							</div>
										
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										
							
                          	<div class="doc-name-class">Dr.<?php echo $record->first_name; ?>&nbsp;<?php echo $record->middle_name; ?>&nbsp;<?php echo $record->last_name; ?> </div><span class="doc-title"><b> <?php echo $record->education;  ?></b></span>
                          	
                          	    <p><?php echo $record->speciality; ?></p>
                              <img  style="background-color: gray;height: 50px;width: 50px;border-radius: 5px;" />
                              <img  style="background-color: gray;height: 50px;width: 50px;border-radius: 5px;" />
                              <img  style="background-color: gray;height: 50px;width: 50px;border-radius: 5px;" />
                              <img  style="background-color: gray;height: 50px;width: 50px;border-radius: 5px;" />
										
							</div>
								    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<p>Location: <?php echo $record->address_line1; ?></p>
											<p>Time:</p>
										</div>
						 </div>
									<hr>
									
                        <?php endforeach; ?>
                       
                     
                         
                     
                       
                        </div>
                        
                        
                      </div>
           
             	 </div> <!--Mid Services End-->

               </div>
           
           </div>
           </div>

      <!--Mid Content End-->
      
      </div>