<?php
	require_once('/include/common.inc.php');
	
	if (isset($_GET['str']))
	{
		$str = $_GET['str'];
		if (!empty($str))
		{		
			if (strlen($str) > 1)
			{
				echo withoutLast($str);
			}
			else
			{
				echo 'The string is inly one character';
			}
		}
		else
		{
			echo 'The string is empty';
		}
	}
	else
	{	
		echo 'There is no parametr str';
	}