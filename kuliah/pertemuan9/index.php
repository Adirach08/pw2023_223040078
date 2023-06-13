<?php 
require('functions.php');
  $title = 'Home';
  $students = [
    [
      "nama" => "Adi Rachmansyah",
      "npm" => "223040078",
      "email" => "Adirach08@gmail.com"
    ],
    [
      "nama" => "Kaka Praditha",
      "npm" => "223040087",
      "email" => "kakapradithaa123@gmail.com"
    ],
  ]; 

  // dd($_SERVER["REQUEST_URI"]);
  // "../kuliah/pertemuan9/

  require('views/index.view.php');

  ?>