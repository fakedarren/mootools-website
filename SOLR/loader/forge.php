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

echo '<b>Update query executed<b><br/>';
echo 'Query status: ' . $result->getStatus(). '<br/>';
echo 'Query time: ' . $result->getQueryTime() . '<hr/><br/><br/><br/><br/><br/><br/>';

// create a client instance
$client = new Solarium_Client();

// get a select query instance
$query = $client->createSelect();

// override the default row limit of 10 by setting rows to 30
$query->setRows(30);

// this executes the query with default settings and returns the result
$resultset = $client->select($query);

// display the total number of documents found by solr
echo 'NumFound: '.$resultset->getNumFound();

// show documents using the resultset iterator
foreach ($resultset as $document) {

    echo '<hr/><table>';

    // the documents are also iterable, to get all fields
    foreach($document AS $field => $value)
    {
        // this converts multivalue fields to a comma-separated string
        if(is_array($value)) $value = implode(', ', $value);
        
        echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
    }

    echo '</table>';
}
?>