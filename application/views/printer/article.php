<article>
	<header>
		<h2 class="title">
			<a rel="bookmark"
			   href="<?PHP // @TODO link to article ?>"><?PHP echo $article->title ?></a>
		</h2>

		<p>Poster par
			<span class="author">
				<a rel="author"
				   title="Voir les postes de <?PHP echo $article->author ?>"
				   href="<?PHP echo base_url() . $article->author ?>"><?PHP echo $article->author ?></a>
			</span>
			le
			<span class="date">
				<time datetime="<?PHP echo date( DATE_W3C, strtotime( $article->date ) ) ?>"><?PHP
					echo dateFR( "l j F Y \a G\h m", strtotime( $article->date ) ) ?></time>
			</span>
			dans
			<span class="categories-links">
				<a rel="category tag"
				   title="Voir les postes dans <?PHP echo $article->category_name ?>"
				   href="<?PHP echo base_url() . "category/" . $article->category_name ?>"><?PHP echo $article->category_name ?></a>
			</span>
		</p>
	</header>
	<div class="article-content">
		<p>
			<?PHP echo $article->content; ?>
		</p>
	</div>
	<footer>
		<a rel="tag"
		   title="Voir les postes tager de <?PHP // @TODO tag name ?>"
		   href="<?PHP // @TODO link to tag ?>">Tag1</a>
	</footer>
</article>