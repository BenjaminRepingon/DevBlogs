
<!doctype html>
<html lang="fr">

<head>
<meta charset="utf-8">
<title>Dev</title>

<!-- Feuille de styles génériques -->
<link rel="stylesheet" href="/xmedia/tuto/styles.css" type="text/css">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Styles spécifiques à cette démonstration -->
<style>

#wrapper {
	width:980px;
	margin: 0 auto 0 auto;
}

#main {
	float:left;
	width:75%;
	margin: 0 0 50px 0;
}

#sidebar {
	float:left;
	width:22%;
	margin-left:1%;
	margin-top:1em;
}

footer {
	clear:both;
}

#wrapper>nav {
	padding:1em;
	border:1px dashed #444;
	margin-top:1em;
}

nav ul li {
	display:inline-block;
}

article {
	border:1px dashed #444;
	margin:1em;
	padding:1em;
	background:#fff;
}

article h2 {
	margin-top: 1em;
}

article header, article footer {
	border:1px dashed #ccc;
	padding:1em;
	background:#ddd;
}

aside {
	border:1px dashed #444;
}

article aside {
	background:#fff;
	margin:1em 3em;
	padding:0.5em;
	border:1px dashed #ccc;
}

/* Marquage spécifique */

article, footer, header, aside, nav {
	position:relative;
}

span.elem {
	background:#c00;
	color:white;
	position:absolute;
	top:0;
	left:0;
	margin:0;
	padding:0.5em;
	z-index:100;
	opacity:0.5;
}

</style>

</head>

<body>

<!-- Header -->
<header>	
	<span class="elem">header</span>
	<h1>Nouveaux éléments de section, article, header, footer, aside, nav</h1>
</header>

<div id="wrapper">
	
	<!-- nav principale -->
	<nav>
		<span class="elem">nav</span>
		<ul>
			<li><a href="#">Rubrique 1</a></li>
			<li><a href="#">Rubrique 2</a></li>			
			<li><a href="#">Rubrique 3</a></li>
			<li><a href="#">Rubrique 4</a></li>
		</ul>	
	</nav>
	
	<!-- Main -->
	<section id="main">
		
		<article>
			<span class="elem">article</span>
			<header>
				<span class="elem">header</span>
				<h2>En tête de l'article</h2>
				<p>Date de publication, auteur</p>
			</header>
			
			<p>Contenu de l'article, contenu de l'article, contenu de l'article, contenu de l'article, contenu de l'article, contenu de l'article, contenu de l'article...</p>

			<aside>
				<span class="elem">aside</span>
				<p>Contenu tangentiel</p>
			</aside>
			
			<footer>
				<span class="elem">footer</span>
				<p>Pied d'article</p>
			</footer>
		</article>	
		
		<article>
			<span class="elem">article</span>
			<header>
				<span class="elem">header</span>
				<h2>La production de kiwis dans le monde</h2>
				<p>Par Georges, le <time datetime="2012-02-02">2 février 2012</time></p>
			</header>
			
			<p>L'Italie est le premier producteur mondial en 2009, d'où ses recherches dans le développement de nouveaux cultivars comme à l'Université d'Udine. La France (5e mondial et troisième européen) produisait un peu moins de 76 000 tonnes en 2004, son premier client est l'Espagne. Il est cultivé dans l'Ariège, en Tarn-et-Garonne et sur la façade atlantique, du Pays basque à la Bretagne.</p>
			
			<aside>
				<span class="elem">aside</span>
				<p>Les <b>kiwis</b> sont des fruits de plusieurs espèces de lianes du genre Actinidia, famille des Actinidiaceae. Ils sont originaires de Chine, notamment de la province de Shaanxi.</p>
			</aside>
			
			<footer>
				<span class="elem">footer</span>
				<p>Source : <a href="http://fr.wikipedia.org/wiki/Kiwi">Wikipedia</a></p>
			</footer>
		</article>	
		
	</section>

	<!-- sidebar -->
	<aside id="sidebar">
		<span class="elem">aside</span>
		
		<h2>Sidebar</h2>
		
		<h3>Navigation</h3>
		<nav>
			<span class="elem">nav</span>
			<ul>
				<li><a href="#">Lien 1</a></li>
				<li><a href="#">Lien 2</a></li>
				<li><a href="#">Lien 3</a></li>
			</ul>
		</nav>

		<h3>Autre titre</h3>
		<p>Autres informations...</p>

	</aside>
</div>
	
<!-- footer -->
<footer>
	<span class="elem">footer</span>
	<p class="mentions">Page de démonstration de l'article <a href="/article/lire/1376-html5-section-article-nav-header-footer-aside.html">Nouveaux éléments de section, article, header, footer, aside, nav</a></p>
</footer>
	
</body>
</html>
