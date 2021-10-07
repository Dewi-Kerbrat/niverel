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
						<a class="item active" href="/fr/corpus/text.php">
							Corpus de textes
						</a>
						<a class="item" href="/fr/corpus/audio.php">
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
            <h1 class="ui header"><em data-emoji="books"></em> Corpus de texte</h1>
            <p>
              Sur cette page, vous pourrez trouver les corpus de textes consitués par l'Office public de la langue bretonne, ainsi que d'autres corpus disponibles librement sur Internet.
            </p>

            <h2 class="ui header">Corpus monolingues</h2>

            <div class="ui pink cards">


                <a class="card" href="https://wortschatz.uni-leipzig.de/en/download/Breton">
                  <div class="content">
                    <div class="header">
                      <em data-emoji=":page_facing_up:" class="small right floated"></em>
                      Corpus Leipzig
                    </div>
                    <div class="meta">
                      Dernière mise à jour en 2021
                    </div>
                    <div class="description">
                      <p>Corpus monolingues, non annotés, extraits à partir du Wikipédia breton.</p>
                      <p><i class="arrows alternate horizontal icon"></i> 10 000, 30 000 et 100 000 phrases</p>
                      <div class="ui label">Modélisation de la langue</div>

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
                  <div class="content">
                    <div class="header">
                      <em data-emoji=":page_facing_up:" class="small right floated"></em>
                      Corpus UD
                    </div>
                    <div class="meta">
                      Mis à jour en 2018
                    </div>
                    <div class="description">
                      <p>Corpus arboré (TreeBank) du breton, comportant des annotations
                        morpho-grammaticales et syntaxiques.
                      </p>
                      <p><i class="arrows alternate horizontal icon"></i> 888 phrases</p>

                        <p class="ui horizontal label">étiquettage morpho-syntaxique</p>
                        <p class="ui horizontal label">analyse de dépendances</p>


                    </div>
                  </div>
                  <div class="extra content">
                    <a href="#" class="ui labeled icon right floated pink button">
                      <i class="external link icon"></i>
                      Accéder à la ressource
                    </a>
                  </div>
                </div>

                <div class="card" href="#">
                  <div class="content">
                    <div class="header">
                      <em data-emoji=":page_facing_up:" class="small right floated"></em>
                      Corpus OSCAR
                    </div>
                    <div class="meta">
                      Dernière mise à jour en 2019
                    </div>
                    <div class="description">
                      <p>
                        "Open Super-large Crawled ALMAnaCH coRpus", large corpus multilingue issu du corpus Common Crowl flitré et classifié selon la langue des documents.
                      </p>
                      <p><i class="arrows alternate horizontal icon"></i>23 MB pour le breton (soit environ 5 millions de mots)</p>

                      <p class="ui horizontal label">modélisation de la langue</p>
                    </div>
                  </div>
                  <div class="extra content">
                    <a href="https://github.com/afshinrahimi/mmner" class="ui labeled icon pink right floated button">
                      <i class="external link icon"></i>
                      Accéder à la ressource
                    </a>
                  </div>
                </div>


            </div>


            <h2 class="ui header">Corpus multilingues</h2>
            <p>Un corpus multilingue est un corpus qui présente des documents
              identitques ou semblables dans au moins deux langues différentes.</p>

            <div class="ui pink cards">

              <div class="card" href="#">
                <div class="content">
                  <div class="header">
                    <em data-emoji=":page_facing_up:" class="small right floated"></em>
                    Corpus OPLB 20 000
                  </div>
                  <div class="meta">
                    Mis à jour en octobre 2018
                  </div>
                  <div class="description">
                    <p>Corpus blingue français-breton, issu de mémoires
                      de traduction de l'Office public de la langue bretonne.
                    </p>
                    <p><i class="arrows alternate horizontal icon"></i> 20 000 phrases</p>
                    <p class="ui horizontal label">traduction automatique</p>
                  </div>
                </div>
                <div class="extra content">
                  <a class="ui labeled icon pink right floated button">
                    <i class="download icon"></i>
                    Télécharger la ressource
                  </a>
                </div>
              </div>

              <div class="card" href="#">
                <div class="content">
                  <div class="header">
                    <em data-emoji=":page_facing_up:" class="small right floated"></em>
                    Corpus OPUS NLP
                  </div>
                  <div class="meta">
                    Mis à jour en février 2021
                  </div>
                  <div class="description">
                    <p>
                      Collection de corpus bilingues alignés issus de mémoires de traduction de l'OPLB, de sous-titres, de traductions de différents logiciels, etc.
                    </p>
                    <p><i class="arrows alternate horizontal icon"></i> 900 000 phrases
                    </p>
                    <p>
                      <i class="warning icon"></i>
                      Erreurs d'alignement
                    </p>
                    <p class="ui horizontal label">traduction automatique</p>
                  </div>
                </div>
                <div class="extra content">
                  <a href="https://opus.nlpl.eu/" class="ui labeled icon pink right floated button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </a>
                </div>
              </div>

              <div class="card" href="#">
                <div class="content">
                  <div class="header">
                    <em data-emoji=":page_facing_up:" class="small right floated"></em>
                    Corpus WikiANN
                  </div>
                  <div class="meta">
                    Dernière mise à jour en 2019
                  </div>
                  <div class="description">
                    <p>
                      Corpus multilingue d'entités nommées annotées issues des données de Wikipédia.
                    </p>

                    <p class="ui horizontal label">reconnaissance d'entités nommées</p>
                  </div>
                </div>
                <div class="extra content">
                  <a href="https://github.com/afshinrahimi/mmner" class="ui labeled icon pink right floated button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </a>
                </div>
              </div>

              <div class="card" href="#">
                <div class="content">
                  <div class="header">
                    <em data-emoji=":page_facing_up:" class="small right floated"></em>
                    Corpus WikiANN
                  </div>
                  <div class="meta">
                    Dernière mise à jour en septembre 2021
                  </div>
                  <div class="description">
                    <p>
                      Corpus multilingue d'entités nommées annotées issues des données de Wikipédia.
                    </p>

                    <p class="ui horizontal label">reconnaissance d'entités nommées</p>
                  </div>
                </div>
                <div class="extra content">
                  <a href="https://github.com/afshinrahimi/mmner" class="ui labeled icon pink right floated button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </a>
                </div>
              </div>

              <div class="card" href="#">
                <div class="content">
                  <div class="header">
                    <em data-emoji=":page_facing_up:" class="small right floated"></em>
                    Corpus UDHR
                  </div>
                  <div class="meta">
                    Dernière mise à jour en juin 2021
                  </div>
                  <div class="description">
                    <p>
                      Universal Declaration of Human Rights.
                      Déclaration Universelle des Droits de l'Homme traduite dans de nombreuses langues. Ce corpus est maintenu par le consortium UNICODE.
                    </p>
                    <p class="ui horizontal label">traduction automatique</p>
                  </div>
                </div>
                <div class="extra content">
                  <button href="https://unicode.org/udhr/index.html" class="ui labeled icon pink right floated button">
                    <i class="external link icon"></i>
                    Accéder à la ressource
                  </button>
                </div>
              </div>
            </div>
            <div class="ui hidden divider"></div>
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
