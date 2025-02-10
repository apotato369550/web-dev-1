<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table - Output</title>
</head>
<body>
    <table>
        <?php
            $x = $_POST["x"];
            $y = $_POST["y"];

            for($i = 0; $i < $y; $i++) {
                echo "<tr>";
                for($j = 0; $j < $x; $j++) {
                    echo "<td>";
                    echo ($i + 1) * ($j + 1);
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>