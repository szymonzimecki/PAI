<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<?php
		
		$products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
				foreach($items as $key => $value)
					if($key == 'copier' OR $key == 'ball' OR $key == 'tape')
						echo $section ."\t" . $key ."\t" . $value . "<br>";
            echo "</pre>";
		
	?>


</body>