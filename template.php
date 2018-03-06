<?php
// ========================================================
// template.php
// Description: My template
// Author: Lars Weingartner
// --------------------------------------------------------
// Content of page
// --------------------------------------------------------
$html = <<<MainText
	<h1>Skriv in rubrik här</h1>
	<p>
	Skriv in text här
	</p>

MainText;
// --------------------------------------------------------
// Print out
// --------------------------------------------------------

require_once('common.php');
$title = "Lasses template";
$charset = "iso-8859-1";
$language = "sv";


$html = <<<EOD
<?xml version="1.0" encoding="{$charset}" ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; {$charset};" />
		<title>{$title}</title>
	</head>

	<body>
		{$header}	
		{$html}
		{$footer}
	</body>	
</html>
EOD;

header("Content-Type: application/xhtml+xml; charset={$charset}");
echo $html;
exit;

?>

