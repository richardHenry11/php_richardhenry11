<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil inputan</title>
</head>
<body>
    <ul>
        
        <?php for($i = 1; $i <= $_POST['baris']; $i++ ) {?>
        <tr>
            <?php for($a = 1; $a <= $_POST['kolom']; $a++) {?>
                   <?php
                   $data = 'input-'. $i .'-'. $a;
                   ?>         
                <td><strong><?= $i ;?>.<?= $a;?></strong> <?= $_POST[$data];?></td><br>
                
            <?php }?>
        </tr>
        <?php }?>
    </ul>
</body>
</html>