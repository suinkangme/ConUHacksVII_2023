<?php
var_dump($_POST);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emotion Generator</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <form method=POST>
    <div>
       <p class = "instruction">Please choose one of the word in the table.</p>
       <div class = "emotion_table">
       <table>
         <tr>
           <td>happy</td>
           <td>joyful</td>
           <td>smiley</td>
           <td>excited</td>
           <td>energetic</td>
         </tr>
         <tr>
           <td>mad</td>
           <td>angry</td>
           <td>tired</td>
           <td>worried</td>
           <td>scared</td>
         </tr>
       </table>
       </div>
        <div class = "text"><input type = text /></div>
        <div class = "submit"><a href = "number.php"><button type= "button">Submit</button></a></div>

     </div>
     <div>
     </form>
</body>

</html>
