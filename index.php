<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


$site_data_json = file_get_contents("site_data.json"); 

$site_data = json_decode($site_data_json, true); 

$pages = $site_data['pages'];

$page = isset($_GET['page']) ? $_GET['page'] : 'index';

?>
<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seda's Dev Blog</title>
    <link rel="stylesheet" href="assets/icons/icomoon-v1.0/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <figure>
        <img class="logo_radius" src="assets/img/logonew.png" alt="bloglogo">
      </figure>
      <nav>
        <a class="uppercase" href="?page=index">home</a>
        <a class="uppercase" href="?page=about">about</a>
      </nav>
    </header>
    <main>
    <h1 class="title"><?php echo $pages[$page]['title']?></h1>
    <?php 
        require_once("html/$page.html");
    ?>
    
    </main>
    <footer>
      <div class="footer_arrange">
        <section class="distance">
          <section class="follow">
            <figure>
              <img class="logo_radius" src="assets/img/logonew.png" alt="logo2">
            </figure>
          </section>
          <section class="distance2">
            <p id= "font_weight">Follow</p>
            <section class="flex">
              <a class="icon-dribbble icon" href=""></a>
              <a class="icon-facebook icon" href=""></a>
              <a class="icon-github icon" href=""></a>
              <a class="icon-google icon" href=""></a>
              <a class="icon-youtube icon" href=""></a>
            </section>
          </section>
        </section>
      </div>
      <section class="copyright">
        <p>Copyright</p>
        <i>&copy</i>
        <p>2020 a theme by</p>
        <a class="blue" href="#">themefisher.com</a>
      </section>
    </footer>
  </body>
</html>