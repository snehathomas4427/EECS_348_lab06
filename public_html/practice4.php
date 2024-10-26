<!DOCTYPE html>
<html>
    <body>
        <h1>EECS 348 Lab Seven Practice Four</h1>
        <form method="post">
            <p>Size of the multiplication table: <input type="text" name="size" id="size" value=""></p>
            <button type="submit">Submit</button>
        </form>
        <br>
    </body>
</html>

<?php
    if (isset($_POST["size"])) {
        $size = intval($_POST["size"]);
        if ($size > 0) {
            echo "<table border='1'>";
            echo "<tr><th></th>";

            for ($i = 1; $i <= $size; $i++) {
                echo "<th>". $i ."</th>";
            }
            echo "</tr>";

            for ($i = 1; $i <= $size; $i++) {
                echo "<tr><th>". $i ."</th>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>". ($i * $j) ."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Enter a valid number.</p>";
        }
    }
    ?>