<?php
function get_data(){
$connect =mysqli_connect("localhost","root","123","project");
$sql="SELECT * FROM info";
$result= mysqli_query($connect, $sql);
$json_array=array();

while($row= mysqli_fetch_assoc($result))
{
$json_array[]=$row;

}

return json_encode($json_array);

}
$filename="data.json";
if(file_put_contents($filename, get_data()))
{
    echo $filename.'File created';
}

else
{
    echo 'error';
}


/*echo '<pre>';
print_r($json_array);
echo '</pre>';*/


				

?>

