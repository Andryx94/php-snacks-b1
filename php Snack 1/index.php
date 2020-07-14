<?php
//array di array match
  $matches = [
    [
      "casa" => "Milano",
      "punti casa" => 55,
      "ospite" => "Bologna",
      "punti ospite" => 5,
    ],
    [
      "casa" => "Taranto",
      "punti casa" => 77,
      "ospite" => "Messina",
      "punti ospite" => 78,

    ],
    [
      "casa" => "Stella Basket PSE",
      "punti casa" => 100,
      "ospite" => "Civitanova Marche",
      "punti ospite" => 0,
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Snack 1</title>
  </head>
  <body>
    <h2>Basket Match</h2>

    <!-- lista match -->
    <ul>
      <?php for ($i = 0; $i < count($matches); $i++){ ?>
        <?php $team_match = ($matches[$i]["casa"] . " - " . $matches[$i]["ospite"]); ?>
        <?php $team_match_score = ($matches[$i]["punti casa"] . " - " . $matches[$i]["punti ospite"]); ?>

        <li><?php echo ($team_match . " | " . $team_match_score) ?></li>
      <?php } ?>
    </ul>
  </body>
</html>
