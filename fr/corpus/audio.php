<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Corpus audio</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="/semantic/dist/semantic.min.js"></script>
  </head>
  <body>


    <!-- header -->
    <div class="ui inverted stackable borderless top fixed menu topbar">
      <div class="ui container">
        <a class="item" href="/fr/">
          <h1 class="ui inverted header"><img src="/images/LogoOPLB.svg">
          <div class="content">Portail numérique de la langue bretonne<div class="ui sub header">Office public de la langue bretonne</div>
        </div>
        </h1>
      </a>
      <div class="right menu">
        <div class="ui item">
          <div class="ui dropdown inverted button">
            <i class="globe icon"></i>
            français
            <i class="dropdown icon"></i>
            <div class="menu">
              <a href="/br/" class="item">brezhoneg</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="full height">

    <!-- side menu -->
    <?php require('../includes/menu.html') ?>
    <!-- end side menu -->


    <div class="page">
      <div class="ui doubling stackable grid container main">
        <div class="sixteen wide column">

          <!-- SUB MENU -->
					<div class="ui two item pointing menu">
						<a class="item" href="/fr/corpus/text.php">
							Corpus de textes
						</a>
						<a class="item active" href="/fr/corpus/audio.php">
							Corpus audios
						</a>
					</div>

          <div class="ui icon message">
            <i class="question icon"></i>
            <div class="content">
              <a href="https://fr.wikipedia.org/wiki/Corpus" class="ui labeled icon right floated button">
                <i class="wikipedia icon"></i>
                En savoir plus</a>
              <div class="header">
                Qu'est ce qu'un corpus ?
              </div>
              <p>Un corpus est un ensemble de documents (textes, images, vidéos, etc.) regroupées dans le but d'effectuer des traitements informatiques. Ils représentent un échantillon de la langue, qui peut être général ou spécifique à un domaine,
                une époque, un registre de langue...</p>
            </div>
          </div>

          <div class="ui very padded segment">
            <h1 class="ui header"><em data-emoji=":speaking_head:"></em> Corpus audio</h1>
            <p>
              Sur cette page, vous pourrez trouver les différents corpus audio disponibles en langue bretonne sur Internet.
            </p>

            <div class="ui hidden divider"></div>

            <div class="ui stackable three column grid">
              <div class="column">
              <a class="ui pink fluid card" href="https://commonvoice.mozilla.org/br/datasets" target="_blank">
                <div class="content">
                  <div class="header">
                    Corpus Common Voice
                  </div>
                  <div class="meta">
                    décembre 2020
                  </div>
                  <div class="description">
                    <p>Corpus constitué de phrases enregistrées par toute sorte de locuteurs. La finalité de ce corpus est le développement de systèmes de reconnaissance vocale.</p>
                    <p><i class="arrows alternate horizontal icon"></i> 16 heures d'enregistrement</p>
                  </div>
                </div>
                <div class="extra content">
                  <button class="ui labeled icon pink fluid button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </button>
                </div>
              </a>
            </div>
            <div class="column">

              <a class="ui pink fluid card">
                <div class="content">
                  <div class="header">
                    Banque sonore des dialectes bretons
                  </div>
                  <div class="meta">
                    août 2018
                  </div>
                  <div class="description">
                    <p>
                      Corpus regroupant un ensemble de collectages effectués auprès de locuteurs traditionnels du breton, accompagnés de leur retranscriptions et traductions.
                    </p>
                    <p><i class="arrows alternate horizontal icon"></i> 8 586 fichiers, 18 heures d'enregistrements.
                    </p>
                  </div>
                </div>
                <div class="extra content">
                  <button href="http://banque.sonore.breton.free.fr/" class="ui labeled icon pink fluid button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </button>

                </div>
              </a>
            </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="footer ui basic segment">
			<div class="ui three column grid container ">
				<div class="column">
					<div class="ui basic segment">
						<h4 class="ui header">L'Office public de la langue bretonne</h4>
						<div class="ui link list">
							<a href="#" class="item">
								<i class="external alternate icon"></i>
								<div class="content">Site internet</div>
							</a>
							<a class="item">
								<i class="envelope icon"></i>
								<div class="content">Contact</div>
							</a>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui basic segment">
						<h4 class="ui header">Réseaux sociaux</h4>
						<div class="ui link list">
							<a class="item">
								<i class="twitter icon"></i>
								<div class="content">Twitter</div>
							</a>
							<a class="item">
								<i class="facebook icon"></i>
								<div class="content">Facebook</div>
							</a>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="ui basic segment">
						<div class="ui link list">
							<div class="item">
								Copyright © 2021 - Ofis publik ar brezhoneg
							</div>
							<a href="#" class="item">Politique de confidentialité</a>
							<div class="item">Ce site n'utilise pas de cookies</div>
						</div>


					</div>
				</div>
			</div>
		</div>
  </div>

  <!-- JAVASCRIPT -->
  <script>
  $('.ui.accordion')
  .accordion();
  $('.ui.dropdown')
  .dropdown();
  $('.menu .item')
  .tab();
  $('.label')
  .popup();
  $('.ui.sticky')
  .sticky();
  </script>
</body>
</html>
