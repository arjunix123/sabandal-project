<p>

<?php
$imagesDirectory = "uploads";
 
if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			echo "<img src='uploads/".$image."' width='200' length='200'> ";
		}
    }
	
    closedir($opendirectory);
 
}
?>

</p>