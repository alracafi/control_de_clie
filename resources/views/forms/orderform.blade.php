<form action="{{route('clientes.index')}}" class="d-flex" id="form_ordenar">
                        
    <select class="form-control me-2 border border-danger" name="order" id="order"onchange="this.form.submit()">
        <option value="">{{__('labels.order')}}</option>
        <option value="nombre">{{__('labels.name')}}</option>
        <option value="zona">{{__('labels.zone')}}</option>
        <option value="localidad">{{__('labels.location')}}</option>
        <option value="dia_reparto">{{__('labels.delivery day')}}</option>
    </select>
</form>