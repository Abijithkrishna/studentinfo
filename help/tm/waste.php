<?php
echo self;
$in=fopen("php://stdin",'r');
fscanf($in,"%d\n",$t);
while($t--) {

    $s = fgets($in);
    $c = 0;
    $f = false;
    for ($i = 1; $i < strlen($s); $i++) {
        if ($s[$i] == $s[$i - 1]) $f = !$f;
        if ($f) $c++;
    }
    if ($c < strlen($s) - $c) echo $c . "\n";
    else echo (strlen($s) - $c) . "\n";
}
    ?>

