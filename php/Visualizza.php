<?php

echo '<link rel="stylesheet" href="../css/Style.css">';

echo '<div class="output">';

session_start();
$total = 0;
$nomeEvento = "-";
$numeroPersone = 0;

foreach ($_SESSION as $key) {
  $total += $key[1];

  if ($key[1] > $numeroPersone) {
    $nomeEvento = $key[0];
    $numeroPersone = $key[1];
  }
  echo "<p>Nome evento: " . $key[0] . "<br>Partecipanti Evento: " . $key[1] . "</p>";
}

echo "<p>Numero totale partecipanti: " . $total . "</p>";
echo "<p>L'evento piu numeroso: <br>" . $nomeEvento . " con ben " . $numeroPersone . " partecipanti</p>";

echo '<form action="../">
<input type="submit" value="Back" />
</form>';

echo '<p id="footerp"> by Fontanarosa Nicolo </p>';

echo "</div>";

?>
