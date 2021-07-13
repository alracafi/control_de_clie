@extends('layouts.layout')
@section('content')
@include('modal.filtro')


{{-------------------------------------------------------------- PARTE SUPERIOR DE LA TABLA------------------------------------}}

<div class="row">
    {{---------------------------------------------------------------NAV-------------------------------------------------------------}}
    <nav class="navbar navbar-expand-lg navbar-light bg-blue-200">
        <div class="container-fluid">
            {{-- -----------------------------TITULO --------------------------------------------------------------------------------}}
            <div class="col-2">
                <h3 class="navbar-brand text-gray-900 leading-tight text-center">
                    {{__('labels.clients_list')}}
                </h3>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <a class="form-control me-2 border border-danger bg-green-400"
                            href="{{ route('clientes.create') }}">{{__('buttons.add_client')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="form-control me-2 border border-danger" href="{{route('localidades.index')}}">{{__('buttons.config')}}</a>
                    </li>
                    <li class="nav-item">
                        @if ($num>0)
                        <a class="form-control me-2 border border-danger  bg-yellow-300""
                            href="{{route('pdf', $cliente_sin_paginar->pluck('id'))}}">{{__('buttons.save_pdf')}}</a>

                        @else
                        <button class="form-control me-2 border border-danger disabled>{{__('buttons.save_pdf')}}</button>
                        @endif
                    </li>
                   
                    <li class="nav-item">

                        {{--------- comprueba que esta en modo filtrado o modo total para mostrar el boton filtrar o volver al total ------}}

                        @if ($modo_filtrado)
                        {{--------------------------------------------modo filtrado--------------------------------------------------------}}
                        <a class="form-control me-2 bg-red-500"
                            href="{{route('clientes.index')}}">{{__('buttons.return')}}</a>
                        @else
                        <a class="form-control me-2 border border-danger" href="#" data-bs-toggle="modal" data-bs-target="#filtros"
                            id="botonMostrarFiltros">{{__('buttons.filter')}}</a>
                        @endif
                    </li>
                </ul>
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- --------------------------------PAGINADOR---------------------------------------------------------- --}}
                
               
                {{------------------------------------------ORDENAR RESULTADOS------------------------------------------- --}}               
                @include('forms.orderform')                  
                {{-------------------------------------------------- LOGOUT--------------------------------------------- --}}
                @include('forms.logoutform')
                {{----------------------------------------------BUSCADOR----------------------------------------------------------}}
                @include('forms.searchform')
                {{-----------------------------------------------FIN BUSCADOR------------------------------------------------- --}}
                </div>
            </div>
        </div>
    </nav>
    {{-- -------------------------------------------------------fin nav--------------------------- --}}
    {{ $ordenar }}
    <div class="col-md-2">
      @include('forms.paginaform')
    </div>
  {{--  <div style="height: 12px"></div>--}}
</div>

{{-- -----------------------------------------FIN PARTE SUPERIOR TABLA--------------------------------------------- --}}
{{-- ------------------------------------------------ERRORES---------------------------------------------------------- --}}

{{--@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif--}}
<div class="card">
    <div class="card-body">
        @include('tables.tabla')
    </div>
</div>
{{------Script que se activa cuando se crea,elimina o actualiza un cliente desde el controlador-y muestra el mensaje
                     de cliente nuevo creado,eliminado o actualizado--------------------------------------------------------------------------}}

@php
echo(session('mensaje'));
@endphp

@switch(session('mensaje'))

@case('nuevo')

<script>
    Swal.fire({
           title: "{{__('labels.created')}}",
           timer: 1500,
           showConfirmButton:false,    }) 
</script>


@break
@case('actualizar')


<script>
    Swal.fire({
    title: "{{__('labels.updated')}}",
    timer: 1500,
    showConfirmButton:false,
       })
        
</script>
@break
@case('eliminar')

<script>
    Swal.fire({
        title: "{{__('labels.removed ')}}",
        timer: 1500,
        showConfirmButton:false,    })  
</script>
@break
@default

@endswitch

<script>
    $(document).ready(function () {
     $("#botonMostrarFiltros").click(function (e) { 
     $("#filtros").show();  });

  $(window).on('popstate', function() {
    window.location.reload();
   });
}) 

    /**
 * muestra un mensaje 
 * de confirmacion 
 * antes de eliminar 
 * un registro
 */
   $(".form_eliminar").on("submit",function(e){
   e.preventDefault();
   Swal.fire({
       title: "{{__('labels.segure')}}",
       text: "{{__('labels.deleted')}}",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: '{{__('buttons.yes_delete')}}',
       cancelButtonText: '{{__('buttons.cancel')}}'
       }).then((result)=>{
           if(result.value){
               this.submit();
               }                        
               });
           })

 
</script>


@endsection