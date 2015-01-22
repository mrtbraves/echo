<?php

function writeStuff()
{
	$arguments = func_get_args();
  foreach ($arguments as $arg) {
		echo ($arg)."<br>";
	}
}

writeStuff();
writeStuff('bla');
writeStuff('foo', 'bar', 'baz');

?>
