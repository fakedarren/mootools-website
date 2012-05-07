<?php
include('../../application/lib/Solarium/Autoloader.php');
Solarium_Autoloader::register();
$client = new Solarium_Client();


/*
get content
*/
$mysqli = new mysqli('localhost', 'root', 'password', 'forge_mooforge');

if ($result = $mysqli->query('SELECT * FROM plugin')){
	
	while ($row = $result->fetch_object()){
	
		$doc = new Solarium_Document_ReadWrite();
		$doc->id = md5('Forge:' . $row->title);
		$doc->name = $row->title;
		$doc->content = $row->description_clean;
		$doc->url = '/forge/p/' . $row->slug; 
	
		$doc->documentation = false;
		$doc->plugin = true;
		$doc->tutorial = false;
		$doc->demo = false;
	
		$results[] = $doc;
	}
}
$mysqli->close();


/*
write content
*/
$update = $client->createUpdate();

$update->addDocuments($results);
$update->addCommit();

$result = $client->update($update);


/*
display records
*/
$client = new Solarium_Client();
$query = $client->createSelect();
$query->setRows(1000);
$query->createFilterQuery('plugins')->setQuery('plugin:true');
$resultset = $client->select($query);

echo 'Found ' . $resultset->getNumFound() . ' plugins';

foreach ($resultset as $document){
    echo '<hr/><table>';
    foreach($document as $field => $value){
        if(is_array($value)) $value = implode(', ', $value);
        echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
    }
    echo '</table>';
}
