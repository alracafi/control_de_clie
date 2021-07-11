@extends('layouts.layout')
@section('content')
@include('errors.error')

<div class="text-center">
    <h4>{{__('labels.edit zone')}}</h4>
</div>

<div class="col-xs-12 col-sm-12 col-md-12  text-center"
    style="border-style: solid ;border-radius:10px ;width: 50%;margin:auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="height: 1em"></div>
            <div class="text-left">
                <a class="btn btn-info" href="{{ route('localidades.index') }}">{{__('buttons.return')}}</a>
            </div>
        </div>
    </div>
    <div style="height: 1em"></div>

    <div class="row text-center" style="display: flex; align-items: center; justify-content: center;">

        <form action="{{ route('zonas.update',$zona->id) }}" method="POST" style="width: 90%">
            @csrf
            @method('PUT')
            {{----------------------------------------------------------------------------------------------------------------------}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <div class="col">
                        <input type="text" name="zona" class="form-control" value="{{$zona->zona}}">
                    </div>
                    <div style="height: 10px"></div>
                    <div class="col">
                        <textarea type="text" name="descripcion" class="form-control"
                            style="height:180px">{{$zona->descripcion}}</textarea>
                    </div>
                </div>
                <div style="height: 10px"></div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">{{__('buttons.save')}}</button>
                </div>

                <div style="height: 12px"></div>
            </div>

        </form>

    </div>
</div>
@endsection