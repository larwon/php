<?
	$test1_cut = 70;
	$test2_cut = 80;
	$test3_cut = 90;

	echo "�������� ���� �հ� ������<br>";
	echo "�ʱ� ���� $test1_cut �� �̻�,<br>";
	echo "�Ǳ� ���� $test2_cut �� �̻�,<br>";
	echo "�������� ���� $test3_cut �� �̻��Դϴ� <br><br>";

	echo "ȹ���� �ʱ� ���� : $test1 ��, �Ǳ� ���� : $test2 ��, �������� : $test3 �� <br><br>";

	if (($test1 >= 70) && ($test2 >= 80) && ($test3 >= 90))
	{
		echo "�հ��ϼ̽��ϴ�!!!";
	}
	else
	{
		echo "�˼������� ���հ��Դϴ�!!!";		
	}
?>