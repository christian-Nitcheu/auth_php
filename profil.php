
<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

    $comments = $db_connection->prepare("SELECT * FROM comments");
    $comments_answer= $comments->execute();
         
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de Profil</title>
  <link rel="stylesheet" href="log-style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header fixed">
        <nav class="">
            <ul class="list-none flex justify-between">
              <li><a href="https://lab2view.com/">Lab2<span class="text-main-color">View</span></a></li>
              <li>
                <ul class="list-none flex justify-between">
                  <li><a href="index.php#home">Accueil</a></li>
                  <li><a href=<?php echo "edit.php?id=".$_SESSION['id'] ?>> Mon Profil</a></li>
                  <li><a href="logout.php">Deconnexion</a></li>
                </ul>
              </li>
            </ul>
          </nav>
    </header>
  <div class="container">
    <!-- Tabs -->
    <div class="tabs">
      <button class="tab-button active" data-tab="profile">Profil</button>
      <button class="tab-button" data-tab="messages">Messages</button>
      <button class="tab-button" data-tab="settings">Paramètres</button>
    </div>

    <!-- Tab Content -->
    <div class="tab-content">
      <!-- Profile Tab -->
      <div id="profile" class="tab-pane active">
        <h2>Profil</h2>
        <p><strong>Nom :</strong> <span id="profile-name"><?php echo $user_info['firstname']. " " .$user_info['lastname']; ?></span></p>
        <p><strong>Email :</strong> <span id="profile-email"><?php echo $user_info['email']; ?></span></p>
        <p><strong>Telephone :</strong> <span id="profile-telephone"><?php echo $user_info['telephone']; ?></span></p>

      </div>

      <!-- Messages Tab -->
      <div id="messages" class="tab-pane">
        <h2>Messages</h2>
        <?php 
          foreach($comments as $comment){
        ?>
        <div class="messages-list">
          <div class="message">
            <p><strong>De :</strong> <?php echo $comment['user_id']; ?></p>
            <p><?php echo $comment['comment']; ?></p>
          </div>
          <?php } ?>
        </div>
      </div>

      <!-- Settings Tab -->
      <div id="settings" class="tab-pane">
        <h2>Paramètres</h2>
        <p>Options supplémentaires à venir.</p>
      </div>
    </div>
  </div>

  <script >
    // JavaScript to handle tab switching and form submission
        document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab-button');
        const tabPanes = document.querySelectorAll('.tab-pane');

        // Switch tabs
        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
            // Remove active class from all tabs and panes
            tabs.forEach((t) => t.classList.remove('active'));
            tabPanes.forEach((pane) => pane.classList.remove('active'));

            // Add active class to the clicked tab and corresponding pane
            tab.classList.add('active');
            const tabId = tab.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
            });
        });

        // Handle profile edit form submission
        const editProfileForm = document.getElementById('edit-profile-form');
        editProfileForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Update profile information
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            document.getElementById('profile-name').textContent = name;
            document.getElementById('profile-email').textContent = email;

            // Show a success message (optional)
            alert('Profil mis à jour avec succès !');
        });
        });
  </script>
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