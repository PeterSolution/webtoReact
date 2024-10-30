import React from 'react';
import './HomePage.css';
import profilePic from './image.png'; // Dodaj obraz do folderu `src/assets`

function HomePage() {
  return (
    <div className="container">
      <img src={profilePic} alt="moj obrazek" className="profile-pic" />
      <center><h1>Piotr Wolff</h1></center>
      <p>Email: PiotrWolff@op.pl | Telefon: 123 456 789</p>
      
      <h2>Podsumowanie zawodowe</h2>
      <p>Doświadczony specjalista IT z 2-letnim stażem w tworzeniu aplikacji w technologii dotnet i zarządzaniu projektami.</p>
      
      <h2>Doświadczenie zawodowe</h2>
      <h3>Programista, firma xxx</h3>
      <ul>
          <li>Kierowałem 3 osobowym zespołem...</li>
          <li>Zajmowałem się implementacją...</li>
      </ul>
      
      <h3>Informatyk, w zakładzie produkcyjnym</h3>
      <ul>
          <li>Uczestniczyłem w tworzeniu aplikacji...</li>
          <li>Współpracowałem w tworzeniu i modernizacji...</li>
      </ul>
      
      <h2>Wykształcenie</h2>
      <p>Technik informatyk, obecny student na Uniwersytecie UKW</p>
      
      <h2>Umiejętności</h2>
      <ul>
          <li>Języki programowania: C#, Python, Java</li>
          <li>Frameworki: React, Mapper...</li>
          <li>Bazy danych: SQL management studio, Oracle</li>
          <li>Narzędzia: Git, Docker</li>
          <li>Certyfikaty: EE09, EE08</li>
          <li>Ukończone kursy: Rest API, Tester oprogramowania</li>
      </ul>

      <div className="color-picker">
        <h2>Kolor tła</h2>
        <input type="color" onChange={(e) => document.body.style.backgroundColor = e.target.value} />
      </div>
    </div>
  );
}

export default HomePage;
