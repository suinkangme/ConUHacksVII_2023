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
       <p>
         Please enter the name of the animal in the following image.
         Caution: Vowels must be capitalized. </p>
         <?php
          $key = rand (0, 11);
          switch($key){
            case 0:
              echo "<img src = \"img/0.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 1:
              echo "<img src = \"img/1.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 2:
              echo "<img src = \"img/2.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 3:
              echo "<img src = \"img/3.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 4:
              echo "<img src = \"img/4.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 5:
              echo "<img src = \"img/5.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 6:
              echo "<img src = \"img/6.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 7:
              echo "<img src = \"img/7.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 8:
              echo "<img src = \"img/8.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 9:
              echo "<img src = \"img/9.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 10:
              echo "<img src = \"img/10.jpg\" width =\"400\" height = \"400\"\">";
              break;
            case 11:
              echo "<img src = \"img/11.jpg\" width =\"400\" height = \"400\"\">";
              break;
          }
         ?>

         <input type = text />
     </div>
     <div>
       <p>
         Please enter the name of the color in the following image.
         Caution: Vowels must be capitalized.
         <?php echo rand(0, 8)?>
       </p>
       <input type = text />
     </div>
     <div>
       <p>
         Please choose one of the word in the table.
         Caution: Vowels must be capitalized.
       </p>
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
        <input type = text />
     </div>
     <div>
       <p>
         Please enter special character from this list: ~ ! @ # $ % ^ & * ?
       </p>
 <input type = text />
     </div>
     <button>Submit</button>
   </form>
 </body>
<sript>

</sript>

 </html>
