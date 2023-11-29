<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data person</title>
</head>
<body>
    <form action="soal3d.php" method="post">
        <input type="text" name="search" id="search">
        <button type="submit">search</button>
    </form>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <thead>
                <th>hobi</th>
                <th>jumlah person</th>
            </thead>
                <?php  
                include 'soal3b.php';

                    $keyword = $_POST['keyword'];
                    $jumlahPerson =$_POST["keyword"];

                    $dat = new person();
                    if( isset($keyword, $jumlahPerson)) :?>
                    <?php
                    foreach($dat->search($keyword,$jumlahPerson) as $d) :
                ?>
            <tbody>
            <tr>
                <td><?=$d['hobi'];?></td>
                <td><?=$d['person_id'];?></td>
            </tr>
            </tbody>
            <?php endforeach;?>
            <?php else:?>
                <?= "<script>
                    alert('no data!');
                    document.location.href='soal3c.php';
                    </script>";?>
            <?php endif;?>
        </tr>
    </table>
</body>
</html>