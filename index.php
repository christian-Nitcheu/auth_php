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
        <!-- <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="in.css">
        <link rel="stylesheet" href="nav.css"> -->
    </head>
    <body style="margin-bottom: 0px;" class="bg-black text-white ">
      <header class="fixed blur">
        <nav>
          <ul class="list-none flex justify-between">
            <li><a href="https://lab2view.com/">Lab2<span class="text-main-color">View</span></a></li>
            <li>
              <ul class="list-none flex justify-between">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#">A-propos</a></li>
                <li><a href="dinoujunior7@gmail.com/ ">Contacter</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </header>
                  
<!-- <nav class="nav-bar"> -->
  <!-- <ul class="nav-links">
    <li>
      <span>Accueil </span>
      <button class="btn-home"><a href="https://lab2view.com/ ">Accéder</a></button>
    </li>
    <li>
      <span>Visite</span>
      <button class="btn-visita">Découvrir</button>
    </li>
    <li>
      <span>E-mail</span>
      <button class="btn-email"><a href="dinoujunior7@gmail.com/ ">Contacter</a></button>
    </li>
    <li>
      <span>Qui sommes nous!</span>
      <button class="btn-chi-siamo">En savoir plus</button>
    </li>
    <li>
      <span>Contactez-nous</span>
      <button class="btn-contattaci">Nous écrire</button>
    </li>
  </ul> -->
<!-- </nav>
        <header>
          <img src="NACI.jpg" alt="Mon NACI" style="width: 200px; height: 200px; float: left; margin: 50px;" /> 
            <h1 id="header h1" style="margin-top: 120px;">NOTRE AVENIR, C'EST L'INFORMATIQUE.</h1>
            <span class="entreprise">Lab2view</span>
            <img src="neyma.jpg"  alt="l'informatique est le futur de notre socièté" title="l'informatique est le futur de notre socièté" id="image-gauche">
        </header><br>
        <center> <button class="btn-visita"><i>QUI SOMMES-NOUS !</i></button></center> -->
        <main id="main" class="items-center justify-center p-3 bg-black text-white mx-auto w-75">
            <section style="text-align: start;">
              <h1 id="header h1" class="mb-1 font-bold shadow text-main-color">NOTRE AVENIR, C'EST L'INFORMATIQUE.</h1>
                <p>L'informatique est le fufixed tur de notre socièté.Découvrez comment elle peut améliorer notre vie quotidienne.
                  "Lab2View est situé à Douala, Cameroun, depuis 2019. Notre siège social est implanté dans le quartier dynamique de Bonamoussadi, à proximité immédiate de l'hôtel Serena. Cette localisation stratégique nous permet d'être facilement accessibles pour nos clients et partenaires, tout en étant au cœur de l'activité économique de la ville."
                </p>
            </section>
            <div class="p-3 flex flex-end">
              <img src="image2.png" alt="">
            </div>
          </main>

          <!-- Nos services -->

          <section class="w-75 mx-auto flex justify-center items-center flex-col">
            <h2 class="text-center">Nos services</h2>
            <div class="w-full flex justify-center">
              <div class="cards">
                <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
                <h3>Développement web </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laboriosam, libero quibusdam fugiat rem repellat voluptas culpa magni iusto atque! In, corrupti quam velit tenetur libero vel minima! Error, consequatur. </p>
              </div>
              <div class="cards">
                <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
                <h3>Développement web </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laboriosam, libero quibusdam fugiat rem repellat voluptas culpa magni iusto atque! In, corrupti quam velit tenetur libero vel minima! Error, consequatur. </p>
              </div>
              <div class="cards">
                <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
                <h3>Développement web </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laboriosam, libero quibusdam fugiat rem repellat voluptas culpa magni iusto atque! In, corrupti quam velit tenetur libero vel minima! Error, consequatur. </p>
              </div>
              <div class="cards">
                <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
                <h3>Développement web </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laboriosam, libero quibusdam fugiat rem repellat voluptas culpa magni iusto atque! In, corrupti quam velit tenetur libero vel minima! Error, consequatur. </p>
              </div>
              <div class="cards">
                <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
                <h3>Développement web </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laboriosam, libero quibusdam fugiat rem repellat voluptas culpa magni iusto atque! In, corrupti quam velit tenetur libero vel minima! Error, consequatur. </p>
              </div>
            </div>

          </section>

          <!-- Qui sommes nous -->

          <section>

          </section>

          <!-- Nos projets -->
           <section>

           </section>

           <!-- cotactez nous -->
            <section id="sign-in" class="flex w-75 gap-2 items-center  mx-auto">

              <div class="flex-1"  style="font-weight: bold; font-size: 36px; padding-left: 48px;">Connectez-vous</div>
              <div style="padding: 20px 40px; border-radius: 20px; " class="flex-1 bg-white">
                <form action="connexion.php" method="post">
                  <div class="flex gap-2 flex-col">
                    <label for="email">E-mail</label>
                    <input class="field" type="email" name="email" id="email" placeholder="Votre email...">
                  </div>
                  <div class="flex-col gap-2">
                    <label for="password">Mot de Passe</label>
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
              <p class="mt-5">Copyright2024 &copy; Tous droits réservés.</p>
             </footer>
