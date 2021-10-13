<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Corpus de texte</title>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/style.css">
  <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
  <script src="/semantic/dist/semantic.min.js"></script>
</head>

<body>
  <!-- header -->
  <?php require('../includes/header.php') ?>

  <div class="full height">
    <!-- side menu -->
    <?php require('../includes/menu.php') ?>
    <!-- end side menu -->

    <div class="page">
      <div class="ui doubling stackable grid container main">

        <div class="sixteen wide column">

          <!-- SUB MENU -->
					<div class="ui two item pointing menu">
						<a class="item" href="/corpus/text.php">
							Corpus de textes
						</a>
						<a class="item active" href="/corpus/audio.php">
							Corpus audios
						</a>
					</div>

          <div class="ui icon message">
            <i class="question icon"></i>
            <div class="content">
              <a href="https:/.wikipedia.org/wiki/Corpus" class="ui labeled icon right floated button">
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
            <h1 class="ui header"><em data-emoji="loud_sound"></em> Corpus audios</h1>
            <p>
              Cette page rassemble les corpus audios disponibles en langue bretonne.
            </p>

            <div class="ui pink cards">


                <a class="card" href="https://commonvoice.mozilla.org/br/datasets">
                  <div class="content">
                    <div class="header">
                      <em data-emoji=":speaker:" class="small right floated"></em>
                      Common Voice
                    </div>
                    <div class="meta">
                      Dernière mise à jour en 2021
                    </div>
                    <div class="description">
                      <p>Corpus de données vocales open source, construit de manière participative.</p>
                      <p><i class="arrows alternate horizontal icon"></i> 19 heures d'enregistrement</p>
                      <div class="ui label">reconnaissance de la parole</div>

                    </div>
                  </div>
                  <div class="extra content">
                    <button class="ui labeled icon pink right floated button">
                      <i class="external link icon"></i>
                      Accéder à la ressource
                    </button>
                  </div>
                </a>

                <div class="card" href="#">
                  <div class="ui active inverted dimmer">

                  </div>
                  <div class="content">
                    <div class="header">
                      <em data-emoji=":speaker:" class="small right floated"></em>
                      Corpus Sintezenn
                    </div>
                    <div class="meta">
                      Mis à jour en 2018
                    </div>
                    <div class="description">
                      <p>Corpus arboré (TreeBank) du breton, comportant des annotations
                        morpho-grammaticales et syntaxiques.
                      </p>
                      <p><i class="arrows alternate horizontal icon"></i> 888 phrases</p>

                        <p class="ui horizontal label">synthèse vocale</p>

                    </div>
                  </div>
                  <div class="extra content">
                    <div href="#" class="ui labeled icon right floated pink button">
                      <i class="external link icon"></i>
                      Accéder à la ressource
                    </div>
                  </div>
                </div>


            </div>
            <div class="ui hidden divider"></div>
          </div>
        </div>
      </div>

      <?php require('../includes/footer.php') ?>
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
