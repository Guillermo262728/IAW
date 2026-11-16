<?php
function existeUsuario(string $nombre,array $usuarios): bool {return array_key_exists($nombre,$usuarios);}
function validarCredenciales(string $nombre,string $clave,array $usuarios): bool {
 return existeUsuario($nombre,$usuarios) && hash_equals($usuarios[$nombre],$clave);
}
