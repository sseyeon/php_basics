<!DOCTYPE html>
<html>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('seyeon', 'egoing', 'taeho');
    echo $coworkers[1].'<br>';
    echo $coworkers[0].'<br>';
    echo count($coworkers).'<br>';

    // 끝에 추가
    array_push($coworkers, 'gahyeon');
    var_dump($coworkers);

    
     ?>
  </body>
</html>
