<?php
  include_once 'php/HTML.php';
  include_once 'php/test.php';

  // index/home// -> STARTSEITE
  if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/home"){
    $main = "
<section class='animationOnScroll'>
  <h1>Willkommen bei Traveller-Worker</h1><br>
  <h2>Wo wir sind ist Oben</h2><br>
  <p>Wir sind Ihr Ansprechpartner für den Bereich Industrie - und Baumkletterei.</p>
  <p>Bei uns finden Sie eventuell die richtige Unterstützung für Ihre Projekte, welche in der Höhe statt finden.</p>
  <p>Als Kletterer kommen wir dort zum Einsatz, wo es aus unterschiedlichen Gründen nicht möglich ist andere</p>
  <p>Zugangsverfahren, wie Steiger, Gerüst, etc. einzusetzen, sei es aus Platz, zeitlichen oder wirtschaftlichen Gründen.</p><br>
  <p>Schauen Sie sich bei uns um und setzen Sie sich bei Interesse mit uns in Verbindung.</p>
</section>
<img src='./images/other/home.jpg' class='animationOnScroll'>
    ";
    HTML::run("Startseite", $main);
  }else

  // treeWork
  if($_SERVER['REQUEST_URI'] == "/treeWork"){
    $main = "
<section class='animationOnScroll'>
  <h1>Bäume</h1><br>
  <p>Bäume sind in unserem Leben wichtig und ein Leben ohne Bäume wäre auf diesem Planeten nicht möglich.</p>
  <p>Deshalb ist es wichtig das wir das Leben der Bäume weitgehend  erhalten und  sie pflegen.</p>
  <p>Wir erledigen gerne für Sie folgende Aufgaben die im Bereich Baum liegen:</p><br>
  <h3><li>Standard Baum Fällung</li></h3>
  <h3><li>Fällung mittels Seil-Kletter Technik </li></h3>
  <h3><li>Fällung von Gefahr & Problem Bäumen</li></h3>
  <h3><li>Aufarbeiten von Wind ( Sturm) Schäden</li></h3>
  <h3><li>Baumpflege </li></h3>
</section>
<img src='./images/other/treeWork.jpg' class='animationOnScroll'>
    ";
    HTML::run("Baum arbeiten", $main);
  }else

  // workingInIndustry
  if($_SERVER['REQUEST_URI'] == "/workingInIndustry"){
    $main = "
<section class='animationOnScroll'>
  <h1>Diese Seite wird noch erstellt</h1><br>
  <p>Wir erstellen gerade Inhalte für diese Seite. Um unseren eigenen hohen</p>
  <p>Qualitätsansprüchen gerecht zu werden benötigen wir hierfür noch etwas Zeit.</p>
  <p>Bitte besuchen Sie diese Seite bald wieder. Vielen Dank für ihr Interesse!</p>
</section>
<img src='./images/other/workingInIndustry.jpg' class='animationOnScroll'>
    ";
    HTML::run("Industrie arbeiten", $main);
  }else

  // projects
  if($_SERVER['REQUEST_URI'] == "/projects"){
    $main = "
<section class='animationOnScroll'>
  <h1>PROJEKTE</h1><br>
  <p>Bilder sagen mehr als tausend Worte. Überzeugen Sie sich von unseren Referenzen und unserer Arbeitsweise.</p>
  <p>Zögern Sie nicht, uns anzurufen und von Ihrem anstehenden Projekt zu erzählen.</p>
</section>
<gallery></gallery>
    ";
    HTML::run("Projekte", $main);
  }else

  // contactUs
  if($_SERVER['REQUEST_URI'] == "/contactUs"){
    $main = "
<section class='animationOnScroll'>
  <h1>KONTAKT</h1><br>
  <form>
    <label>
      <span for='fname'>Vorname</span>
      <input type='text' name='firstname' for='fname'>
    </label>

    <label>
      <span for='lname'>Nachname</span>
      <input type='text' name='lastname' for='lname'>
    </label>

    <label>
      <span for='eMail'>E-Mail</span>
      <input type='email' name='eMail'>
    </label>

    <label>
      <span for='tel'>Telefon</span>
      <input type='tel' name='tel'>
    </label>

    <label>
      <span for='message'>Nachricht</span>
      <textarea name='message' placeholder='Meine nachricht'></textarea>
    </label>

    <label>
      <input type='submit' name='contactUs' value='Absenden'>
      <span for='submit'></span>
    </label>
  </form>
</section>
<img src='./images/other/contactUs.jpg' class='animationOnScroll'>
    ";
    HTML::run("Kontakt", $main);
  }

  // dataProtection
  if($_SERVER['REQUEST_URI'] == "/dataProtection"){
    $main = "
<section>
  <h1 class='animationOnScroll'>Heading 1</h1><br>

  <h2 class='animationOnScroll'>Heading 2</h2>

  <p>Content</p>

</section>
<img src='./images/other/dataProtection.jpg' class='animationOnScroll'>
    ";
    HTML::run("Datenschutz - Erklärung", $main);
  }else


  // imprint
  if($_SERVER['REQUEST_URI'] == "/imprint"){
    $main = "
<section class='animationOnScroll'>
  <h1>IMPRESSUM</h1><br>
  <p>Content</p>

</section>
<img src='./images/other/imprint.jpg' class='animationOnScroll'>
    ";
    HTML::run("Impressum", $main);
  }

?>
