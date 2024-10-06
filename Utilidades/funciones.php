<?php



function convertirAParametros($array, $separador = "&", $encerrarCon = "") {

    return implode($separador, array_map(function ($clave, $valor) use ($encerrarCon) {
        return "{$clave} = {$encerrarCon} {$valor} {$encerrarCon}";
    }, array_keys($array), $array));


}

function ruta($controlador, $accion, $parametros = []){
    $urlProyecto = "http://localhost/proyecto-libreria/";
    #$parametros ['controlador'] = $controlador;
    #$parametros ['accion'] = $accion;
    $strParametros = convertirAParametros(array_merge(
        ['controlador' => $controlador, 'accion' => $accion],$parametros, ));
    return "{$urlProyecto}?{$strParametros}";

}

function crearLink($texto, $configuracion = []){
    $controlador = $confuguracion['controlador'] ?? 'inicio';
    $accion = $configuracion['accion'] ?? 'inicio';
    $opcionesHtml = $configuracion['optionsHtml'] ?? [];
    $parametros = $confuguracion['parametros'] ?? [];
    $strOpcionesHtml = convertirAParametros($opcionesHtml, " ", '"');
    $ruta = ruta($controlador, $accion);
    return "<a href='{$ruta}'{$strOpcionesHtml} > {$texto}</a>";
     
}

