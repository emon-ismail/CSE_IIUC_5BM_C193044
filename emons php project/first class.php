<?php


$name='ismail emon';
echo $name.'<br>';

$data=array(10,12,11,15,16, 12545);//index aray
array_push($data,12543) ;
sort($data) .'<br>';


for($index=1;$index<=5;$index++)
{
    array_push($data, $index);
}

echo '<br>***** Foreach start  <br>';
foreach ($data as $value)
{
    echo $value.'<br>';
    
}
echo '<br>****For loop start <br>';
for($index=0;$index<count($data);$index++)
{
    echo $data[$index].'<br>';
}


echo '<pre>';
print_r($data);
var_dump($data);//debugger

$associative_array=array('karim'=>100,"rahim"=>250,"mamun"=>520);
foreach ($associative_array as $key => $value) {
    echo 'The value of '.$key.' is='.$value.'<br>';
}

//echo '<pre>';
//print_r($associative_array);




?>
