<?php
    if (!function_exists('setActivo')) {
        function setActivo($ruta) {
            return request()->routeIs($ruta) || request()->is($ruta . '/*') ? 'activo' : '';
        }
    }
?>
