<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'zona',
        'localidad',
        'forma_pago',
        'tipo_cliente',
        'dia_reparto',
        'frequencia_reparto',
        'condiciones',
        'observaciones'
    ];

    //----------------------------------------FILTRADO POR FORMA DE PAGO--------------------------------------//

    public function scopeFormapago($query, $forma)
    {
        if ($forma) {

            return $query->where('forma_pago', $forma);
        }
    }

    //----------------------------------------FILTRADO POR TIPO DE CLIENTE--------------------------------------//

    public function scopeTipo($query, $tipo)
    {
        if ($tipo) {
            return $query->where('tipo_cliente', $tipo);
        }
    }

    //---------------------------------------FILTRADO POR DIA DE REPARTO-------------------------------------//

    public function scopeDia($query, $dia)
    {
        if ($dia) {
            return $query->where('dia_reparto', $dia);
        }
    }

    //------------------------------------FILTRADO POR FREQUENCIA DE REPARTO-------------------------------------//

    public function scopeFrequencia($query, $frequencia)
    {
        if ($frequencia) {
            return $query->where('frequencia_reparto',$frequencia);
        }
    }
     //-------------------------------------------FILTRADO POR ZONA-------------------------------------//

     public function scopeZona($query, $zona)
     {
         if ($zona) {
             return $query->where('zona',$zona);
         }
     }

     //-------------------------------------BUSCADOR POR NOMBRE DIRECCION y TELEFONO    ------------------------------------------------//
     public function scopeBuscar($query,$busqueda)
     {
         if ($busqueda) {
            return $query
            ->where('nombre','LIKE',"%$busqueda%")
            ->orWhere('direccion','LIKE',"%$busqueda%")
            ->orWhere('telefono','LIKE',"%$busqueda%");
         }
         
     }

     //--------------------------------ORDENA LOS CLIENTES POR EL VALOR PASADO EN $order SI NO TIENE VALOR POR LA id---------------------
     public static function scopeOrdenarPor($query,$order){
         if(!$order){
             $order='id';
         }
         return $query->orderBy($order);
     }
}
