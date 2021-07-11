<?php

/*
Array con los valores de los 

campos de seleccion de los formularios

*/





return [
    'formas_pago' => [
        'cont' => 'contado',
        'cred' => 'credito'
    ],
    'tipos' => [
        'dom' => 'domicilio',
        'sup' => 'supermercado',
        'bar' => 'bar-cafeteria', 
        'rest' => 'restaurante',
        'banc' => 'banco',
        'otro' => 'otros'

    ],
    'dias' => [
        'lun' => 'lunes',
        'mar' => 'martes',
        'mie' => 'miercoles',
        'jue' => 'jueves',
        'vie' => 'viernes',
        'sin' => 'sin dia'
    ],
    'frequencia'=>[
        'sem'=>'semanal',
        'quin'=>'quincenal',
        'men'=>'mensual',
        'otro'=>'otros'
    ]

];
