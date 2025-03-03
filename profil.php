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
                  <li><a href="#home">Accueil</a></li>
                  <li><a href="#">A-propos</a></li>
                  <li><a href="#nos-services">Nos services</a></li>
                  <li><a href="dinoujunior7@gmail.com/ ">Contacter</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </header>
  <div class="container">
    <!-- Tabs -->
    <div class="tabs">
      <button class="tab-button active" data-tab="profile">Profil</button>
      <button class="tab-button" data-tab="edit-profile">Modifier le Profil</button>
      <button class="tab-button" data-tab="messages">Messages</button>
      <button class="tab-button" data-tab="settings">Paramètres</button>
    </div>

    <!-- Tab Content -->
    <div class="tab-content">
      <!-- Profile Tab -->
      <div id="profile" class="tab-pane active">
        <h2>Profil</h2>
        <p><strong>Nom :</strong> <span id="profile-name">John Doe</span></p>
        <p><strong>Email :</strong> <span id="profile-email">john.doe@example.com</span></p>
      </div>

      <!-- Edit Profile Tab -->
      <div id="edit-profile" class="tab-pane">
        <h2>Modifier le Profil</h2>
        <form id="edit-profile-form">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" value="John Doe" required>
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" value="john.doe@example.com" required>
          <button type="submit">Enregistrer</button>
        </form>
      </div>

      <!-- Messages Tab -->
      <div id="messages" class="tab-pane">
        <h2>Messages</h2>
        <div class="messages-list">
          <div class="message">
            <p><strong>De :</strong> alice@example.com</p>
            <p>Bonjour, comment ça va ?</p>
          </div>
          <div class="message">
            <p><strong>De :</strong> bob@example.com</p>
            <p>Salut, tu as reçu mon fichier ?</p>
          </div>
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
</html>