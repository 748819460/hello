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
  //4.19日考
    public static function a($n,$m)
    {
      $list = range(1,$n);
      $num = 1;
      while (count($list)>1) {
        foreach ($list as $key => $val) {
          if($num == $m)
          {
            unset($list[$key]);
            $num = 1;
            continue;
          }
          $num++;
        }
      }
      return $list;
    }
   //4.24日考
    public function b($n)
    {
       $num = ($n-1?$n+$this->b($n-1):1);
       return $num;
    }
    //二进制转十进制
    public function ten($n)
    {
      $str = strlen($n);
      for ($i=0;$i<$len; $i++) { 
        echo str()
      }
    }
    //4.25日考
    public static function add($num1,$num1)
    {
      $sum = 0;
      if($num1  == 0)
      {
        return 0;
      }
      $sum = $num1 ^ $num2;
      return $sum;
    }
    //4.26日考
    public static function sum($arr,$sum)
    {
      $count = [];
      for ($i=0; $i < strlen($arr) ; $i++) { 
         for ($j=0; $j < $arr[$i]  ; $j++) { 
           $sum+=$arr[$i];
         }
      }
      return $arr;
    }
}
 ?>