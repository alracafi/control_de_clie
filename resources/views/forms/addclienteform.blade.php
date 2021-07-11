<form action="{{ route('clientes.store') }}" method="POST">
    @csrf

    <div class=" form-row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            {{--------------------------------------------------------------------------------------------------------------------------------}}

            <div class="form-group row">
                <div class="col-10">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-2">
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                </div>

            </div>
            {{---------------------------------------------------------------------------------------------------------------------------------}}

            <div style="height: 10px"></div>

            {{---------------------------------------------------------------------------------------------------------------------------------}}

            <div class="form-group row">
                <div class="col-6">
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                </div>
                <div class="col-3">
                    <select name="zona" class="form-select">
                        <option selected value="">Zona</option>
                        @foreach ($zona as $item)
                        <option value="{!! $item->zona !!}">{{$item->zona}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-3">
                    <select name="localidad" class="form-select">
                        <option selected value="">Localidad</option>
                        @foreach ($localidade as $item)
                        <option value="{!! $item->localidad !!}">{{$item->localidad}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            {{-------------------------------------------------------------------------------------------------------------------------------------}}

            <div style="height: 10px"></div>

            <div class="form-group row">
                <div class="col-3">
                    <select name="forma_pago" id="forma" class="form-select" required> {{-- requerido --}}
                        <option selected value="">Forma de pago</option>
                        {{-- value vacio para que no se guarde  forma de pago --}}
                        @foreach ($forma as $item)
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- ---------------------------------------------------------------------------------------------------------------------- --}}

                <div class="col-3">
                    <select name="tipo_cliente" class="form-select" required>
                        <option selected value="">Tipo de cliente</option>
                        @foreach ($tipo as $item)
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- --------------------------------------------------------------------------------------------------------------------------- --}}

                <div class="col-3">
                    <select name="dia_reparto" class="form-select">
                        <option selected value="">Dia de reparto</option>
                        @foreach ($dias as $item)
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-3">
                    <select name="frequencia_reparto" class="form-select">
                        <option selected value="">Frequencia de reparto</option>
                        @foreach ($frequencia as $item)
                        <option value="{!! $item !!}">{{$item}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            {{----------------------------------------------------------------------------------------------------------------------------------}}

            <div style="height: 10px"></div>

            <div class="form-group">
                <textarea type="text" name="condiciones" class="form-control" style="height:120px"
                    placeholder="Condiciones"></textarea>
            </div>
            <div style="height: 10px"></div>
            <div class="form-group">
                <textarea class="form-control" style="height:120px" name="observaciones"
                    placeholder="Observaciones"></textarea>
            </div>
            <div style="height: 10px"></div>
        </div>
    </div>

    <div style="height: 10px"></div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">{{__('buttons.save')}}</button>
    </div>
    <div style="height: 12px"></div>
    </div>

</form>