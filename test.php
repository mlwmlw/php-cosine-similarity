<?
include 'similarity.php';

$articles = array(
	array(
		"article" => "Data Mining: Finding Similar Items", 
		"tags" => array("Algorithms", "Programming", "Mining", "Python", "Ruby")
	),
	array(
		"article" => "Blogging Platform for Hackers",  
		"tags" => array("Publishing", "Server", "Cloud", "Heroku", "Jekyll", "GAE")
	),
	array(
		"article" => "UX Tip: Don't Hurt Me On Sign-Up", 
		"tags" => array("Web", "Design", "UX")
	),
	array(
		"article" => "Crawling the Android Marketplace", 
		"tags" => array("Python", "Android", "Mining", "Web", "API")
	)
);

$tags = Similarity::tags_to_point($articles);

$target = array('Publishing', 'Web', 'API');
echo 'compare';
var_dump($articles);
var_dump($target);

$compare = array_fill_keys($target, 1) + $tags;
foreach($articles as $article) {
	$ak = array_fill_keys($article['tags'], 1) + $tags;
	echo $article['article'];
	echo '<br />';
	echo "score: ";
	echo Similarity::cosine($compare, $ak);
	echo '<br />';echo '<br />';
}
