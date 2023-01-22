<?php

 ?>
 <!DOCTYPE html>

 <html>

 <head>
   <title>Password Generator</title>
 </head>

 <body>
   <h1>Welcome to Password Generator</h1>
   <form method = POST>
     <div>
       <p>Please enter the name of the animal in the following image.</p>
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
         <input type = text />
     </div>
     <div>
       <p>Please enter the name of the color in the following image.</p>
        <?php $key2 = rand(0, 7);
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
              // echo "<img src = \"img/color/6.jpg\" width =\"400\" height = \"400\"\">";
              // break;
          }
          echo "<br/>"
        ?>
       <input type = text />
     </div>
     <div>
       <p>Please choose one of the word in the table.</p>
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
        <input type = text />
     </div>
     <div>
       <p>
          Please enter 2-digit random number (00 ~ 99)
       </p>
        <input type = text id = "numb"/>

      <button type= "button" onclick = myFunction()>Submit</button>
        <p id = "demo"></p>
     </div>
     <div>
       <p>
         Please enter special character from this list: ~ ! @ # $ % ^ & * ?
       </p>
 <input type = text />
     </div>
     <button type= "button">Submit</button>
   </form>
 </body>
<script>
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
