<?php

?>

<!DOCTYPE html>
<html lang = "en">
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
  <title>RabbitBlackExcited23!</title>
</head>
<body>
  <h1>Welcome to Password Generator</h1>
  <form method="POST" action = "result.php">
      <div class="animal" id ="animal_jpg">
          <?php
            $key1 = rand (0, 11);
            switch($key1){
              case 0:
                echo "<img src = \"img/animal/0.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 1:
                echo "<img src = \"img/animal/1.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 2:
                echo "<img src = \"img/animal/2.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 3:
                echo "<img src = \"img/animal/3.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 4:
                echo "<img src = \"img/animal/4.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 5:
                echo "<img src = \"img/animal/5.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 6:
                echo "<img src = \"img/animal/6.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 7:
                echo "<img src = \"img/animal/7.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 8:
                echo "<img src = \"img/animal/8.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 9:
                echo "<img src = \"img/animal/9.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 10:
                echo "<img src = \"img/animal/10.jpg\" width =\"400\" height = \"400\"\">";
                break;
              case 11:
                echo "<img src = \"img/animal/11.jpg\" width =\"400\" height = \"400\"\">";
                break;
            }
            echo "<br/>"
           ?>
           </div>
           <br/>

          <div class="button"><button onclick="displayRandomImages_animal();" type="button" class="btn btn-outline-success">I want another animal</button></div>
          <div class = "instruction">Please enter the name of the animal of the image above.</div>

      <div class = "text"><input type = "text" name = "word_animal" /></div>
      <hr/>
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

          <div class="button"><button onclick="displayRandomImages_color();" type="button" class="btn btn-outline-success">I want another color</button></div>
          <div class = "instruction">Please enter the name of the color of the image above.</div>
          <div class ="text" ><input type = text  name="word_color" />
        </div>
  <hr/>
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
            <div class = "text"><input type = text name= "word_emotion"/></div>
        <hr />
<div>
  <p class = "instruction">
     Please enter 2-digit random number (00 ~ 99)
  </p>
  <div class = "text"><input type = text id = "numb" name = "number"/></div>
</div>
  <p id = "demo"></p>

<hr/>
  <div>
     <p class = "instruction">
         Please enter special character from this list:
     </p>
     <p class = "instruction">
        ~ ! @ # $ % ^ & * ?
     </p>

     <div class = "text"><input type = text name = "word_specialchar"/></div>

     <div class ="submit">
     <input type = "submit"/>
     </div>
</form>
</body>
<script>
function displayRandomImages_animal() {
    const imgArray = [
    { src: "img/animal/0.jpg" },
    { src: "img/animal/1.jpg" },
    { src: "img/animal/2.jpg" },
    { src: "img/animal/3.jpg" },
    { src: "img/animal/4.jpg" },
    { src: "img/animal/5.jpg" },
    { src: "img/animal/6.jpg" },
    { src: "img/animal/7.jpg" },
    { src: "img/animal/8.jpg" },
    { src: "img/animal/9.jpg" },
    { src: "img/animal/10.jpg" },
    {src: "img/animal/11.jpg"},
];

    let arrayLength = imgArray.length;
    let newArray = [];
    for (let i = 0; i < arrayLength; i++) {
        newArray[i] = new Image();
        newArray[i].src = imgArray[i].src;
    }

  function getRandomNum(min, max)
  {
      imgNo = Math.floor(Math.random() * (max - min + 1)) + min;
      return newArray[imgNo];
  }

  let newImage = getRandomNum(0, newArray.length - 1);


  let images = document.getElementsByTagName('img');
  let l = images.length;
  for (let p = 0; p < l; p++) {
     images[0].parentNode.removeChild(images[0]);
  }
document.getElementById("animal_jpg").appendChild(newImage);
}


function displayRandomImages_color() {
    const imgArray = [
    { src: "img/color/0.png" },
    { src: "img/color/1.png" },
    { src: "img/color/2.png" },
    { src: "img/color/3.png" },
    { src: "img/color/4.png" },
    { src: "img/color/5.png" },
    { src: "img/color/6.png" },
];

    let arrayLength = imgArray.length;
    let newArray = [];
    for (let i = 0; i < arrayLength; i++) {
        newArray[i] = new Image();
        newArray[i].src = imgArray[i].src;
    }

  function getRandomNum(min, max)
  {
      imgNo = Math.floor(Math.random() * (max - min + 1)) + min;
      return newArray[imgNo];
  }

  let newImage = getRandomNum(0, newArray.length - 1);


  let images = document.getElementsByTagName('img');
  let l = images.length;
  for (var p = 0; p < l; p++) {
     images[0].parentNode.removeChild(images[0]);
  }
document.getElementById("color_img").appendChild(newImage);
}

function myFunction() {
    let x = document.getElementById("numb").value;
    let text;

    if (/^[0-9]{2}$/.test(x)) {
      if (isNaN(x) || x >= 100) {
       text = "Number is not valid";
      }else {
       text = "OK";
      }
    }

document.getElementById("demo").innerHTML = text;
}
</script>
</html>
