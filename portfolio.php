<!DOCTYPE html>
<html>

<head>
  <title> Εξειδίκευση στα Πληροφοριακά Συστήματα </title>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

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
              <a class="nav-link" href="portfolio.php" style="background-color:rgb(129, 139, 139)">Portfolio εργασιών
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Προφίλ </a>
            </li>
            <li>
              <a href="login.html" class="btn btn-primary btn-sm" style="margin-top:10%">Είσοδος</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>


    <div id="content">
      <div class="row">
        <p>Αν θέλεις να υποβάλεις νέα εργασία κάνε κλικ εδώ:</p>
        <p>
          <a href="submit.html" class="btn btn-success">Υποβολή Εργασίας</a>
        </p>
      </div>
      <div class="row">
        <h1>Portfolio Εργασιών</h1>
      </div>
      <div class="row">
        <div class="row"></div>
      </div>
    </div>

    <div class="container mt-3">

      <div id="accordion">
        <div class="card">
          <div class="card-header" style="background-color: lightslategray;">
            <a class="btn" data-bs-toggle="collapse" href="#collapseOne" style="color:white">Βασικές εξειδικεύσεις σε
              θεωρία και λογισμικό
            </a>
          </div>
          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
            <div class="card-body">

              <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <img src="images/java.jpg" style="width:70%">
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                  <h2>Εργασία 1</h2>
                  <p>Στην εργασία αυτή θα εξασκηθείτε σε μερικές από τις απαραίτητες γνώσεις της γλώσσας προγραμματισμού
                    Java. </p>
                  <p>Πλήρης περιγραφή: Ειδικότερα, θα ασχοληθείτε με τύπους και μεταβλητές, τελεστές, εκφράσεις, είσοδο
                    από το πληκτρολόγιο και έξοδο στην οθόνη, εντολές ελέγχου ροήςκαι ανακύκλωσης, μονοδιάστατους
                    πίνακες, ορισμό κλάσεων,
                    μεθόδουςκαι πέρασμα παραμέτρων, κατασκευαστές και αντικείμενα, και μαθηματικές συναρτήσεις.</p>
                  <p><a href="ergasia.pdf" class="btn btn-primary" target="_blank">Λήψη Εργασίας</a></p>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <img src="images/domes.jpg" style="width:70%">
                  </div>
                  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h2>Εργασία 2</h2>
                    <p>Το μάθημα παρουσιάζει τις βασικές αρχές και τεχνικές των αλγορίθμων, και δομών δεδομένων, με
                      έμφαση σε πραγματικά προβλήματα. </p>
                    <p>Πλήρης περιγραφή: Στην εργασία αυτή θα ασχοληθείτε με στοίβες-ουρές τόσο με πίνακα όσο και με
                      συνδεδεμένη δομή,αλγορίθμους ταξινόμησης,
                      ανάλυση αλγορίθμων και πολυπλοκότητα και, τέλος, σωρούς.</p>
                    <p><a href="ergasia.pdf" class="btn btn-primary" target="_blank">Λήψη Εργασίας</a></p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" style="background-color: lightslategray;">
              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo" style="color:white">Βασικές
                εξειδικεύσεις σε
                Αρχιτεκτονική και Δίκτυα των Υπολογιστών
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <img src="images/ECDS.jpg" style="width:70%">
                  </div>
                  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h2>Εργασία 1</h2>
                    <p>Το μάθημα παρουσιάζει τη δυαδική λογική, τις βασικές ­μεθόδους και διαδικασίες σχεδίασης ψηφιακών
                      κυκλωμάτων καθώς
                      και με τα βασικά χαρακτηριστικά και οργάνωση των δομικών μονάδων ενός Υπολογιστικού Συστήματος.
                    </p>
                    <p>Πλήρης περιγραφή: Ειδικότερα, θα ασχοληθείτε με τα αριθμητικά Συστήματα, Κώδικες Αναπαράστασης
                      δεδομένων, Άλγεβρα Boole, και σχεδίαση συνδιαστικών
                      κυκλωμάτων με λογικές πύλες</p>
                    <p><a href="ergasia.pdf" class="btn btn-primary" target="_blank">Λήψη Εργασίας</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" style="background-color: lightslategray;">
                <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree" style="color:white">Σχεδιασμός
                  και Διαχείριση Λογισμικού
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <img src="images/pic5.jpg" style="width:70%">
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <p>Δεν υπάρχουν εργασίες γι αυτό το μάθημα</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div id="footer">
            <a href="oroi.pdf" target="_blank">Όροι Χρήσης</a> |
            <a href="politiki.pdf" target="_blank">Πολιτική απορρήτου</a>
          </div>
</body>

</html>