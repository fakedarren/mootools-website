<?php
include('../application/lib/Solarium/Autoloader.php');
Solarium_Autoloader::register();


$client = new Solarium_Client();
$query = $client->createSelect();
$query->setRows(1000);


$facetSet = $query->getFacetSet();
$facetSet->createFacetField('docs')->setField('documentation');
$facetSet->createFacetField('plugins')->setField('plugin');
$facetSet->createFacetField('demos')->setField('demo');
$facetSet->createFacetField('tutorials')->setField('tutorial');


$resultset = $client->select($query);


$docs = $resultset->getFacetSet()->getFacet('docs')->getValues();
$plugins = $resultset->getFacetSet()->getFacet('plugins')->getValues();
$demos = $resultset->getFacetSet()->getFacet('demos')->getValues();
$tutorials = $resultset->getFacetSet()->getFacet('tutorials')->getValues();


echo '<ul>';
echo '<li>Documentation (' . $docs['true'] . ')</li>';
echo '<li>Plugins (' . $plugins['true'] . ')</li>';
echo '<li>Demos (' . $demos['true'] . ')</li>';
echo '<li>Tutorials (' . $tutorials['true'] . ')</li>';
echo '</ul>';


echo '<hr />';
echo '<ol>';
foreach ($resultset as $document){
	echo '<li>';
	echo '<a href="' . $document->url . '">' . $document->name . '</a>';
	echo '</li>';
}
echo '</ol>';