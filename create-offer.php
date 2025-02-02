<?php
session_start();

if (!isset($_SESSION['company_id'])) {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        * {
          text-decoration: none;
          list-style: none;
          margin: 0;
          padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            padding-top: 100px; /* Increase padding to ensure content is below the header */
        }
        .head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 20px; /* Adjusted space */
        }
        h3 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #666;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="radio"] + label {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        .input-container {
            text-align: left;
        }
        button {
            width: calc(100% - 20px);
            padding: 10px 0;
            margin-top: 20px;
            margin-right: 17px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0066cc;
        }
        .footer-info {
            text-align: center;
            margin-top: 20px;
            font-size: small;
            color: #666;
        }
        .footer-info p {
            margin: 5px 0;
        }
        .footer-info a {
            color: #0056b3;
            text-decoration: none;
        }
        /* Styling for the dropdown menu */
        .dropdown-menu {
            display: none; /* Hide dropdown by default */
            position: absolute; /* Position it at the bottom of the header */
            top: 70px;
            right: 0;
            padding: 20px 0 0 20px;
            width: 120px;
            height: 60vh;
            background-color: #fff; /* Match header background */
            box-shadow: 0 4px 8px rgba(0,0,0,0.3); /* Dropdown shadow */
            padding: 10px;
            border-radius: 5px;
        }
        .dropdown-menu li{
          padding: 10px;
          text-transform: uppercase;
          transform: all 0.2s;
          animation: fade 0.5s ease-in-out forwards;
        }

        .dropdown-menu li:hover{
          background-color: #c7c6c6;
        }

        .dropdown-menu a{
          color: #000000;
        }

        @keyframes fade{
          from{
            opacity: 0;
            transform: translateX(100px);
          }to{
            opacity: 1;
            transform: translateX(0);
          }
        }

        select {
          width: calc(100% - 20px);
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
          box-sizing: border-box;
          background-color: #fff;
          cursor: pointer;
        }
        /* Dropdown button styling */
       
    </style>
</head>
<body>
    <div class="head">
        <img src="logo1.png.png" alt="logo_projet" style="border-radius: 50%; width: 50px; height: 50px;">
        <div id="hamburger-icon" onclick="toggleMenu()" style="font-size: 24px; cursor: pointer; margin-right: 25px;">
            <i class="fas fa-bars"></i>
        </div>
      </div>
      <div class="dropdown-menu" id="navbar">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="about.php">About</a></li>
      </div>
      <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <form action="formulaire.php" method="post">
        <h3>CREATE OFFER</h3>
        <input type="hidden" id="company_id" name="company_id" value="<?php echo $_SESSION['company_id']; ?>" readonly><br>
        <label for="job_title">Titre:</label>
        <input type="text" id="job_title" name="tt"><br>

        <label for="job_description">Description:</label>
        <textarea id="job_description" name="dd"></textarea><br>

        <div class="input-container">
            <label for="name">Location : </label>
            <input type="text" id="name" name="cc" required>
        </div>
        
          <div class="input-container">
              <label for="name">Specialité : </label>
              <input type="text" id="name" name="spec" required>
          </div>
        <div class="input-container">
            <label for="email">Salaire:</label>
            <input type="text" id="email" name="sal" required>
        </div>
        <div class="input-container">
            <label for="email">Linkden:</label>
            <input type="text" id="email" name="ll" required>
        </div>
        <div class="input-container">
            <label for="">date debut:</label>
            <input type="date" id="email" name="ddeb" required>
        </div>
        <div class="input-container">
            <label for="">date fin:</label>
            <input type="date" id="email" name="dfin" required>
        </div>
        <div class="input-container">
            <label for="gender">type:</label>
            <select id="type" name="type" required>
                <option value="inter">internship</option>
                <option value="part">part time</option>
                <option value="full">full time</option>
            </select>
          <button type="submit">poster</button>
      </form>
  </div>         
    <script>
        function toggleMenu() {
            var navbar = document.getElementById("navbar");
            if (navbar.style.display === "none") {
                navbar.style.display = "block";
            } else {
                navbar.style.display = "none";
            }
        }
    </script>
</body>
</html>
