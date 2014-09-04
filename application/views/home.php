<!-- Main -->
<section id="main">
	<?PHP
	if ( isset($articles) )
	{
		foreach ( $articles as $article )
		{
			$data['article'] = $article;
			print_elem( $this, 'article', $data );
		}
	}
	?>
</section>