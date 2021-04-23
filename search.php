<?php
mysql_connect("localhost","root", "")or die("error connecting to database: ".mysql_error());
mysql_select_db("login")or die(mysql_error());
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
<?php
$query=$_GET['query'];
$min_length=3;
if(strlen($query)>=$min_length){
$query=htmlspecialchars($query);
$query=mysql_real_rescape_string($query);
$raw_results=mysql_query("SELECT * FROM login WHERE ('Title' LIKE '%".$query."%')OR('text' LIKE '%".$query."%')")or die(mysql_error());
if(mysql_num_rows($raw_results)>0){
while($results=mysql_fetch_array($raw_results)){
echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
}
}
else
{
echo"NO RESULTS FOUND";
}
}
else{
echo"minimum length is ".$min_length;
}
?>
</body>
</html>