<!-- FizzBuzz game quick challenge. -->
<?php
$br = "<br />";
$_Fizz = "Fizz";
$_Buzz = "Buzz";
$Fizz = 3;
$Buzz = 5;
$loops = 100;

for($i = 1; $i < $loops; $i++){
  $result;
  if($i % 3 !== 0 && $i % 5 !== 0){
    $result = $i;
  } else{
    if ($i % 3 == 0) {
      $result .= $_Fizz;
    }
    if ($i % 5 == 0) {
      $result .= $_Buzz;
    }
  }
  $result .= $br;
  echo $result;
  $result = "";
}

?>
