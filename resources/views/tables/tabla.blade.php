<table class="table table-striped" id="tabla_clientes">
    <thead>
        <tr>
            <th>{{__('labels.id')}}</th>
            <th>{{__('labels.type')}}</th>
            <th>{{__('labels.name')}}</th>
            <th>{{__('labels.direction')}}</th>
            <th>{{__('labels.phone')}}</th>
            <th>{{__('labels.way to pay')}}</th>
            <th>{{__('labels.zone')}}</th>
            <th>{{__('labels.delivery day')}}</th>
            <th class="text-center" width="300px">{{__('labels.action')}}</th>
        </tr>
    </thead>
  <tbody>
@forelse ($cliente as $client)
<tr>
    <td>{{ $client->id }}</td>
    <td>{{ $client->tipo_cliente}}</td>
    <td>{{ $client->nombre }}</td>
    <td>{{ $client->direccion }}</td>
    <td>{{ $client->telefono }}</td>
    <td>{{ $client->forma_pago}}</td>
    <td>{{ $client->zona }}</td>
    <td>{{ $client->dia_reparto }}</td>
    <td>

       <form action="{{ route('clientes.destroy',$client->id) }}" method="POST" role="form" class="form_eliminar" >
            <a class="btn btn-info" href="{{ route('clientes.show',$client->id) }}">{{__('buttons.show')}}</a>
            <a class="btn btn-primary" href="{{ route('clientes.edit',$client->id)}}">{{__('buttons.edit')}}</a>
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" >{{__('buttons.delete')}}</button>
        {{--    <button class="btn btn-danger" type="submit" data-id="{{$client->id}}">{{__('buttons.delete')}}</button>--}}
       </form>
    </td>
</tr>
  </tbody>

{{--------------------------------------------- cuando la bd esta vacia---------------------------}}
@empty

<tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th>
        <h3>{{__('labels.nothing to show')}}</h3>
    </th>
    
    <th></th>
    <th></th>
    <th></th>
    


</tr>

</table>

@endforelse

{{$cliente->appends($data)->links()}}


