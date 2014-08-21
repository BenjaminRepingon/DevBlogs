<!-- Main -->
<section id="main">

	<div>
		<h2>Register</h2>
		<?php 

			//class and id of <form>
			$form_attributes = array('class' => 'register', 'id' => 'register');
			
			//data requiered for form || array (input_name, id_input)
			$email = array('name' => 'email', 'id' => 'email');
			$password = array('name' => 'password', 'id' => 'password');
			$confirm_password = array('name' => 'confirm_password', 'id' => 'confirm_password');
			$namespace = array('name' => 'namespace', 'id' => 'namespace');
			
			//form
			echo form_open('/register', $form_attributes);
			
			echo "email: ".form_input($email)."<br/>";
			echo "password: ".form_password($password)."<br/>";
			echo "confirm: ".form_password($confirm_password)."<br/>";
			echo "namespace: ".form_input($namespace)."<br/>";
			
			echo form_submit('submit', 'Valider');
			
			
			
		?>
	</div>

</section>