<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
</head>

<body>
    <h3><?php echo $data['title']; ?></h3>

    <table>
        <thead>
            <th>Landnaam</th>
            <th>Hoofdstad</th>
            <th>Continent</th>
            <th>Inwonersaantal</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
</body>

</html>