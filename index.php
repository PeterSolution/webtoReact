<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>CV Piotr Wolff</title>
	<link rel="stylesheet" href="cssstrona.css">
</head>
<body>
    <div class="container">
        <img src="image.png" alt="moj obrazek" class="profile-pic">
        <center><h1>Piotr Wolff</h1></center>
        <p>Email: PiotrWolff@op.pl | Telefon: 123 456 789</p>
        
        <h2>Podsumowanie zawodowe</h2>
        <p>Doświadczony specjalista IT z 2-letnim stażem w tworzeniu aplikacji w technologii dotnet i zarządzaniu projektami.</p>
        
        <h2>Doświadczenie zawodowe</h2>
        <h3>Programista, firma xxx</h3>
        <ul>
            <li>Kierowałem 3 osobowym zespołem mającym dla aplikacji w czasie covida do ruszania się</li>
            <li>Zajmowałem się implementacją nowych funkcjonalności i layoutem aplikacji aplikacji</li>
        </ul>
        
        <h3>Informatyk, w zakładzie produkcyjnym</h3>
        <ul>
            <li>Uczestniczyłem w tworzeniu aplikacji do raportowania zdarzeń na produkcji</li>
            <li>Współpracowałem w tworzeniu i modernizacji strony internetowej firmy</li>
        </ul>
        
        <h2>Wykształcenie</h2>
        <p>Technik informatyk, obecny student na Uniwersytecie UKW</p>
        
        <h2>Umiejętności</h2>
        <ul>
            <li>Języki programowania: C#, Python, Java</li>
            <li>Frameworki: React, Mapper, EntityFramework, Pyautogui, Fresk</li>
            <li>Bazy danych: SQL managment studio, Oracle</li>
            <li>Narzędzia: Git, Docker</li>
			<li>Certyfikaty: EE09, EE08</li>
			<li>Ukończone kursy: Rest API, Tester oprogramowania</li>
        </ul>
		<div id="bodyfullforscript">
			<h2>O mnie</h2>
			<h3>Na egzaminie zawodowym posiadałem zadanie zmiany koloru za pomocą panelu koloru </h3></br>
			<h3>Oto funkcjonalność jaką miałem wykonać na egzaminie:</h3>
			<input type="color" id="colorPicker">
			<script>
				const colorPicker = document.getElementById('colorPicker');
				const bodyElement = document.getElementById('bodyfullforscript');

				colorPicker.addEventListener('input', function(event) {
					bodyElement.style.backgroundColor = event.target.value;
				});

			</script>
		</div></br>
		<div id="bodyfullforscript"></br>
		</br>
		<h2>PHP</h2></br>
			<h3>Na egzaminie pojawia się też PHP</h3></br>
			<h3>Na egzaminie z PHP pojawia się połączenie się z bazą danych</h3>
			</br>
			<h3>
				Oto przyklad na psrawdzenie czy dany uzytkownik istnieje w bazie danych
			</h3>
			</br>
			<h3>Sprawdzanie użytkownika w bazie danych</h3>
        
        <form method="POST">
			<input type="text" name="username" placeholder="Podaj nazwę użytkownika">
			<input type="submit" value="Sprawdź">
		</form>

			<?php
			if(isset($_POST['username'])) {
				$conn = mysqli_connect("localhost", "root", "", "users_db");
				
				if(!$conn) {
					die("Błąd połączenia z bazą");
				}
				
				$username = $_POST['username'];
				$zapytanie = "SELECT * FROM users WHERE username = '$username'";
				$wynik = mysqli_query($conn, $zapytanie);
				
				if(mysqli_num_rows($wynik) > 0) {
					echo "Użytkownik istnieje w bazie";
				} else {
					echo "Użytkownik nie istnieje w bazie";
				}
				
				mysqli_close($conn);
			}
			?>
		</div>
    </div>
</body>
</html>