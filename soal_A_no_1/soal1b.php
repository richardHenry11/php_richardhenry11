<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan submit pertama</title>
</head>
<body>  
<form action="soal1c.php" method="post">
    <input type="hidden" name="kolom" value="<?= $_POST['kolom'];?>"> 
    <input type="hidden" name="baris" value="<?= $_POST['baris'];?>"> 
    <table border="1">    
        <?php for($i = 1; $i <= $_POST['baris']; $i++ ) {?>
        <tr>
            <?php for($a = 1; $a <= $_POST['kolom']; $a++) {?>
                            
                <td><?= $i ;?>.<?= $a;?> <input type="text" name="input-<?= $i ;?>-<?= $a;?>" id=""></td>
                
            <?php }?>
        </tr>
        <?php }?>
    </table><br>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>