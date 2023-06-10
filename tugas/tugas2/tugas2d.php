<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2D</title>
    <style>
        .table{
            border: 1px solid black;
        }

        .color1{
            height: 50px;
            width: 50px;
            background-color: black;
        }

        .color2{
            height: 50px;
            width: 50px;
            background-color: white;  
        }
    </style>
</head>
<body>
    <table class="table" cellspadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) ?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) :?>
                    <?php if(($i + $j) % 2 == 0) :?>
                    <td class="color1">
                        <?php else: ?>
                    </td>
                    <td class="color2">
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
    </table>
</body>
</html>