<form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
    @csrf
    @method('PUT')
    {{--------------------------------------------------------------------------------------------------------------------------------}}
    <div class=" form-row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            {{---------------------------------------------------nombre-----------------------------------------------------------------------------------}}

            <div class="form-group row">
                <div class="col-10">

                    <strong><label for="nombre" class="">{{__('labels.name')}}</label></strong>
                    <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
                </div>
                {{------------------------------------------------telefono--------------------------------------------------------------------------}}
                <div class="col-2">
                    <strong><label for="telefono" class="">{{__('labels.phone')}}</label></strong>
                    <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono}}">
                </div>

            {{--------------------------------------------------direccion--------------------------------------------------------------------------}}

            <div class="form-group row">
                <div class="col-6">
                    <strong><label for="direccion" class="">{{__('labels.direction')}}</label></strong>
                    <input type="text" name="direccion" class="form-control" value="{{ $cliente->direccion }}">
                </div>
                {{------------------------------------------------zona--------------------------------------------------------------------------}}
                <div class="col-3">
                    <strong><label for="zona" class="">{{__('labels.zone')}}</label></strong>
                    <select name="zona" class="form-select">
                        @foreach ($zona as $item)
                        @if ($item->zona==$cliente->zona)
                        <option value="{!! $item->zona!!}" selected>{{$item->zona}}</option>
                        @else
                        <option value="{!! $item->zona !!}">{{$item->zona}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
                {{----------------------------------------------localidad--------------------------------------------------------------------------}}
                <div class="col-3">
                    <strong><label for="localidad">{{__('labels.localities')}}</label></strong>
                    <select name="localidad" class="form-select">
                        @foreach ($localidade as $item)
                        @if ($item->localidad==$cliente->localidad)
                        <option value="{!! $item->localidad!!}" selected>{{$item->localidad}}</option>
                        @else
                        <option value="{!! $item->localidad !!}">{{$item->localidad}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
            </div>
            {{----------------------------------------------------forma de pago------------------------------------------------------------------------------}}

            <div style="height: 10px"></div>
            <div class="form-group row">
                <div class="col-3">
                    <strong><label for="forma_pago">{{__('labels.way to pay')}}</label></strong>

                    <select name="forma_pago" class="form-select">

                        @foreach ($forma as $item)

                        @if ($item==$cliente->forma_pago)

                        <option value="{!! $item !!}" selected>{{$item}}</option>
                        @else

                        <option value="{!! $item !!}">{{$item}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
                {{----------------------------------------------tipo de cliente--------------------------------------------------------------------------}}
                <div class="col-3">
                    <strong><label for="tipo_cliente" class="">{{__('labels.type')}}</label></strong>
                    <select name="tipo_cliente" class="form-select">
                        @foreach ($tipo as $item)
                        @if ($item==$cliente->tipo_cliente)
                        <option value="{!! $item !!}" selected>{{$item}}</option>
                        @else
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                {{----------------------------------------------dia reparto--------------------------------------------------------------------------}}
                <div class="col-3">
                    <strong><label for="dia_reparto" class="">{{__('labels.delivery day')}}</label></strong>
                    <select name="dia_reparto" class="form-select">
                        @foreach ($dias as $item)
                        @if ($item==$cliente->dia_reparto)
                        <option value="{!! $item !!}" selected>{{$item}}</option>
                        @else
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                {{----------------------------------------------frequencia reparto-------------------------------------------------------------------------}}
                <div class="col-3">
                    <strong><label for="frequencia_reparto" class="">{{__('labels.distribution frequency')}}</label></strong>
                    <select name="frequencia_reparto" class="form-select">
                        @foreach ($frequencia as $item)
                        @if ($item==$cliente->frequencia_reparto)
                        <option value="{!! $item !!}" selected>{{$item}}</option>
                        @else
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endif

                        @endforeach
                    </select>
                </div>
            </div>
            {{----------------------------------------------------condiciones-----------------------------------------------------------------------------------------}}

            <div style="height: 10px"></div>

            <div class="form-group">
                <strong><label for="condiciones" class="">{{__('labels.terms')}}</label></strong>
                <textarea type="text" name="condiciones" class="form-control"
                    style="height:120px">{{ $cliente->condiciones }}</textarea>
            </div>
            {{------------------------------------------------observaciones--------------------------------------------------------------------------}}
            <div style="height: 10px"></div>
            <div class="form-group">
                <strong><label for="observaciones" class="">{{__('labels.observations')}}</label></strong>
                <textarea class="form-control" style="height:120px"
                    name="observaciones">{{ $cliente->observaciones}}</textarea>
            </div>
            <div style="height: 10px"></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success btn-lg">{{__('buttons.save')}}</button>
    </div>
    <div style="height: 12px"></div>
</form>