<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php

$ball="purple";
if ($ball == 'red') {
$redbox = $ball;
} elseif ($ball == 'yellow') {
$yellowbox = $ball;
} elseif ($ball == 'blue') {
$bluebox = $ball;
} elseif ($ball == 'green') {
$greenbox = $ball;
} elseif ($ball == 'purple') {
$purplebox = $ball;
} else {
$colorlessbox = $ball;
}

echo "Red Box : $redbox <br>";
echo "Yellow Box : $yellowbox <br>";
echo "Blue Box : $bluebox <br>";
echo "Green Box : $greenbox <br>";
echo "Purple Box : $purplebox <br>";
echo "Colorless Box : $colorlessbox <br>";

?> 
