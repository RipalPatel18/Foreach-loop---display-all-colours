<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week4</title>
</head>
<body>
    <?php
$connect = mysqli_connect(
            'localhost',
            'root',
            '',
            'csv_db 24' );
            if(!$connect){
                die("Connection Failed" . mysqli_connect_error());
            }

            $query = "SELECT * FROM colors";
            $colors = mysqli_query($connect, $query);

            echo "<pre>";
            print_r($colors); 
            echo "</pre>";

            foreach ($colors as $color) {
        echo "<div style='background-color:" . $color['Hex'] . "; 
                        padding:20px;
                        text-align : center; 
                        margin:10px; 
                        color:#fff;'>
                " . $color['Name'] . " - " . $color['Hex'] . "
              </div>";
            }
          
            
    ?>
</body>
</html>