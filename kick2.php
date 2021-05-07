<?php
for ($i = 2; $i <= 20; $i += 2) {
    echo "I Love PHP ke- {$i} <br>";
}
for ($i = 100; $i >= 0; $i -= 2) {
    echo "I Love PHP ke - {$i} <br>";
}

$star=10;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}


for ($i = 1; $i <= 100; $i++) {
if($i % 3 == 0 && $i % 5 == 0){
    echo "fizz buzz"."<br>";
}elseif ($i % 5 == 0){
    echo "buzz"."<br>";
}elseif ($i % 3 == 0) {
    echo "fizz"."<br>";
}else{
    echo $i."<br>";
}
}

// tampilkan 1 sd 100, habis dibagi 3 "fizz", habis dibagi 5 "buzz", habis dibagi 3 dan 5 "fizz buzz"

?>