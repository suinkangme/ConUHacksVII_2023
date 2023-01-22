<?php
// var_dump($_POST);
$result_original =
  $_POST["word_animal"].$_POST["word_color"].$_POST["word_emotion"].$_POST["number"].$_POST["word_specialchar"];
$temp = str_split($result_original, 1);
$result_caps ="";

foreach ($temp as $letter){
  if ($letter == 'a' || $letter == 'i'|| $letter == 'e'||$letter == 'o'||$letter == 'u'){
    $result_caps .= strtoupper($letter);
  }
  else{
      $result_caps .= $letter;
  }

}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Generator</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    </style>
</head>

<body>
    <h1>Your password is ...</h1>
    <div>
      <h3 style= "text-align: center;">
          <?php echo "<b>".$result_caps."</b>" ?>
      </h3>
    </div>
  <div class = "submit"><a href = "final.php"><button type= "button">Try Again</button></a></div>
</body>

</html>
