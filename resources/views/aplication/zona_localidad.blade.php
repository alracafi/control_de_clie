@extends('layouts.layout')
@section('content')
@include('modal.addlocalidad')
@include('modal.addzona')

{{------------------------------------------------- div de localidades------------------------------------------------------------------ --}}

<div class="container">
    <div class="pull-right">
        <a class="btn btn-info" href="{{ route('clientes.index') }}">{{__('buttons.return')}}</a>
    </div>
    <div style="height: 1em"></div>
    <div class="row">
        <div class="col-sm" style="border-style: solid ;border-radius:10px">
            <div style="height: 12px"></div>
            <div class="pull-right">
                <a class="btn btn-success" href="#" data-bs-toggle="modal"
                    data-bs-target="#crearlocal">{{__('buttons.add_location')}}</a>
            </div>
            <table class="table table-striped" id="tabla_localidades">
                <thead>
                    <tr>
                        <th>{{__('labels.localities')}}</th>
                        <th class="text-center" width="30%">{{__('labels.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($localidade as $local)
                    
                    <tr>
                        <td>{{ $local->localidad }}</td>
                        <td>
                            <form action="{{ route('localidades.destroy',$local->id) }}" method="POST">
                              <!--   <a class="btn btn-primary" href="{{ route('localidades.edit',$local->id) }}">{{__('buttons.edit')}}</a>-->
                              <a class="btn btn-primary" href="{{ route('localidades.edit',$local->id) }}">{{__('buttons.edit')}}</a>                        
                                @csrf
                                @method('DELETE')
                              <button type="submit" class="btn btn-danger">{{__('buttons.delete')}}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="width:12px"></div>

        {{--------------------------------------------------div de zonas----------------------------------------------------------------------------------- --}}

        {{----------------------------------------------------------------------------------------------------------------------------------------}}
        <div class="col-sm" style="border-style: solid ;border-radius:10px">
            <div style="height: 12px"></div>
            <div class="pull-right">


                <a class="btn btn-success" href="#" data-bs-toggle="modal"
                    data-bs-target="#crearzona">{{__('buttons.add_zone')}}</a>
            </div>
            <table class="table table-striped" id="tabla_zona">
                <thead>
                    <tr>
                        <th>{{__('labels.zones')}}</th>
                        <th class="text-center" width="40%">{{__('labels.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($zona as $zon)
                    <tr>
                        <td>{{ $zon->zona }}</td>
                        <td>
                            <form action="{{ route('zonas.destroy',$zon->id) }}" method="POST">
                                <a class="btn btn-info"
                                    href="{{route('zonas.show',$zon->id)}}">{{__('buttons.show')}}</a>
                                <a class="btn btn-primary"
                                    href="{{ route('zonas.edit',$zon->id) }}">{{__('buttons.edit')}}</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{__('buttons.delete')}}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
{{-------------------------------------------------------div----------------------------------------------------------------------------------- --}}

@endsection