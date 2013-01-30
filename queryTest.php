<?PHP
	require_once 'config.inc.php';
	require_once 'Database.class.php';
	$sql	= "SELECT CASE (idType) WHEN 'group1' THEN 0 WHEN 'group2' THEN 1 WHEN 'group3' THEN 2 END AS 'group', dish as title, description, ingredients, procedures, backgroundImage, idDish AS gallery, (SELECT ROUND(AVG(rate),1) FROM rates WHERE idDish=dishes.idDish) AS rate FROM dishes";
	$db = new Database('us-cdbr-azure-east-b.cloudapp.net', 'b396c404e52f12', '8c6a2a67', 'tipsaldb');
	$db->connect();
	echo $db->query2JSON($sql);
	$db->close();
?>