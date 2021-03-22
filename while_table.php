<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hi while</title>
</head>
<body>
<div class="container">
    <table border="2" style="margin: auto; margin-top: 200px; background-color: blue; color: white;">
      <tr>
          <th>NProduct</th>
          <th>Name</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Amount</th>
      </tr>
      <?php
       $i=1;
       while ($i <= 6) {
           ?>
             <div class="table">
                <tr>
                   <th>Product</th>
                   <th>Name</th>
                   <th>Qty</th>
                   <th>Price</th>
                   <th>3000</th>
                </tr>
             </div>
           <?php
        $i++;
       }
      ?>
    </table>
</div>
</body>
</html>