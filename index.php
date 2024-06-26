<?php
include("database/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/stylesheet.css" />
  <link rel="shortcut icon" href="https://www.cbr.nl/logo.jpg" type="image/x-icon" />
  <title>CBRTheorie</title>
</head>

<body>
  <header>
    <nav>
      <div class="nav-bar">
        <div class="nav-title">
          <h1>Welkom bij CBRTheorie!</h1>
        </div>
        <div class="nav-login">
          <?php
          if ($_SESSION['login'] == false) { ?>
            <a href="login.php">
            <?php } else { ?>
              <a href="index.php">
              <?php } ?>
              <button class="login-button">
                <div style="display: flex; align-items: center">
                  <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                      <circle id="a" cx="18" cy="18" r="18" />
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                      <use fill="#0588F0" xlink:href="#a" />
                      <g stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M9.596 26.506c0-4.673 3.839-6.577 8.574-6.577 4.735 0 8.574 1.904 8.574 6.577H9.596zM22.127 12.366a4.28 4.28 0 0 0-4.287-4.275 4.28 4.28 0 0 0-4.287 4.275 4.28 4.28 0 0 0 4.287 4.275 4.28 4.28 0 0 0 4.287-4.275z" />
                      </g>
                    </g>
                  </svg>
                  <?php
                  if ($_SESSION['login'] == false) { ?>
                    <span>Mijn CBR (Inloggen)</span>
                  <?php } else { ?>
                    <span>Mijn CBR (Ingelogd)</span>
                  <?php } ?>
                </div>
              </button>
              </a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <?php if ($_SESSION['login'] == true) { ?>
        <a href="vraag.php">
          <button class="start-button">Start</button>
        </a>
      <?php } else {
        echo "<p class='text'>Log in om te beginnen met het examen.</p>";
      } ?>
    </div>
  </main>
  <footer></footer>
</body>

</html>
