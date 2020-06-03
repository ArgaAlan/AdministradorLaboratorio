<?php

function fields($fields, $reference)
{
    echo "<tr class=\"table-primary\">";
    foreach ($fields as $i => $value) {
        echo "<th>{$value}</th>";
    }
    if ($reference != null) {
        echo "<th>Información</th>";
    }
    echo "</tr>";
}

function printResults($results, $fields, $title_fields, $img, $reference)
{
    $result = mysqli_fetch_assoc($results);
    $change_color = false;
    if ($result) {
        fields($title_fields, $reference);
        while ($result) {
            echo "<tr>";
            //if change color
            if ($change_color) {
                foreach ($fields as $i => $value) {
                    if ($img && strcmp($value, "foto")) {
                        echo "<td class=\"table-light\">{$result[$value]}</td>";
                    } else {
                        echo "<td class=\"table-light\"><img src=\"{$result[$value]}\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                    }
                }
                if ($reference != null) {
                    echo "<td class=\"table-light\"><a href=consumibles_info.php?id={$result[$reference]}>Más información</a></td>";
                }
            } else {
                foreach ($fields as $i => $value) {
                    if ($img && strcmp($value, "foto")) {
                        echo "<td class=\"table-secondary\">{$result[$value]}</td>";
                    } else {
                        echo "<td class=\"table-secondary\"><img src=\"{$result[$value]}\" alt=\"Image\" height=\"42\" width=\"42\"></td>";
                    }
                }
                if ($reference != null) {
                    echo "<td class=\"table-secondary\"><a href=consumibles_info.php?id={$result[$reference]}>Más información</a></td>";
                }
            }
            echo "</tr>";
            $change_color = !$change_color;
            $result = mysqli_fetch_assoc($results);
        }
    } else {
        echo "<h1>INFORMACIÓN NO ENCONTRADA</h1>";
    }
}
