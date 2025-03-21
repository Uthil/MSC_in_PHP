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
              <a class="nav-link" href="profile.php">Προφίλ</a>
            </li>
            <li><a href="login.php" class="btn btn-primary btn-sm" style="margin-top:10%">Είσοδος</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <div>
      <div class="row" style="text-align:center;margin-top:2%;margin-bottom:2%">
        <h1>Υποβολή εργασίας</h1>
        <p>Υποβάλετε μια νέα εργασία, αφού πρώτα επιλέξετε το σωστό μάθημα</p>
      </div>
      <div style="border:1px solid grey;width: 30%;margin:auto">
        <div class="row" style="width:50%;padding-left: 10px;padding-top: 10px;">
          <form action="">
            <p><b>Μάθημα:</b><br>
              <select name="" id="">
                <option value="Επιλέξετε μάθημα">Επιλέξετε μάθημα</option>
                <option value="Βασικές εξειδικεύσεις σε θεωρία και λογισμικό">Βασικές εξειδικεύσεις σε θεωρία και
                  λογισμικό</option>
                <option value="Βασικές εξειδικεύσεις σε Αρχιτεκτονική και Δίκτυα των Υπολογιστών">Βασικές εξειδικεύσεις
                  σε
                  Αρχιτεκτονική και Δίκτυα των Υπολογιστών</option>
              </select>
            </p>
            <p><b>Εργασία:</b><br>
              <select name="" id="">
                <option value="Επιλέξετε εργασία">Επιλέξετε εργασία</option>
                <option value="Εργασία 1">Εργασία 1</option>
                <option value="Εργασία 2">Εργασία 2</option>
              </select>
            </p>
            <p><b>Τίτλος εργασίας:</b><br>
              <input type="text" style="width: 200%" placeholder="Πληκτρολογήστε τον τίτλο της εργασίας">
            </p>
            <p><b>Περιγραφή</b></p>
            <textarea name="" id="" style="width:200%"></textarea>
            <p><b>Αρχείο Εργασίας</b></p>
            <input type="file" style="border:1px solid grey;width: 200%;margin:auto">
            <p><br>
              <input type="submit" value="Υποβολή" class="btn btn-primary">
            </p>
          </form>
        </div>
      </div>
    </div>
    <div id="footer" style="text-align:center;text-decoration: none; margin-top:2%">
      <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
      <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
    </div>
  </div>
</body>

</html>