<?
	if ($a < $b) 
	{
		if ($a < $c)
		{
			$min1 = $a;
			if ($b < $c)
			{
				$min2 = $b;
				$min3 = $c;
			}
			else
			{
				$min2 = $c;
				$min3 = $b;
			}
		}
		else
		{

			$min1 = $c;
			$min2 = $a;
			$min3 = $b;
		}
	}
	else	
	{
		if ($b < $c)
		{
			$min1 = $b;
			if ($a < $c)
			{
				$min2 = $a;
				$min3 = $c;
			}
			else
			{
				$min2 = $c;
				$min3 = $a;				
			}
		}
		else
		{
			$min1 = $c;
			$min2 = $b; 
			$min3 = $a;
		}
	}

	echo "�Է��� �� ���� : $a , $b , $c <br>";
	echo "�Է��� �� ������ ���� ������� �迭 : $min1 , $min2 , $min3";
?>
















