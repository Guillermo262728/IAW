<?php
function cargarProductos(string $ruta): array {
 if(!file_exists($ruta))return [];
 $texto=@file_get_contents($ruta);if($texto===false)throw new RuntimeException('No se pudo leer el archivo');
 $datos=json_decode($texto,true,512,JSON_THROW_ON_ERROR);
 if(!is_array($datos))throw new RuntimeException('Archivo de productos no válido');return $datos;
}
function guardarProductos(string $ruta,array $productos): void {
 $texto=json_encode($productos,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR);
 if(@file_put_contents($ruta,$texto,LOCK_EX)===false)throw new RuntimeException('No se pudo guardar el archivo');
}
function validarProducto(array $datos,array $productos): array {
 $codigo=trim($datos['codigo']??'');$nombre=trim($datos['nombre']??'');$precio=trim($datos['precio']??'');$unidades=trim($datos['unidades']??'');
 if($codigo===''||$nombre===''||$precio===''||$unidades==='')throw new InvalidArgumentException('Todos los campos son obligatorios');
 if(!is_numeric($precio)||(float)$precio<=0)throw new InvalidArgumentException('El precio debe ser mayor que cero');
 if(filter_var($unidades,FILTER_VALIDATE_INT,['options'=>['min_range'=>0]])===false)throw new InvalidArgumentException('Las unidades deben ser un entero no negativo');
 foreach($productos as $p)if($p['codigo']===$codigo)throw new InvalidArgumentException('Ya existe un producto con ese código');
 return ['codigo'=>$codigo,'nombre'=>$nombre,'precio'=>(float)$precio,'unidades'=>(int)$unidades];
}
