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

function getAllFoldersIn($directory){
	$dirs = scandir($directory);
	foreach($dirs as $file){
		if ($file[0] != '.'){
			$results[] = $directory . '/' . $file;
		}
	}
	return array_flatten($results);
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
$demos = getAllFoldersIn('../../learning/demos');

foreach ($demos as $demo){
	
	$content = file_get_contents($demo . '/demo.tpl');
	
	$dom = new DOMDocument();
	$dom->loadHTML($content);

	$xpath = new DOMXpath($dom);

	$headings = $dom->getElementsByTagName('h1');

	$doc = new Solarium_Document_ReadWrite();
	$doc->id = md5($demo);
	$doc->name = innerHTML($headings->item(0));
	$doc->content = $content;
	$doc->url = str_replace('../../learning', '', str_replace('/demos/', '/demo/', $demo));

	$doc->documentation = false;
	$doc->plugin = false;
	$doc->tutorial = false;
	$doc->demo = true;

	$results[] = $doc;
}


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
$query->setRows(10000);
$query->createFilterQuery('demos')->setQuery('demo:true');
$resultset = $client->select($query);

echo 'Found ' . $resultset->getNumFound() . ' demos';

foreach ($resultset as $document){
    echo '<hr/><table>';
    foreach($document as $field => $value){
        if(is_array($value)) $value = implode(', ', $value);
        echo '<tr><th>' . $field . '</th><td>' . $value . '</td></tr>';
    }
    echo '</table>';
}
?>