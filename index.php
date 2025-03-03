<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!empty($_GET['error'])) {
    $error = htmlspecialchars($_GET['error'], ENT_QUOTES, 'UTF-8');
    echo "<script>
        try {
            alert(decodeURIComponent('" . rawurlencode($error) . "').replace(/\+/g, ' '));
            window.history.replaceState({}, document.title, window.location.pathname);
        } catch(e) {
            console.error('Erreur d\'affichage du message :', e);
        }
    </script>";
}
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>informatique-notre-avenir.</title>
        <meta name="description" content="Déchouvrez comment l'informatique façonne notre avenir et transforme notre monde.">

        <meta name="keywords" content="informatique, avenir, technologie, innovation">

        <meta name="robots" content="index, follow">

        <meta name="author" content="L'informatique, notre avenir">

        <link rel="canonical" href="https://www.informatique-notre-avenir.com/fr_fr/informatique/site-web">

        <meta property="og:title" content="L'informatique, notre avenir">

        <meta property="og:description" content="Découvrez comment l'informatique façonne notre avenir et transforme notre monde.">

        <meta property="og:image" content="https://www.canva.com/design/DAGN0VM9Dr0/FlNWpkXf6zvdndFK225bnA/edit?utm_content=DAGN0VM9Dr0&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">

        <meta property="og:url" content="https://www.informatique-notre-avenir.com/fr_fr/informatique/site-web">

        <link rel="stylesheet" type="text/css"  href="style.css">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body style="margin-bottom: 0px;" >
      <main class="main relative">
        <header class="header fixed">
        <nav class="">
            <ul class="list-none flex justify-between">
              <li><a href="https://lab2view.com/">Lab2<span class="text-main-color">View</span></a></li>
              <li>
                <ul class="list-none flex justify-between">
                  <li><a href="#home">Accueil</a></li>
                  <li><a href="#">A-propos</a></li>
                  <li><a href="#nos-services">Nos services</a></li>
                  <li><a href="dinoujunior7@gmail.com/ ">Contacter</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </header>
        <div class="absolute h-100 w-full ">
          <img class="cover-image w-full h-100 " src="/auth_php/assets/background.png" alt="">
        </div>
       <div class="relative z-10 flex items-center info">
        <section class="message-1 text-white" style="text-align: start;">
            <h1 id="header h1" class="mb-1 font-bold shadow text-main-color">NOTRE AVENIR, C'EST L'INFORMATIQUE.</h1>
            <p style="width: 60%;">L'informatique est le futur de notre socièté.Découvrez comment elle peut améliorer notre vie quotidienne.
                "Lab2View est situé à Douala, Cameroun, depuis 2019. Notre siège social est implanté dans le quartier dynamique de Bonamoussadi, à proximité immédiate de l'hôtel Serena. Cette localisation stratégique nous permet d'être facilement accessibles pour nos clients et partenaires, tout en étant au cœur de l'activité économique de la ville."
            </p>
          </section>
          <div class="project-logo">
              <img style="padding-left: 100px;" src="/auth_php/assets/logo.png" alt="">
            </div>
       </div>
      </main>
          <!-- Nos services -->
          <section id="nos-services" class="nos-services">
            <h2 class="titre-section">NOS SERVICES</h2>
            <div class="grille-services">
              <!-- Service 1 -->
              <div class="service">
                <img src="/auth_php/assets/lab.jpg" alt="Service 1" class="image-service">
                <p class="description-service">Formation en développement web pour débutants.</p>
                <p class="cout-formation">Coût : 100 000 FCFA</p>
              </div>

              <!-- Service 2 -->
              <div class="service">
                <img src="/auth_php/assets/lab.jpg" alt="Service 2" class="image-service">
                <p class="description-service">Formation en design graphique avancé.</p>
                <p class="cout-formation">Coût : 150 000 FCFA</p>
              </div>

              <!-- Service 3 -->
              <div class="service">
                <img src="/auth_php/assets/lab.jpg" alt="Service 3" class="image-service">
                <p class="description-service">Formation en marketing digital.</p>
                <p class="cout-formation">Coût : 120 000 FCFA</p>
              </div>

              <!-- Service 4 -->
              <div class="service">
                <img src="/auth_php/assets/lab.jpg" alt="Service 4" class="image-service">
                <p class="description-service">Formation en gestion de projet.</p>
                <p class="cout-formation">Coût : 200 000 FCFA</p>
              </div>
            </div>
        </section>

  <!-- Section Nos Projets -->
        <section id="nos-projets" class="section">
          <h2>Nos Projets</h2>
          <div class="projets-grid">
            <div class="projet">
              <img src="/auth_php/assets/image4.png" alt="Projet 1">
              <h3>Projet 1</h3>
              <p>Description du projet 1.</p>
            </div>
            <div class="projet">
              <img src="/auth_php/assets/image4.png" alt="Projet 2">
              <h3>Projet 2</h3>
              <p>Description du projet 2.</p>
            </div>
            <div class="projet">
              <img src="/auth_php/assets/image4.png" alt="Projet 3">
              <h3>Projet 3</h3>
              <p>Description du projet 3.</p>
            </div>
          </div>
        </section>

        <!-- Section Qui Sommes-Nous ? -->
        <section id="qui-sommes-nous" class="section">
          <h2>Qui Sommes-Nous ?</h2>
          <p>
            Nous sommes une entreprise passionnée par la création de solutions innovantes.
            Notre équipe est composée de professionnels expérimentés dans divers domaines.
          </p>
          <div class="equipe">
            <div class="membre">
              <img src="/auth_php/assets/nous.jpg" alt="Membre 1">
              <h3>CLovis KIKAM</h3>
              <p>CEO</p>
            </div>
            <div class="membre">
              <img src="/auth_php/assets/nous.jpg" alt="Membre 2">
              <h3>Christian OLIVIER</h3>
              <p>CTO</p>
            </div>
            <div class="membre">
              <img src="/auth_php/assets/nous.jpg" alt="Membre 3">
              <h3>Fiona LIZA</h3>
              <p>Designer</p>
            </div>
          </div>
        </section>

        <!-- Section FAQ -->
        <section id="faq" class="section">
          <h2>FAQ</h2>
          <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(1)">
              <h3>Question 1 : Quel est votre domaine d'expertise ?</h3>
              <span class="arrow">▼</span>
            </div>
            <div class="faq-answer" id="answer1" >
              <p>Nous sommes spécialisés dans le développement web, le design et le marketing digital.</p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(2)">
              <h3>Question 2 : Comment puis-je vous contacter ?</h3>
              <span class="arrow">▼</span>
            </div>
            <div class="faq-answer" id="answer2">
              <p>Vous pouvez nous contacter via le formulaire ci-dessous ou par email à contact@entreprise.com.</p>
            </div>
          </div>
        </section>

        <!-- Section Nous Contacter -->
        <section id="nous-contacter" class="section">
          <h2>Nous Contacter</h2>
          <form class="contact-form">
            <input type="text" placeholder="Votre nom" required>
            <input type="email" placeholder="Votre email" required>
            <textarea placeholder="Votre message" rows="5" required></textarea>
            <button type="submit">Envoyer</button>
          </form>
        </section>

           <!-- cotactez nous -->
            <section id="sign-in" class="section">
              <h2>Connectez-Vous</h2>
              <!-- <div class="flex-1"  style="font-weight: bold; font-size: 36px; padding-left: 48px;">Connectez-vous</div> -->
              <div style="padding: 20px 40px; border-radius: 20px; " class="flex-1 bg-white">
                <form action="connexion.php" method="post" class="contact-form">
                  <div class="flex gap-2 flex-col">
                    <input class="field" type="email" name="email" id="email" placeholder="Votre email...">
                  </div>
                  <div class="flex-col gap-2">
                    <input class="field" type="password" name="password" placeholder="Mot de Passe">
                  </div>
                  <div>
                    <input type="checkbox">
                    <label for="checkbox">Se souvenir de moi</label>
                  </div>
                  <div>
                    <input class="submit" type="submit" value="Se connecter" name="submit" ></input>
                  </div>
                </form>
                  <div style="display: flex; justify-content: center; gap: 30px;">
                    <a class="test" href="#">Mot de passe oublié?</a>
                    <a class="test" href="registration.php">Créer un compte</a>
                  </div>
              </div>

            </section>
          <section class="trust-section">
            <h2 class="section-title">Ils nous font confiance</h2>
            <div class="slider">
              <div class="slider-track">
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 1">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 2">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 3">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 4">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 5">
                </div>
                <!-- Dupliquez les slides pour un effet infini -->
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 1">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 2">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 3">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 4">
                </div>
                <div class="slide">
                  <img src="/auth_php/assets/NACI.jpg" alt="Logo 5">
                </div>
              </div>
            </div>
          </section>

            <!-- footer -->
             <footer class="w-full flex flex-col justify-center items-center gap-2">
              <div class="inline-flex mt-5 mb-5 gap-5">
                <a href="" class="w-11 h-11 bg-transparent rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="p-1 w-11 h-11" viewBox="0 0 24 24" ><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg></a>
                <a href="" class="w-11 h-11 bg-transparent rounded-full"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" class="p-1 "><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg></a>
                <a href="" class="w-11 h-11 bg-transparent rounded-full"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"  viewBox="0 0 24 24" class="p-1 " xml:space="preserve"><path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z"/></svg></a>
                <a href="" class="w-11 h-11 bg-transparent rounded-full"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" class="p-1 "><path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path></svg></a>
              </div>
              <div class="flex gap-5 footer-links">
                <a href="">FAQ</a>
                <a href="">Services</a>
                <a href="">Projets</a>
                <a href="">Temoniages</a>
              </div>
              <p class="mt-5 text-white">Copyright2024 &copy; Tous droits réservés.</p>
             </footer>

        <script >
          // Fonction pour afficher/masquer les réponses de la FAQ
            function toggleAnswer(id) {
              const answer = document.getElementById(`answer${id}`);
              const arrow = answer.previousElementSibling.querySelector('.arrow');
              if (answer.style.display === 'block') {
                answer.style.display = 'none';
                arrow.textContent = '▼';
              } else {
                answer.style.display = 'block';
                arrow.textContent = '▲';
              }
            }

          // Optionnel : Ajouter des contrôles pour le slider (pause au survol)
          const sliderTrack = document.querySelector('.slider-track');

          sliderTrack.addEventListener('mouseenter', () => {
            sliderTrack.style.animationPlayState = 'paused';
          });

          sliderTrack.addEventListener('mouseleave', () => {
            sliderTrack.style.animationPlayState = 'running';
          });
        </script>
    </body>
</html>