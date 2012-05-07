<?php
include('../application/lib/Solarium/Autoloader.php');
Solarium_Autoloader::register();

$client = new Solarium_Client();
$query = $client->createSelect();
$query->setRows(1000);

$resultset = $client->select($query);

echo 'Found: ' . $resultset->getNumFound() . ' records.';

foreach ($resultset as $document){
    echo '<hr/><table>';
    foreach($document as $field => $value){
        if(is_array($value)) $value = implode(', ', $value);
        echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
    }
    echo '</table>';
}
?>