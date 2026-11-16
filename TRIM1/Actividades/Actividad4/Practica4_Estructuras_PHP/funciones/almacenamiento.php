<?php
function guardarArray(string $ruta,array $datos): bool {return file_put_contents($ruta,serialize($datos),LOCK_EX)!==false;}
function leerArray(string $ruta): array {
 if(!is_file($ruta))throw new RuntimeException('El archivo no existe');
 $contenido=file_get_contents($ruta);if($contenido===false)throw new RuntimeException('Error de lectura');
 $datos=unserialize($contenido,['allowed_classes'=>false]);
 if(!is_array($datos))throw new RuntimeException('Contenido no válido');return $datos;
}
