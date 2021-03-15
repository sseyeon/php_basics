<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);

// redirect
// 글 생성하고 바로 메인 화면으로 튕겨오게
header('Location: /index.php?id='.$_POST['title']);
 ?>
