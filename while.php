<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hi While</title>
</head>
<body>
    <?php
    $i=0;
    while ($i <= 6) {
       ?>
        <div class="box">
           <?php echo $i; ?>
        </div>
       <?php
    $i++;
    }
    ?>
</body>
</html>