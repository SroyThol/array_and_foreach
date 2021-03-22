<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hi Associate Array</title>
</head>
<body>
    <!-- <?php
      $color=array("Red"=>"20","blue"=>"30","green"=>"40");
      foreach ($color as $key => $val) {
          ?>
            <div class="box" style="background: blue; width: 100px; float: left; margin: 20px; text-align: center;line-height: 40px; ">
                <?php echo $key .'='.$val ?>
            </div>
          <?php
      }
    ?> -->

<!-- <?php
      $color=array("HTML"=>"blue","CSS"=>"green","PHP"=>"red");
      foreach ($color as $key => $val) {
          ?>
            <div class="box" style="background: <?php echo $val; ?>; width: 100px; float: left; margin: 20px; text-align: center;line-height: 40px; ">
                <?php echo $key.'='.$val; ?>
            </div>
          <?php
      }
    ?> -->

    <?php
       $car = array(
          array("HTML","30"),
          array("CSS","60"),
          array("JAVASCRIPT","60"),
          array("JQUERY","80"),
          array("PHP","50")
       );
       foreach ($car as $key => $value) {
         ?>
           <div class="box">
             <?php echo $value[0].'='.$value[1]; ?>
           </div>
         <?php
       }
    ?>
</body>
</html>