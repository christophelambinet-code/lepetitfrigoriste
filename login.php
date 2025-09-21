<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['user'] ?? '';
  $pass = $_POST['pass'] ?? '';

  if ($user === 'subzero' && $pass === 'mortalcombat') {
    header('Location: index.html');
    exit();
  } else {
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Le Petit Frigoriste</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: black;
      color: #e0f7ff;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    h2 {
      color: #00aaff;
      text-shadow: 0 0 10px #00aaff;
      margin-bottom: 30px;
    }

    form {
      background-color: #002244;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px #00aaff;
      width: 300px;
    }

    input[type="text"],
    input[type="password"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #0077cc;
      color: white;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 0 10px #00aaff;
    }

    input[type="submit"]:hover {
      background-color: #0055aa;
    }

    .error {
      color: red;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Connexion réservée aux élèves</h2>
  <form method="post">
    <input type="text" name="user" placeholder="Identifiant" required>
    <input type="password" name="pass" placeholder="Mot de passe" required>
    <input type="submit" value="Se connecter">
  </form>
  <?php if (!empty($error)): ?>
    <div class="error">Identifiant ou mot de passe incorrect.</div>
  <?php endif; ?>
</body>
</html>
