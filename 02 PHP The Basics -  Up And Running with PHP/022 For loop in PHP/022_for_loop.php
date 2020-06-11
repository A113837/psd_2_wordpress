<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Introduction to PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
    <style type="text/css">
      * {
        box-sizing: border-box;
      }
      html {
        height: 100%;
      }
      body {
        min-height: 100%;
        margin:0;
        background-color: #00c4ff;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
      }
      div.container {
        max-width: 1100px;
        margin: 0 auto;
        width: 90%;
        background-color: white;
        height: 100vh;
        padding: 30px;
      }
      h1 {
        font-size: 30px;
        text-align: center;
      }
      div.code-content {
        background-color: #e1e1e1;
        padding:30px;
        margin-top: 40px;
      }

    </style>
  </head>
  <body>
    
    <div class="container">
          <h1>Up & Running with PHP</h1>
          

          <div class="code-content">
          <?php 
            
            for($i = 0; $i <4; $i++)
            {
              echo "The number is: " .$i .'<br>'; 
            }

            echo '<br>';

            for($i = 0; $i <4; $i++)
            {
              if($i == 2)
              {
                echo "The number is Two!!" ."<br>";
                continue;
              } 
              echo "The number is: " .$i .'<br>';
            }

            echo '<br>';

            for($i = 0; $i <4; $i++)
            {
              
              echo "The number is: " .$i .'<br>';
              if($i == 2)
              {
                echo "The number is Two!!" ."<br>";
                continue;
              } 
            }

            echo '<br>';

            for($i = 0; $i <4; $i++)
            {
              if($i == 2)
              {
                echo "The number is Two!!" ."<br>";
                break; //atau exit
              }
              echo "The number is: " .$i .'<br>'; 
            }
           ?>


          </div>
    </div>
    
  </body>
</html>