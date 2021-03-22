<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array.css">
    <title>Hi Array</title>
</head>
<body>
    <?php
      $language=array("HTML","CSS","JAVASCRIPT","JQUERY","PHP","React");
      ?>
      <div class="check"> 
         <ul>
             <?php
                 foreach ($language as $key => $value) {
                     ?>
                     <li>
                         <a href="#"><?php echo $value; ?></a>
                     </li>
                     <?php
                 }
             ?>
         </ul>
      </div>
      <?php
    ?>
</body>
</html>