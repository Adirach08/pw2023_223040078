<?php 
$mahasiswa = [
    [
        'nama' => 'Adi Rachmansyah',
        'npm' => '223040078',
        'email' => 'adi.223040078@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'adira.jpg'
    ],
    [
        'nama' => 'Muhammad Alfath Septian',
        'npm' => '223040014',
        'email' => 'alfath.223040014@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'afat.jpg'
    ],
    [
        'nama' => 'Afgiansyah Zabihullah Achmad',
        'npm' => '223040119',
        'email' => 'apgi.223040119@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'apgi.jpg'
    ],
    [
        'nama' => 'Chandra Ardiansyah',
        'npm' => '223040160',
        'email' => 'chandra.223040110@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'chandra.jpg'
    ],
    [
        'nama' => 'Muhammad Daffa Riyadi',
        'npm' => '223040120',
        'email' => 'daffa.223040120@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'rb.jpg'
    ],
    [
        'nama' => 'Meutuah dicco linge',
        'npm' => '223040098',
        'email' => 'meutuah.223040098@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'dicco.jpg'
    ],
    [
        'nama' => 'Dzikri Setiawan',
        'npm' => '223040072',
        'email' => 'dzikri.223040072@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'dzikri.jpg'
    ],
    [
        'nama' => 'Kaka Praditha Putra',
        'npm' => '223040087',
        'email' => 'kaka.223040087@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'kaka.jpg'
    ],
    [
        'nama' => 'Muhammad Marsa Nurjaman',
        'npm' => '223040083',
        'email' => 'marsa.223040083@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'marsa.jpg'
    ],
    [
        'nama' => 'Moch Zuhdi Maulana Nabilah',
        'npm' => '223040101',
        'email' => 'zuhdi.223040101@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => 'zuhdi.jpg'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 5A</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) {?>
        <br>
        <ul>
            <li style ="list-style:none;">
                <img src="img/<?= $mhs['foto']; ?>" width = "270" height = "370" border = "3px solid black" >
            </li>
            <li>Nama : <?= $mhs['nama']; ?></li>
            <li>NPM : <?= $mhs['npm']; ?></li>
            <li>Email : <?= $mhs['email']; ?></li>
            <li>Jurusan : <?= $mhs['jurusan']; ?></li>
        </ul>
        <?php }?>

</body>
</html>