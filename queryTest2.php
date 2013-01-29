<?PHP
	require_once 'config.inc.php';
	require_once 'Database.class.php';
	$sql	= "SELECT idType as 'key', type as title, verticalImage, horizontalImage, description FROM types ";
	$db = new Database('localhost', 'root', '', 'tipsal');
	$db->connect();
	echo $db->query2JSON($sql);
	$db->close();
?>