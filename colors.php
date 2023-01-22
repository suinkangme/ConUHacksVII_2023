<?php
var_dump($_POST);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Generator</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" //
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <form method="POST" action = "emotions.php">
        <div>
            <div class = "color" id = "color_img">
              <?php
              $key2 = rand(0, 6);
               switch($key2){
                 case 0:
                   echo "<img src = \"img/color/0.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 1:
                   echo "<img src = \"img/color/1.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 2:
                   echo "<img src = \"img/color/2.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 3:
                   echo "<img src = \"img/color/3.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 4:
                   echo "<img src = \"img/color/4.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 5:
                   echo "<img src = \"img/color/5.png\" width =\"400\" height = \"400\"\">";
                   break;
                 case 6:
                   echo "<img src = \"img/color/6.png\" width =\"400\" height = \"400\"\">";
                   break;
               }
               echo "<br/>"
             ?>
             </div>
            <br/>

            <div class="button"><button onclick="displayRandomImages();" type="button" class="btn btn-outline-success">I want another color</button></div>
            <div class = "instruction">Please enter the name of the color of the image above.</div>
            <div class ="text" ><input type = text  name ="word_color" />
          </div>
            <div class = "submit">
              <input type = "submit"/>
            </div>
            <!-- <div class = "submit"><a href = "emotions.php"><button type= "button">Submit</button></a></div> -->
          </div>
          </form>

</body>
    <script src="generateColor.js"></script>
</html>
