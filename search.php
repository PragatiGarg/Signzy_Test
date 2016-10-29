<?php
	$myfile = fopen("outputfile.txt", "r");
	$searchthis="Anand";
	$matches =array();
	
	if ($myfile)
	{
		while (!feof($myfile))
		{
			$buffer = fgets($myfile);
			if(strpos($buffer, $searchthis) !== FALSE)
				$matches[] = $buffer;
		}
		fclose($myfile);
	}
	foreach($matches as $m)
	{
		echo($m);
		echo"</br>";
	}	
?>