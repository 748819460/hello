<?php 
class test
{
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
	//4.16算法儿
	public function sc($m,$n)
	{
		if($n==0)
	    {
	    	return 0;
	    }
	    if($n==1)
	    {
	    	return 1;
	    }
	    $str = implode(range($m,$n));
	    $arr = str_split($str);
	    return array_count_values($arr)[1];
	}
	//4.17算法儿丑数
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

       	if($num==1)
       {
       	return "是丑数";
       }
       else
       {
       	return "不是丑数";
       }
       }
	}
}

 ?>