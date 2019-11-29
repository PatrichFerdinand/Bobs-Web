<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Freight Costs</title>
</head>
<body>
    <table style="border: 0px; padding: 3px">
        <tr>
        <td style="background: #cccccc; text-align: center;">Distance</td>
        <td style="background: #cccccc; text-align: center;">Cost</td>
        </tr>
                <?php
                $distance = 50;
                while ($distance <= 250) {
                echo "<tr>
                <td style=\"text-align: right;\">".$distance."</td>
                <td style=\"text-align: right;\">".($distance / 10)."</td>
                </tr>\n";
                $distance += 50;
                }
                ?>
    </table>
</body>
</html>