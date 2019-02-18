<div class="profile">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
		<div class="row">
            
            <div class="col-lg-3 col-sm-6">                  
                
                    <div class="card hovercard">
                        <div class="cardheader"></div>
                		<div class="avatar">
                    		<img alt="" src="<?=base_img()."profile/profile.jpg"?>">
                		</div>
                		<div class="info">
                    		<div class="title">Faisal Alfareza</div> 
                            <div class="desc">Developer at PT. Visionet Internasional</div>
                            <div class="desc">Lippo Cikarang, east of Jakarta</div> 
                		</div>
                		<div class="bottom">  
                        	<a data-toggle="tab" href="#edit" class='btn btn-info btn-raised btn-sm' title="Edit Profile">
                                <i class='fa fa-edit'></i>
                            </a>
                        	<a data-toggle="tab" href="#history" class='btn btn-info btn-raised btn-sm' title="My History">
                                <i class='fa fa-history'></i>
                            </a>
                        	<a data-toggle="tab" href="#chpass" class='btn btn-warning btn-raised btn-sm' title="Change Password">
                                <i class='fa fa-key'></i>
                            </a>                                   
						</div>
            		</div>   
                
                <!--
                    <div class="social-posisi">
                    <a href="https://www.facebook.com/Lippo-Cikarang-Tbk-152346048199453/?fref=ts" class="btn btn-primary btn-raised" style="color:white"><i class='fa fa-facebook-square'></i></a> 
                    <a class="btn btn-info btn-raised" style="color:white"><i class='fa fa-twitter-square'></i></a>             
                    <a class="btn btn-danger btn-raised" style="color:white"><i class='fa fa-youtube-square'></i></a>
                    </div>
                -->
                        
            </div>    
            
            <div class="tab-content">
                <div id="edit" class="tab-pane fade in active">
                    <form id="form-edit" action="<?php echo base_url()."user/edit_profile" ?>" method="post" enctype="multipart/form-data">
                    <!-- first coloumn -->
                    <div class="col-lg-9 col-sm-6">    
                    <div class="col-lg-6 col-sm-6">
                    <button class="btn btn-info btn-raised btn-sm"><i class='fa fa-child'></i> &nbsp; Personal</button>
                        <!-- content of edit profile-->     
                                <div class="panel panel-default">
                                    <div class="panel-body">   

                                        <table class="inputtwice">                                                     
          			                       <div class="form-group">  
            			                     <label class="control-label" for="inputDefault">Avatar</label> <br>
                                              <tr> 
                                                <td>
                                                  <a data-toggle="tab" href="#takepict" title="Take Picture">
                                                      <span class="btn btn-raised btn-info btn-sm btn-nav getapp" style="color:dodgerblue"><i class='fa fa-camera'></i>
                                                      &nbsp; Take Picture
                                                      </span>
                                                  </a>
                                                </td>
                                                <td>
                                                  <div class="fileUpload btn btn-raised btn-info btn-sm btn-nav getapp">
                                                  <span><i class='fa fa-folder-open'></i> &nbsp; From computer</span>
                                                  <input class="upload" type="file" name="avatar" accept="image/*" title="Upload from my computer" />
                                                  </div>
                                                </td>
                                              </tr>    
          			                       </div>
                                        </table>   

                               <div class="form-group">  
            			         <label class="control-label" for="inputDefault">Username</label> 
            			         <input type="text" name="username" class="form-control" id="inputDefault" placeholder="Entry your @username" required>    
          			           </div>                                          
                               <div class="form-group">  
            			         <label class="control-label" for="inputDefault">Full Name</label> 
            			         <input type="text" name="fullName" class="form-control" id="inputDefault" placeholder="Entry your first name and last name" required>    
          			           </div>    
                            
                               <table class="inputtwice">            
                               <tr> 
                                 <td>   
          			               <div class="form-group">   
            			             <label class="control-label" for="inputDefault">Place of Birth</label> 
            			             <input type="text" name="placeOfBirth" class="form-control" id="inputDefault" placeholder="Where you from" required>
          			               </div>
                                 </td>      

                                 <td>               
          			               <div class="form-group">   
                                     <label class="control-label" for="inputDefault">Date of Birth</label> 
            			             <input type="text" name="dateOfBirth" class="form-control" id="inputDefault" placeholder="When you born" required>
                                   </div>
                                 </td>     
                               </tr>
                               </table>       

          			           <div class="form-group">   
            			         <label class="control-label" for="inputDefault">Address</label> 
            			         <input type="text" name="address" class="form-control" id="inputDefault" placeholder="Where do you live" required>
          			           </div>
                                        
                                    </div> 
                                </div>
                        <!-- end content profile -->    
                    </div>
                    
                    <!-- second coloumn -->
                    <div class="col-lg-6 col-sm-6">
                    <button class="btn btn-info btn-raised btn-sm"><i class='fa fa-phone-square'></i> &nbsp; Contact</button>    
                        <!-- content of edit profile-->     
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        
          			           <div class="form-group">   
            			         <label class="control-label" for="inputDefault">Email</label> 
            			         <input type="email" name="email" class="form-control" id="inputDefault" placeholder="example : lippo-cikarang@mail.com" required>
          			           </div>    
                                        
          			           <div class="form-group">   
            			         <label class="control-label" for="inputDefault">Phone Number</label> 
            			         <input type="text" name="phone" class="form-control" id="inputDefault" placeholder="Which number that we can contact" required>
          			           </div>  
                                        
                                    </div> 
                                </div>
                        <!-- end content profile -->
                        
                    <button class="btn btn-info btn-raised btn-sm"><i class='fa fa-list-alt'></i> &nbsp; Created at</button>    
                        <!-- content of edit profile-->     
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                           
          			           <div class="form-group">   
            			         <label class="control-label" for="inputDefault">at</label> 
            			         <input type="text" name="createdAt" class="form-control" id="inputDefault" placeholder="When you created" readonly>
          			           </div> 
                               <table class="inputtwice">            
                               <tr> 
                                 <td>   
                                    <div class="form-group">
                                        <div class="radio radio-primary">
                                        <label>
                                        <input type="radio" name="gender" id="male" value="male">
                                        <i class='fa fa-male'></i> &nbsp; Male
                                        </label>
                                        </div>
                                     </div>    
                                </td>      
                                 <td>               
                                    <div class="form-group">
                                        <div class="radio radio-primary">
                                        <label>
                                        <input type="radio" name="gender" id="female" value="female" checked>
                                        <i class='fa fa-female'></i> &nbsp; Female
                                        </label>
                                        </div>
                                     </div>    
                                 </td>     
                               </tr>
                               </table>                                         
                                        
                                    </div> 
                                </div>
                        <!-- end content profile -->
                        <div class="col-lg-8 col-sm-6"></div>
                        <div class="col-lg-4 col-sm-6">
                        <div class="submitForm">
                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class='fa fa-check-square'></i> &nbsp; Change</button>
                        </div>    
                        </div>    
                        
                    </div>                        
                    </div>    
                        
                    </form>    
                </div>
                <div id="history" class="tab-pane fade">
                    <div class="col-lg-3 col-sm-6">
                    <button class="btn btn-info btn-raised btn-sm"><i class='fa fa-history'></i> &nbsp; My History</button>
                        <!-- content of edit profile-->
                                <h5 class="historyTime">Today - <?php echo date('D, d M Y') ?></h5>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="history">    
                                        <table align="center">
                                        <tr>
                                            <td>
                                                <h5 class="act">Checked in</h5>
                                                <p class="dest">at Pondok Blimbing Indah</p>
                                            </td>
                                            <td class="tdright"><i class='fa fa-map-marker'></i></td>
                                        </tr>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="history">    
                                        <table align="center">
                                        <tr>
                                            <td>
                                                <h5 class="act">You have updated</h5>
                                                <p class="dest">your profile information</p>
                                            </td>
                                            <td class="tdright"><i class='fa fa-refresh'></i></td>
                                        </tr>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                        <!-- end content profile -->   
                    </div>
                </div>
                
                <div id="chpass" class="tab-pane fade">
                    <div class="col-lg-3 col-sm-6">
                    <form id="form-chpass" action="<?php /*echo base_url()."auth/cek_login"*/ ?>" method="post">    
                    <button class="btn btn-warning btn-raised btn-sm"><i class='fa fa-key'></i> &nbsp; Change Password </button>
                        <!-- content of edit profile-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                               <div class="form-group">  
            			         <label class="control-label" for="inputDefault">Old Password</label> 
            			         <input type="password" name="oldpass" class="form-control" id="inputDefault" placeholder="Entry your old password" required>    
          			           </div>  
                               <div class="form-group">  
            			         <label class="control-label" for="inputDefault">New Password</label> 
            			         <input type="password" name="newpass" class="form-control" id="inputDefault" placeholder="Entry your new password" required>    
          			           </div>
                               <div class="form-group">  
            			         <label class="control-label" for="inputDefault">Retype New Password</label> 
            			         <input type="password" name="newpass" class="form-control" id="inputDefault" placeholder="Retype New Password" required>    
          			           </div> 
                        </div>
                    </div> 
                        <div class="col-lg-3 col-sm-6"></div>
                        <div class="col-lg-9 col-sm-6">
                        <div class="submitForm">
                        <button type="submit" class="btn btn-warning btn-raised btn-sm"><i class='fa fa-check-square'></i> &nbsp; Change Password</button>
                        </div>    
                        </div>                          
                        <!-- end content-->
                    </form>    
                    </div>
                </div>
                
                <div id="takepict" class="tab-pane fade">
                    <div class="col-lg-4 col-sm-6">
                    <button class="btn btn-info btn-raised btn-sm"><i class='fa fa-camera'></i> &nbsp; Take Picture</button>
                        <!-- content of edit profile-->
	                       
                           <!-- First, include the JPEGCam JavaScript Library -->
	                       <script type="text/javascript" src="<?=base_js()."webcam.js"?>"></script>
	
	                       <!-- Configure a few settings -->
	                       <script language="JavaScript">
		                      webcam.set_api_url('webcam.php');
		                      webcam.set_quality( 100 ); // JPEG quality (1 - 100)   
		                      webcam.set_shutter_sound( true ); // play shutter click sound
	                       </script>
	
	                       <!-- Next, write the movie to the page at 320x240 -->
                           <br>
                           <div class="webcam">
	                       <script language="javascript"> document.write( webcam.get_html(325, 325) ); </script>
	
	                       <!-- Some buttons for controlling things -->
	                       <br/>
                        
                           <form>
                               <button onClick="webcam.configure()" class="btn btn-raised btn-info btn-sm btn-nav getapp"><i class='fa fa-gears'></i> &nbsp; Configure</button>
                               <button onClick="take_snapshot()" class="btn btn-raised btn-info btn-sm btn-nav getapp"><i class='fa fa-circle'></i> &nbsp; Snapshot</button>
	                       </form>
                           </div>   
	
	                       <!-- Code to handle the server response (see test.php) -->
	                       <script language="JavaScript">
		                      webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		                      function take_snapshot() {
			                     // take snapshot and upload to server
			                     document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
			                     webcam.snap();
		                      }
		
		                      function my_completion_handler(msg) {
			                     // extract URL out of PHP output
			                     if (msg.match(/(http\:\/\/\S+)/)) {
				                    var image_url = RegExp.$1;
				                    // show JPEG image in page
				                    document.getElementById('upload_results').innerHTML = 
					                   '<h1>Upload Successful!</h1>' + 
					                   '<h3>JPEG URL: ' + image_url + '</h3>' + 
					                   '<img src="' + image_url + '">';
				                    // reset camera for another shot
				                    webcam.reset();
			                     }
                                 else alert("PHP Error: " + msg);
		                         }
	                       </script>
                    
                           <div id="upload_results" style="background-color:#eee;"></div>
                    
                        <!-- end content profile -->   
                    </div>    
                </div>
            </div>            
            
		</div>
        <!-- end row-->

	</div>
    <!-- end container -->
</div>
