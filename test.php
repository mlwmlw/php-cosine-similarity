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

$dot = Similarity::dot(call_user_func_array("array_merge", array_column($articles, "tags")));

$target = array('Publishing', 'Web', 'API');
echo "compare two one-hot encoding vector\n";
echo "example articles:\n";
print_r($articles);
echo "target article:\n";
print_r($target);

foreach($articles as $article) {
	$score[$article['article']] = Similarity::cosine($target, $article['tags'], $dot);
}
asort($score);

echo "Sorted result similarity:\n";
print_r($score);
