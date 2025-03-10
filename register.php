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
  <div class="container-fluid">
    <div id="menu">
      <div id="header">
        <nav class="navbar navbar-inverse navbar-expand-lg justify-content-center">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="Logo" style="width:15%"></a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html"> Αρχική </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">Portfolio εργασιών</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html" style="background-color:rgb(129, 139, 139)">Προφίλ</a>
            </li>
            <li><a href="login.html" class="btn btn-primary btn-sm" style="margin-top:10%">Είσοδος</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="row" style="text-align:center;margin-top:2%;margin-bottom:2%">
      <h1>Εγγραφή χρήστη</h1>
    </div>
    <!--<div id="content">-->
    <div style="border:1px solid grey;width:30%;margin:auto">
      <div class="row" style="width:50%;padding-left: 10px;padding-top: 10px;">
        <form>
          <p><b>Όνομα Χρήστη:</b><br>
            <input type="text" style="width: 200%" placeholder="Πληκτρολογήστε το όνομα χρήστη">
          </p>
          <p><b>Email:</b><br>
            <input type="email" style="width: 200%" placeholder="Πληκτρολογήστε το email σας">
          </p>
          <p><b>Kωδικός πρόσβασης:</b> <br>
            <input type="password" style="width: 200%" placeholder="Πληκτρολογήστε το κωδικό πρόσβασης">
          </p>
          <p><b>Επιβεβαίωση Kωδικού:</b> <br>
            <input type="password" style="width: 200%" placeholder="Επιβεβαιώστε το κωδικό πρόσβασης">
          </p>
          <p>
            <input type="submit" value="Εγγραφή" class="btn btn-success"><br>
          </p>
        </form>
        </p>
      </div>
    </div>
    <!--</div>-->

    <div id="footer" style="text-align:center;text-decoration: none; margin-top:10%">
      <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
      <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
    </div>
</body>

</html>