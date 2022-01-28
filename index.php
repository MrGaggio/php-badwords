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
        $via = 'nella mia via ci sono 5 case';
        $prova = 'la password per entrare in casa è';
    ?>
  <p>Quante case ci sono nella tua via?</p>
  <p><?php echo $via ?></p>
  <p><?php echo $prova ?></p>
  <p><?php echo $prova ?></p>
  <p><?php echo $prova ?></p>
  <p><?php echo $via ?></p>

  <p>prova push</p>

</body>
</html>