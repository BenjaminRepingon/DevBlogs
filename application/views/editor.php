<section id="post">
	<?PHP
	//class and id of <form>
	echo form_open( '/editor' );?>

	<label for="editor"> </label>
	<textarea name="editor" id="editor" rows="100" cols="80"></textarea>
	<?php
	echo form_submit( 'submit', 'Poster' );
	echo form_close();
	?>
	<script>
		// Replace the <textarea id="editor"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'editor' );
		CKEDITOR.config.codeSnippet_theme = 'solarized_dark';
	</script>
</section>
