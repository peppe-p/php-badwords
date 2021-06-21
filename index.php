

<?php 

/* 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito
con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$par = "Si sta come d’autunno sugli alberi le foglie.";
$lun_par = strlen($par);
$censura = $_GET["censura"];
$new_par = str_replace($censura, '***', $par);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Badwords</h1>
    <p>Paragrafo: <br>
    <?php echo $par ?>
    <br><br>
    Lunghezza: <?php echo $lun_par ?></p>
    <hr>

    <p>Paragrafo: <br>
    <?php echo $new_par ?>
    <br><br>
    Lunghezza: <?php echo $lun_par ?></p>
    <hr>

    <h2><?php echo $censura ?></h2>
</body>
</html>