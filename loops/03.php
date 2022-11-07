<?php
$word1=readline('enter first word: ');
$word2=readline('enter second word: ');
$dots='';
$length=30;
for ($i=strlen($word1);$i<$length-strlen($word2);$i++){
    $dots=$dots.'.';
}
echo $word1.$dots.$word2.PHP_EOL;
