<?php 
/**
* 
*/
class math
{
	public static function qw($n)
	{
        if($n==1)
        {
        	return 1;
        }
        else if($n==2)
        {
        	return 1;
        }
        else{
        	return self::qw($n-1)+self::qw($n-2);
        }
	}

	public static function sz($arr)
	{
		$odd = [];
		$even = [];
		foreach ($arr as $key => $val) {
			if($val%2==0)
			{
				$even[]=$val;
			}
			else
			{
				$odd[]=$val;
			}
		}
		return array_merge($odd,$even);

	}
	//4.18日考
	public static function choushu($num)
	{
      if($num)
      {
      	while ($num%2==0) {
      		$num = $num/2;
      	}
      	while ($num%3==0) {
      		$num = $num/3;
      	}
      	while ($num%5==0) {
      		$num = $num/5;
      	}

      	if($num == 1)
      	{
      		echo "不是丑数";
      	}
      	else{
      		echo "是丑数";
      	}
      }
	}
}
 ?>