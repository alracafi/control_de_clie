@extends('layouts.layout')

@section('content')
<div class="container-sm">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center"> {{__('labels.show client')}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{route('clientes.index')}}">{{__('buttons.return')}}</a>
         
        </div>
        <div style="height: 12px"></div>
    </div>
</div>
{{-- ------------------------------------------------------------------------------------------ --}}

<div class="container-sm">
    <div class=" form-row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            {{-- comment --}}

            <div class="form-group row">
                <div class="col-10">
                    <strong><label for="nombre" class="">{{__('labels.name')}}</label></strong>
                    <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" readonly>
                </div>
                <div class="col-2">
                    <strong><label for="telefono" class="">{{__('labels.phone')}}</label></strong>
                    <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono}}" readonly>
                </div>

            </div>
            {{-- comment --}}

            <div style="height: 10px"></div>

            {{-- comment --}}

            <div class="form-group row">
                <div class="col-6">
                    <strong><label for="direccion" class="">{{__('labels.direction')}}</label></strong>
                    <input type="text" name="direccion" class="form-control" value="{{ $cliente->direccion }}" readonly>
                </div>
                <div class="col-3">
                    <strong><label for="zona" class="">{{__('labels.zone')}}</label></strong>
                    <input type="text" name="zona" class="form-control" value="{{ $cliente->zona }}" readonly>
                </div>
                <div class="col-3">
                    <strong><label for="localidad" class="">{{__('labels.localities')}}</label></strong>
                    <input type="text" name="localidad" class="form-control" value="{{ $cliente->localidad }}" readonly>
                </div>
            </div>
            {{-- comment --}}

            <div style="height: 10px"></div>
            <div class="form-group row">
                <div class="col-3">
                    <strong><label for="forma_pago">{{__('labels.way to pay')}}</label></strong>
                    <input type="text" name="forma_pago" class="form-control" value="{{ $cliente->forma_pago }}"
                        readonly>
                </div>
                <div class="col-3">
                    <strong><label for="tipo_cliente" class="">{{__('labels.type')}}</label></strong>
                    <input type="text" name="tipo_cliente" class="form-control" value="{{ $cliente->tipo_cliente }}"
                        readonly>
                </div>
                <div class="col-3">
                    <strong><label for="dia_reparto" class="">{{__('labels.delivery day')}}</label></strong>
                    <input type="text" name="dia_reparto" class="form-control" value="{{ $cliente->dia_reparto }}"
                        readonly>
                </div>
                <div class="col-3">
                    <strong><label for="frequencia_reparto" class="">{{__('labels.distribution frequency')}}</label></strong>
                    <input type="text" name="frequencia_reparto" class="form-control"
                        value="{{ $cliente->frequencia_reparto }}" readonly>
                </div>
            </div>
            {{-- comment --}}

            <div style="height: 10px"></div>

            <div class="form-group">
                <strong><label for="condiciones" class="">{{__('labels.terms')}}</label></strong>
                <textarea type="text" name="condiciones" class="form-control" style="height:120px" value
                    readonly>{{ $cliente->condiciones }}</textarea>
            </div>
            <div style="height: 10px"></div>
            <div class="form-group">
                <strong><label for="observaciones" class="">{{__('labels.observations')}}</label></strong>
                <textarea class="form-control" style="height:120px" name="observaciones"
                    readonly>{{ $cliente->observaciones}}</textarea>
            </div>
            <div style="height: 10px"></div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">{{__('buttons.edit')}}</a>
    </div>
</div>
<div style="height: 12px"></div>












<!--------------------------------------------------------------------------------------------------->

@endsection