<?PHP
foreach ($_POST as $key=>$value){
	$cmd='if (isset($_POST["'.$key.'"])) {$'.$key.' = $value;
		unset ($_POST["'.$key.'"]);} else {$'.$key.'="";}';
	//echo $cmd."<br/>";
	eval($cmd);
}
?>