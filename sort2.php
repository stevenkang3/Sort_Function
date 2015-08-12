<?php
for ($x =0; $x<=10; $x++)
{
  $numbers[ ] = rand(1,1000);
}

  function selection_sort($numbers)
  {
  $reverseCount = count($numbers)-1;
  for($counter=0; $counter<= $reverseCount; $counter++)
  {
  $min = $numbers[$counter]; //8, 8
  $max = $numbers[$counter]; //8, 8
  $key = $counter;
  $key2 = $counter;
   // 5 //4

      for($num = $counter + 1; $num <= $reverseCount ; $num++) // 5, 4 //3
      {
          if($numbers[$num] < $min) //8-> 4) 8->5
          {
            $min = $numbers[$num]; //min = 4 , 5
            $key = $num;          // key 1 , 2
          }
          if ($numbers[$num] > $max)
          {
            $max = $numbers[$num]; // max = 9 , 8
            $key2 = $num;           // key 3 , 1
          }
      }
      $tempMin = $numbers[$counter]; //temp = 8, 8,
      $numbers[$counter] = $min; //num[0]= 4 num1 = 5
      $numbers[$key] = $tempMin; //num[1]=8 num 2 = 8 num[1] = 8
      // 4,8,5,9,6,7
      //4 5 8 7 6 9
      if ($key2 === $num)
      {
        $key2 = $key;
      }
      $tempMax = $numbers[$reverseCount]; //temp = 7 = 6
      $numbers[$reverseCount] = $max; //num[5]=9 num4 = 8
      $numbers[$key2] = $tempMax; //num[3]=7 num num2 = 6
      // 485769
      //456789
      // var_dump($numbers);
      $reverseCount--;
    }
    var_dump($numbers);
  }
  function microtime_float()
  {
      list($usec, $sec) = explode(" ", microtime());
      return ((float)$usec + (float)$sec);
  }
  $time_start = microtime_float();

  // Sleep for a while
  selection_sort($numbers);

  $time_end = microtime_float();
  $time = $time_end - $time_start;
  echo "Did nothing in $time seconds\n";
?>
