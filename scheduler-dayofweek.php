<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scheduler</title>
  <style type="text/css">
      body {
        text-align: center;
        font-size: 120px;
        font-family: Arial;
        margin-top: 38vh;
      }
  </style>
</head>

<body>

  <?php 
    $dayOfWeek = date("w"); 
     
    switch ($dayOfWeek) {
      case 1:
        echo "It is Monday";
        break;

      case 2:
        echo "It is Tuesday";
        break;

      case 3:
        echo "It is Wednesday";
        break;

      case 4:
        echo "It is Thursday";
        break;

      case 5:
        echo "It is Friday";
        break;

      case 6:
        echo "It is Saturday";
        break;

      case 7:
        echo "It is Sunday";
        break;
      
      default:
        # code...
        break;
    }
  ?>

</body>
</html>