<?php
/**
 * Created by PhpStorm.
 * User: dapomakanjuola
 * Date: 2019-03-14
 * Time: 07:49
 */

echo "<html><body><table>\n\n";
$f = fopen("insurance.csv", "r");
while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";