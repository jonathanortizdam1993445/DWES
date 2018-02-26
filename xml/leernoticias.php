<?php
$xml = simplexml_load_file("RSS.xml");
foreach ($xml->channel->item as $valor){
	echo "<h1>".$valor->title."</h1>";
	echo "<h2>".$valor->description."</h2>";
	echo "<a href='#'>".$valor->link."</a></br>";
	echo "<p>$valor->pubDate</p>";
	echo "<p>$valor->enclosure</p>";
}
?>