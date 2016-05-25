<?	
	function last($str)
	{
		$stringCount = strlen($str);
		$lastChar = $str[$stringCount - 1];
		return $lastChar;		
	}
	
	function withoutLast($str)
	{
		$stringWithoutLast = substr($str, 0, -1);
		return $stringWithoutLast;
	}
	
	function revers($str)
	{
		$stringArr = '';
		$stringCount = strlen($str);
		for ($i = 0; $i < $stringCount; $i++)
		{
			$stringArr[$stringCount] = $str[$i];
			$str[$i] = $str[$stringCount];
			$str[$stringCount] = $stringArr[$stringCount];
			$stringCount--;
		}
		return $str;
	}