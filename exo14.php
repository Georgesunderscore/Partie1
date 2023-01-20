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


<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).<br>
</p>
<h2>Affichage:<br>



</h2>
<?php
$bday = new DateTime(date('01.01.1985')); // Your date of birth
$today = new Datetime(date('m.d.y'));
//printf( "Affichage si la date courante est le". $today ."et la date de naissance le". $bday." :<br>");
//date_create or datetime ca fonctionne
$start_date = date_create("1986-02-26");
$end_date   = date_create(); // test
$diff = $start_date->diff($end_date);
//$diff = $today->diff($bday);
//var_dump($diff);
printf(' Your age : %d years, %d month, %d days , %d nbr jours', $diff->y, $diff->m,$diff->d , $diff->days);
printf("\n");

$today = getdate();
//print_r($today);


//////////////////////////////////////////

$start_date = date_create("2021-01-01");
$end_date   = date_create("2021-01-05"); // If you want to include this date, add 1 day

$interval = DateInterval::createFromDateString('1 day');
$daterange = new DatePeriod($start_date, $interval ,$end_date);

function show_dates ($dr) {
    foreach($dr as $date1){
        echo $date1->format('Y-m-d').'<br>';
    }
}
 
show_dates ($daterange);
   
echo '<br>';

// reverse the array

$daterange = array_reverse(iterator_to_array($daterange));

show_dates ($daterange);



$date = [
    '2019-1-3',
    '19-1-3',
    '3-1-2019',
    '3-Jan-19',
    '3-1-19', //php assume as y-m-d not d-m-y

    '2019-3-1',
    '19-3-1',
    '1-3-2019',
    '1-3-19',

    '2019/3/1',
    '19/3/1', //fail, php think is month 19
    '1/3/2019', //php think is m/d/y
    '1/3/19'
];

//Y-M-d
foreach($date as $i => $d){
    echo $i ."\r\n";
    var_dump(date_format(date_create($d), 'Y-M-d'));
    echo date_format(date_create($d), 'Y-M-d') . "<br>";
    echo "\r\n";
}


?>
</body>
</html>