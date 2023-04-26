<?php
$naslov = $naslov ? $naslov : "Ultramedika | specijalistička radiološka ordinacija";
$trenutna_strana = $_SERVER["REQUEST_URI"];
$trenutna_strana = preg_replace('/\.php$/', '', $trenutna_strana);
$trenutna_strana = str_replace("/", "", $trenutna_strana);
?>
<!doctype html>
<html lang="sr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Ultramedika je specijalistička radiološka ordinacija koju vodi Dr. Tihomir Mihailović od 1993. godine.">
  <title><?php echo $naslov; ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>

  <header>
    <a href="tel:+381113390848" class="tel-header">011/33 90 848</a>

    <div class="logo-drzac ne-selektuj">
      <h1 class="logo"><a href="index.php"><span class="ultra">ultra</span><span class="medika">medika</span></a></h1>
      <div class="postava-gore">specijalistička <span class="show-lg">radiološka</span> ordinacija</div>
    </div>

    <nav class="meni">
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "index" or $trenutna_strana == "") {
    echo "trenutna_strana";}?>" href="index.php">Naslovna</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "ordinacija") {
    echo "trenutna_strana";}?>" href="ordinacija.php">Ordinacija</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "oprema") {
    echo "trenutna_strana";}?>" href="oprema.php">Oprema</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "pregledi") {
    echo "trenutna_strana";}?>" href="pregledi.php">Ultrazvučni pregledi</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "radovi") {
    echo "trenutna_strana";}?>" href="radovi.php">Stručni radovi i edukacija</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "galerija") {
    echo "trenutna_strana";}?>" href="galerija.php">Galerija</a>
      <a class="meni-pojedinacno <?php if ($trenutna_strana == "kontakt") {
    echo "trenutna_strana";}?>" href="kontakt.php">Kontakt</a>
    </nav>
  </header>

  <div class="glavnina">
