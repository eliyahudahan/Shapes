<?php

     function calculatesquare($widthsquare, $heightsquare)
     {
        echo 'רוחב: '.intval($widthsquare).' אורך:'. intval($heightsquare).' שטח: '.$widthsquare*$heightsquare. ' המשך יום נעים';
     }
 
if(isset($_GET['widthsquare']) && isset($_GET['heightsquare']))
  {
     calculatesquare($_GET['widthsquare'], $_GET['heightsquare']);
  }
 
?>

