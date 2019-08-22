<?php
require_once ('class.php');


if($_POST['datapost'])
{
	$nameid= $_POST['datapost'];
$ajax = new Select;
$res=  $ajax->Sub_were($nameid);
while ($raws = $res->fetch_assoc())
		{
			echo "<option "; if($row[s_id]==$fetch[subcatid]){echo "selected";} echo "  value= '$raws[s_id]'> $raws[subc_name]  </option>";
		}
}
?>