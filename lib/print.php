<?php
function print_title(){
  if (isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "welcome";
  }
}

function print_description(){
  if (isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}

function print_list(){
  // scandir = 파일 목록을 배열에 담아서 return
  $list = scandir('./data');

  $i = 0;
  while($i < count($list)){
    if ($list[$i] != '.'){
      if ($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
