<?PHP
	require_once 'config.inc.php';
	require_once 'Database.class.php';
	$sql	= "SELECT idType as 'key', type as title, verticalImage, horizontalImage, description FROM types ";
	$db = new Database('us-cdbr-azure-east-b.cloudapp.net', 'b396c404e52f12', '8c6a2a67', 'tipsaldb');
	$db->connect();
	echo $db->query2JSON($sql);
	$db->close();
?>