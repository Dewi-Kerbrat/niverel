<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Kerofis</title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<script src="/semantic/dist/semantic.min.js"></script>
	<!-- LEAFLET -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
</head>

<body>
	<!-- header -->

	<?php require('../includes/header.html') ?>

	<div class="full height">

		<!-- side menu -->
		<?php require('../includes/menu.html') ?>

		<!-- page -->
		<div class="page">
			<div class="ui stackable grid container main">
				<div class="ui sixteen wide column">
					<!-- SUB MENU -->
					<div class="ui three item pointing menu">
						<a class="item active" href="/fr/kerofis/index.php">
							Rechercher
						</a>
						<a class="item" href="/fr/kerofis/en-savoir-plus.php">
							En savoir plus
						</a>
						<a class="item" href="/fr/kerofis/telechargements.php">
							Téléchargements
						</a>
					</div>
					<div class="ui very padded segment">
						<div class="ui stackable grid">
							<div class="six wide column">
								<h1 class="ui header">
									<em data-emoji=":map:" class="small"> </em>
									<div class="content">KerOfis<div class="sub header">Base de données toponymiques</div>
									</div>
								</h1>
								<a class="ui labeled icon basic button" href="https://kartenn.openstreetmap.bzh/#map=8/48.1/-2.3" target="_blank">
									<i class="external link icon"></i>
									Voir la carte sur OpenStreetMap.bzh
								</a>
							</div>
							<div class="ten wide column">
								<div class="ui fluid form">
									<h4 class="ui header">Je recherche un nom de lieu (commune, département, rue...)</h4>
									<div class="ui fluid action input">
										<input type="text" placeholder="Rechercher un nom..." value="Saint-Caradec">
										<select class="ui compact selection dropdown">
											<option value="me">partie du nom</option>
											<option value="pm">nom entier</option>
											<option value="dm">début du nom</option>
											<option value="fm">fin du nom</option>
										</select>
										<a class="ui pink icon button" href="search.html" data-content="klikit amañ">
											<i class="search icon"></i>
										</a>
									</div>
									<div class="ui accordion field">
										<div class="title">
											<i class="icon dropdown"></i>
											Plus d'options
										</div>
										<div class="content">
											<div class="field">
												<label>Commune</label>
												<div class="two fields">
													<div class="field">
														<select class="ui search dropdown">
															<option value="">Selectionner une commune</option>
															<option value="22046">Le Mené</option>
															<option value="22050">Dinan</option>
															<option value="22055">Binic-Etables-sur-Mer</option>
														</select>
													</div>
													<div class="field">
														<div class="ui checkbox">
															<input type="checkbox">
															<label>Nom de lieu en dehors de Bretagne</label>
														</div>
													</div>
												</div>
												<div class="two fields">
													<div class="field">
														<label>Catégorie</label>
														<select multiple="" class="ui dropdown">
															<option value="tout">toutes</option>
															<option value="verb">Commune</option>
															<option value="nom">Rue</option>
															<option value="adj">Lieu-dit</option>
															<option value="adv">Rivière</option>
														</select>
													</div>
													<div class="field">
														<label>Département</label>
														<select multiple="" class="ui dropdown">
															<option value="tout">Ille-et-Vilaine</option>
															<option value="ABER">Loire-Atlantique</option>
															<option value="ABKE">Morbihan</option>
															<option value="ADGL">Finistère</option>
															<option value="ADGL">Côte-d'Armor</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="sixteen wide column">
								<div class="ui right internal very close rail" style="z-index: 10;">
									<div class="ui fluid raised card">
										<div class="content">
											<h3 class="ui pink header">
												<i class="calendar check outline icon"></i>
												<div class="content">
													Nom de lieu du jour
												</div>
											</h3>
										</div>
										<div class="content">
											<h2 class="ui header">
												Sant-Nikolaz-an-Hent
												<div class="sub header">
													Saint-Nicolas-de-Redon
												</div>
											</h2>
										</div>
										<div class="ui bottom attached pink button">
											<i class="ui info icon"></i>
											En savoir plus
										</div>
									</div>
									<div class="ui raised segment">
										<div class="ui statistic">
											<div class="label">
												la base contient
											</div>
											<div class="value">
												<i class="map marker alternate icon"></i>
												41 430
											</div>
											<div class="label">
												noms de lieux
											</div>
										</div>
									</div>
								</div>
								<div id="mapid"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php require('../includes/footer.html') ?>

		</div>

	</div>


	<!-- JAVASCRIPT -->
	<script>
		$('.ui.accordion')
			.accordion();
	</script>
	<script>
		$('.ui.dropdown')
			.dropdown();
	</script>

	<script>
		$('.label')
			.popup();
		$('.ui.sticky')
			.sticky();
		$('.ui.button')
			.popup();
	</script>
	<script type="text/javascript">
		var mymap = L.map('mapid').setView([47.65, -2.0667], 12);
		L.tileLayer('https://tile.openstreetmap.bzh/br/{z}/{x}/{y}.png', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.bzh/">OpenStreetMap</a> contributors, <a href="https://www.openstreetmap.org/copyright">copyright</a>',
		}).addTo(mymap);
	</script>
</body>

</html>
