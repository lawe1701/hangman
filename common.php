<?php
// ========================================================
// common.php
// Description: Use of header and footer
// Author: Lars Weingartner
// --------------------------------------------------------
// Error handling
// --------------------------------------------------------
 error_reporting(E_ALL);

// Common header
// ========================================================
$header = <<<HeaderText
<div>
	<a href='../hem.php'>Hem</a>
	|
	<a href='../me/redovisning.php'>Redovisning</a>
	|
	<a href='template.php'>Min template</a>
	|
	<a href='source.php'>Show Source code</a>
	|
	<a href='hangman.php'>Hangman spelet</a>
</div>

HeaderText;

// --------------------------------------------------------
// Common footer
// ========================================================
$footer = <<<FooterText
<div style='margin-left: auto; text-align: center; font-size: small;'>
<pre>
	&copy; Lars Weingartner, 2011
</pre>
</div>
FooterText;

?>
