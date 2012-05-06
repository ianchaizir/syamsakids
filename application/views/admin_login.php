        
        <div id="content">
	
			<div id="login_form">
				<h1>Please Login to access this page</h1>
				<?php
				echo form_open('admin/validate_credentials');
				echo form_label('Username :');
				echo form_input('username','');
				echo form_label('Password :');
				echo form_password('password','');
				echo form_submit('submit','Submit');
				echo form_close();
				?>
				
			</div>

        </div> <!-- end content -->
        