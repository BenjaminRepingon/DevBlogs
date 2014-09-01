<!-- Header -->
<header>
	<span class="elem">header</span>

	<h1>Nouveaux éléments de section, article, header, footer, aside, nav</h1>
	<?php
	if ( $this->session->userdata( 'logged' ) )
	{
		?>
		<p> Bievenue - <a href="<?PHP echo base_url() ?>login">Deconnexion</a></p>
	<?php
	}
	else
	{
		?>
		<p><a href="<?PHP echo base_url() ?>login">Connexion</a> - <a
				href="<?PHP echo base_url() ?>register">Inscription</a></p>
	<?php
	}
	?>
</header>

<div id="wrapper">
