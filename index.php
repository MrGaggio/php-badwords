<!-- 
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        //il get intercetta nell'url la parola password e gli assegna il valore che segue all'=
       $result = $_GET['password'];


        // la stringa che vado a stampare
        $string = 'la password è pippo prova pippo prova pippo';

        // numero caratteri della stringa
        $lenString = strlen($string);
        
        echo str_replace($result, "***", $string);
    ?>

 
  <p>la lunghezza della stringa è di <?php echo $lenString?>   caratteri</p> -->



</body>
</html>