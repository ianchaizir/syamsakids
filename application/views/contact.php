
        <div id="contactUs">
        	<div id="title">
            <h2>CONTACT US</h2>    
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    </p>
			 </div> <!-- end title -->
        	<div id="inquiries">

        		<?php foreach ($mainContacts as $mainContact): ?>
        			<?php if (isset($mainContact->name) && $mainContact->name <> '-'): ?>
                        <h2><?php echo $mainContact->name; ?></h2>
                    <?php endif; ?>

                    <p>
                        <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-' || isset($mainContact->phone2) && $mainContact->phone2 <> '-' || isset($mainContact->fax) && $mainContact->fax <> '-'): ?>
                            <label><?php echo 'Phone Numbers: ';?></label>
                            <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-' || isset($mainContact->phone2) && $mainContact->phone2 <> '-'): ?>
                                <?php echo '<br>'. 'Office:'; ?>
                                <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-'): ?>
                                    <?php echo $mainContact->phone1; ?>
                                <?php endif; ?>
                                <?php if (isset($mainContact->phone2) && $mainContact->phone2 <> '-'): ?>
                                    <?php echo ' / ' . $mainContact->phone2; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (isset($mainContact->fax) && $mainContact->fax <> '-'): ?>
                                <?php echo '<br>'. 'Fax:' . $mainContact->fax; ?>
                            <?php endif; ?>
                            </br>
                        <?php endif; ?>

                        <?php if (isset($mainContact->email1) && $mainContact->email1 <> '-' || isset($mainContact->email2) && $mainContact->email2 <> '-'): ?>
                            <label><?php echo '<br>'. 'Email Address: '; ?></label>
                            <?php if (isset($mainContact->email1) && $mainContact->email1 <> '-'): ?>
                                <?php echo '<br>'. $mainContact->email1; ?>
                            <?php endif; ?>
                            <?php if (isset($mainContact->email2) && $mainContact->email2 <> '-'): ?>
                                <?php echo '<br>'. $mainContact->email2; ?>
                            <?php endif; ?>
                            </br>
                        <?php endif; ?>
                        
                        <?php if (isset($mainContact->Address) && $mainContact->Address <> '-'): ?>
                            <label><?php echo '<br>'. 'Address: '; ?></label>
                            <?php echo '<br>'. $mainContact->Address; ?>
                        <?php endif; ?>
                    </p>                    
        		<?php endforeach; ?>

	        	<div class="guestbook">
	        			<?php
							echo form_open('contact/submit', array('id' => 'guestbook_form'));
							echo form_label('*Your Name :');
							echo form_input('name','', 'id="name"');
							echo form_label('*Your E-mail :');
							echo form_input('email','', 'id="email"');
							echo form_label('Subject :');
							echo form_input('subject','', 'id="subject"');
							echo form_label('Your Message :');
							$data = array('name' => 'message', 'cols' => 35, 'rows' => 5);
							echo form_textarea($data, '', 'id="message"');
							echo form_submit('submit','Submit','id="submit"');
							echo form_close();
						?>

						<?php echo validation_errors('<p class="error">'); ?>
	        	</div><!-- end guestbook -->
        	</div> <!-- end inquiries -->

        	<div id="agent">
        		<h2>OUR AGENTS :</h2>
	            <?php foreach ($otherContacts as $otherContact): ?>
        			<?php if (isset($otherContact->name) && $otherContact->name <> '-'): ?>
                        <h3><?php echo '</br>'. $otherContact->name; ?></h3>
                    <?php endif; ?>
	                <P id="otherContacts">
	                    <?php if (isset($otherContact->Address) && $otherContact->Address <> '-'): ?>
	                        <?php echo $otherContact->Address; ?>
	                    <?php endif; ?>

                        <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-' || isset($mainContact->phone2) && $mainContact->phone2 <> '-' || isset($mainContact->fax) && $mainContact->fax <> '-'): ?>
	                        </br>
	                        <?php if (isset($otherContact->phone1) && $otherContact->phone1 <> '-' || isset($otherContact->phone2) && $otherContact->phone2 <> '-'): ?>
	                            <?php echo '</br>'. 'Phone: '; ?>
	                            <?php if (isset($otherContact->phone1) && $otherContact->phone1 <> '-'): ?>
	                                <?php echo $otherContact->phone1; ?>
	                            <?php endif; ?>
	                            <?php if (isset($otherContact->phone2) && $otherContact->phone2 <> '-'): ?>
	                                <?php echo ' / ' . $otherContact->phone2; ?>
	                            <?php endif; ?>
	                        <?php endif; ?>

	                        <?php if (isset($otherContact->fax) && $otherContact->fax <> '-'): ?>
	                            <?php echo '</br>'. 'Fax: ' . $otherContact->fax; ?>
	                        <?php endif; ?>
	                    <?php endif; ?>

	                    <?php if (isset($otherContact->email1) && $otherContact->email1 <> '-' || isset($otherContact->email2) && $otherContact->email2 <> '-'): ?>
	                        </br>
	                        <?php echo '</br>'. 'Email: '; ?>
	                        <?php if (isset($otherContact->email1) && $otherContact->email1 <> '-'): ?>
	                            <?php echo $otherContact->email1; ?>
	                        <?php endif; ?>
	                        <?php if (isset($otherContact->email2) && $otherContact->email2 <> '-'): ?>
	                            <?php echo ' / ' . $otherContact->email2; ?>
	                        <?php endif; ?>
	                    <?php endif; ?>

	                    <?php if (isset($otherContact->social1) && $otherContact->social1 <> '-' || isset($otherContact->social2) && $otherContact->social2 <> '-' || isset($otherContact->social3) && $otherContact->social3 <> '-'): ?>
	                        </br>
	                        <?php if (isset($otherContact->social1) && $otherContact->social1 <> '-'): ?>
		                        <?php echo '</br>'. 'Facebook: '; ?>
	                            <?php echo $otherContact->social1; ?>
	                        <?php endif; ?>
	                        <?php if (isset($otherContact->social2) && $otherContact->social2 <> '-'): ?>
		                        <?php echo '</br>'. 'Twitter: '; ?>
	                            <?php echo '</br>'. $otherContact->social2; ?>
	                        <?php endif; ?>
	                        <?php if (isset($otherContact->social3) && $otherContact->social3 <> '-'): ?>
		                        <?php echo '</br>'. 'Other Social Media: '; ?>
	                            <?php echo '</br>'. $otherContact->social3; ?>
	                        <?php endif; ?>
	                        </br>
	                    <?php endif; ?>                    
	                    
	                </P>
	            <?php endforeach; ?>        		
        	</div><!-- end agent -->

        </div> <!-- end contact -->

	<script type="text/javascript">
		$(document).ready(function() {
			$('#guestbook_form').submit(function(){
	         	$.post("<?php echo site_url('contact/submit');?>", {
		            name: $('#name').val(), 
		            email: $('#email').val(),
		            subject: $('#subject').val(),
		            message: $('#message').val(),
	          	},
	          	function(data){
	          		if(data == 'Thank You, Your message has been posted !'){
			    		alert(data);
			        	$('#main').load("<?php echo site_url('contact');?>");
			        }else{
			        	alert(data);
			        }
			    }
			);
		  	return false;
		 	});
		});
	</script>
