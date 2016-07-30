<?php 
function tagsAndSlugs(array $tags){
	foreach($tags as $value){
		$slug = createSlug($value);
		yield $slug=>$value;
	}
}

$tags = tagsAndSlugs([[1, 2, 3], [11, 22, 33], [111, 222, 333]]);

