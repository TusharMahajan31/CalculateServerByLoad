<?php

class FindServerByLoad
{
  public const INTERVAL_TO_FIND_LOAD_IN_MINUTES = 5;


  public static function findRunningServerBasedOnLoadPercentage($argv)
  {

    if (count($argv) > 3)
    {
      echo "Arguments should not be more than 2";
    }

    $server = (int)$argv[1];
    $loads = explode(",", $argv[2]);


    foreach ($loads as $minute => $load)
    {
      if (fmod($minute+1, self::INTERVAL_TO_FIND_LOAD_IN_MINUTES) == 0)
      {
        echo "For load :: " . $load . ", used server : ";
        if ((int)$load < 50) 
        {
          echo $server/2 . "\n";
        } else {
          echo ($server * 2)  + 1 . "\n";
        }
      }
      else
      {
        continue;
      }

    }
  }
}
         
FindServerByLoad::findRunningServerBasedOnLoadPercentage($argv);

?>