<?php
	require('scon.php');
	
	// fetch rating and reviews from web
	$appRating = 2.5;
	$review =$_POST['review']; // Set string to all lower case
	if(isset($_POST["submit"]))
	{
		if(!empty($_POST['review']))
		{
	function getScore($str){
		
		
		$wordList = str_word_count($str, 1);
		$review_Len = str_word_count($str);
		$wordplus=array('Good','Nice');
		$wordminus=array('Abysml','not');
		$words_good = file('good.txt', FILE_IGNORE_NEW_LINES);
		$words_bad = file('bad.txt', FILE_IGNORE_NEW_LINES);
		
		foreach($wordplus as wp){
			
			
		}
		foreach($wordminus as wm){
			
		}
		$score = 0;
		// compare array with dictionary to generate score
		for($i = 0; $i < $review_Len; $i++){
			foreach($words_bad as $x){
				if($x == $wordList[$i]){
					$score--;
				}
			}	
		}
		
		for($i = 0; $i < $review_Len; $i++){
			foreach($words_good as $x){
				if($x == $wordList[$i]){
					$score++;
				}
			}	
		}
		
		return $score;
	}
	
	$review_score = getScore($review);
	
	if($review_score < 0){
		echo 'fake app';
	}else if($review_score > 0){
		echo 'good app';
	}
else{echo 'Can not determine';}
		}
		
		else
		{
			echo '<script type="text/javascript">alert("no review exist")</script>' ; 
    	    header("refresh:0;url=detection.html");
		}
	}	
?>  