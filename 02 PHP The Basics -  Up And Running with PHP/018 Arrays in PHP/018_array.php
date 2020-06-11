<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          

          <div class="code-content">
          <?php 
            $month = array('January', 'February', 'March');

            //boleh guna array() atau []
            $fruits_1 = array('apple', 'banana', 'grape');

            $fruits_2 = ['kiwi', 'lemon', 'orange'];
            print_r($month);
            echo '<br>';
            print_r($fruits_1);
            echo '<br>';
            print_r($fruits_2);
            echo '<br>';
            echo $fruits_1[0];//print apple
            echo '<br>';
            array_push($fruits_1, 'pear');//tambah element dekat array
            echo "<pre>";
            print_r($fruits_1);
            echo '<br>';
            unset($fruits_1[1]);//buang element dekat  array;
            echo "<pre>";
            var_dump($fruits_1);
            echo "<pre>";

           ?>
          </div>
    </div>
    
  </body>
</html>