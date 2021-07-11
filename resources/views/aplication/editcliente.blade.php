@extends('layouts.layout')
   
@section('content')
<div class="container-sm">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">{{__('labels.edit client')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{route('clientes.index')}}">{{__('buttons.return')}}</a>
            </div>
            <div style="height: 12px" ></div>
        </div>
    </div>
   
  @include('errors.error')
  
  @include('forms.editclienteform')
</div>
   
@endsection