<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>5 STAR RATING</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <form>
      <fieldset class="rating">
         <legend>Silver palace restaurant:</legend>
         <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked=""
            aria-label="No rating.">

         <input type="radio" id="rate1" name="rating" value="1">
         <label for="rate1">1 star</label>

         <input type="radio" id="rate2" name="rating" value="2">
         <label for="rate2">2 stars</label>

         <input type="radio" id="rate3" name="rating" value="3">
         <label for="rate3">3 stars</label>

         <input type="radio" id="rate4" name="rating" value="4">
         <label for="rate4">4 stars</label>

         <input type="radio" id="rate5" name="rating" value="5">
         <label for="rate5">5 stars</label>

         <span class="focus-ring"></span>
      </fieldset>
   </form>
</body>

</html>