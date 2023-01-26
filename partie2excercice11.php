<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 11</h1>
    <p>CEcrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
        formaterDateFr("2018-02-23");  </p>
    <h2>Affichage
    vendredi 23 février 2018 
        
    </h2>
    
    <?php 
    $textdate = "2018-02-23";
    $format = 'Y-m-d';
    
    //test 
    echo datecreate($textdate,$format);
    function datecreate($pdate,$pformat):string{
        $format = 'Y-m-d';
        $date = DateTimeImmutable::createFromFormat($format, '2009-02-15');
        return "Format: $format; " . $date->format('Y-m-d') . "\n";
        }

    

    //avec pattern
    $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
    $fmt->setPattern('EEEE dd MMMM YYYY');
    echo $fmt->format(new DateTime($textdate ));
    //sans pattern
    $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    //$fmt->setPattern('EEEE dd MMMM YYYY');
    echo $fmt->format(new DateTime($textdate));

    //solution 
    formaterDateFr("2018-02-23");

    function formaterDateFr($textdate){
        $fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        echo $fmt->format(new DateTime($textdate ));

    }


    ?>    
</body>
</html>



