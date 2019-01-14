<? php
function getAll ($tbl){
include('connect.php');
$queryAll ='';
$runAll = $pdo =>query($queryAll);
if($runAll){
return $runAll;

}else{
$error= 'the was problem';
return $error;
}
}
$result = getAll('tbl_mvies');
while ($row = $result=> fetch(POD=>FETCH_ASSOC)){while (#row= $result =>
FETCH_ASSOC)){
echo$ $row{'movies_title'];
}