<!-- 
            <div style="display: flex;">
            <section style="flex: 1;">
                <img src="peter.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 20px;height: 20px;margin-bottom: 5px;">
                <h2>Nos services</h2>
                <ul>
                    <li><a href="https://www.winpharma.com/">Développement web </a></li>
                    <li><a href="https://www.Stackoverflow.com/">Conseils en informatique</a></li>
                    <li><a href="https://www.coursera.org/">Formation aux nouvelles technologies</a></li>
                </ul>
            </section>
            <img src="tiron.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
          </div>
            <center><img src="peter.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 300px;height: 300px;margin-bottom: 5px;"></center>
            <section>              
            <p>Après avoir découvert nos services, nous vous invitons à explorer nos projets. Nous sommes fiers de présenter une sélection de nos réalisations les plus marquantes, qui démontrent notre expertise et notre passion pour la qualité. Nos projets sont le reflet de notre engagement à fournir des solutions innovantes et efficaces qui répondent aux besoins de nos clients."
                Ce paragraphe a une disposition claire et logique, avec une transition naturelle entre les services et les projets. Il présente également une touche de fierté et d'engagement, ce qui peut aider à renforcer la confiance des lecteurs.</p>
            </section>
            <div style="display: flex;">
            <section style="flex: 1;">
                <img src="lab.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 20px;height: 20px;margin-bottom: 5px;">
                <h2>Nos projets</h2>
                <ul>
                    <li><a href="https://www.Lab2view.com/">Création d'un site web pour une entreprise locale</a></li>
                    <li><a href="https://www.ReactNative.com/">Développement d'une application mobile pour les étudiants</a></li>
                    <li><a href="https://www.Airtable.com/">Conception d'un système de gestion de données pour une association</a></li>
                </ul>
            </section>
            <img src="telegram.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 200px; height: 150px;  margin-left: 10px;">
          </div>
        </main>
        <center>
        <img src="lab.jpg" title="l'informatique est le futur de notre socièté" alt="l'informatique est le futur de notre socièté" style="width: 300px;height: 300px;margin-bottom: 5px";></center>
 <br><center> <button class="btn-email"><i>CONTACTEZ-NOUS</i></button></center>

        <button type="submit" id="envoyer">Envoyer</button>
      </form> <form id="formation-form">
        <fieldset>
          <legend>Informations personnelles</legend>
          <div class="champ">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" placeholder="Mbappe" name="nom" required>
          </div>
          <div class="champ">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" placeholder="clovis" name="prenom" required>
          </div>
          <div class="champ">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="dinoujunior7@gmail.com" name="email" required>
          </div>
          <div class="champ">
            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" placeholder="+237 699 38 36 96" name="telephone" required>
          </div>
          <div class="champ">
            <label for="entreprise">Entreprise :</label>
            <input type="text" id="entreprise" placeholder="lab2view" name="entreprise" required>
          </div>
          <div class="champ">
            <label for="formation">Formation :</label>
            <select id="formation" name="formation" required>
              <option value="">Sélectionnez</option>
              <option value="developpement-web" selected>Développement Web</option>
              <option value="developpement-mobile">Développement Mobile</option>
              <option value="reseaux-informatiques">Réseaux Informatiques</option>
            </select>
          </div>
        </fieldset>
            <div class="conteneur-videos">
            <video class="video"  title="l'informatique est le futur de notre socièté" src="messi.mp4" controls>profitez au maximun.</video>
            <video  class="video"  title="l'informatique est le futur de notre socièté" src="cr7.mp4" controls >profitez au maximun.</video>
          </div>
          <br><br>
          <center> <button class="btn-chi-siamo"><i>NOS PROJETS!</i></button></center><br>
          <div class="container">
            <div class="slider">
            <img src="image1.png" class="image" alt="Image 1">
            <img src="image2.png" class="image" alt="Image 2">
            <img src="image3.png" class="image" alt="Image 3">
            <img src="image4.png" class="image" alt="Image 4">
            </div>
          </div>          
          <center>
          <a href="https://www.youtube.com/watch?v=j8-f9KjGtJY&list=PLbMYgBdxxW9OLCqqdbVlhDAdz76djzLZ9" title="l'informatique est le futur de notre socièté">DEVENEZ DISIGNER WEB SANS DIPLOMES.</a>
        </center><br><br>
            <footer>
            <p>Copyright2024.© Tous droits réservés.Notre Avenir C'est L'Informatique.</p>
        </footer> -->
        <script src="script.js"></script>
    </body>
</html>