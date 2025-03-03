<?php
session_start();

$db_connection = new PDO('mysql:host=localhost;dbname=auth_system', 'todo','todo');


if (isset($_SESSION['id'])) {
    $getid = intval($_GET['id']);
    $requser = $db_connection->prepare("SELECT * FROM users WHERE id = ?");
    $requser->execute(array($getid));
    $user_info = $requser->fetch();

    $user_info['email'];
    $user_info['password'];
    $user_info['firstname'];
    $user_info['lastname'];
    $user_info['telephone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div>

    </div>
    <header class="">
        <nav>
          <ul class="list-none flex justify-between">
            <li><a href="https://lab2view.com/">Lab2<span class="text-main-color">View</span></a></li>
            <li>
              <ul class="list-none flex justify-between">
                <li><a href="#home">Accueil</a></li>
                <li><a href=<?php echo "edit.php?id=".$_SESSION['id'] ?> >Mon profil</a></li>
                <li><a href="logout.php">Deconnexion</a></li>
              </ul>
            </li>
          </ul>
        </nav>
    </header>
    <article class="card mx-auto">
        <img src="assets/user.png" class="avatar" alt="User profile picture of "/>
        <div class="info">
            <div class="star flex justify-center">
                <a style="color:black; cursor:pointer;" href=<?php echo "comments.php?id=".$_SESSION['id'];?>>Comments</a>
                <h2 class="name">
                <?php echo "Bienvenue " .$user_info['firstname']. " " .$user_info['lastname'];?>
                </h2>
                <button style="cursor: pointer;" class="favorite-button" onclick="toggleFavorite()">
                    <img id="empty" class="" src="assets/star-empty.png" alt="" >
                    <img id="full" class="hidden" src="assets/star-filled.png" alt="" >
                </button>
            </div>
            <p class="contact">Telephone: +237 <?php echo $user_info['telephone']; ?></p>
            <p class="contact">Mail : <?php echo $user_info['email']; ?></p>
        </div>
        <div class="flex button">
            <button class="button mybutton"><a href=<?php echo "edit.php?id=".$_SESSION['id'] ?> >Modifier le profil</a></button>
            <button class="button mybutton"><a href="logout.php">Logout</a></button>
        </div>
    </article>
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
</body>
<?php }else {
    $error_msg = "Vous devez vous connecter pour accéder à cette page.";
    header("Location: index.php?error=" . urlencode($error_msg));
} ?>
<script>

    let full = document.getElementById("full");
    let empty = document.getElementById("empty");

    console.log(full);
    console.log(empty);
    function toggleFavorite(e) {
        full.classList.toggle("hidden");
        empty.classList.toggle("hidden");
    }
</script>
</html>