<?php

  class HTML{
    private static $title = "Home";
    private static $main;
    private static $slide_images;

    public function __construct($title, $main){
    }
/////////////////////////// html
// start
    private static function html_start(){
      // de-DE
      echo "
<!DOCTYPE html>
<html lang='en' dir='ltr'>
      ";
    }

// end
    private static function html_end(){
      echo "
</html>
      ";
    }

/////////////////////////// head
    private static function head(){
      echo "
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='initial-scale=1.0, width=device-width'>
    <title>".self::$title."</title>
    <link rel='icon' type='image/png' href='../images/favicon.png' />
    <link rel='stylesheet' type='text/css' href='css/master.css'>
    <script type='text/javascript'>
      window.slideshowImages = ['".str_replace("images/", "../images/", implode("', '",glob('images/slideshow/*jpg')))."'];
      window.slideshowImages = window.slideshowImages.sort(() => Math.random() - 0.5);
      window.galleryImages = ['".str_replace("images/", "../images/", implode("', '",glob('images/gallery/*jpg')))."'];
    </script>
    <script type='text/javascript' src='js/main.js' defer></script>
    <script type='text/javascript' src='js/contactUs.js' defer></script>
  </head>
      ";
    }

/////////////////////////// body
// start
    private static function body_start(){
      echo "
  <body>
    <loading></loading>
    <gallery-pop>
      <img>
      <span></span>
    </gallery-pop>
      ";
    }
// end
    private static function body_end(){
      echo "
  </body>
      ";
    }

/////////////////////////// header
    private static function header(){
      echo "
    <header>
      <span>Traveller-Worker</span>
      <label>
        <div></div>
        <div></div>
        <div></div>
      </label>
      <nav>
        <label>
          <div></div>
          <div></div>
        </label>
        <a href='/home'>Startseite</a>
        <a href='/treeWork'>Baum arbeiten</a>
        <a href='/workingInIndustry'>Industrie arbeiten</a>
        <a href='/projects'>Projekte</a>
        <a href='/contactUs'>Kontakt</a>
        <a href='/dataProtection'>Datenschutz - Erklärung</a>
        <a href='/imprint'>Impressum</a>
      </nav>
    </header>
      ";
    }

/////////////////////////// slide
    private static function slide(){
      echo "
      <slideshow></slideshow>
      ";
    }

/////////////////////////// main
    private static function main(){
      echo "<main>".self::$main."</main>";
    }

/////////////////////////// footer
    private static function footer(){
      echo "
    <footer>
      <section for='siteMap'>
        <p>Seitenverzeichnis</p><br>
        <a href='/home'>Startseite</a>
        <a href='/treeWork'>Baum arbeiten</a>
        <a href='/workingInIndustry'>Industrie arbeiten</a>
        <a href='/projects'>Projekte</a>
        <a href='/contactUs'>Kontakt</a>
        <a href='/dataProtection'>Datenschutz - Erklärung</a>
        <a href='/imprint'>Impressum</a>
      </section>
      <section for='social'>
        <p>Folgen Sie uns in den sozialen Medien</p><br>
        <a target='_blank' rel='noopener noreferrer' href='https://twitter.com/'><img src='../images/svg/twitter.svg'>Twitter</a>
        <a target='_blank' rel='noopener noreferrer' href='https://www.instagram.com/'><img src='../images/svg/Instagram.svg'>Instagram</a>
        <a target='_blank' rel='noopener noreferrer' href='https://www.facebook.com/'><img src='../images/svg/Facebook.svg'>Facebook</a>
      </section>
      <section for='contactUs'>
        <p>Kontaktiere uns</p><br>
        <span>Tel: </span>
        <span>Email: </span>
        <span>Adresse: </span>
        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5131526.676039855!2d5.969284456886968!3d51.096867665477035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a721ec2b1be6b%3A0x75e85d6b8e91e55b!2sGermany!5e0!3m2!1sen!2spl!4v1611378330149!5m2!1sen!2spl' width='auto' height='auto' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>

      </section>
    </footer>
      ";
    }


///////////////////////// run
    public static function run($title, $main){
      self::$title = $title;
      self::$main = $main;

      self::html_start();
        self::head();
        self::body_start();
          self::header();
          self::slide();
          self::main();
          self::footer();
        self::body_end();
      self::html_end();
    }
  }
?>
