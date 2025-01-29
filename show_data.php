<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Show</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        table {
            width: 60%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #338699;
            color: #fff;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            text-transform: uppercase;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>roll</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "connection.php";

                $search = "SELECT * FROM `data`";

                $exe_search = mysqli_query($con, $search);

                if ($exe_search && mysqli_num_rows($exe_search) > 0) {
                    while ($res = mysqli_fetch_array($exe_search)) {
                        ?>
                        <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['roll']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
