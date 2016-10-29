<?php 
	$dir    = 'C:\xampp\htdocs\Signzy\sample';
	$files1 = scandir($dir);
	$myfile = fopen("outputfile.txt", "w");
	unset($files1[1]);
	unset($files1[0]);
	foreach($files1 as $filename)
	{
			$txt_file = file_get_contents($filename);
			$rows = explode("\n", $txt_file);
			foreach($rows as $row)
			{
				$row=str_replace("\0","",$row);
				trim($row);
				fwrite($myfile, "Complete Name: {$row}\n");
				$words = explode(" ", $row);
				foreach($words as $w)
					trim($w);
				fwrite($myfile, "First Name: ".$words[0]."\n");
				$n=sizeof($words);
				if($n>2)
				{
					for($i=1;$i < ($n-1);$i++)
						fwrite($myfile, "Middle Name: ".$words[$i]."\n");
				}	
				if($n>1)
					fwrite($myfile, "Last Name: ".end($words)."\n");
				
			}
		$txt_file = file_get_contents($filename);
		$rows = explode("\n", $txt_file);
		$words = explode(" ", $txt_file);
		foreach($rows as $row)
		{
			fwrite($myfile, $row."\n");
		}
		foreach($words as $word)
		{
			fwrite($myfile, $word."\n");
		}
	}
	fclose($myfile);
?>
<!Doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Test</title>
	</head>
	<body>
		<?php
			/*$myfile1 = fopen("outputfile.txt", "r");
			$txt_file1 = file_get_contents("outputfile.txt");
			$rows1 = explode("\n", $txt_file1);
			foreach($rows1 as $row1)
			{
				echo($row1);
				echo "</br>";				
			}*/
		?>
	</body>
</html>

