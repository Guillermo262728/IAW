<?php
function esPrimo(int $n): bool {if($n<2)return false;for($i=2;$i*$i<=$n;$i++)if($n%$i===0)return false;return true;}
function calcularFactorial(int $n): int {if($n<0)throw new InvalidArgumentException('Número negativo');$r=1;for($i=2;$i<=$n;$i++)$r*=$i;return $r;}
function calcularMedia(array $nums): float {return array_sum($nums)/count($nums);}
function obtenerMayor(array $nums): int|float {return max($nums);}
function obtenerMenor(array $nums): int|float {return min($nums);}
