<?php 
declare(strict_types=1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<title>
.:::DataGrid_Nav 3.0 Author: S&eacute;rgio Soares 2016 Update for PHP 7.0.4:::.
</title>

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>

<body>
<table>
	<tr>
		<td align="center"><font color="#8585ad"><p><h1><b>PHP DataGrid with Navigator 3.0</b></h1></p>
							<p><h3>Update for PHP 7.0.4</h3></p>
							<h4><p>Author: S&eacute;rgio Soares 2016</p></h4>
							<p>It's freeware, if you like it, you can use it in own your projects!</p>
							<p><b>Please consider Donating through</b></p>
							<p><h2>PAYPAL</h2></p>
							<p> In order to continue developping this class!</p></h4></font>
							<p>&nbsp;</p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="LZ9V7TBL4STZ6">
			<table>
			<tr><td><input type="hidden" name="on0" value="Quantity">Quantity</td></tr><tr><td><select name="os0">
				<option value="Option 1">Option 1 €2,50 EUR</option>
				<option value="Option 2">Option 2 €3,50 EUR</option>
				<option value="Option 3">Option 3 €5,00 EUR</option>
			</select> </td></tr>
			</table>
			<input type="hidden" name="currency_code" value="EUR">
			<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/pt_PT/i/scr/pixel.gif" width="1" height="1">
			</form>
			<p>&nbsp;</p>
		</td>
	</tr>
	<tr>
		<td>
		
		
<?php
/**
 * @author Sergio Soares 2016
 *
 * email serguiomicaelo@gmail.com
 *
 * "PHP datagrid with navigator 3.0"
 *
 * The class datagrid.class.php was written using PHP 7.0.4
 * You can use it at your will, it's free to use!
 *
 *ATTENTION, before you start this index.php you should start it as
 * "http://localhost/your_datagrid_nav_30_folder/index.php?page=1&bindex=1&i=1" in the URL of
 * your Browser!!!
 *
 *
 *
 */

require("datagrid.class.php");



//parameter variables:
$page = $_GET['page'] ?? 1; //PHP 7 ONLY!
//$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;


$rows = 4;
$cols = 2;
$multipleColors = TRUE;
$num_visible_frames = 5;

//instanciate datagrid class.
$newTable=new datagrid((int)$page,$rows,$cols,$multipleColors,$num_visible_frames);
//renders the datagrid.
$newTable->drawTable();
//renders the navigator.
$newTable->navigator();

?>
</td></tr>
</table>
</body>
</html>

