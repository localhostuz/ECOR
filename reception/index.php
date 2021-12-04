<meta http-equiv="content-type" content="text/html; charset=utf8" />
<?php include ("../blocks/bd.php");
if (isset($_POST['region'])){$region = $_POST['region']; }
if (isset($_POST['district'])){$district = $_POST['district']; }
if (isset($_POST['organization'])){$organization = $_POST['organization']; }
if (isset($_POST['name'])){$name = $_POST['name']; }
if (isset($_POST['description'])){$description = $_POST['description']; }
if (isset($_POST['type'])){$type = $_POST['type']; }
$date = date("Y-m-d H:i:s"); ;
if (isset($region) && isset($district) && isset($organization) && isset($name)){
	$result = mysql_query("INSERT INTO receptions (region,district,organization,name,description,creation_date, type) VALUES ('".$region."','".$district."','".$organization."','".$name."','".$description."',CAST('". $date ."' AS DATE),'".$type."')");
	if ($result) {echo "Данные успешно добавлена!";}
	else {echo "Данные не добавлена!";}
}else {echo "Заполните все поля формы!!!";}
?>
