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
              <a class="nav-link" href="home.php"> Αρχική
              </a>
            </li>
            <?php
            if ($role === 'Φοιτητής') {
              echo "<li><a href='portfolio.php' class='nav-link'>Portfolio Εργασιών</a></li>";
              echo "<li><a href='profile.php' class='nav-link'>Προφίλ</a></li>";
            } else {
              echo "<li><a href='dimiourgia_ekfonisis.php' class='nav-link'>Δημιουργία Εκφώνησης Εργασίας</a></li>";
              echo "<li><a href='provoli_ergasion.php' class='nav-link'>Προβολή Εργασιών</a></li>";
              echo "<li><a href='eikona_foititi.php' class='nav-link' style='background-color:rgb(129, 139, 139);'>Εικόνα Φοιτητή</a></li>";
            }
            ?>
            <li><a href="logout.php" class="btn btn-primary btn-sm" style="margin-top:10%">Έξοδος</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div id="content">
      <div class="row">
        <h1>Στοιχεία φοιτητών</h1>
      </div>
      <div class="row">

      </div>
      <div style='margin:3%'>
        <table style="margin:auto;width:80%" class="table table-bordered table-dark">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Ονοματεπώνυμο</th>
              <th>Επάγγελμα</th>
              <th>LinkedIn</th>
              <th>Facebook</th>
              <th>YouTube</th>
              <th>Instagram</th>
              <th>Twitter</th>
              <th></th>
            </tr>
          </thead>
          <?php
          include("config.php");
          // TODO: Refactor to Prepared Statements for security
          $query = "SELECT * FROM users WHERE Role='Φοιτητής'";
          $result = $con->query($query);

          while ($student = $result->fetch_assoc()) {
            $query2 = "SELECT * FROM userprofile WHERE Userid=" . $student['Userid'];
            $result2 = $con->query($query2);
            $num_rows = $result2->num_rows;

            echo "<tr>";
            echo "<form method='POST' action='export_data.php' target='_blank'>";

            echo "<td>" . $student['Userid'];
            echo "<input style='display:none' type='text' name='id' value='" . $student['Userid'] . "'></td>";
            echo "<td>" . $student['Email'] . "</td>";
            if ($num_rows > 0) {
              $profile = $result2->fetch_assoc();
              echo "<td>" . $profile['Name'] . "</td>";
              echo "<td>" . $profile['Profession'] . "</td>";
              echo "<td>" . $profile['Linkedin'] . "</td>";
              echo "<td>" . $profile['Facebook'] . "</td>";
              echo "<td>" . $profile['YouTube'] . "</td>";
              echo "<td>" . $profile['Instagram'] . "</td>";
              echo "<td>" . $profile['Twitter'] . "</td>";
            } else {
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
            }
            echo "<td><input type='submit' value='Export' class='btn btn-primary'></td>";
            echo "</form>";
            echo "</tr>";
          }


          ?>
        </table>
      </div>

      <div id="footer">
        <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
        <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
      </div>
    </div>
</body>

</html>