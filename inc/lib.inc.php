<?php
function draw_table($cols = 10, $rows = 10, $color = "#FFDB00") {
    echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            If($td == 1 || $tr == 1)
                echo "<th bgcolor=$color>" . $td * $tr . "</th>";
            else
                echo "<td>" . $td * $tr . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
};

//drawMenu($leftMenu);
//drawMenu($leftMenu, false);


?>
