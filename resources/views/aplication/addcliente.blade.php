@extends('layouts.layout')


@section('content')
<div class="container-sm">
    <div class="row">
        <div class="col-lg-9 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">{{__('labels.add_client')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('clientes.index') }}">{{__('buttons.return')}}</a>
            </div>
            <div style="height: 12px"></div>
        </div>
   



@include('errors.error')

@include('forms.addclienteform')
</div>
</div>
@endsection