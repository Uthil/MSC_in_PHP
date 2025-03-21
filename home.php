<!DOCTYPE html>
<html>

<head>
  <title> Εξειδίκευση στα Πληροφοριακά Συστήματα </title>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php
  session_start();
  $role = $_SESSION['role'];
  ?>
  <div class="container-fluid">
    <div id="menu">
      <div id="header">
        <nav class="navbar navbar-inverse navbar-expand-lg justify-content-center">
          <a class="navbar-brand" href="home.php">
            <img src="images/logo.png" alt="Logo" style="width:15%"></a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php" style="background-color:rgb(129, 139, 139);"> Αρχική
              </a>
            </li>
            <?php
            if ($role === 'Φοιτητής') {
              echo "<li><a href='portfolio.php' class='nav-link'>Portfolio Εργασιών</a></li>";
              echo "<li><a href='profile.php' class='nav-link'>Προφίλ</a></li>";
            } else {
              echo "<li><a href='dimiourgia_ekfonisis.php' class='nav-link'>Δημιουργία Εκφώνησης Εργασίας</a></li>";
              echo "<li><a href='provoli_ergasion.php' class='nav-link'>Προβολή Εργασιών</a></li>";
              echo "<li><a href='eikona_foititi.php' class='nav-link'>Εικόνα Φοιτητή</a></li>";
            }
            ?>
            <li><a href="logout.php" class="btn btn-primary btn-sm" style="margin-top:10%">Έξοδος</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="content">
      <div class="row">
        <h1>Καλωσήλθατε στο Μεταπτυχιακό μας πρόγραμμα</h1>
      </div>
      <div class="row">

      </div>
      <div class="row" style="margin-left:20%;margin-right:20%;margin-top:8%;margin-bottom:8%">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <img src="images/pic1.jpg" style="width:70%">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <img src="images/pic2.jpg" style="width:70%">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <img src="images/pic3.jpg" style="width:70%">
        </div>
      </div>
    </div>
    <div id="footer">
      <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
      <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
    </div>
  </div>
</body>

</html>