<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Portail numérique de la langue bretonne</title>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/style.css">

  <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
  <script src="/semantic/dist/semantic.min.js"></script>

</head>

<body>


  <!-- header -->
  <?php require('includes/header.html') ?>

  <div class="full height">

    <!-- side menu -->
    <?php require('includes/menu.html') ?>
    <!-- end side menu -->



    <div class="page">
      <div class="ui doubling stackable grid container main">
        <div class="sixteen wide column">

          <div class="ui very padded segment">
            <h1 class="ui header">
              <em data-emoji=":wave:" class="small"></em>
              <div class="content">
                Donemat !
                <div class="sub header">Bienvenue !</div>
              </div>
            </h1>

            <p>Bienvenue sur le portail des nouvelles technologies pour la langue
              bretonne. Ce site a été mis en place par l'<a href="https://www.brezhoneg.bzh/" class="ui link" target="_blank">Office public de la langue bretonne</a> afin de
              promouvoir les différents outils et ressources numériques disponibles
              pour le breton.</p>
            <p>Ces outils et ressources sont disponibles librement et gratuitement.
              Ils ont été développées par l'Office public de la langue bretonne
              ou par différents acteurs du numérique bretons dans l'objectif de
              répondre aux besoins des locuteurs et des locutrices d'aujourd'hui,
              de faciliter l'apprentissage de la langue et de valoriser sa présence
              sur Internet.</p>

            <div class="ui hidden divider"></div>
            <h2 class="ui header">Accès rapide</h2>
            <h3>Ressources numériques</h3>

            <div class="ui cards">

              <a href="#" class="ui card">
                <div class="content">
                  <em data-emoji="mag" class="right floated small"></em>
                  <div class="header">TermOfis</div>
                  <div class="meta">Base de données terminologique</div>
                  <div class="description">
                    <p>Le centre de terminologie de l'Office public, Termbret, met
                      à disposition sa banque de données publiques gratuitement.</p>
                    <p>Termofis n'est pas un dictionnaire, vous y trouverez des
                      termes souvent absent ou peu présents dans les dictionnaire
                      généraux, mais relatifs à des domaines spécialisés.</p>
                  </div>
                </div>
                <div class="extra content">
                  <div class="ui right floated buttons">
                    <div class="ui labeled pink icon button">
                      <i class="angle right icon"></i>
                      Accéder
                    </div>
                  </div>
                </div>
              </a>

              <a href="/fr/kerofis/" class="ui card">
                <div class="content">
                  <em data-emoji="map" class="right floated small"></em>
                  <div class="header">KerOfis</div>
                  <div class="meta">Base de données toponymique</div>
                  <div class="description">
                    <p>KerOfis est la base de données du service Patrimoine linguistique
                      et signalisation de l'Office public. Elle permet de consulter
                      la forme bretonne des toponymes bretons et d'obtenir des informations
                      de type étymologique sur ces toponymes.</p>

                    <p>Vous y trouverez notamment des noms de communes, de villages,
                      de lieux-dits, de rues, etc.
                    </p>
                  </div>
                </div>
                <div class="extra content">
                  <div class="ui right floated buttons">
                    <div class="ui labeled pink icon button">
                      <i class="angle right icon"></i>
                      Accéder
                    </div>
                  </div>
                </div>
              </a>

              <a href="/fr/meurgorf/" class="ui card">
                <div class="content">
                  <em data-emoji="book" class="right floated small"></em>
                  <div class="header">Meurgorf</div>
                  <div class="meta">Dictionnaire historique</div>
                  <div class="description">
                    <p>Meurgorf est un dictionnaire entièrement en breton, qui
                      présente une large palettes d'informations sur plus de 50 000 mots.
                    </p>
                    <p>Chaque définition est accompagnée d'exemples d'utilisation
                      historiques datés et sourcés de la littérature bretonne.
                    </p>
                  </div>
                </div>
                <div class="extra content">
                  <div class="ui right floated buttons">
                    <div class="ui labeled icon pink button">
                      <i class="angle right icon"></i>
                      Accéder
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <h3>Outils numériques</h3>

            <div class="ui cards">

              <a class="ui card" href="/fr/apertium/index.fra.html">
                <div class="content">
                  <em data-emoji="earth_africa" class="right floated small"></em>
                  <div class="header">Apertium</div>
                  <div class="meta">Traducteur automatique</div>
                  <div class="description">
                    <p>Le traducteur automatique Apertium permet de traduire en
                      français des phrases écrites en breton
                    </p>
                    <p>Il a été développé sur la base d'un projet Open Source initié
                      par l'Université d'Alicante en Espagne.</p>
                  </div>
                </div>
                <div class="extra content">
                    <div href="#" class="ui labeled icon pink right floated button">
                      <i class="angle right icon"></i>
                      Accéder
                    </div>
                </div>
              </a>

              <a class="ui card" href="/fr/sintezenn/index.html">
                <div class="content">
                  <em data-emoji="speech_left" class="right floated small"></em>
                  <div class="header">Sintezenn</div>
                  <div class="meta">Synthèse de la parole</div>
                  <div class="description">
                    <p>La synthèse vocale en breton vous permet de générer un fichier
                      audio à partir d'une phrase ou d'un texte.
                    </p>
                    <p>Des voix de synthèses
                      féminine et masculine sont disponibles, toutes deux plus vraies
                      que nature !
                    </p>
                  </div>
                </div>
                <div class="extra content">
                    <button href="#" class="ui labeled icon pink right floated button">
                      <i class="angle right icon"></i>
                      Accéder
                    </button>
                </div>
              </a>
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
