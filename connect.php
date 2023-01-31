<?php

// Konekcija na bazu podataka
$servername = "localhost";
$username = "bojan123";
$password = "bojan123";
$dbname = "bojan123";

// Kreiranje konekcije
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Provjera konekcije
if (!$conn) {
    die("Konekcija na bazu podataka nije uspjela: " . mysqli_connect_error());
}

// Preuzimanje podataka iz forme
$ime = $_POST["ime"];
$prezime = $_POST["prezime"];

// Kreiranje SQL upita za čuvanje podataka
$sql = "INSERT INTO customers (ime, prezime)
VALUES ('$ime', '$prezime')";

// Izvršenje upita
if (mysqli_query($conn, $sql)) {
    echo "Uspješno ste zakazali termin";
} else {
    echo "Došlo je do greške: " . $sql . "<br>" . mysqli_error($conn);
}

// Zatvaranje konekcije
mysqli_close($conn);

?>
