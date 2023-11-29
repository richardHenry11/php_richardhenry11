<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data person</title>
</head>
<body>
    <form action="soal3d.php" method="post">
        <input type="text" name="keyword" id="search">
        <button type="submit">search</button>
    </form><br>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <thead>
                <th>hobi</th>
                <th>jumlah person</th>
            </thead>
            <?php
            include 'soal3b.php';

            $dat = new person();
            foreach($dat->showDat() as $d ):
            ?>
            <tbody>
            <tr>
                <td><?=$d['hobi'];?></td>
                <td><?=$d['person_id'];?></td>
            </tr>
            </tbody>
            <?php endforeach;?>
        </tr>
    </table>
</body>
</html>