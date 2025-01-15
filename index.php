<?php
// Start the session
session_start();

// Simulate a user login for demonstration purposes
// In a real application, this would be set when the user logs in
$is_logged_in = isset($_SESSION['user_id']);  // Check if a user is logged in
$c_logged_in = isset($_SESSION['company_id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votre Site Emploi</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

  <div class="head">
    <img src="logo1.png.png" alt="logo_projet" style="border-radius: 50%; width: 50px; height: 50px;">
    <div id="hamburger-icon" onclick="toggleMenu()" style="font-size: 24px; cursor: pointer; margin-right: 25px;">
        <i class="fas fa-bars"></i>
    </div>
  </div>

  <div class="dropdown-menu" id="navbar">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <?php if ($is_logged_in): ?>
        <li><a href="user_profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <?php if ($c_logged_in): ?>
          <li><a href="company_profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="user_connect.html">Login</a></li>
          <li><a href="inscrire.html">Sign In</a></li>
        <?php endif; ?>
      <?php endif; ?>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>

  <br><br><br><br><br>
  <div>
    <h1 id="ti1">Bienvenue sur Votre Site Emploi</h1>
    <a href="jobs.php"><button class="bu_r">Les offres</button></a>
  </div>  
  <div class="cco">
      <video src="invideo-ai-720 JobConnect_ Your Gateway to Opportunitie 2024-04-04.mp4" controls class="vid"></video>
      <p>Explorez des offres d'emploi ou trouvez le candidat idéal.</p>
      <p>Pour continuer, connectez-vous ou inscrivez-vous :</p>
  </div>

  <div class="footer-info">
    <p>&copy; JobConnect</p>
    <p>Pour toute question ou assistance, n'hésitez pas à nous contacter :</p>
    <p>Email: <a href="mailto:rami.benamor@ensi_uma.tn">rami.benamor@ensi_uma.tn</a></p>
    <p>Téléphone: +216 57 911 341</p>
  </div>

  <script src="main.js"></script>
  <script>
    document.getElementById('insc').addEventListener('click', function() {
        console.log('Clicked!');
    });
  </script>

</body>
</html>