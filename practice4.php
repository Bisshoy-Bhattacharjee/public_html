<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>