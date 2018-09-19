<?php
header('content-type:text/html;charset=utf-8');
function rec($n){
  if ($n>=1) {
    // code...
    return $n+rec($n-1);
  }
}
echo rec(100);
