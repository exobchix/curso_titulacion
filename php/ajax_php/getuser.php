<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetUser</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '', 'db_ajax_php');
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_error($con));
    }

    mysqli_select_db($con, "db_ajax_php");
    $sql = "SELECT * FROM usuarios WHERE id = '" . $q . "'";
    $result = mysqli_query($con, $sql);

    echo "<table>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Trabajo</th>
            </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellido'] . "</td>";
        echo "<td>" . $row['edad'] . "</td>";
        echo "<td>" . $row['ciudad'] . "</td>";
        echo "<td>" . $row['trabajo'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>