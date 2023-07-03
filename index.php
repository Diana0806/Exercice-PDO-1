<?php

require_once('connexion.php');

// EXERCICE 1 

$request = $db->query('SELECT * FROM clients');
$clients = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 1 </h2>';

foreach($clients as $client){
    echo $client['id'] . ' ';
    echo $client['firstName'].' ';
    echo $client['lastName'].'<br>';
}


echo '<br><br><br>';

// EXERCICE 2 

$request = $db->query('SELECT * FROM showTypes');
$showTypes = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 2 </h2>';

foreach($showTypes as $showType){
    echo $showType['id'].' ';
    echo $showType['type'].'<br>';
}

echo '<br><br><br>';

// EXERCICE 3 

$request = $db->query('SELECT * FROM clients LIMIT 20');
$clients = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 3 </h2>';

foreach($clients as $client){
    echo $client['id'] . ' ';
    echo $client['firstName'].' ';
    echo $client['lastName'].'<br>';
}
 
echo '<br><br><br>';

// EXERCICE 4 

$request = $db->query('SELECT * FROM clients WHERE cardNumber IS NOT NULL');
$clients = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 4 </h2>';

foreach($clients as $client){
    echo $client['id'] . ' ';
    echo $client['firstName'].' ';
    echo $client['lastName'].'<br>';
}

echo '<br><br><br>';

// EXERCICE 5

$request = $db->query("SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName");
$clients = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 5 </h2>';

foreach($clients as $client){
    echo $client['lastName'].' ';
    echo $client['firstName'].'<br>';
}
echo '<br><br><br>';

// EXERCICE 6 

$request = $db->query("SELECT title, performer, date, startTime FROM shows ORDER BY title ASC");
$shows = $request->fetchAll();

// var_dump($shows);

echo '<h2> EXERCICE 6 </h2>';

foreach($shows as $show){
    echo $show['title'] . " by " . $show['performer'] . ", " . $show['date'] . " at " . $show['startTime'] . "<br>";
}

echo '<br><br><br>';

// EXERCICE 7 

$request = $db->query('SELECT lastName, firstName, birthDate, card, cardNumber FROM clients');
$clients = $request->fetchAll();

// var_dump($clients);

echo '<h2> EXERCICE 7 </h2>';

foreach($clients as $client){
    echo $client['lastName'] .' ';
    echo $client['firstName'] .' ';
    echo $client['birthDate'] .' ';
    echo ($client['card'] ? "Yes" : "No") . "<br>";
    
    if ($client['card']) {
        echo $client['cardNumber'] . "<br>";
    }
}
 

?>





