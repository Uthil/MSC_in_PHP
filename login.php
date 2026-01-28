<!DOCTYPE html>
<html>

<head>
  <title>Είσοδος χρήστη</title>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["pass_1"]));
    $stmt = $con->prepare("SELECT * FROM users WHERE username =?");
    $stmt->bind_param("s", $username); // "s" for string
    $stmt->execute();
    $result = $stmt->get_result();
    $n = $result->num_rows;
    if ($n == 0) {
      $stmt->close();
      $con->close();
      echo '<script>alert("Τα στοιχεία που δώσατε είναι λάθος!"); document.location="login.php";</script>';
    } else {
      // Η μεταβλητή $user περιλαμβάνει τα στοιχεία του χρήστη (αποτελέσματα)
      $user = $result->fetch_assoc();
      $user_password = $user['Password'];
      if (!password_verify($password, $user_password)) {
        $stmt->close();
        $con->close();
        echo '<script>alert("Τα στοιχεία που δώσατε είναι λάθος!"); document.location="login.php";</script>';
      } else {
        session_start();  //Προσωρινή αποθήκευση στοιχείων χρήστη
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['Role'];
        $_SESSION['Userid'] = $user['Userid'];
        $stmt->close();
        $con->close();
        // Άνοιγμα κεντρικής σελίδας
        header("Location: home.php");
      }
    }
  } else {
  ?>
    <div class="container-fluid">
      <div id="menu">
        <div id="header">
          <nav class="navbar navbar-inverse navbar-expand-lg justify-content-center">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png" alt="Logo" style="width:15%"></a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php"> Αρχική </a>
              </li>
              <!--<li class="nav-item"> //Δεν χρειάζονται τα κουμπια εφοσον δεν έχει κάνει είσοδο χρήστης
              <a class="nav-link" href="portfolio.php">Portfolio εργασιών</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php" style="background-color:rgb(129, 139, 139)">Προφίλ</a>
            </li>-->
              <li><a href="login.php" class="btn btn-primary btn-sm" style="margin-top:10%">Είσοδος</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="row" style="text-align:center;margin-top:2%;margin-bottom:2%">
        <h1>Είσοδος χρήστη</h1>
      </div>
      <!--<div id="content">-->
      <div style="border:1px solid grey;width:25%;margin:auto;">
        <div class="row" style="width: 160%;padding-left: 10px;padding-top: 10px;">
          <p>
          <form action="login.php" method="POST">
            <p><b>Όνομα Χρήστη:</b><br>
              <input type="text" name="username" style="width: 60%" placeholder="Πληκτρολογήστε το όνομα χρήστη" required>
            </p>
            <p><b>Kωδικός πρόσβασης:</b><br>
              <input type="password" name="pass_1" style="width: 60%" placeholder="Πληκτρολογήστε το κωδικό πρόσβασης" required>
            </p>
            <p>
              <input type="submit" value="Είσοδος" class="btn btn-success"><br>
            </p>
          </form>
          </p>
        </div>
      </div>
      <p></p>
      <p style="text-align: center;">
        Δεν έχετε λογαριασμό;
        <a href="register.php">Εγγραφείτε εδώ</a>
      </p>
      <!--</div>-->
      <div id="footer" style="text-align:center;text-decoration: none;margin-top:13%">
        <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
        <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>

      </div>
    </div>
  <?php
  }
  ?>
</body>

</html>