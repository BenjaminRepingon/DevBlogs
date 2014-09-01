<!-- Main -->
<section id="main">

	<?PHP
	if ( isset($articles) ) :
		foreach ( $articles as $article ) :
			?>
			<article>
				<p>
					<?PHP
					echo $article->content;
					?>
				</p>
			</article>
		<?PHP
		endforeach;
	endif;
	?>
	<!--	<article>-->
	<!--		<span class="elem">article</span>-->
	<!--		<header>-->
	<!--			<span class="elem">header</span>-->
	<!---->
	<!--			<h2>La production de kiwis dans le monde</h2>-->
	<!---->
	<!--			<p>Par Georges, le-->
	<!--				<time datetime="2012-02-02">2 février 2012</time>-->
	<!--			</p>-->
	<!--		</header>-->
	<!---->
	<!--		<p>L'Italie est le premier producteur mondial en 2009, d'où ses recherches dans le développement de nouveaux-->
	<!--			cultivars comme à l'Université d'Udine. La France (5e mondial et troisième européen) produisait un peu moins-->
	<!--			de 76 000 tonnes en 2004, son premier client est l'Espagne. Il est cultivé dans l'Ariège, en Tarn-et-Garonne-->
	<!--			et sur la façade atlantique, du Pays basque à la Bretagne.</p>-->
	<!---->
	<!--		<aside>-->
	<!--			<span class="elem">aside</span>-->
	<!---->
	<!--			<p>Les <b>kiwis</b> sont des fruits de plusieurs espèces de lianes du genre Actinidia, famille des-->
	<!--				Actinidiaceae. Ils sont originaires de Chine, notamment de la province de Shaanxi.</p>-->
	<!--		</aside>-->
	<!---->
	<!--		<footer>-->
	<!--			<span class="elem">footer</span>-->
	<!---->
	<!--			<p>Source : <a href="http://fr.wikipedia.org/wiki/Kiwi">Wikipedia</a></p>-->
	<!--		</footer>-->
	<!--	</article>-->

</section>