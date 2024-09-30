<?php
header("Content-type: text/plain");
header('Content-Disposition: attachement; filename="testFile.csv"');
//$pp = new NumberFormatter("en", NumberFormatter::SPELLOUT);
for ($x = 0; $x <= 10; $x++) {
	//echo $x. ','. "The number is; $x". ','. $pp->format($x). "\n";
	//without number formatter
	echo "Purok:$x". ','. "Mother:$x". ','. "Child:$x". ','. "ip:$x". ','. "sex:$x". ','. "dob:$x". ','. "dom:$x". ','. "wt:$x". ','. "ht:$x". ','. "age:$x". ','. "wfa". ','. "hfa". ','. "wfl". "\n";
}
