

<?php 

 
     $paragrafo = $_GET['paragrafo'];
     $censura = $_GET['censura'];

     $str = $paragrafo ;
    
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <h1>Il Paragrafo è : <?php echo $paragrafo; ?> </h1> 
 <h2>Il paragrafo è lungo : <?php echo strlen($str); ?></h2>
  <h3>Censura questa parola: <?php echo $censura; ?> </h3> 

</body>
</html>