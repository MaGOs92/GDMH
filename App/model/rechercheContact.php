<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

// attempt a connection
try {
  $dbh = new PDO('mysql:dbname=GDMHdb;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// set error mode
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// attempt some queries
try {
  // execute SELECT query
  // store each row as an object
  $sql = "SELECT nom_ent, nom_cont, prenom FROM Entreprise NATURAL JOIN Contact ORDER BY nom_ent DESC";
  $sth = $dbh->query($sql);
  while ($row = $sth->fetchObject()) {
    $data[] = $row;
  }

  // close connection, clean up
  unset($dbh); 

  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');

  // initialize Twig environment
  $twig = new Twig_Environment($loader);

  // load template
  $template = $twig->loadTemplate('admin.twig');

  // set template variables
  // render template
  echo $template->render(array (
    'data' => $data
  ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>