<form action="{{route('clientes.index')}}" id="form_paginar">                        
    <select class="form-control me-2 border border-danger" name="paginador" id="paginador"onchange="this.form.submit()">
        <option value="">{{__('labels.results')}}</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="{!! $num !!}">{{__('labels.all')}}</option>
    </select>
</form>