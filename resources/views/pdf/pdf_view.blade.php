{{--------------------- vista que muetra el documento pdf------------------- --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 <!--------------------------------------------ESTILOS-------------------------------------------------------------------------->

    <style type="text/css">

        caption{
            border: 1px solid black;
           
        } 
        table {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        thead {
            border: 1px solid black;
            background-color:beige;
        }

        th,
        td {
            text-align: left;
            border-bottom: 1px dotted black;
        }
    </style>
</head>

<body>


    @php
    $dia=date("d/m/Y");
    $num_clientes=count($cliente);
    @endphp

    <p>Dia :{!!$dia!!}</p>


    
    <p>Numero de clientes: {!!$num_clientes!!}</p>
   {{-- <div style="height: 12px"></div>--}}
    
    <table>       
        <caption><h3>Listado de clientes</h3></caption>
        <thead>
            <tr>
                <th style="width: 7%;">{{__('labels.type')}}</th>
                <th style="width: 18%;">{{__('labels.name')}}</th>
                <th>{{__('labels.direction')}}</th>
                <th style="width: 15%;">{{__('labels.phone')}}</th>
                <th style="width: 10%;">{{__('labels.way to pay')}}</th>
                <th style="width: 12%;">{{__('labels.zone')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $client)
            <tr>
                <td style="width: 7%;">
                    {{substr($client->tipo_cliente,0,3)}} {{-----para recortar a 3 letras el tipo---------}}
                </td>
                <td style="width: 18%">
                    {{ substr($client->nombre,0,15) }}
                </td>
                <td>
                    {{substr( $client->direccion,0,40) }}
                </td>
                <td style="width: 15%">
                    {{substr( $client->telefono,0,9) }}
                </td>
                <td style="width: 10%">
                    {{ substr($client->forma_pago,0,3)}}</td>
                <td style="width: 12%">
                        {{ substr($client->zona,0,10)}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>