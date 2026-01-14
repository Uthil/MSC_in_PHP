<?php
session_start();

// Έλεγχος αν ο χρήστης είναι συνδεδεμένος
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// TODO: Υλοποίηση της λογικής για την προβολή των εργασιών από τη βάση
?>

<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Προβολή Εργασιών - Υπό Κατασκευή</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 text-center">
    <div class="card shadow-sm">
        <div class="card-body p-5">
            <h1 class="display-4 text-warning">🚧 Υπό Κατασκευή</h1>
            <p class="lead mt-3">
                Η λειτουργία <strong>"Προβολή Εργασιών"</strong> αναπτύσσεται αυτή τη στιγμή.
            </p>
            <hr class="my-4">
            <p>Παρακαλώ δοκιμάστε ξανά αργότερα.</p>
            <a class="btn btn-primary btn-lg" href="index.php" role="button">Επιστροφή στην Αρχική</a>
        </div>
    </div>
</div>

</body>
</html>