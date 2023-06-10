<?php 
    $film = [
        [
        'poster' => 'TheLastOfUs.png',
        'judul' => 'The Last Of Us',
        'tahun' => '2023',
        'genre' => ['Action, ', 
                    'Adventure, ', 
                    'Drama.'],
        'PemeranUtama' => ['Pedro Pascal, ', 
                            'Bella Ramsey, ', 
                            'Anna Torv.'],
        'sutradara' => ['Neil Druckmann, ',  
                         'Craig Mazin.']
    ],
    [
        'poster' => 'SevenYearsInTibet.png',
        'judul' => 'Seven Years In Tibet',
        'tahun' => '1997',
        'genre' => ['Biography, ', 
                    'Adventure, ', 
                    'Drama.'],
        'PemeranUtama' => ['Brad Pitt, ', 
                            'David Thewlis, ', 
                            'BD Wong.'],
        'sutradara' => ['Jean-Jacques Annaud.'] 
    ],
    [
        'poster' => 'InTheHeartOfTheSea.png',
        'judul' => 'In The Heart Of The Sea',
        'tahun' => '2015',
        'genre' => ['Action, ', 
                    'Adventure, ', 
                    'Biography.'],
        'PemeranUtama' => ['Chris Hemsworth, ', 
                            'Cillian Murphy, ', 
                            'Brendan Gleeson.'],
        'sutradara' => ['Ron Howard.']
    ],
    [
        'poster' => 'interstellar.png',
        'judul' => 'Interstellar',
        'tahun' => '2014',
        'genre' => ['Sci-Fi, ', 
                    'Adventure, ', 
                    'Drama.'],
        'PemeranUtama' => ['Matthew McConaughey, ', 
                            'Anne Hathaway, ', 
                            'Jessica Chastain.'],
        'sutradara' => ['Christopher Nolan.']
    ],
    [
        'poster' => '22July.png',
        'judul' => '22 July',
        'tahun' => '2018',
        'genre' => ['Crime, ', 
                    'History, ', 
                    'Drama.'],
        'PemeranUtama' => ['Andres Danielsen Lie, ', 
                            'Jonas Strand Gravli, ', 
                            'Jon Øigarden.'],
        'sutradara' => ['Paul Greengrass.']
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILM</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($film as $i) { ?>
        <br>
        <ul>
            <li style ="list-style:none;">
                <img src="img/<?= $i['poster']; ?>" width ="120" height="200" border="3px solid black">
            </li>
            <li>Judul : <?= $i['judul']; ?></li>
            <li>Tahun : <?= $i['tahun']; ?></li>
            <li>Genre : 
                <?php foreach($i['genre'] as $gen){
                echo $gen;
            } ?>
            </li>
            <li>Pemeran Utama : 
                <?php foreach($i['PemeranUtama'] as $pu){
                echo $pu;
            } ?>
            </li>
            <li>Sutradara : 
                <?php foreach($i['sutradara'] as $su){
                echo $su;
            }?>
            </li>
        </ul>
        <?php } ?>
</body>
</html>