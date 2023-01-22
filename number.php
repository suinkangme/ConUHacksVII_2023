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


</head>

<body>

    <form method=POST>
    <div>
       <p>
          Please enter 2-digit random number (00 ~ 99)
       </p>
        <input type = text id = "numb"/>

      <button type= "button" onclick = myFunction()>Submit</button>
        <p id = "demo"></p>
     </div>
</body>

</html>