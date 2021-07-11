@php
$forma = config('variables.formas_pago');
$dias = config('variables.dias');
$tipo = config('variables.tipos');
$frequencia = config('variables.frequencia');
@endphp

<div class="modal fade" id="filtros" tabindex="-1" role="dialog">
    {{-----------------------------------MODAL EXTRA GRANDE-----------------------------}}
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{__('labels.filter_customer')}}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('clientes.index') }}">
                    <div class="row">
                        {{-- forma de pago --}}
                        <div class="col-3">
                            <div class="col" style="border:solid;border-width: thin">
                                <h5 class="text-center">{{__('labels.way to pay')}}</h5>
                                @foreach ($forma as $item)
                                <div style="margin: 1em">
                                <input class="form-check-input" type="radio" name="forma" value="{!! $item!!}">
                                <label for="{!! $item!!}" class="form-check-label">{!! $item!!}</label><br>
                                </div>
                                @endforeach
                            </div>
                            <div style="height: 1em"></div>
                            {{-- frequencia --}}
                            <div class="col" style="border:solid;border-width: thin">
                                <h5 class="text-center">{{__('labels.distribution frequency')}}</h5>
                                @foreach ($frequencia as $item)
                                <div style="margin: 1em">
                                <input type="radio" name="frequencia" value="{!! $item !!}">
                                <label for="{!! $item !!}">{!! $item!!}</label><br>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- tipo de cliente --}}
                        <div class="col-3">
                            <div class="col" style="border:solid;border-width: thin">
                                <h5 class="text-center">{{__('labels.type')}}</h5>
                                @foreach ($tipo as $item)
                                <div style="margin: 1em">
                                <input type="radio" name="tipo" value="{!! $item!!}">
                                <label for="{!! $item!!}">{!! $item!!}</label><br>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{---------zona------------------}}
                        <div class="col-3">
                            <div class="col" style="border:solid;border-width: thin">
                                <h5 class="text-center">{{__('labels.zone')}}</h5>
                                @foreach ($zona as $item)
                                <div style="margin: 1em">
                                <input type="radio" name="zona" value="{!! $item->zona !!}">
                                <label for="{!! $item->zona !!}">{!! $item->zona!!}</label><br>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- dias de la semana --}}

                        <div class="col-3">
                            <div class="col"style="border:solid;border-width: thin">
                                <h5 class="text-center">{{__('labels.delivery day')}}</h5>
                                @foreach ($dias as $item)
                                <div style="margin: 1em">
                                <input type="radio" name="dia" value="{!! $item !!}">
                                <label for="{!! $item !!}">{!! $item!!}</label><br>
                                </div>
                                @endforeach
                            </div>
                        </div>



                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" value={{__('buttons.filter')}}>
                <input type="reset" value={{__('buttons.clean')}}>

            </div>
            </form>

        </div>
    </div>
</div>