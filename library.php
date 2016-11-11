<?php
function create_damier($size)
{
  $result = fopen('../data/data.txt', 'w+');

  for ($j=0; $j < $size; $j++){ 
    for ($i=0; $i <= $size; $i++){
      if($j%2==1)
        { $char = ($i%2==1)? "#": "*";
      }else
        { $char = ($i%2==1)? "*": "#";
      }
      
      if($i==$size) $char="\r\n";
      fputs($result,$char);
    }
  }
  fclose($result);

  return $result;
}


function get_cyracuse_nb($nb){
  $result = 0;
  if ($nb%2==1) {
    $result = 3*$nb + 1;
  }else{
    $result = $nb/2;
  }
  return $result;
}
function get_cyracuse_suite($nb)
{
  $result_table=[];
  $result = $nb;
  $i=0;
  do {
    $result = get_cyracuse_nb($result);
    $result_table[$i] = $result;
    $i++;
  } while ($result>1);

  return $result_table;
}
