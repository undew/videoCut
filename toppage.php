<?php 
  $cn     =   mysqli_connect('localhost','root','','hackson');
  mysqli_set_charset($cn,'utf8');
$sql    =   "SELECT * from youtube";
$result =     mysqli_query($cn,$sql);
$rs = mysqli_fetch_assoc($result);

$player_list = [];
while($rs){
  $player_list[] = $rs;
  $rs = mysqli_fetch_assoc($result);
}
$javascript = json_encode($player_list);
echo $javascript;
?>

