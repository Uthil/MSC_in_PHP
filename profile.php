<!DOCTYPE html>
<html>

<head>
  <title> Εξειδίκευση στα Πληροφοριακά Συστήματα </title>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">

</head>

<body>
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
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Portfolio εργασιών</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php" style="background-color:rgb(129, 139, 139)">Προφίλ</a>
            </li>
            <li><a href="login.php" class="btn btn-primary btn-sm" style="margin-top:10%">Είσοδος</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!--<div id="content">-->
    <div class="row" style="text-align: center;">
      <h4>Προφίλ Χρήστη</h4>
      <p>Για να κρατήσεις επαφή με το ίδρυμα μετά την αποφοίτηση σου, συμπλήρωσε όσο περισσότερα μπορείς!</p>
    </div>
    <div class="row" style="border:1px solid;width:30%;margin:auto;padding-left: 10px;padding-top: 10px;">
      <form action="">
        <p><b>Όνομα και επώνυμο:</b><br>
          <input type="text" style="width:95%" placeholder="Πληκτρολογήστε το όνομα και το επώνυμό σας">
        </p>
        <p><b>Επαγγελματική απασχόληση:</b><br>
          <input type="text" style="width: 95%" placeholder="Πληκτρολογήστε την επαγγελματική σας απασχόληση">
        </p>
        <p><b>LinkedIn:</b><br>
          <input type="text" style="width:95%" placeholder="URL για το λογαριασμό σας στο LinkedIn">
        </p>
        <p><b>Facebook:</b><br>
          <input type="text" style="width:95%" placeholder="URL για το λογαριασμό σας στο Facebook">
        </p>
        <p><b>YouTube:</b><br>
          <input type="text" style="width:95%" placeholder="URL για το λογαριασμό σας στο YouTube">
        </p>
        <p><b>Instagram</b><br>
          <input type="text" style="width:95%" placeholder="URL για το λογαριασμό σας στο Instagram">
        </p>
        <p><b>Twitter/X:</b><br>
          <input type="text" style="width:95%" placeholder="URL για το λογαριασμό σας στο Twitter/X">
        </p>
        <p>
          <input type="submit" value="Αποθήκευση" class="btn btn-primary">
        </p>
      </form>
    </div>
    <!--</div>-->
    <div id="footer" style="text-align:center;text-decoration: none; margin-top:2%">
      <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
      <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
    </div>
  </div>
</body>

</html>