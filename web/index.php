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
  <h1 class='animationOnScroll'>Datenschutzerklärung</h1><br>

  <h2 class='animationOnScroll'>1. Datenschutz auf einen Blick</h2>

  <p>Allgemeine Hinweise</p>
  <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten</p>
  <p>passiert, wenn Sie unsere Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie</p>
  <p>persönlich identifiziert werden können. Ausführliche Informationen zum Thema Datenschutz entnehmen</p>
  <p>Sie unserer unter diesem Text aufgeführten Datenschutzerklärung.</p>
  <p>Datenerfassung auf unserer Website</p>
  <p>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</p>
  <p>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten</p>
  <p>können Sie dem Impressum dieser Website entnehmen.</p>
  <p>Wie erfassen wir Ihre Daten?
  <p>Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z.B. um</p>
  <p>Daten handeln, die Sie in ein Kontaktformular eingeben.</p>
  <p>Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor</p>
  <p>allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs). Die</p>
  <p>Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website betreten.</p>
  <p>Wofür nutzen wir Ihre Daten?</p>
  <p>Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu gewährleisten. Andere</p>
  <p>Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</p>
  <p>Welche Rechte haben Sie bezüglich Ihrer Daten?</p>
  <p>Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und Zweck Ihrer</p>
  <p>gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die Berichtigung,</p>
  <p>Sperrung oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen zum Thema</p>
  <p>Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Des</p>
  <p>Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu.</p>
  <p>Außerdem haben Sie das Recht, unter bestimmten Umständen die Einschränkung der Verarbeitung Ihrer</p>
  <p>personenbezogenen Daten zu verlangen. Details hierzu entnehmen Sie der Datenschutzerklärung unter</p>
  <p>„Recht auf Einschränkung der Verarbeitung“.</p>

  <h2 class='animationOnScroll'>2. Allgemeine Hinweise und Pflichtinformationen</h2>

  <p>Datenschutz</p>
  <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre</p>
  <p>personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie</p>
  <p>dieser Datenschutzerklärung.</p>
  <p>Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten erhoben.</p>
  <p>Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden können. Die vorliegende</p>
  <p>Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir sie nutzen. Sie erläutert auch, wie</p>
  <p>und zu welchem Zweck das geschieht.</p>
  <p>Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail)</p>
  <p>Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht</p>
  <p>möglich.</p>
  <p>Hinweis zur verantwortlichen Stelle</p>
  <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
  <p>V. Semrau</p>
  <p>Am Fuchsbau 3</p>
  <p>21244 Buchholz</p>
  <p>Telefon: +491753267967</p>
  <p>E-Mail: info@traveller-worker.com</p>
  <p>Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder gemeinsam mit anderen über</p>
  <p>die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, E-Mail-Adressen o. Ä.)</p>
  <p>entscheidet.</p>
  <p>Widerruf Ihrer Einwilligung zur Datenverarbeitung</p>
  <p>Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung möglich. Sie können eine</p>
  <p>bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns.</p>
  <p>Die Rechtmäßigkeit der bis zum Widerruf erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>
  <p>Widerspruchsrecht gegen die Datenerhebung in besonderen Fällen sowie gegen</p>
  <p>Direktwerbung (Art. 21 DSGVO)</p>
  <p>Wenn die Datenverarbeitung auf Grundlage von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt, haben Sie</p>
  <p>jederzeit das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, gegen die Verarbeitung</p>
  <p>Ihrer personenbezogenen Daten Widerspruch einzulegen; dies gilt auch für ein auf diese Bestimmungen</p>
  <p>gestütztes Profiling. Die jeweilige Rechtsgrundlage, auf denen eine Verarbeitung beruht, entnehmen Sie</p>
  <p>dieser Datenschutzerklärung. Wenn Sie Widerspruch einlegen, werden wir Ihre betroffenen</p>
  <p>personenbezogenen Daten nicht mehr verarbeiten, es sei denn, wir können zwingende schutzwürdige</p>
  <p>Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen oder die</p>
  <p>Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen</p>
  <p>(Widerspruch nach Art. 21 Abs. 1 DSGVO).</p>
  <p>Werden Ihre personenbezogenen Daten verarbeitet, um Direktwerbung zu betreiben, so haben Sie das</p>
  <p>Recht, jederzeit Widerspruch gegen die Verarbeitung Sie betreffender personenbezogener Daten zum</p>
  <p>Zwecke derartiger Werbung einzulegen; dies gilt auch für das Profiling, soweit es mit solcher</p>
  <p>Direktwerbung in Verbindung steht. Wenn Sie widersprechen, werden Ihre personenbezogenen Daten</p>
  <p>anschließend nicht mehr zum Zwecke der Direktwerbung verwendet (Widerspruch nach Art. 21 Abs. 2</p>
  <p>DSGVO).</p>
  <p>Beschwerderecht bei der zuständigen Aufsichtsbehörde</p>
  <p>Im Falle von Verstößen gegen die DSGVO steht den Betroffenen ein Beschwerderecht bei einer</p>
  <p>Aufsichtsbehörde, insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthalts, ihres Arbeitsplatzes</p>
  <p>oder des Orts des mutmaßlichen Verstoßes zu. Das Beschwerderecht besteht unbeschadet anderweitiger</p>
  <p>verwaltungsrechtlicher oder gerichtlicher Rechtsbehelfe.</p>
  <p>Recht auf Datenübertragbarkeit</p>
  <p>Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung eines Vertrags</p>
  <p>automatisiert verarbeiten, an sich oder an einen Dritten in einem gängigen, maschinenlesbaren Format</p>
  <p>aushändigen zu lassen. Sofern Sie die direkte Übertragung der Daten an einen anderen Verantwortlichen</p>
  <p>verlangen, erfolgt dies nur, soweit es technisch machbar ist.</p>
  <p>SSL- bzw. TLS-Verschlüsselung</p>
  <p>Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, wie zum</p>
  <p>Beispiel Bestellungen oder Anfragen, die Sie an uns als Seitenbetreiber senden, eine SSL-bzw. TLSVerschlüsselung.</p>
  <p>Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des Browsers von</p>
  <p>“http://” auf “https://” wechselt und an dem Schloss-Symbol in Ihrer Browserzeile.</p>
  <p>Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an uns übermitteln, nicht</p>
  <p>von Dritten mitgelesen werden.</p>
  <p>Auskunft, Sperrung, Löschung und Berichtigung</p>
  <p>Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf unentgeltliche</p>
  <p>Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den</p>
  <p>Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten.</p>
  <p>Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der</p>
  <p>im Impressum angegebenen Adresse an uns wenden.</p>
  <p>Recht auf Einschränkung der Verarbeitung</p>
  <p>Sie haben das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</p>
  <p>Hierzu können Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden. Das Recht</p>
  <p>auf Einschränkung der Verarbeitung besteht in folgenden Fällen:</p>
  <p>Wenn Sie die Richtigkeit Ihrer bei uns gespeicherten personenbezogenen Daten bestreiten, benötigen wir</p>
  <p>in der Regel Zeit, um dies zu überprüfen. Für die Dauer der Prüfung haben Sie das Recht, die</p>
  <p>Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</p>
  <p>Wenn die Verarbeitung Ihrer personenbezogenen Daten unrechtmäßig geschah / geschieht, können Sie</p>
  <p>statt der Löschung die Einschränkung der Datenverarbeitung verlangen.</p>
  <p>Wenn wir Ihre personenbezogenen Daten nicht mehr benötigen, Sie sie jedoch zur Ausübung,</p>
  <p>Verteidigung oder Geltendmachung von Rechtsansprüchen benötigen, haben Sie das Recht, statt der</p>
  <p>Löschung die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen.</p>
  <p>Wenn Sie einen Widerspruch nach Art. 21 Abs. 1 DSGVO eingelegt haben, muss eine Abwägung zwischen</p>
  <p>Ihren und unseren Interessen vorgenommen werden. Solange noch nicht feststeht, wessen Interessen</p>
  <p>überwiegen, haben Sie das Recht, die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten</p>
  <p>zu verlangen.</p>
  <p>Wenn Sie die Verarbeitung Ihrer personenbezogenen Daten eingeschränkt haben, dürfen diese Daten – von</p>
  <p>ihrer Speicherung abgesehen – nur mit Ihrer Einwilligung oder zur Geltendmachung, Ausübung oder</p>
  <p>Verteidigung von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen oder</p>
  <p>juristischen Person oder aus Gründen eines wichtigen öffentlichen Interesses der Europäischen Union oder</p>
  <p>eines Mitgliedstaats verarbeitet werden.</p>

  <p><h2 class='animationOnScroll'>3. Datenerfassung auf unserer Website</h2>

  <p>Cookies</p>
  <p>Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen</p>
  <p>Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver</p>
  <p>und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr</p>
  <p>Browser speichert.</p>
  <p>Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie werden nach Ende</p>
  <p>Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert bis Sie diese</p>
  <p>löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen.</p>
  <p>Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und</p>
  <p>Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen</p>
  <p>sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung</p>
  <p>von Cookies kann die Funktionalität dieser Website eingeschränkt sein.</p>
  <p>Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs oder zur Bereitstellung</p>
  <p>bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorbfunktion) erforderlich sind, werden auf</p>
  <p>Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der Websitebetreiber hat ein berechtigtes Interesse</p>
  <p>an der Speicherung von Cookies zur technisch fehlerfreien und optimierten Bereitstellung seiner Dienste.</p>
  <p>Soweit andere Cookies (z.B. Cookies zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in</p>
  <p>dieser Datenschutzerklärung gesondert behandelt.</p>
  <p>Kontaktformular</p>
  <p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem</p>
  <p>Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage</p>
  <p>und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre</p>
  <p>Einwilligung weiter.</p>
  <p>Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt somit ausschließlich auf</p>
  <p>Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Sie können diese Einwilligung jederzeit widerrufen.</p>
  <p>Dazu reicht eine formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten</p>
  <p>Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>
  <p>Die von Ihnen im Kontaktformular eingegebenen Daten verbleiben bei uns, bis Sie uns zur Löschung</p>
  <p>auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt</p>
  <p>(z.B. nach abgeschlossener Bearbeitung Ihrer Anfrage). Zwingende gesetzliche Bestimmungen –</p>
  <p>insbesondere Aufbewahrungsfristen – bleiben unberührt.</p>
  <p>Anfrage per E-Mail, Telefon oder Telefax</p>
  <p>Wenn Sie uns per E-Mail, Telefon oder Telefax kontaktieren, wird Ihre Anfrage inklusive aller daraus</p>
  <p>hervorgehenden personenbezogenen Daten (Name, Anfrage) zum Zwecke der Bearbeitung Ihres Anliegens</p>
  <p>bei uns gespeichert und verarbeitet. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.</p>
  <p>Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage mit</p>
  <p>der Erfüllung eines Vertrags zusammenhängt oder zur Durchführung vorvertraglicher Maßnahmen</p>
  <p>erforderlich ist. In allen übrigen Fällen beruht die Verarbeitung auf Ihrer Einwilligung (Art. 6 Abs. 1 lit. a</p>
  <p>DSGVO) und / oder auf unseren berechtigten Interessen (Art. 6 Abs. 1 lit. f DSGVO), da wir ein berechtigtes</p>
  <p>Interesse an der effektiven Bearbeitung der an uns gerichteten Anfragen haben.</p>
  <p>Die von Ihnen an uns per Kontaktanfragen übersandten Daten verbleiben bei uns, bis Sie uns zur Löschung</p>
  <p>auffordern, Ihre Einwilligung zur Speicherung widerrufen oder der Zweck für die Datenspeicherung entfällt</p>
  <p>(z. B. nach abgeschlossener Bearbeitung Ihres Anliegens). Zwingende gesetzliche Bestimmungen –</p>
  <p>insbesondere gesetzliche Aufbewahrungsfristen – bleiben unberührt</p>

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

  <p>Angaben gemäß § 5 TMG</p>
  <p>Volker Semrau</p>
  <p>Am Fuchsbau 3</p>
  <p>21244 Buchholz</p>
  <p>Kontakt</p>
  <p>Telefon: +49175 3267967</p>
  <p>E-Mail: info@traveller-worker.com</p>
  <p>Umsatzsteuer-ID</p>
  <p>Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:</p>
  <p>DE 215872630</p>
  <p>Angaben zur Berufshaftpflichtversicherung</p>
  <p>Name und Sitz des Versicherers:</p>
  <p>Alpin Protect</p>
  <p>Roland Teske</p>
  <p>An der Milchinsel 2</p>
  <p>04103 Leipzig</p>
  <p>Streitschlichtung</p>
  <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:</p>
  <p>https://ec.europa.eu/consumers/odr.</p>
  <p>Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>
  <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer</p>
  <p>Verbraucherschlichtungsstelle teilzunehmen.</p>
  <p>Haftung für Inhalte</p>
  <p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den</p>
  <p>allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht</p>
  <p>verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu</p>
  <p>forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</p>
  <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen</p>
  <p>Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der</p>
  <p>Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden</p>
  <p>Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
  <p>Haftung für Links</p>
  <p>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben.</p>
  <p>Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der</p>
  <p>verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten</p>
  <p>Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte</p>
  <p>waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p>
  <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer</p>
  <p>Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links</p>
  <p>umgehend entfernen.</p>
  <p>Urheberrecht</p>
  <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen</p>
  <p>Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der</p>
  <p>Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.</p>
  <p>Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.</p>
  <p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter</p>
  <p>beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine</p>
  <p>Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei</p>
  <p>Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

</section>
<img src='./images/other/imprint.jpg' class='animationOnScroll'>
    ";
    HTML::run("Impressum", $main);
  }

?>
