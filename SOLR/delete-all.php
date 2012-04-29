
<?php
include('../application/lib/Solarium/Autoloader.php');
Solarium_Autoloader::register();
$client = new Solarium_Client();

$update = $client->createUpdate();
$update->addDeleteQuery('name:**');
$update->addCommit();

$result = $client->update($update);

echo '<b>Update query executed<b><br/>';
echo 'Query status: ' . $result->getStatus(). '<br/>';
echo 'Query time: ' . $result->getQueryTime();
?>