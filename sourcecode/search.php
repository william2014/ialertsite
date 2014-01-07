<?php include("includes/config.php");?>

// <?php

// if(isset($_GET['term'])){

// 	$term = mysql_real_escape_string(htmlentities($_GET['term']));

// 	if(!empty($term)){

// 		$search = mysql_query("SELECT title,face_image,description FROM updates  WHERE  title LIKE '%{$term}%' or description LIKE '%{$term}%' ");
// 		if(!$search){
// 			echo "Check sql statement".mysql_error();
// 		}
		
// 		$result_count = mysql_num_rows ($search);

// 		$suffix = ($result_count != 1)? 's' : '';
// 		echo '<p>Your search for <strong>', $term , '</strong> returned <strong>', $result_count,'</strong> result', $suffix, '</p>';
		 
// 		echo " <table  cellpadding =6 bgcolor = \"#FFFFFF\">";
// 		while($results_row = mysql_fetch_assoc($search)){
// 			echo  '<tr><td><strong> '.$results_row['title'].'</strong></td><td  ><img width="50" height="60" src="ialert/image_uploads/'.$results_row['face_image'].'"/></td> <td>'.$results_row['description'].'</td></tr> '; 
// 			echo "<br />";
// 		}echo "</table> ";
// 	}  
// }
// ?>

<?php

$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<h3>nameString</h3>';
$html .= '<h4>functionString</h4>';
$html .= '</a>';
$html .= '</li>';

$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);


if(strlen($search_string>=1 && $search_string!=''))
{


	$query = 'SELECT * FROM updates WHERE function LIKE "%'.$search_string.'%" OR name LIKE "%'.$search_string.'%"';


	$result = mysql_query($query);
	while($result=mysql_fetch_array($query))
	{
	$result_array[] = $results;

	}
	if(isset($result_array))
	{

		foreach ($result_array as $result){

		$display_function = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['function']);
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);
			$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['function']).'&lang=en';

			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert Function
			$output = str_replace('functionString', $display_function, $output);

			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);


		}
	}
	else
	{
		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('functionString', 'Sorry :(', $output);
		// Output
		echo($output);
	}
}






?>