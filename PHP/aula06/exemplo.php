<?php
//usando o for
for ($i=1; $i<11; $i++) {
    if($i%2==0){
    echo "Contando... $i<br>";
    }
}
$num = 7;
echo "Tabuada do $num";
for ($i=1; $i<=10; $i++){
    echo "$num x $i = " . $num*$i;
}
//usando o while
$i = 1;
while ($i<10){
    echo "Contando.. $i<br>";
    $i++;
}
?>