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
            
            //beza dgn array, assoc array ada key value pairs 

            $student_1 = array(
              'firstName' => 'John',
              'lastName' => 'Doe',
              'country' => 'Canada'
            );

            echo $student_1['firstName']." ".$student_1['lastName'];

            $student_2 = [
              'firstName' => 'Mike',
              'lastName' => 'Angela',
              'country' => 'US'
            ];
            echo '<br>';
            echo $student_2['firstName']." ".$student_2['lastName'];
            echo '<pre>';
            var_dump($student_2);
            
           ?>
          </div>
    </div>
    
  </body>
</html>