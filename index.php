<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Pactice</title>
</head>
<body>
 
    <?php

        require_once('function.php');

        $apple = new fruit('Apple','Red');

        echo 'Fruit Name is : '.$apple->get_name().'</br>';
        echo 'color is : '.$apple->get_color().'</br>';

        //$mango =new mango('Mango','Yellow');
        

        $Orange = new Orange;
        echo $Orange->name ="Orange is Desi";
        echo $Orange->color ="Orange is Gloden";
        echo $Orange->weight ="300";








    
    
    
    ?>






</body>
</html>