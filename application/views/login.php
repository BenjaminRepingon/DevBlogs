<!-- Main -->
<section id="main">

	<div>
		<h2>Login</h2>
		<?php 

			//class and id of <form>
			$form_attributes = array('class' => 'login', 'id' => 'login');
			
			//data requiered for form || array (input_name, id_input)
			$email = array('name' => 'email', 'id' => 'email');
			$password = array('name' => 'password', 'id' => 'password');
			
			//form
			echo form_open('/login', $form_attributes);
			?>
			
			<label for="email">Email:</label>
			<input type="text" name="email" values="<?php echo set_value('email');?>">
			<?php echo form_error('email', '<span class=error"error">', "</span>");?>
			<br/>
			
			<label for="password">Password</label>
			<input type="password" name="password" values="<?php echo set_value('password');?>">
			<?php echo form_error('pass', '<span class=error"error">', "</span>");?>
			<br/>
			
			
			<?php
			echo form_submit('submit', 'Valider');
			echo form_close();
			
			
			
		?>
	</div>

</section>