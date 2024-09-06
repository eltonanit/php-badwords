 <?php 
     $string = "Ciao , come stai?";
     echo $string;

     $new_string = str_replace('Ciao', 'Salveeee', $string);
     echo "Nuova stringa:" .$new_string;

     //STRPOS : ricerca la posizione del caratter partendo dalla pozione 0di un carattere 

     $newstring = 'abcdef acdef';
     $pos = strpos($newstring, 'a',1);
     echo $pos;




     
 
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./welcome.php" method="GET">
                    <div class="row">
                        <div class="offset-2 col-4">
                            <div class="form-group">
                                <div class="control-label">PARAGRAFO</div>
                                <input type="text" class="form-control" name="paragrafo" placeholder="paragrafo">
                            </div>
                        </div>

                         <div class="col-4">
                            <div class="form-group">
                                <div class="control-label">Parola da censurare :</div>
                                <input type="text" class="form-control" name="censura" placeholder="censura">
                            </div>
                        </div>

                        <div class="col-10 offset-2 mt-3">
                            <button type="submit" class="btn btn-sm btn-primary">invia</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>
