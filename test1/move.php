<?php 

$file = 'file_3.txt';

$new_name = 'move/file_3.txt';

// if (rename($file, $new_name)) {
// 	echo "moved";
// } else {
// 	echo "moved";
// }

$filesize = filesize($new_name);
echo "$filesize";