<?php
include('../../application/lib/Solarium/Autoloader.php');
Solarium_Autoloader::register();
$client = new Solarium_Client();


/*
helpers
*/
function array_flatten($array){
	foreach($array as $key => $value)
		$array[$key] = (array)$value;
	return call_user_func_array('array_merge', $array);
}

function getAllFilesIn($directory){
	$dirs = scandir($directory);
	foreach($dirs as $file){
		if ($file[0] != '.' && $file != 'menu.html'){
			if (is_dir($directory . '/' . $file)){
				$results[] = getAllFilesIn($directory . '/' . $file);
			} else {
				$results[] = $directory . '/' . $file;
			}
		}
	}
	return array_flatten($results);
}

function innerHTML($node){ 
    $html = '';
    $children = $node->childNodes;
    foreach ($children as $child){
        $html .= $child->ownerDocument->saveXML($child);
    }
    return $html;
}


/*
get content
*/
foreach (getAllFilesIn('../../releases/2.0') as $page){
	$content = file_get_contents($page);
	
	$dom = new DOMDocument();
	$dom->loadHTML($content);
	
	$xpath = new DOMXpath($dom);
	
	$headings = $dom->getElementsByTagName('h1');
	
	$doc = new Solarium_Document_ReadWrite();
	$doc->id = md5($page);
	$doc->name = preg_replace('/<small>[^<]*<\/small>/', '', innerHTML($headings->item(0)));
	$doc->content = $content;
	$doc->url = str_replace('.html', '', str_replace('../../releases/2.0', '', $page));
	
	$results[] = $doc;
}


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