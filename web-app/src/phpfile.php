<?php

    header("Access-Control-Allow-Origin: *"); // Pozwala na komunikację między domenami
    header("Content-Type: application/json");
    
    $conn = mysqli_connect("localhost", "root", "", "users_db");
    
    if (!$conn) {
        die(json_encode(["Błąd połączenia z bazą"]));
    }
    
    if (isset($_POST['username'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $zapytanie = "SELECT * FROM users WHERE username = '$username'";
        $wynik = mysqli_query($conn, $zapytanie);
    
        if (mysqli_num_rows($wynik) > 0) {
            echo json_encode(["Użytkownik istnieje w bazie"]);
        } else {
            echo json_encode(["Użytkownik nie istnieje w bazie"]);
        }
    } else {
        echo json_encode(["Nie podano nazwy użytkownika"]);
    }
    
    mysqli_close($conn);
?>