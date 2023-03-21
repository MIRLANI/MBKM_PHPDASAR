<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Bagun datar persegi</title>
    <style>
        h1{
            text-align: center;
        }
        form table{
            text-align: center;
            width: 50%;
            margin: auto;
        }
        tr{
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Bangun datar persegi </h1>
    <form action="" method="post">
        <table >
            <tbody>
                <tr>
                    <td><label for="sisi1">Sisi1
                        <input type="text" name="sisi1" id="sisi1" required>
                    </label></td>
                </tr>
                <tr>
                    <td><label for="sisi2">Sisi2
                        <input type="text" name="sisi2" id="sisi2" required>
                    </label></td>
                </tr>
                <tr>
                    <td><input type="submit" name="hitung" value="Hitung"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php 
    if (isset($_POST['hitung'])){
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];

        $luasPersegi = $sisi1 * $sisi2;
    }?>

    <p>Hasilnya: 
     <?php if (isset($luasPersegi)) { ?>
          <b><?= $luasPersegi; ?></b>  
    <?php } ?>
    </p>
    
</body>
</html>